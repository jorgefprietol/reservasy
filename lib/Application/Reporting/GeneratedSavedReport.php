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

require_once(ROOT_DIR . 'Domain/SavedReport.php');

interface IGeneratedSavedReport extends IReport, ISavedReport
{

}

class GeneratedSavedReport implements IGeneratedSavedReport
{
	/**
	 * @var ISavedReport
	 */
	private $savedReport;

	/**
	 * @var IReport
	 */
	private $report;

	public function __construct(ISavedReport $savedReport, IReport $report)
	{
		$this->savedReport = $savedReport;
		$this->report = $report;
	}

	/**
	 * @return IReportColumns
	 */
	public function GetColumns()
	{
		return $this->report->GetColumns();
	}

	/**
	 * @return IReportData
	 */
	public function GetData()
	{
		return $this->report->GetData();
	}

	/**
	 * @return int
	 */
	public function ResultCount()
	{
		return $this->report->ResultCount();
	}

	/**
	 * @return string
	 */
	public function ReportName()
	{
		return $this->savedReport->ReportName();
	}

	/**
	 * @return int
	 */
	public function Id()
	{
		return $this->savedReport->Id();
	}
}
