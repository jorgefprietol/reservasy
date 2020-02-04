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

require_once(ROOT_DIR . 'Pages/Ajax/ReservationWaitlistPage.php');

class ReservationWaitlistPresenter
{
    /**
     * @var IReservationWaitlistPage
     */
    private $page;
    /**
     * @var UserSession
     */
    private $user;
    /**
     * @var IReservationWaitlistRepository
     */
    private $repository;

    public function __construct(IReservationWaitlistPage $page, UserSession $user, IReservationWaitlistRepository $repository)
    {
        $this->page = $page;
        $this->user = $user;
        $this->repository = $repository;
    }

    public function PageLoad()
    {
        $duration = $this->GetReservationDuration();
        $resourceId = $this->page->GetResourceId();

        $request = ReservationWaitlistRequest::Create($this->page->GetUserId(), $duration->GetBegin(), $duration->GetEnd(), $resourceId);
        $this->repository->Add($request);
    }

    /**
     * @return DateRange
     */
    private function GetReservationDuration()
    {
        $startDate = $this->page->GetStartDate();
        $startTime = $this->page->GetStartTime();
        $endDate = $this->page->GetEndDate();
        $endTime = $this->page->GetEndTime();

        $timezone = $this->user->Timezone;
        return DateRange::Create($startDate . ' ' . $startTime, $endDate . ' ' . $endTime, $timezone);
    }
}