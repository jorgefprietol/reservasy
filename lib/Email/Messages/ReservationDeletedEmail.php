<?php
/**
Copyright 2020 Prieto Linares, Jorge Fidel

This file is part of Agenda Capacitaciones Yanbal is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Agenda Capacitaciones Yanbal.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once(ROOT_DIR . 'lib/Email/Messages/ReservationEmailMessage.php');

class ReservationDeletedEmail extends ReservationEmailMessage
{
    /**
     * @return string
     */
    function Subject()
    {
        return $this->Translate('ReservationDeletedSubjectWithResource', array($this->primaryResource->GetName()));
    }

    public function PopulateTemplate()
    {
        if (method_exists($this->reservationSeries, 'GetDeleteReason')) {
            $this->Set('DeleteReason', $this->reservationSeries->GetDeleteReason());
        }
        parent::PopulateTemplate();
    }

    protected function GetTemplateName()
    {
       return 'ReservationDeleted.tpl';
    }
}