{*
Modified by Alenka Kavčič (alenka.kavcic@fri.uni-lj.si), UL FRI, July 2015
Translated and adapted for Slovenian language

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
*}


	Podrobnosti rezervacije:
	<br/>
	<br/>

	Začetek: {formatdate date=$StartDate key=reservation_email}<br/>
	Konec: {formatdate date=$EndDate key=reservation_email}<br/>
	Vir: {$ResourceName}<br/>

	{if $ResourceImage}
		<div class="resource-image"><img src="{$ScriptUrl}/{$ResourceImage}"/></div>
	{/if}

	Nalsov: {$Title}<br/>
	Opis: {$Description|nl2br}<br/>

	{if count($RepeatDates) gt 0}
		<br/>
		Rezervacija je narejena za naslednje dneve:
		<br/>
	{/if}

	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}

	{if $RequiresApproval}
		<br/>
		Eden ali več rezerviranih virov pred uporabo potrebuje potrditev. Ta rezervacija je na čakanju, dokler ni potrjena.
	{/if}

	<br/>
	Sprejmete? <a href="{$ScriptUrl}/{$AcceptUrl}">Da</a> <a href="{$ScriptUrl}/{$DeclineUrl}">Ne</a>
	<br/>

	<a href="{$ScriptUrl}/{$ReservationUrl}">Ogled rezervacije</a> |
	<a href="{$ScriptUrl}/{$ICalUrl}">Dodaj v Koledar (Outlook)</a> |
	<a href="{$ScriptUrl}">Prijava v program Agenda Capacitaciones Yanbal</a>
