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

require_once(ROOT_DIR . 'WebServices/Responses/Group/GroupItemResponse.php');

class GroupsResponse extends RestResponse
{
	/**
	 * @var array|GroupItemResponse[]
	 */
	public $groups;

	/**
	 * @param IRestServer $server
	 * @param array|GroupItemView[] $groups
	 */
	public function __construct(IRestServer $server, $groups)
	{
		foreach($groups as $group)
		{
			$this->groups[] = new GroupItemResponse($server, $group);
		}
	}

	public static function Example()
	{
		return new ExampleGroupsResponse();
	}
}

class ExampleGroupsResponse extends GroupsResponse
{
	public function __construct()
	{
		$this->groups = array(GroupItemResponse::Example());
	}
}
