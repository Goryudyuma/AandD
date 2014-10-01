<?php
	function rand_array(&$hairetsu,$n){
			for($i=0;$i<2;$i++){
					if($n!=0){
							array_push($hairetsu,array());
							rand_array($hairetsu[$i],$n-1);
					}else{
							array_push($hairetsu,rand());
					}
			}
	}
	
	$a=array();
	rand_array($a,10);
	print_r($a);
	?>
