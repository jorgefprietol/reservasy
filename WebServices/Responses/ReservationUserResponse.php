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

require_once(ROOT_DIR . 'lib/WebService/namespace.php');

class ReservationUserResponse extends RestResponse
{
	public $userId;
	public $firstName;
	public $lastName;
	public $emailAddress;

	public function __construct(IRestServer $server, $userId, $firstName, $lastName, $emailAddress)
	{
		$this->userId = $userId;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->emailAddress = $emailAddress;
		$this->AddService($server, WebServices::GetUser, array(WebServiceParams::UserId => $userId));
	}

	public static function Masked()
	{
		return new MaskedReservationUserResponse();
	}

	public static function Example()
	{
		return new ExampleReservationUserResponse();
	}
}

class MaskedReservationUserResponse extends ReservationUserResponse
{
	public function __construct()
	{
		$this->userId = null;
		$this->firstName = 'Private';
		$this->lastName = 'Private';
		$this->emailAddress = 'Private';
	}
}

class ExampleReservationUserResponse extends ReservationUserResponse
{
	public function __construct()
	{
		$this->userId = 123;
		$this->firstName = 'first';
		$this->lastName = 'last';
		$this->emailAddress = 'email@address.com';
	}
}

