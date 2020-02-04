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

class AccessoryReservation
{
    /**
     * @var string
     */
    private $referenceNumber;

    /**
     * @var int
     */
    private $accessoryId;

    /**
     * @var \Date
     */
    private $startDate;

    /**
     * @var \Date
     */
    private $endDate;

    /**
     * @var int
     */
    private $quantityReserved;

    /**
     * @param string $referenceNumber
     * @param Date $startDate
     * @param Date $endDate
     * @param int $accessoryId
     * @param int $quantityReserved
     */
    public function __construct($referenceNumber, $startDate, $endDate, $accessoryId, $quantityReserved)
    {
        $this->referenceNumber = $referenceNumber;
        $this->accessoryId = $accessoryId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->quantityReserved = $quantityReserved;
    }

    /**
     * @return string
     */
    public function GetReferenceNumber()
    {
        return $this->referenceNumber;
    }

    /**
     * @return Date
     */
    public function GetStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return Date
     */
    public function GetEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return int
     */
    public function GetAccessoryId()
    {
        return $this->accessoryId;
    }

    /**
     * @return int
     */
    public function QuantityReserved()
    {
        return $this->quantityReserved;
    }

	/**
	 * @return DateRange
	 */
	public function GetDuration()
	{
    	return new DateRange($this->GetStartDate(), $this->GetEndDate());
	}
}