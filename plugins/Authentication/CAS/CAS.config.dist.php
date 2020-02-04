<?php
/**
Copyright 2013-2014 Bart Verheyde, Prieto Linares, Jorge Fidel
bart.verheyde@ugent.be
This file is not part of default Agenda Capacitaciones Yanbal.

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

$conf['settings']['cas.version'] = 'S1';					// '1.0' = CAS_VERSION_1_0, '2.0 = CAS_VERSION_2_0, 'S1' = SAML_VERSION_1_1
$conf['settings']['cas.server.hostname'] = 'localhost';		// the hostname of the CAS server
$conf['settings']['cas.port'] = '443';						// the port the CAS server is running on
$conf['settings']['cas.server.uri'] = '';					// the URI the CAS server is responding on
$conf['settings']['cas.change.session.id'] = 'false';		// Allow phpCAS to change the session_id
$conf['settings']['email.suffix'] = '@yourdomain.com';		// Email suffix to use when storing CAS user account. IE, email addresses will be saved to Agenda Capacitaciones Yanbal as username@yourdomain.com

$conf['settings']['cas_logout_servers'] = '';				// Comma separated list of servers to use for logout. Leave blank to not use cas logout servers

$conf['settings']['cas.certificates'] = '';	// Path to certificate to use for CAS. Leave blank if no certificate should be used
$conf['settings']['cas.attribute.mapping'] = 'givenName=givenName,surName=surname,email=mail,groups=Role';  //bookedAttribute=CASAttribute
$conf['settings']['cas.debug.enabled'] = 'false';
$conf['settings']['cas.debug.file'] = '/tmp/phpcas.log';
?>