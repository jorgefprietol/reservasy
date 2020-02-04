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

class RoleLevel
{
	private function __construct()
	{}

	const NONE = null;
	const GROUP_ADMIN = 1;
	const APPLICATION_ADMIN = 2;
    const RESOURCE_ADMIN = 3;
	const SCHEDULE_ADMIN = 4;

    /**
     * @return RoleLevel[]
     */
    public static function All()
    {
        return array(
            RoleLevel::GROUP_ADMIN,
            RoleLevel::APPLICATION_ADMIN,
            RoleLevel::RESOURCE_ADMIN,
            RoleLevel::SCHEDULE_ADMIN
        );
    }
}