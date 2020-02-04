<?php
/**
 * Copyright 2020 Prieto Linares, Jorge Fidel
 *
 * This file is part of Agenda Capacitaciones Yanbal.
 *
 * Agenda Capacitaciones Yanbal is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Agenda Capacitaciones Yanbal is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Agenda Capacitaciones Yanbal.  If not, see <http://www.gnu.org/licenses/>.
 */

class ReservationReminderView
{
    /**
     * @var int
     */
    private $value;

    /**
     * @var ReservationReminderInterval|string
     */
    private $interval;

    /**
     * @var int
     */
    private $minutes;

    public function GetValue()
    {
        return $this->value;
    }

    public function GetInterval()
    {
        return $this->interval;
    }

    public function __construct($minutes)
    {
        $this->minutes = $minutes;
        if ($minutes % 1440 == 0) {
            $this->value = $minutes / 1440;
            $this->interval = ReservationReminderInterval::Days;
        }
        elseif ($minutes % 60 == 0) {
            $this->value = $minutes / 60;
            $this->interval = ReservationReminderInterval::Hours;
        }
        else {
            $this->value = $minutes;
            $this->interval = ReservationReminderInterval::Minutes;
        }
    }

    /**
     * @return int
     */
    public function MinutesPrior()
    {
        return $this->minutes;
    }
}