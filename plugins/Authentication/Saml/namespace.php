<?php
/**
File in Authentication plugin package for ver 2.1.4 Agenda Capacitaciones Yanbal
to implement Single Sign On Capability.  Based on code from the
Agenda Capacitaciones Yanbal Authentication Ldap plugin as well as a SAML
Authentication plugin for Moodle 1.9+.
See http://moodle.org/mod/data/view.php?d=13&rid=2574
This plugin uses the SimpleSAMLPHP version 1.8.2 libraries.
http://simplesamlphp.org/

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

require_once(ROOT_DIR . 'plugins/Authentication/Saml/Saml.php');
require_once(ROOT_DIR . 'plugins/Authentication/Saml/SamlOptions.php');
require_once(ROOT_DIR . 'plugins/Authentication/Saml/SamlConfig.php');
require_once(ROOT_DIR . 'plugins/Authentication/Saml/ISaml.php');
require_once(ROOT_DIR . 'plugins/Authentication/Saml/SamlUser.php');
require_once(ROOT_DIR . 'plugins/Authentication/Saml/AdSamlWrapper.php');
?>