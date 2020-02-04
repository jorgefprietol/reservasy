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

class ReservationValidationRuleProcessor implements IReservationValidationService
{
	/**
	 * @var array|IReservationValidationRule[]
	 */
	private $_validationRules = array();

	public function __construct($validationRules)
	{
		$this->_validationRules = $validationRules;
	}

	public function Validate($reservationSeries, $retryParameters = null)
	{
		/** @var $rule IReservationValidationRule */
		foreach ($this->_validationRules as $rule)
		{
			$result = $rule->Validate($reservationSeries, $retryParameters);
			Log::Debug('Validating rule %s. Passed?: %s', get_class($rule), $result->IsValid() . '');

			if (!$result->IsValid())
			{
				return new ReservationValidationResult(false, array($result->ErrorMessage()), array(), $result->CanBeRetried(), $result->RetryParameters(), array($result->RetryMessage()), $result->CanJoinWaitlist());
			}
		}

		return new ReservationValidationResult();
	}

	public function AddRule($validationRule)
	{
		$this->_validationRules[] = $validationRule;
	}

	public function PushRule($validationRule)
	{
		array_unshift($this->_validationRules, $validationRule);
	}
}