<?php
	function two_swap($hairetsu,$a,$b){
		$n=$hairetsu[$a];
		$hairetsu[$a]=$hairetsu[$b];
		$hairetsu[$b]=$n;
	}
	
	function two_branch_sort($hairetsu,$n,$length){
		$i=$n;
		if($n==$length){
				return $hairetsu;
		}else{
				while($n>0){
						if($hairetsu[$n]<$hairetsu[$n-1]){
								two_swap($hairetsu,$n,$n-1);
								$n--;
						}else{
								break;
						}
				}
				return two_branch_sort($hairetsu,$n+1,$length);
		}
	}


	$hairetsu=array(1,2,3,4,5,6,7,8);
	$serch_number=9;
	echo two_branch_sort($hairetsu,1,count($hairetsu));

?>
