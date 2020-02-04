{*
Copyright 2011-2015 Prieto Linares, Jorge Fidel

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
	Broneeringu detailid:
	<br/>
	<br/>

	Algus: {formatdate date=$StartDate key=reservation_email}<br/>
	L�pp: {formatdate date=$EndDate key=reservation_email}<br/>
	{if $ResourceNames|count > 1}
		V�ljak:<br/>
		{foreach from=$ResourceNames item=resourceName}
			{$resourceName}<br/>
		{/foreach}
		{else}
		V�ljak: {$ResourceName}<br/>
	{/if}

	{if $ResourceImage}
		<div class="resource-image"><img src="{$ScriptUrl}/{$ResourceImage}"/></div>
	{/if}

	Pealkiri: {$Title}<br/>
	Kirjeldus: {$Description|nl2br}<br/>
    <br/>
    Ootame Teid broneeritud ajal!<br/>
    Rannahall

	{if count($RepeatDates) gt 0}
		<br/>
		The reservation occurs on the following dates:
		<br/>
	{/if}

	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}

	{if $Accessories|count > 0}
		<br/>Accessories:<br/>
		{foreach from=$Accessories item=accessory}
			({$accessory->QuantityReserved}) {$accessory->Name}<br/>
		{/foreach}
	{/if}

	{if $Attributes|count > 0}
		<br/>
		{foreach from=$Attributes item=attribute}
			<div>{control type="AttributeControl" attribute=$attribute readonly=true}</div>
		{/foreach}
	{/if}

	{if $RequiresApproval}
		<br/>
		One or more of the resources reserved require approval before usage.  This reservation will be pending until it is approved.
	{/if}

	{if !empty($ApprovedBy)}
		<br/>
		Approved by: {$ApprovedBy}
	{/if}

	{if !empty($CreatedBy)}
		<br/>
		Broneerija: {$CreatedBy}
	{/if}

	<br/>
	<br/>
	<a href="{$ScriptUrl}/{$ReservationUrl}">Vaata broneeringut</a> |
	<a href="{$ScriptUrl}/{$ICalUrl}">Lisa kalendrisse</a> |
	<a href="{$ScriptUrl}">Logi sisse Rannahalli kalendrisse</a>