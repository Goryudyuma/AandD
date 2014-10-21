<?php

	function swap(&$a,&$b){
			$c=$a;
			$a=$b;
			$b=$c;
	}

	function Max_Heapify(&$A,$i,&$heap_size){
			$l=$i*2;
			$r=$i*2+1;

			if($l<=$heap_size&&$A[$l]>$A[$i]){
					$largest=$l;
			}else{
					$largest=$i;
			}
			if($r<=$heap_size&&$A[$r]>$A[$largest]){
					$largest=$r;
			}
			if($largest!=$i){
					swap($A[$i],$A[$largest]);
					Max_Heapify($A,$largest,$heap_size);
			}
	}

	function Build_Max_Heap(&$A,&$heap_size){
			$heap_size=count($A)-1;
			for($i=(int)(count($A)/2);$i>=1;$i--){
					Max_Heapify($A,$i,$heap_size);
			}
	}

	function HeapSort(&$A){
			Build_Max_Heap($A,$heap_size);
			for($i=count($A)-1;$i>1;$i--){
					swap($A[1],$A[$i]);
					$heap_size--;
					Max_Heapify($A,1,$heap_size);
			}
	}

	$hairetsu=array();
	array_push($hairetsu,0);
	for($i=0;$i<10000;$i++){
		array_push($hairetsu,rand());
	}

	print_r($hairetsu);

	HeapSort($hairetsu);

	print_r($hairetsu);
	?>
