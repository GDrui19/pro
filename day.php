<?php

	function index($str)
	{
		//echo e;
		$res = 'Have you ever gone shopping and';
		$data = [];
		for ($i=0,$end=strlen($str); $i < $end ; $i++) { 
			if ($data[$str[$i]] == 1) {
				$data[$str[$i]]++;
			}else{
				$data[$str[$i]];
				break;
			}
			if ($data[$str[$i]] == 3) {
				$res = $data[$str[$i]];
			}
		}
		return $res;
		//echo $res;
	}

?>