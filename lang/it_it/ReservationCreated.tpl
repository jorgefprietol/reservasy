{*
Copyright 2011-2016 Prieto Linares, Jorge Fidel

Translation: 2014 Nicola Ruggero <nicola@nxnt.org>

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


Dettagli prenotazione:
<br />
<br />

Inizio: {formatdate date=$StartDate key=reservation_email}<br />
Fine: {formatdate date=$EndDate key=reservation_email}<br />
{if $ResourceNames|count > 1}
	Risorse:
	<br />
	{foreach from=$ResourceNames item=resourceName}
		{$resourceName}
		<br />
	{/foreach}
{else}
	Risorsa: {$ResourceName}
	<br />
{/if}

{if $ResourceImage}
	<div class="resource-image"><img src="{$ScriptUrl}/{$ResourceImage}"/></div>
{/if}

Note: {$Title}<br />
Descrizione: {$Description|nl2br}<br />

{if count($RepeatDates) gt 0}
	<br />
	La prenotazione si ripete nelle seguenti date:
	<br />
{/if}

{foreach from=$RepeatDates item=date name=dates}
	{formatdate date=$date}
	<br />
{/foreach}

{if $Accessories|count > 0}
	<br />
	Accessori:
	<br />
	{foreach from=$Accessories item=accessory}
		({$accessory->QuantityReserved}) {$accessory->Name}
		<br />
	{/foreach}
{/if}

{if $Attributes|count > 0}
	<br />
	{foreach from=$Attributes item=attribute}
		<div>{control type="AttributeControl" attribute=$attribute readonly=true}</div>
	{/foreach}
{/if}

{if $RequiresApproval}
	<br />
	E' stata inoltrata una prenotazione che prevede una approvazione.
{/if}

{if !empty($ApprovedBy)}
	<br />
	Approvato da: {$ApprovedBy}
{/if}

{if !empty($CreatedBy)}
	<br />
	Creato da: {$CreatedBy}
{/if}

<br />
<br />
<a href="{$ScriptUrl}/{$ReservationUrl}">Vedi questa prenotazione</a> |
<a href="{$ScriptUrl}/{$ICalUrl}">Aggiungi al calendario</a> |
<a href="{$ScriptUrl}">Accedi a Agenda Capacitaciones Yanbal</a>

