<?php
	
	function LastRemaining_Solution($n, $m){
								//$n表示人数，$m表示喊到就要被淘汰的数
		for ($i=$n; $i <=$m; $i++) { 
			$m = $n-$m-1;
		}
		return $n;

	}
	var_dump(LastRemaining_Solution(10, 5));