<?php
/**
Copyright 2020 Prieto Linares, Jorge Fidel

This file is part of Agenda Capacitaciones Yanbal is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Agenda Capacitaciones Yanbal.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/IReservationNotificationService.php');

class DeleteReservationNotificationService extends ReservationNotificationService
{
	public function __construct(IUserRepository $userRepo, IAttributeRepository $attributeRepo)
	{
		$notifications = array();

        $notifications[] = new OwnerEmailDeletedNotification($userRepo, $attributeRepo);
        $notifications[] = new ParticipantDeletedEmailNotification($userRepo, $attributeRepo);
        $notifications[] = new AdminEmailDeletedNotification($userRepo, $userRepo, $attributeRepo);
		$notifications[] = new GuestDeletedEmailNotification($userRepo, $attributeRepo);

		parent::__construct($notifications);
	}
}