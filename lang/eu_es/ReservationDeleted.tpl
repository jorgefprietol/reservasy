{*
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
Erreserbaren xehetasunak:
<br/>
<br/>

Erabiltzailea: {$UserName}<br/>
Hasiera: {formatdate date=$StartDate key=reservation_email}<br/>
Amaiera: {formatdate date=$EndDate key=reservation_email}<br/>
{if $ResourceNames|count > 1}
    Baliabideak:
    <br/>
    {foreach from=$ResourceNames item=resourceName}
        {$resourceName}
        <br/>
    {/foreach}
{else}
    Baliabidea: {$ResourceName}
    <br/>
{/if}

{if $ResourceImage}
    <div class="resource-image"><img src="{$ScriptUrl}/{$ResourceImage}"/></div>
{/if}

Izenburua: {$Title}<br/>
Deskripzioa: {$Description|nl2br}<br/>
{$DeleteReason|nl2br}<br/>


{if count($RepeatDates) gt 0}
    <br/>
    Data hauek ezabatu dira:
    <br/>
{/if}

{foreach from=$RepeatDates item=date name=dates}
    {formatdate date=$date}
    <br/>
{/foreach}

{if $Accessories|count > 0}
    <br/>
    Osagarriak:
    <br/>
    {foreach from=$Accessories item=accessory}
        ({$accessory->QuantityReserved}) {$accessory->Name}
        <br/>
    {/foreach}
{/if}

<br/>
<br/>
<a href="{$ScriptUrl}">Saioa hasi Agenda Capacitaciones Yanbal-en</a>
