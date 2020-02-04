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

require_once(ROOT_DIR . 'Presenters/Reservation/ReservationEmailPresenter.php');

interface IReservationEmailPage
{
    /**
     * @return string
     */
    public function GetReferenceNumber();

    /**
     * @return string[]
     */
    public function GetEmailAddresses();
}

class ReservationEmailPage extends Page implements IReservationEmailPage
{
    /**
     * @var ReservationEmailPresenter
     */
    private $presenter;


    public function __construct()
    {
        parent::__construct();

        $userSession = ServiceLocator::GetServer()->GetUserSession();
        $this->presenter = new ReservationEmailPresenter(
            $this, $userSession,
            new ReservationRepository(), new UserRepository(),
            new AttributeRepository(),
            PluginManager::Instance()->LoadPermission());
    }

    public function PageLoad()
    {
        $this->EnforceCSRFCheck();

        $this->presenter->PageLoad();
    }

    public function GetReferenceNumber()
    {
        return $this->GetQuerystring(QueryStringKeys::REFERENCE_NUMBER);
    }

    public function GetEmailAddresses()
    {
        return $this->GetForm('email');
    }
}