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

interface IDbConnection
{
	public function Connect();
	public function Disconnect();

	/**
	 * Queries the database and returns an IReader
	 *
	 * @param ISqlCommand $command
	 * @return IReader to iterate over
	 */
	public function Query(ISqlCommand $command);

	/**
	 * @param ISqlCommand $command
	 * @param int $limit
	 * @param int $offset
	 * @return IReader to iterate over
	 */
	public function LimitQuery(ISqlCommand $command, $limit, $offset = null);

	/**
	 * Executes an alter query against the database
	 *
	 * @param ISqlCommand $command
	 * @return void
	 */
	public function Execute(ISqlCommand $command);

	/**
	 * @return int last auto-increment id inserted for this connection
	 */
	public function GetLastInsertId();
}