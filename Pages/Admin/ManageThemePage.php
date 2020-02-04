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

require_once(ROOT_DIR . 'Pages/Admin/AdminPage.php');
require_once(ROOT_DIR . 'Presenters/Admin/ManageThemePresenter.php');

class ManageThemePage extends ActionPage
{
    private $presenter;

    public function __construct()
	{
		parent::__construct('LookAndFeel', 1);

		$this->presenter = new ManageThemePresenter($this);
	}

	/**
	 * @return void
	 */
	public function ProcessAction()
	{
		$this->presenter->ProcessAction();
	}

	/**
	 * @param $dataRequest string
	 * @return void
	 */
	public function ProcessDataRequest($dataRequest)
	{
		// no-op
	}

	/**
	 * @return void
	 */
	public function ProcessPageLoad()
	{
		$this->Display('Admin/Configuration/change_theme.tpl');
	}

	/**
	 * @return null|UploadedFile
	 */
	public function GetLogoFile()
	{
		return $this->server->GetFile(FormKeys::LOGO_FILE);
	}

	/**
	 * @return null|UploadedFile
	 */
	public function GetCssFile()
	{
		return $this->server->GetFile(FormKeys::CSS_FILE);
	}

	/**
	 * @return null|UploadedFile
	 */
	public function GetFaviconFile()
	{
		return $this->server->GetFile(FormKeys::FAVICON_FILE);
	}
}

