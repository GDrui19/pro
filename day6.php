<?php
//$n表示区间的最小值，
//$m表示区间的最大值
	function calFn($n,$m){
		//判断$n等于或者小于0都返回0；
		if ($n<=0) {
			return 0;
		}
		$num=0;
		for ($i=$n; $i <= $m; $i++) { 
			
			$num = $num+substr_count($i,1);//统计1出现的次数
		}
		return $num;
	}
	var_dump(calFn(1,13)) ;