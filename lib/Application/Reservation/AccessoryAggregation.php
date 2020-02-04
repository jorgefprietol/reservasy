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

class AccessoryAggregation
{
	private $knownAccessoryIds = array();

	/**
	 * @var \DateRange
	 */
	private $duration;

	/**
	 * @var string[]
	 */
	private $addedReservations = array();

	private $accessoryQuantity = array();

	/**
	 * @param array|AccessoryToCheck[] $accessories
	 * @param DateRange $duration
	 */
	public function __construct($accessories, $duration)
	{
		foreach ($accessories as $a)
		{
            $this->knownAccessoryIds[$a->GetId()] = 1;
		}

		$this->duration = $duration;
	}

	/**
	 * @param AccessoryReservation $accessoryReservation
	 */
	public function Add(AccessoryReservation $accessoryReservation)
	{
		if ($accessoryReservation->GetStartDate()->Equals($this->duration->GetEnd()) || $accessoryReservation->GetEndDate()->Equals($this->duration->GetBegin()))
		{
			return;
		}

		$accessoryId = $accessoryReservation->GetAccessoryId();

		$key = $accessoryReservation->GetReferenceNumber() . $accessoryId;

		if (array_key_exists($key, $this->addedReservations))
		{
			return;
		}

		$this->addedReservations[$key] = true;

		if (array_key_exists($accessoryId, $this->accessoryQuantity))
        {
            $this->accessoryQuantity[$accessoryId] += $accessoryReservation->QuantityReserved();

        }
        else {
            $this->accessoryQuantity[$accessoryId] = $accessoryReservation->QuantityReserved();

        }
	}

	/**
	 * @param int $accessoryId
	 * @return int
	 */
	public function GetQuantity($accessoryId)
	{

	    if (array_key_exists($accessoryId, $this->accessoryQuantity))
        {
            return $this->accessoryQuantity[$accessoryId];
        }
        return 0;
	}
}