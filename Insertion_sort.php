<?php
	function Insertion_Sort_A($A){
			for($j=1;$j<count($A);$j++){
					$key=$A[$j];
				//A[j]をソート列A[1..j-1]に挿入
				$i=$j-1;
				while($i>=0&&$A[$i]>$key){
						$A[$i+1]=$A[$i];
						$i=$i-1;
				}
				$A[$i+1]=$key;
			}
			return $A;
	}

	$hairetsu=array();

	for($i=0;$i<100;$i++){
		array_push($hairetsu,rand());
	}

	print_r($hairetsu);

	$hairetsu=Insertion_Sort_A($hairetsu);

	print_r($hairetsu);
	?>
