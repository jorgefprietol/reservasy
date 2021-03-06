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

require_once('config/config.php');

#echo 'Please update the $conf[\'settings\'][\'script.url\'] setting in your config file to be http://' . $_SERVER['SERVER_NAME'] . str_replace('/index.php', '', $_SERVER['PHP_SELF']) . '/Web';
#echo '<br/>You will be redirected automatically in 20 seconds, but portions of Agenda Capacitaciones Yanbal will not function correctly.';

header( "refresh:0;url=Web?" . urlencode($_SERVER['QUERY_STRING']) );
exit;
?>