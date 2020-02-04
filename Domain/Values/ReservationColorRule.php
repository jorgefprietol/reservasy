<?php
/**
Copyright 2014-2019 Prieto Linares, Jorge Fidel

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
*/

class ReservationColorRule
{
	public $Id;
	public $AttributeId;
	public $AttributeType;
	public $AttributeName = 'Reservation Type';
	public $RequiredValue = 'a specific value';
	public $ComparisonType;
	public $Color = 'a32ca3';

	/**
	 * @param int $attributeId
	 * @param string $requiredValue
	 * @param string $color
	 * @return ReservationColorRule
	 */
	public static function Create($attributeId, $requiredValue, $color)
	{
		$rule = new ReservationColorRule();

		$rule->AttributeId = $attributeId;
		$rule->RequiredValue = $requiredValue;
		$rule->Color = $color;

		return $rule;
	}

	/**
	 * @param array $row
	 * @return ReservationColorRule
	 */
	public static function FromRow($row)
	{
		$rule = self::Create($row[ColumnNames::ATTRIBUTE_ID], $row[ColumnNames::REQUIRED_VALUE], $row[ColumnNames::RESERVATION_COLOR]);
		$rule->AttributeName = $row[ColumnNames::ATTRIBUTE_LABEL];
		$rule->Id = $row[ColumnNames::RESERVATION_COLOR_RULE_ID];

		return $rule;
	}

	public function IsSatisfiedBy(ReservationItemView $reservation)
	{
		$value = $reservation->Attributes->Get($this->AttributeId);
		if (!empty($value))
		{
			return $value == $this->RequiredValue;
		}

		return false;
	}
}
