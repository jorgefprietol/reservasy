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
您的预约即将结束<br/>
预约详情:
	<br/>
	<br/>
	开始时间: {formatdate date=$StartDate key=reservation_email}<br/>
	结束时间: {formatdate date=$EndDate key=reservation_email}<br/>
	资源名称: {$ResourceName}<br/>
	预约标题: {$Title}<br/>
	预约说明: {$Description|nl2br}
<br/>
<a href="{$ScriptUrl}/{$ReservationUrl}">查看此预约</a> |
<a href="{$ScriptUrl}/{$ICalUrl}">添加到日历</a> |
<a href="{$ScriptUrl}">登录到CVC Rental</a>