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

require_once(ROOT_DIR . 'Pages/Admin/AdminPage.php');
require_once(ROOT_DIR . 'Presenters/ActionPresenter.php');
require_once(ROOT_DIR . 'Presenters/Admin/Import/ICalImportPresenter.php');
require_once(ROOT_DIR . 'Domain/Access/namespace.php');
require_once(ROOT_DIR . 'Domain/namespace.php');
require_once(ROOT_DIR . 'lib/Application/Authentication/namespace.php');

interface IICalImportPage extends IActionPage
{
	/**
	 * @return UploadedFile
	 */
	public function GetImportFile();

	/**
	 * @param int $numberImported
	 * @param int $numberSkipped
	 */
	public function SetNumberImported($numberImported, $numberSkipped);
}

class ICalImportPage extends ActionPage implements IICalImportPage
{

	/**
	 * @var ICalImportPresenter
	 */
	private $presenter;

	public function __construct()
	{
		$this->presenter = new ICalImportPresenter($this,
												   new UserRepository(),
												   new ResourceRepository(),
												   new ReservationRepository(),
												   new Registration(),
												   new ScheduleRepository());

		parent::__construct('ImportICS', 1);
	}

	public function ProcessAction()
	{
		$this->presenter->ProcessAction();
	}

	public function ProcessDataRequest($dataRequest)
	{
		// no-op
	}

	public function ProcessPageLoad()
	{
		$this->Display('Admin/Import/ics_import.tpl');
	}

	public function GetImportFile()
	{
		return $this->server->GetFile(FormKeys::ICS_IMPORT_FILE);
	}

	public function SetNumberImported($numberImported, $numberSkipped)
	{
		$this->SetJson(array('importCount' => $numberImported, 'skippedRows' => $numberSkipped));
	}
}
