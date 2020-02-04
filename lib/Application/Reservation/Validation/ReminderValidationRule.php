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

class ReminderValidationRule implements IReservationValidationRule
{
	/**
	 * @param ReservationSeries $reservationSeries
	 * @param $retryParameters
	 * @return ReservationRuleResult
	 */
	public function Validate($reservationSeries, $retryParameters)
	{
		$errorMessage = new StringBuilder();
		if ($reservationSeries->GetStartReminder()->Enabled())
		{
			if (!$this->minutesValid($reservationSeries->GetStartReminder()))
			{
				$errorMessage->AppendLine(Resources::GetInstance()->GetString('InvalidStartReminderTime'));
			}
		}

		if ($reservationSeries->GetEndReminder()->Enabled())
		{
			if (!$this->minutesValid($reservationSeries->GetEndReminder()))
			{
				$errorMessage->AppendLine(Resources::GetInstance()->GetString('InvalidEndReminderTime'));
			}
		}

		$message = $errorMessage->ToString();
		if (strlen($message) > 0)
		{
			return new ReservationRuleResult(false, $message);
		}
		return new ReservationRuleResult();
	}

	private function minutesValid(ReservationReminder $reminder)
	{
		$minutes = intval($reminder->MinutesPrior());
		return $minutes > 0;
	}
}
