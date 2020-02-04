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

require_once(ROOT_DIR . '/lib/Config/namespace.php');

class WordPressOptions
{
	const CONFIG_ID = 'wordPress';
	public function __construct()
	{
		require_once(dirname(__FILE__) . '/WordPress.config.php');

		Configuration::Instance()->Register(
			dirname(__FILE__) . '/WordPress.config.php',
			self::CONFIG_ID);
	}

	public function RetryAgainstDatabase()
	{
		return $this->GetConfig('database.auth.when.wp.user.not.found', new BooleanConverter());
	}

	public function GetPath()
	{
		$path = $this->GetConfig('wp_includes.directory');

		if (!BookedStringHelper::StartsWith($path, '/'))
		{
			$path = ROOT_DIR . "/$path";
		}
		if (BookedStringHelper::EndsWith($path, '/'))
		{
			return $path;
		}

		return $path . '/';
	}

	private function GetConfig($keyName, $converter = null)
	{
		return Configuration::Instance()->File(self::CONFIG_ID)->GetKey($keyName, $converter);
	}
}

?>