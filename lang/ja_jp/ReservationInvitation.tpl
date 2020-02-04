{* -*-coding:utf-8-*-
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

	予約の詳細:
	<br/>
	<br/>

	開始: {formatdate date=$StartDate key=reservation_email}<br/>
	終了: {formatdate date=$EndDate key=reservation_email}<br/>
	{if $ResourceNames|count > 1}
		リソース:<br/>
		{foreach from=$ResourceNames item=resourceName}
			{$resourceName}<br/>
		{/foreach}
		{else}
		リソース: {$ResourceName}<br/>
	{/if}

	{if $ResourceImage}
		<div class="resource-image"><img src="{$ScriptUrl}/{$ResourceImage}"/></div>
	{/if}

	件名: {$Title}<br/>
	説明: {$Description|nl2br}<br/>

	{if count($RepeatDates) gt 0}
		<br/>
		下記の日時で予約されました:
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

	{if $RequiresApproval}
		<br/>
		承認が必要なリソースが含まれています。 そのため承認されるまでは保留状態となります。
	{/if}

	<br/>
	出席しますか? <a href="{$ScriptUrl}/{$AcceptUrl}">はい</a> <a href="{$ScriptUrl}/{$DeclineUrl}">いいえ</a>
	<br/>
	<br/>

	<a href="{$ScriptUrl}/{$ReservationUrl}">予約の表示</a> |
	<a href="{$ScriptUrl}/{$ICalUrl}">カレンダーへ追加</a> |
	<a href="{$ScriptUrl}">Agenda Capacitaciones Yanbal へログイン</a>

