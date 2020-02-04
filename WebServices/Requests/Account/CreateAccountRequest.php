<?php
/**
 * Copyright 2019 Prieto Linares, Jorge Fidel
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

require_once(ROOT_DIR . 'WebServices/Requests/Account/AccountRequestBase.php');
require_once(ROOT_DIR . 'WebServices/Requests/CustomAttributes/AttributeValueRequest.php');

class CreateAccountRequest extends AccountRequestBase
{
    public $password;
    public $acceptTermsOfService;

    public static function Example()
    {
        $request = new CreateAccountRequest();
        $request->firstName = 'FirstName';
        $request->lastName = 'LastName';
        $request->emailAddress = 'email@address.com';
        $request->userName = 'username';
        $request->timezone = Configuration::Instance()->GetDefaultTimezone();
        $request->language = Configuration::Instance()->GetKey(ConfigKeys::LANGUAGE);
        $request->organization = 'organization';
        $request->phone = 'phone';
        $request->position = 'position';
        $request->customAttributes = array(AttributeValueRequest::Example());

        $request->password = 'plaintextpassword';
        $request->acceptTermsOfService = true;

        return $request;
    }
}