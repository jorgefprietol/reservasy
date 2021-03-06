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

require_once(ROOT_DIR . 'lib/WebService/namespace.php');

class ResourceUpdatedResponse extends RestResponse
{
	public $resourceId;

	public function __construct(IRestServer $server, $resourceId)
	{
		$this->resourceId = $resourceId;
		$this->AddService($server, WebServices::GetResource, array(WebServiceParams::ResourceId, $resourceId));
		$this->AddService($server, WebServices::UpdateResource, array(WebServiceParams::ResourceId, $resourceId));
	}

	public static function Example()
	{
		return new ExampleResourceCreatedResponse();
	}
}

class ExampleResourceUpdatedResponse extends ResourceUpdatedResponse
{
	public function __construct()
	{
		$this->resourceId = 1;
		$this->AddLink('http://url/to/resource', WebServices::GetResource);
		$this->AddLink('http://url/to/update/resource', WebServices::UpdateResource);
	}
}

