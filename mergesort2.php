<?php

	$count=0;
	
	function Merge(&$A,$left,$mid,$right){
			global $count;
			$n1 = $mid - $left;
			$n2 = $right - $mid;
			$L = array();
			$R = array();
			for($i = 0;$i < $n1;$i++){
					$L[]=$A[$left+$i];
					//array_push($L,$A[$left+$i]);
			}
			for($i = 0;$i < $n2;$i++){
					$R[]=$A[$mid+$i];
					//array_push($R,$A[$mid+$i]);
			}
			$L[]=1000000001;
			$R[]=1000000001;
			//array_push($L,1000000001);
			//array_push($R,1000000001);
			$i = 0;
			$j = 0;
			for($k = $left;$k < $right;$k++){
					$count++;
					if($L[$i]<=$R[$j]){
							$A[$k] = $L[$i];
							$i++;
					}else{
							$A[$k] = $R[$j];
							$j++;
					}
			}
	}

	function Merge_Sort(&$A,$left,$right){
			if($left + 1 < $right){
					$mid = (int)(($left + $right)/2);
					Merge_Sort($A,$left,$mid);
					Merge_Sort($A,$mid,$right);
					Merge($A,$left,$mid,$right);
			}
	}

	$A=array();
	(int)$max=fgets(STDIN);
	$num=fgets(STDIN);
	for($i=0;$i<$max;$i++){
			if($i==0){
					$A[]=(int)strtok($num," ");
			}else{
					$A[]=(int)strtok(" ");
			}
	}
	
	Merge_Sort($A,0,$max);
	
	for($i=0;$i<$max;$i++){
			printf("%d",$A[$i]);
			if($i!=$max-1){
					printf(" ");
			}else{
					printf("\n");
			}
	}
	printf("%d\n",$count);
	?>
