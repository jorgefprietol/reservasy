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

interface IResourceAvailabilityStrategy
{
    /**
     * @param Date $startDate
     * @param Date $endDate
	 * @param int[] $resourceIds
     * @return array|IReservedItemView[]|int
     */
    public function GetItemsBetween(Date $startDate, Date $endDate, $resourceIds);
}

class ResourceAvailability implements IResourceAvailabilityStrategy
{
	/**
     * @var IReservationViewRepository
     */
    protected $_repository;

    public function __construct(IReservationViewRepository $repository)
    {
        $this->_repository = $repository;
    }

    public function GetItemsBetween(Date $startDate, Date $endDate, $resourceIds)
    {
		$reservations = $this->_repository->GetReservations($startDate, $endDate, null, null, null, $resourceIds);
        $blackouts = $this->_repository->GetBlackoutsWithin(new DateRange($startDate, $endDate));

        return array_merge($reservations, $blackouts);
    }
}
