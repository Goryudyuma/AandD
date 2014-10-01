<?php
	$hairetsu=array();
	for($i=0;$i<10;$i++){
		array_push($hairetsu,array());
		for($j=0;$j<10;$j++){
				array_push($hairetsu[$i],rand());
		}
	}
	print_r($hairetsu);

	sort($hairetsu);

	print_r($hairetsu);
?>
