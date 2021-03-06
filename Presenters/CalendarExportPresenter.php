<?php
/**
Copyright 2020 Prieto Linares, Jorge Fidel

This file is part of Agenda Capacitaciones Yanbal.

Agenda Capacitaciones Yanbal is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Agenda Capacitaciones Yanbal is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Agenda Capacitaciones Yanbal.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Schedule/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/namespace.php');

class CalendarExportPresenter
{
	/**
	 * @var ICalendarExportPage
	 */
	private $page;

	/**
	 * @var IReservationViewRepository
	 */
	private $reservationViewRepository;

	/**
	 * @var ICalendarExportValidator
	 */
	private $validator;

	/**
	 * @var IReservationAuthorization
	 */
	private $privacyFilter;

	public function __construct(ICalendarExportPage $page,
								IReservationViewRepository $reservationViewRepository,
								ICalendarExportValidator $validator,
								IPrivacyFilter $privacyFilter)
	{
		$this->page = $page;
		$this->reservationViewRepository = $reservationViewRepository;
		$this->validator = $validator;
		$this->privacyFilter = $privacyFilter;
	}

	public function PageLoad(UserSession $currentUser)
	{
		if (!$this->validator->IsValid())
		{
			return;
		}

		$referenceNumber = $this->page->GetReferenceNumber();

		$reservations = array();
		if (!empty($referenceNumber))
		{
			$res = $this->reservationViewRepository->GetReservationForEditing($referenceNumber);
			$item = ReservationItemView::FromReservationView($res);
			$reservations = array(new iCalendarReservationView($item, $currentUser, $this->privacyFilter));
		}

		$this->page->SetReservations($reservations);
	}
}