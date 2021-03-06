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

require_once(ROOT_DIR . 'lib/WebService/namespace.php');

class AccountActionResponse extends RestResponse
{
    public $userId;

    public function __construct(IRestServer $server, $userId)
    {
        $this->userId = $userId;
        $this->AddService($server, WebServices::GetAccount, array(WebServiceParams::UserId => $userId));
        $this->AddService($server, WebServices::UpdateAccount, array(WebServiceParams::UserId => $userId));
    }

    public static function Example()
    {
        return new ExampleAccountActionResponse();
    }
}

class ExampleAccountActionResponse extends AccountActionResponse
{
    public function __construct()
    {
        $this->AddLink('http://url/to/account', WebServices::GetAccount);
        $this->AddLink('http://url/to/update/account', WebServices::UpdateAccount);
    }
}