<?php
	function GetUglyNumber_Solution($index){
		while ($index==0) {
			$index = $index/2;//2整除
		}
		while ($index==0) {
			$index=$index/5;//5整除
		}
		while ($index==0){
			$index=$index/3;//3整除
		}
		if ($index==1) {//如果可以整除返回成丑数//否则为非丑数
			return 1;
		}else{
			return 0;
		}
	}
	var_dump(GetUglyNumber_Solution(12));