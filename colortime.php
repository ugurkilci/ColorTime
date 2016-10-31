<?php
	
	/**
	 *
	 * Uður KILCI
	 *
	 * twitter@ugur2nd
	 * github@ugurkilci
	 *
	 * s1.0 | 31.10.2016
	 *
	 */
	
	function colortime($color1, $color2){ // Daytime, Night
		
		$date = date("H"); // Time
		
		// Daytime
		if($date == 7){ echo $color1; }
		elseif($date == 8){ echo $color1; }
		elseif($date == 9){ echo $color1; }
		elseif($date == 10){ echo $color1; }
		elseif($date == 11){ echo $color1; }
		elseif($date == 12){ echo $color1; }
		elseif($date == 13){ echo $color1; }
		elseif($date == 14){ echo $color1; }
		elseif($date == 15){ echo $color1; }
		elseif($date == 16){ echo $color1; }
		elseif($date == 17){ echo $color1; }
		elseif($date == 18){ echo $color1; }
		// Night
		else{ echo $color2; }
		
	}
	
?>