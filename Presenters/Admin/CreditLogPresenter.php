<?php
/**
 * Copyright 2018-2019 Prieto Linares, Jorge Fidel
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

class CreditLogPresenter
{
    /**
     * @var ICreditLogPage
     */
    private $page;
    /**
     * @var ICreditRepository
     */
    private $creditRepository;
    /**
     * @var IUserRepository
     */
    private $userRepository;

    public function __construct(ICreditLogPage $page, ICreditRepository $creditRepository, IUserRepository $userRepository)
    {
        $this->page = $page;
        $this->creditRepository = $creditRepository;
        $this->userRepository = $userRepository;
    }

    public function PageLoad(UserSession $userSession)
    {
        $userId = $this->page->GetUserId();
        $currentUser = $this->userRepository->LoadById($userSession->UserId);
        $searchUser = $this->userRepository->LoadById($userId);

        if (!empty($userId) && $currentUser->IsAdminFor($searchUser))
        {
            $credits = $this->creditRepository->GetList($this->page->GetPageNumber(), $this->page->GetPageSize(), $userId);
            $this->page->BindCredits($credits->Results());
            $this->page->BindPageInfo($credits->PageInfo());
            $this->page->BindUserName($searchUser->FullName());
        }
        else {
            $this->page->ShowError();
        }
    }
}