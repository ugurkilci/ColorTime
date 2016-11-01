<?php
	
	/**
	 *
	 * Ugur KILCI
	 *
	 * twitter@ugur2nd
	 * github@ugurkilci
	 *
	 * s1.1 | 31.10.2016
	 *
	 */
	
	date_default_timezone_set('Europe/Istanbul'); // Timezones
	
	function colortime($one, $two){ // Daytime, Night
		
		$date = date("H"); // Time
		
		if($date == 07){ echo $one; }
		elseif($date == 08){ echo $one; }
		elseif($date == 09){ echo $one; }
		elseif($date == 10){ echo $one; }
		elseif($date == 11){ echo $one; }
		elseif($date == 12){ echo $one; }
		elseif($date == 13){ echo $one; }
		elseif($date == 14){ echo $one; }
		elseif($date == 15){ echo $one; }
		elseif($date == 16){ echo $one; }
		elseif($date == 17){ echo $one; }
		elseif($date == 18){ echo $one; }
		else{ echo $two; }
		
	}
	
?>
