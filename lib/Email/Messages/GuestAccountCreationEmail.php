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

require_once(ROOT_DIR . 'lib/Email/namespace.php');

class GuestAccountCreationEmail extends EmailMessage
{
	/**
	 * @var User
	 */
	private $user;

	/**
	 * @var string
	 */
	private $password;

	public function __construct(User $user, $password)
	{
		$this->user = $user;
		$this->password = $password;

		parent::__construct($user->Language());
	}

	/**
	 * @return array|EmailAddress[]|EmailAddress
	 */
	public function To()
	{
		return new EmailAddress($this->user->EmailAddress(), $this->user->FullName());
	}

	/**
	 * @return string
	 */
	public function Subject()
	{
		return $this->Translate('GuestAccountCreatedSubject', array(Configuration::Instance()->GetKey(ConfigKeys::APP_TITLE)));
	}

	/**
	 * @return string
	 */
	public function Body()
	{
		$this->Set('EmailAddress', $this->user->EmailAddress());
		$this->Set('Password', $this->password);
		return $this->FetchTemplate('GuestAccountCreation.tpl');
	}
}
