<?php

	function angleClock($hours,$minutes){
		$minutesAngle  =  $minutes * (360/60);
		echo $minutesAngle;
		$hoursAngle = $hours * (360/12);
		echo "</br>" . $hoursAngle;
		if ($minutesAngle > $hoursAngle) {
			return $minutesAngle - $hoursAngle; 
		}
		elseif($minutes < $hoursAngle){
			return $hoursAngle - $minutesAngle ; 
		}
		else{
			return 0;
		}
	}
	echo "</br>" . angleClock(15,15);
?>	