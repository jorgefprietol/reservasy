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

require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'Presenters/UnavailableResourcesPresenter.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/ResourceAvailability.php');

class UnavailableResourcesPresenter
{
	/**
	 * @var IAvailableResourcesPage
	 */
	private $page;
	/**
	 * @var IResourceAvailabilityStrategy
	 */
	private $resourceAvailability;
	/**
	 * @var UserSession
	 */
	private $userSession;

	public function __construct(IAvailableResourcesPage $page, IResourceAvailabilityStrategy $resourceAvailability, UserSession $userSession)
	{
		$this->page = $page;
		$this->resourceAvailability = $resourceAvailability;
		$this->userSession = $userSession;
	}

	public function PageLoad()
	{
		$duration = DateRange::Create($this->page->GetStartDate() . ' ' . $this->page->GetStartTime(), $this->page->GetEndDate() . ' ' . $this->page->GetEndTime(), $this->userSession->Timezone);
		$reserved = $this->resourceAvailability->GetItemsBetween($duration->GetBegin(), $duration->GetEnd(), ReservationViewRepository::ALL_RESOURCES);

		$unavailable = array();

		foreach ($reserved as $reservation)
		{
			if ($reservation->GetReferenceNumber() == $this->page->GetReferenceNumber())
			{
				continue;
			}

			if ($reservation->BufferedTimes()->Overlaps($duration))
			{
				$unavailable[] = $reservation->GetResourceId();
			}
		}

		$this->page->BindUnavailable(array_unique($unavailable));
	}
}