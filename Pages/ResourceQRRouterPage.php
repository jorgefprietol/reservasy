<?php
/**
 * Copyright 2018-2019 Prieto Linares, Jorge Fidel
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

require_once(ROOT_DIR . 'Pages/Page.php');
require_once(ROOT_DIR . 'Domain/Access/namespace.php');

class ResourceQRRouterPage extends Page
{
    public function __construct()
    {
        parent::__construct();
    }

    public function PageLoad()
    {
        $resourceId = $this->GetQuerystring(QueryStringKeys::RESOURCE_ID);

        $referenceNumber = $this->GetReferenceNumber($resourceId);
        if (!empty($referenceNumber))
        {
            $page = sprintf('%s/%s?%s=%s', Configuration::Instance()->GetScriptUrl(), Pages::RESERVATION, QueryStringKeys::REFERENCE_NUMBER, $referenceNumber);

        }
        else{
            $page = sprintf('%s/%s?%s=%s', Configuration::Instance()->GetScriptUrl(), Pages::RESERVATION, QueryStringKeys::RESOURCE_ID, $resourceId);
        }

        $this->Redirect($page);
    }

    private function GetReferenceNumber($resourceId)
    {
        $repo = new ReservationViewRepository();
        /** @var ReservationItemView[] $reservations */
        $reservations = $repo->GetReservations(Date::Now(), Date::Now(), null, null, null, $resourceId);

        foreach ($reservations as $reservation)
        {
          if ($reservation->StartDate->LessThanOrEqual(Date::Now())
              && $reservation->EndDate->GreaterThanOrEqual(Date::Now())
              && $reservation->RequiresCheckin())
          {
              return $reservation->ReferenceNumber;
          }
        }

        return null;
    }
}