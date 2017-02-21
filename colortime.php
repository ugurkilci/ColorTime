<?php
	/**
	 * s1.2 | 09.11.2016
	 *
	 * Ugur KILCI
	 * twitter@ugur2nd
	 * github@ugurkilci
	 *
	 * Forked and edits by:
	 * Matthias SCHAFFER
	 * @fellwell5
	 */
	
	// You can set your timezone, but mostly the server timezone will to the thing.
	#date_default_timezone_set('Europe/Istanbul'); // Timezone
	
	function colortime($day, $night){ // Daytime, Night
		$hour = date("H");
		if($hour >= 7 && $hour <= 18){
			echo $day;
		}else{
			echo $night;
		}
	}

	function _colortime($day, $night){ // Daytime, Night
		$hour = date("H");
		if($hour >= 7 && $hour <= 18){
			echo $night;
		}else{
			echo $day;
		}
	}
	
?>
