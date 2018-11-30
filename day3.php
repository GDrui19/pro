<?php
	//递归方法
	function fei($n){
		if($n<= 0) return 0;
		if($n==1 || $n==2) return 1;
		return fei($n-1) + fei($n-2);
	}
	echo fei(10);

	//非递归方法
	function index($n){
		if ($n<=0) {
			return 0;
		}
		$array[1]=$array[2]=1;

		for ($i=3;$i<$n; $i++) { 
			 $array=$array[$i]-1 + $array[$i]-2;
		}
		return $n;
	}
	//print_r(index(10));