<?php
/**
 * Copyright 2019 Prieto Linares, Jorge Fidel
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

require_once(ROOT_DIR . 'lib/Email/Messages/ReservationParticipationActivityEmail.php');

interface IParticipationNotification
{
    /**
     * @param ExistingReservationSeries $series
     * @param int $participantId
     * @param InvitationAction|string $invitationAction
     */
    public function Notify(ExistingReservationSeries $series, $participantId, $invitationAction);

    /**
     * @param ExistingReservationSeries $series
     * @param string $guestEmail
     * @param InvitationAction|string $invitationAction
     */
    public function NotifyGuest(ExistingReservationSeries $series, $guestEmail, $invitationAction);
}

class ParticipationNotification implements IParticipationNotification
{
    /**
     * @var IUserRepository
     */
    private $userRepository;

    /**
     * @var bool
     */
    private $disabled;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->disabled = Configuration::Instance()->GetSectionKey(ConfigSection::RESERVATION, ConfigKeys::RESERVATION_PREVENT_PARTICIPATION, new BooleanConverter());
    }

    public function Notify(ExistingReservationSeries $series, $participantId, $invitationAction)
    {
        if ($this->disabled)
        {
            return;
        }

        $owner = $this->userRepository->LoadById($series->UserId());
        if ($owner->WantsEventEmail(new ParticipationChangedEvent()))
        {
            $participant = $this->userRepository->LoadById($participantId);
            ServiceLocator::GetEmailService()->Send(new ReservationParticipationActivityEmail($series, $invitationAction, $owner, $participant->FullName()));
        }
    }

    public function NotifyGuest(ExistingReservationSeries $series, $guestEmail, $invitationAction)
    {
        if ($this->disabled)
        {
            return;
        }

        $owner = $this->userRepository->LoadById($series->UserId());
        if ($owner->WantsEventEmail(new ParticipationChangedEvent()))
        {
            ServiceLocator::GetEmailService()->Send(new ReservationParticipationActivityEmail($series, $invitationAction, $owner, $guestEmail));
        }
    }
}