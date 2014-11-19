<?php
	function QuickSort(&$A,$p,$r){
			if($p<$r){
					$q=RandomizedPartition($A,$p,$r);
					QuickSort($A,$p,$q-1);
					QuickSort($A,$q+1,$r);
			}
	}

	function RandomizedPartition(&$A,$p,$r){
			$i=rand()%($r-$p+1)+$p;
			list($A[$r],$A[$i])=array($A[$i],$A[$r]);
			return Partition($A,$p,$r);
	}

	function Partition(&$A,$p,$r){
			$x=$A[$r];
			$i=$p-1;
			for($j=$p;$j<$r;$j++){
					if($A[$j]<=$x){
							$i++;
							list($A[$i],$A[$j])=array($A[$j],$A[$i]);
					}
			}
			list($A[$i+1],$A[$r])=array($A[$r],$A[$i+1]);
			return $i+1;
	}

	$A=array();
	for($i=0;$i<1000;$i++){
		array_push($A,rand());
	}
	print_r($A);
	QuickSort($A,0,count($A)-1);
	print_r($A);
?>
