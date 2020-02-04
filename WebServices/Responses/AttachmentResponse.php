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
require_once(ROOT_DIR . 'Pages/Pages.php');
require_once(ROOT_DIR . 'lib/Server/QueryStringKeys.php');

class AttachmentResponse
{
	public $url;

	public function __construct(IRestServer $server, $fileId, $fileName, $referenceNumber)
	{
		$this->fileName = $fileName;

		$page = Pages::RESERVATION_FILE;
		$qsAttachment = QueryStringKeys::ATTACHMENT_FILE_ID;
		$qsRefNum = QueryStringKeys::REFERENCE_NUMBER;

		$this->url = $server->GetUrl(). "/attachments/$page?$qsAttachment=$fileId&$qsRefNum=$referenceNumber";
	}

	public static function Example()
	{
		return new ExampleAttachmentResponse();
	}
}

class ExampleAttachmentResponse extends AttachmentResponse
{
	public function __construct()
	{
		$this->url = 'http://example/attachments/url';
	}
}
