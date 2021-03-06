{*
Copyright 2019 Prieto Linares, Jorge Fidel

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
Reservation Details:
<br/>
<br/>

Starting: {formatdate date=$StartDate key=reservation_email}<br/>
Ending: {formatdate date=$EndDate key=reservation_email}<br/>
{if $ResourceNames|count > 1}
    Resources:
    <br/>
    {foreach from=$ResourceNames item=resourceName}
        {$resourceName}
        <br/>
    {/foreach}
{else}
    Resource: {$ResourceName}
    <br/>
{/if}

Title: {$Title}<br/>
Description: {$Description|nl2br}

{if $Accessories|count > 0}
    <br/>
    Accessories:
    <br/>
    {foreach from=$Accessories item=accessory}
        ({$accessory->QuantityReserved}) {$accessory->Name}
        <br/>
    {/foreach}
{/if}


<br/>
Reference Number: {$ReferenceNumber}

<br/>
<br/>
<a href="{$ScriptUrl}/{$ReservationUrl}">View this reservation</a> |
<a href="{$ScriptUrl}">Log in to {$AppTitle}</a>
