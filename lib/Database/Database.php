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

class Database
{
	/**
	 * @var IDbConnection
	 */
	public $Connection = null;

	public function __construct(IDbConnection &$dbConnection)
	{
		$this->Connection = &$dbConnection;
	}

	/**
	 * Queries the database and returns an IReader
	 *
	 * @param ISqlCommand $command
	 * @return IReader to iterate over
	 */
	public function &Query(ISqlCommand &$command)
	{
		$this->Connection->Connect();

		//Log::Debug('Database::Query %s', $command->GetQuery());

		$reader = $this->Connection->Query($command);
		$this->Connection->Disconnect();

		return $reader;
	}

	/**
	 * @param ISqlCommand $command
	 * @param int $limit
	 * @param int $offset
	 * @return IReader to iterate over
	 */
	public function &LimitQuery(ISqlCommand $command, $limit, $offset = null)
	{
		$this->Connection->Connect();

		//Log::Debug('Database::LimitQuery %s', $command->GetQuery());

		$reader = $this->Connection->LimitQuery($command, $limit, $offset);
		$this->Connection->Disconnect();

		return $reader;
	}

	/**
	 * Executes an alter query against the database
	 *
	 * @param SqlCommand $command
	 * @return void
	 */
	public function Execute(ISqlCommand $command)
	{
		$this->Connection->Connect();

		//Log::Debug('Database::Execute %s', $command->GetQuery());

		$this->Connection->Execute($command);
		$this->Connection->Disconnect();
	}

	/**
	 * Executes an insert query against the database and returns the auto-increment id
	 *
	 * @param ISqlCommand $command
	 * @return int last id inserted for this connection
	 */
	public function ExecuteInsert(ISqlCommand $command)
	{
		$this->Connection->Connect();

		//Log::Debug('Database::ExecuteInsert %s', $command->GetQuery());

		$this->Connection->Execute($command);
		$insertedId = $this->Connection->GetLastInsertId();
		$this->Connection->Disconnect();

		return $insertedId;
	}
}