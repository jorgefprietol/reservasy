{*
Eredeti angol jogi nyilatkozat:

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

---
Az Eredeti angol jogi nyilatkozat magyar fordítása:

Szerzői jog tulajdonos: 2011-2019 Prieto Linares, Jorge Fidel

Ez a fájl a Agenda Capacitaciones Yanbal része.

Agenda Capacitaciones Yanbal szabad szoftver: terjesztheted vagy módosíthatod a GNU Általános Nyilvános Licensz 
bármely 3 változata vagy (belátásod alapjánszerint) későbbi változatok alapján,
amelyeket a Free Software Foundation, adott ki. 

Agenda Capacitaciones Yanbal abban a reményben kerül terjesztésre, hogy hasznos lesz,
ém MINDEN GARANCIA NÉLKÜL; még a KERESKEDELMI vagy GYAKORLATI FELHASZNÁLÁS
hallgatólagos garanciája nélkül.  További információt a 
GNU Általános Nyilvános Licenszben talál.

A Agenda Capacitaciones Yanbal mellett meg kellett kapja a GNU Általános Nyilvános Licensz egy példányát is.
Amennyiben nem, kérjük látogassa meg az alábbi oldalt <http://www.gnu.org/licenses/>.
*}
Foglalása hamarosan befejeződik.<br/>
A foglalás részletei:
	<br/>
	<br/>
	Kezdés: {formatdate date=$StartDate key=reservation_email}<br/>
	Befejezés: {formatdate date=$EndDate key=reservation_email}<br/>
	Elem: {$ResourceName}<br/>
	Megnevezés: {$Title}<br/>
	Leírás: {$Description|nl2br}
<br/>
<a href="{$ScriptUrl}/{$ReservationUrl}">Ezen foglalás megtekintése</a> |
<a href="{$ScriptUrl}/{$ICalUrl}">Naptárhoz adás</a> |
<a href="{$ScriptUrl}">Bejelentkezés ide: {$AppTitle}</a>
