<?php
public elsif function($parameter)
{
	if (($parameter < 12) 
	{
		return "Anak-Anak";
	}

	elseif (($parameter > 12) && ($parameter < 20)) 
	{
		return "Remaja";
	}
	 elseif (($parameter > 40) && ($parameter < 80)) 
	 {
		return "Sudah Tua";
	} 
	else 
	{
		return "Ajaib"
	}
}

public switch function($parameter)
{
	switch ($parameter) 
	{
		case ($parameter < 12):
			return "Anak-Anak";
		case (($parameter > 12) && ($parameter < 40)):
			return "Remaja";
		case (($parameter > 40) && ($parameter < 80)):
			return "Sudah Tua";
		default:
			return "Anak-Anak"
			break;
	}
}

# or Another Alternative
public switch function($parameter)
{
	$result = '';
	switch ($parameter) 
	{
		case ($parameter < 12):
			result = "Anak-Anak";
			break;
		case (($parameter > 12) && ($parameter < 40)):
			result = "Remaja";
			break;
		case (($parameter > 40) && ($parameter < 80)):
			result = "Sudah Tua";
			break;
		default:
			result = "Anak-Anak"
			break;
	}
	return $result;
}