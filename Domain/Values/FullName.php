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

class FullName
{
    /**
     * @var string
     */
    private $fullName;

    public function __construct($firstName, $lastName)
    {
        $formatter = Configuration::Instance()->GetKey(ConfigKeys::NAME_FORMAT);
        if (empty($formatter))
        {
            $this->fullName = "$firstName $lastName";
        }
        else
        {
            $this->fullName = str_replace('{first}', $firstName, $formatter);
            $this->fullName = str_replace('{last}', $lastName, $this->fullName);
        }
    }

    public function __toString()
    {
        return $this->fullName;
    }
}