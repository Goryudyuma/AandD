<?php
	
	
	function two_branch_sort($hairetsu,$serch_number,$first,$end){

		$n=(int)(($first+$end)/2);

		if($hairetsu[$n]==$serch_number){
				return $n;
		}else if($first==$end){
				return -1;
		}else if($hairetsu[$n]<$serch_number){
				return two_branch_sort($hairetsu,$serch_number,$n+1,$end);
		}else{
				return two_branch_sort($hairetsu,$serch_number,$first,$n-1);
		}
	}

	$hairetsu=array(1,2,3,4,5,6,7,8);
	$serch_number=5;
	
	echo two_branch_sort($hairetsu,$serch_number,'0',count($hairetsu))."\n";


?>
