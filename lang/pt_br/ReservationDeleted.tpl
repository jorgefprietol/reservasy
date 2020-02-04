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


	Detalhes da Reserva:
	<br/>
	<br/>

	Inicio: {formatdate date=$StartDate key=reservation_email}<br/>
	Fim: {formatdate date=$EndDate key=reservation_email}<br/>
	Recurso: {$ResourceName}<br/>

	{if $ResourceImage}
		<div class="resource-image"><img src="{$ScriptUrl}/{$ResourceImage}"/></div>
	{/if}

	T�tulo: {$Title}<br/>
	Descri��o: {$Description|nl2br}<br/>
{$DeleteReason|nl2br}<br/>

	{if count($RepeatDates) gt 0}
		<br/>
		As seguintes datas foram removidas:
		<br/>
	{/if}

	{foreach from=$RepeatDates item=date name=dates}
		{formatdate date=$date}<br/>
	{/foreach}

	<a href="{$ScriptUrl}">Acessar o Agenda Capacitaciones Yanbal</a>