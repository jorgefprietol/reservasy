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

define('ROOT_DIR', '../../');

require_once(ROOT_DIR . 'Pages/Admin/ResourceAdminManageReservationsPage.php');

class GroupAdminManageReservationsPage extends ManageReservationsPage
{
    public function __construct()
    {
        parent::__construct();

        $userRepository = new UserRepository();
        $this->presenter = new ManageReservationsPresenter($this,
            new GroupAdminManageReservationsService(new ReservationViewRepository(), $userRepository, new ReservationAuthorization(PluginManager::Instance()->LoadAuthorization())),
            new ScheduleRepository(),
            new ResourceRepository(),
            new AttributeService(new AttributeRepository()),
            $userRepository,
            new TermsOfServiceRepository());

        $this->SetCanUpdateResourceStatus(false);
    }
}

$page = new RoleRestrictedPageDecorator(new GroupAdminManageReservationsPage(), array(RoleLevel::GROUP_ADMIN));
$page->PageLoad();