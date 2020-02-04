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

require_once(ROOT_DIR . 'WebServices/Requests/User/UserRequestBase.php');

class CreateUserRequest extends UserRequestBase
{
	public $password;
	public $language;

	public static function Example()
	{
		$request = new CreateUserRequest();
		$request->firstName = 'first';
		$request->lastName = 'last';
		$request->emailAddress = 'email@address.com';
		$request->userName = 'username';
		$request->timezone = 'America/Chicago';
		$request->language = 'en_us';
		$request->password = 'unencrypted password';
		$request->phone = '123-456-7989';
		$request->organization = 'organization';
		$request->position = 'position';
		$request->customAttributes = array(new AttributeValueRequest(99, 'attribute value'));
		$request->groups = array(1,2,4);
		return $request;
	}
}