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

require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Authorization/namespace.php');

class AnnouncementPresenter
{
	private $_control;
	private $_announcements;
	private $_permissionService;

	/**
	 * @param IAnnouncementsControl $control the control to populate
	 * @param IAnnouncementRepository $announcements Announcements domain object
	 * @param IPermissionService $permissionService
	 */
	public function __construct(IAnnouncementsControl $control, IAnnouncementRepository $announcements, IPermissionService $permissionService)
	{
		$this->_control = $control;
		$this->_announcements = $announcements;
		$this->_permissionService = $permissionService;
	}

	public function PageLoad()
	{
		$this->PopulateAnnouncements();
	}

	private function PopulateAnnouncements()
	{
		$announcements = $this->_announcements->GetFuture(Pages::ID_DASHBOARD);
		$user = ServiceLocator::GetServer()->GetUserSession();

		$userAnnouncement = array();
		foreach ($announcements as $announcement)
		{
			if ($announcement->AppliesToUser($user, $this->_permissionService))
			{
				$userAnnouncement[] = $announcement;
			}
		}
		$this->_control->SetAnnouncements($userAnnouncement);
	}
}