<?php
	function Selection_Sort(&$A){
			for($i=0;$i<count($A)-1;$i++){
					$min=$A[$i];
					$key=$i;
					for($j=$i+1;$j<count($A);$j++){
							if($min>$A[$j]){
									$min=$A[$j];
									$key=$j;
							}
					}
					$A[$key]=$A[$i];
					$A[$i]=$min;
			}
	}

	$A=array();
	for($i=0;$i<100;$i++){
			array_push($A,rand());
	}
	print_r($A);
	Selection_Sort($A);
	print_r($A);
	?>
