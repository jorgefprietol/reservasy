{*
Copyright 2018-2019 Prieto Linares, Jorge Fidel

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
<div class="availableDates"
     data-has-availability="{$schedule->HasAvailability()|intval}"
     data-start-date="{formatdate date=$schedule->GetAvailabilityBegin() timezone=$timezone key=general_date}"
     data-end-date="{formatdate date=$schedule->GetAvailabilityEnd() timezone=$timezone key=general_date}">
</div>

{translate key=Available}
<span class="propertyValue">
{if $schedule->HasAvailability()}
    {formatdate date=$schedule->GetAvailabilityBegin() timezone=$timezone key=schedule_daily} - {formatdate date=$schedule->GetAvailabilityEnd() timezone=$timezone key=schedule_daily}
{else}
    {translate key=AvailableAllYear}
{/if}
</span>