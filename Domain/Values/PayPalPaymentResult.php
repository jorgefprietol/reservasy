<?php
/**
 * Copyright 2020 Prieto Linares, Jorge Fidel
 *
 * This file is part of Agenda Capacitaciones Yanbal.
 *
 * Agenda Capacitaciones Yanbal is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Agenda Capacitaciones Yanbal is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Agenda Capacitaciones Yanbal.  If not, see <http://www.gnu.org/licenses/>.
 */

class PayPalPaymentResult
{
    /**
     * @var string
     */
    public $Raw;

    /**
     * @var float
     */
    public $Amount;

    /**
     * @var string
     */
    public $Currency;

    /**
     * @var string
     */
    public $Id;

    /**
     * @var Date
     */
    public $Timestamp;

    /**
     * @param string $jsonString
     * @return PayPalPaymentResult
     */
    public static function FromJsonString($jsonString)
    {
        $result = new PayPalPaymentResult();
        $result->Raw = $jsonString;

        $json = json_decode($jsonString);

        $result->Amount = $json->transactions[0]->amount->total;
        $result->Currency = $json->transactions[0]->amount->currency;
        $result->Id = $json->transactions[0]->related_resources[0]->sale->id;
        $result->Timestamp = Date::ParseExact($json->create_time);

        return $result;
    }
}