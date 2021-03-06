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

require_once(ROOT_DIR . 'lib/Common/namespace.php');

class LoginCookie extends Cookie
{
	public $UserID;
	public $LastLogin;

	public function __construct($userid, $lastLoginTime)
	{
		$this->UserID = $userid;
		$this->LastLogin = $lastLoginTime;

		parent::__construct(CookieKeys::PERSIST_LOGIN, sprintf('%s|%s', $userid, $lastLoginTime));
	}

	public static function FromValue($cookieValue)
	{
		$cookieParts = explode('|', $cookieValue);

		if (count($cookieParts) == 2)
		{
			return new LoginCookie($cookieParts[0], $cookieParts[1]);
		}

		return null;
	}
}
