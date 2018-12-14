<?php
	
	$str = "q w e r t y u i o p";
	$end = explode(" ", $str);
	echo $end[0];
	$str = strlen($str);
	//echo $str;
	function FirstNotRepeatingChar($str){
		// if ($str<=10000) {
			
		// }
		$end = explode(" ", $str);
		echo $end[0];
		for ($i=0; $i <=$str ; $i++) { 
			if ($i==$end[$i]) {
				echo $end[$i];
			}else{
				echo -1;
			}
		}
		return $end;
		
	}













?>