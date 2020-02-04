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

require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/PostReservationFactory.php');

require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/IReservationNotification.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/IReservationNotificationFactory.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/IReservationNotificationService.php');

require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/AddReservationNotificationService.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/UpdateReservationNotificationService.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/DeleteReservationNotificationService.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/ApproveReservationNotificationService.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/ReservationNotificationFactory.php');

require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/AdminEmailNotification.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/OwnerEmailNotification.php');

require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/InviteeAddedEmailNotification.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/ParticipantAddedEmailNotification.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/ParticipantDeletedEmailNotification.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/InviteeUpdatedEmailNotification.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/ParticipantUpdatedEmailNotification.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/GuestAddedEmailNotification.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/GuestDeletedEmailNotification.php');
require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/GuestUpdatedEmailNotification.php');

require_once(ROOT_DIR . 'lib/Application/Reservation/Notification/ParticipationNotification.php');