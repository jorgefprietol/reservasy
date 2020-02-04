{*
Copyright 2020 Prieto Linares, Jorge Fidel

This file is part of Agenda Capacitaciones Yanbal.


*}
Your recurring reservation series for {$ResourceName} is ending on {formatdate date=$StartDate key=reservation_email}.<br/>
Reservation Details:
	<br/>
	<br/>
	Start: {formatdate date=$StartDate key=reservation_email}<br/>
	End: {formatdate date=$EndDate key=reservation_email}<br/>
	Resource: {$ResourceName}<br/>
	Title: {$Title}<br/>
	Description: {$Description|nl2br}
<br/>
<br/>
<a href="{$ScriptUrl}/{$ReservationUrl}">View this reservation</a> |
<a href="{$ScriptUrl}">Log in to {$AppTitle}</a>