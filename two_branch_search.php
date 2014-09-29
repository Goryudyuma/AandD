<?php
	
	
	function two_branch_sort($hairetsu,$serch_number){
		for($i=0;$i<count($hairetsu);$i++){
			if($hairetsu[$i]==$serch_number){
					return $i+1;
			}
		}
		return '0';
	}


	$hairetsu=array(1,2,4,5,6,7,8);
	$serch_number=3;
	
	echo two_branch_sort($hairetsu,$serch_number)."\n";


?>
