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
require_once(ROOT_DIR . 'Domain/namespace.php');

class AnnouncementEmail extends EmailMessage
{
    /**
     * @var string
     */
    private $announcement;

    /**
     * @var UserSession
     */
    private $sentBy;

    /**
     * @var UserItemView
     */
    private $to;

    /**
     * @param string $announcement
     * @param UserSession $sentBy
     * @param UserItemView $to
     */
    public function __construct($announcement, $sentBy, $to)
    {
        parent::__construct($to->Language);
        $this->announcement = $announcement;
        $this->sentBy = $sentBy;
        $this->to = $to;
    }

    /**
     * @return array|EmailAddress[]|EmailAddress
     */
    public function To()
    {
        return new EmailAddress($this->to->Email, new FullName($this->to->First, $this->to->Last));
    }

    /**
     * @return string
     */
    public function Subject()
    {
        return $this->Translate('AnnouncementSubject', new FullName($this->sentBy->FirstName, $this->sentBy->LastName));
    }

    /**
     * @return string
     */
    public function Body()
    {
        $this->Set('AnnouncementText', $this->announcement);
        return $this->FetchTemplate('AnnouncementEmail.tpl');
    }

    public function From()
	{
		return new EmailAddress($this->sentBy->Email, new FullName($this->sentBy->FirstName, $this->sentBy->LastName));
	}
}