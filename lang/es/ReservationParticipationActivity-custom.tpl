{*
Copyright 2019 Prieto Linares, Jorge Fidel

This file is part of Agenda Capacitaciones Yanbal.


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