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

require_once(ROOT_DIR . 'Pages/Page.php');

class CalendarExportDisplay extends Page
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @param $reservations iCalendarReservationView[]
	 * @return string
	 */
	public function Render($reservations)
	{
		$config = Configuration::Instance();

		$this->Set('bookedVersion', $config->GetKey(ConfigKeys::VERSION));
		$this->Set('DateStamp', Date::Now());

		/**
		 * ScriptUrl is used to generate iCal UID's. As a workaround to this bug
		 * https://bugzilla.mozilla.org/show_bug.cgi?id=465853
		 * we need to avoid using any slashes "/"
		 */
		$url = $config->GetScriptUrl();
		$this->Set('UID', parse_url($url, PHP_URL_HOST));
		$this->Set('Reservations', $reservations);

		return preg_replace('~\R~u',"\r\n", $this->smarty->fetch('Export/ical.tpl'));
	}

	public function PageLoad()
	{
		// no-op
	}
}