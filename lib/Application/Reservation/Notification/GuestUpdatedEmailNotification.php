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

require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/GuestAddedEmailNotification.php');

class GuestUpdatedEmailNotification extends GuestAddedEmailNotification
{
	/**
	 * @var IUserRepository
	 */
	private $userRepository;

	/**
	 * @var IAttributeRepository
	 */
	private $attributeRepository;

	public function __construct(IUserRepository $userRepository, IAttributeRepository $attributeRepository)
	{
		$this->userRepository = $userRepository;
		$this->attributeRepository = $attributeRepository;
	}

	/**
	 * @param ReservationSeries $reservationSeries
	 */
	function Notify($reservationSeries)
	{
		$instance = $reservationSeries->CurrentInstance();
		$owner = $this->userRepository->LoadById($reservationSeries->UserId());

		foreach ($instance->AddedInvitedGuests() as $guestEmail)
		{
			$message = new GuestAddedEmail($owner, $guestEmail, $reservationSeries, $this->attributeRepository, $this->userRepository);
			ServiceLocator::GetEmailService()->Send($message);
		}

		foreach ($instance->AddedParticipatingGuests() as $guestEmail)
		{
			$message = new GuestAddedEmail($owner, $guestEmail, $reservationSeries, $this->attributeRepository, $this->userRepository);
			ServiceLocator::GetEmailService()->Send($message);
		}

		foreach ($instance->UnchangedInvitedGuests() as $guestEmail)
		{
			$guestUser = $this->userRepository->LoadByUsername($guestEmail);
			$message = new GuestUpdatedEmail($owner, $guestUser, $reservationSeries, $this->attributeRepository, $this->userRepository);
			ServiceLocator::GetEmailService()->Send($message);
		}

		foreach ($instance->UnchangedParticipatingGuests() as $guestEmail)
		{
			$guestUser = $this->userRepository->LoadByUsername($guestEmail);
			$message = new GuestUpdatedEmail($owner, $guestUser, $reservationSeries, $this->attributeRepository, $this->userRepository);
			ServiceLocator::GetEmailService()->Send($message);
		}

		foreach ($instance->RemovedInvitedGuests() as $guestEmail)
		{
			$guestUser = $this->userRepository->LoadByUsername($guestEmail);
			$message = new GuestDeletedEmail($owner, $guestUser, $reservationSeries, $this->attributeRepository, $this->userRepository);
			ServiceLocator::GetEmailService()->Send($message);
		}

		foreach ($instance->RemovedParticipatingGuests() as $guestEmail)
		{
			$guestUser = $this->userRepository->LoadByUsername($guestEmail);
			$message = new GuestDeletedEmail($owner, $guestUser, $reservationSeries, $this->attributeRepository, $this->userRepository);
			ServiceLocator::GetEmailService()->Send($message);
		}
	}
}