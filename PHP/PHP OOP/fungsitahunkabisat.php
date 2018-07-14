<?php
public static function _isLeapYear($year) 
{
		$tahunkabisat = ((($year % 4) == 0) && (($year % 100) != 0) || (($year % 400) == 0));
		return $tahunkabisat;
}

private static function _dateDiff360($startDay, $startMonth, $startYear, $endDay, $endMonth, $endYear, $methodUS) 
{
		if ($startDay == 31) 
		{
			--$startDay;
		} 
		elseif ($methodUS && ($startMonth == 2 && ($startDay == 29 || ($startDay == 28 && !self::_isLeapYear($startYear))))) 
		{
			$startDay = 30;
		}
		if ($endDay == 31) 
		{
			if ($methodUS && $startDay != 30) 
			{
				$endDay = 1;
				if ($endMonth == 12) 
				{
					++$endYear;
					$endMonth = 1;
				} 
				else 
				{
					++$endMonth;
				}
			} 
			else 
			{
				$endDay = 30;
			}
		}

		return $endDay + $endMonth * 30 + $endYear * 360 - $startDay - $startMonth * 30 - $startYear * 360;
}