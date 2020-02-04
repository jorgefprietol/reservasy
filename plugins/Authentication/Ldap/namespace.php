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

@define('PEAR_ROOT', ROOT_DIR . 'lib/external/pear/');

set_include_path(PEAR_ROOT . PATH_SEPARATOR . get_include_path());

require_once(ROOT_DIR . 'plugins/Authentication/Ldap/Ldap.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/LdapOptions.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/LdapConfig.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/LdapUser.php');
require_once(ROOT_DIR . 'plugins/Authentication/Ldap/Ldap2Wrapper.php');
require_once(PEAR_ROOT . 'PEAR.php');
?>