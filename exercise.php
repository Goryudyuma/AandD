<?php

	function move($t,&$e){
			switch($t){
					case 0:list($e[0],$e[1],$e[2],$e[3])=array($e[2],$e[3],$e[0],$e[1]);break;
					case 1:list($e[0],$e[1],$e[2],$e[3])=array($e[1],$e[0],$e[3],$e[2]);break;
					case 2:list($e[0],$e[1],$e[2],$e[3])=array($e[2],$e[0],$e[3],$e[1]);break;
					case 3:list($e[0],$e[1],$e[2],$e[3])=array($e[1],$e[3],$e[0],$e[2]);break;
					case 4:break;
					case 5:list($e[1],$e[2])=array($e[2],$e[1]);break;
					case 6:list($e[0],$e[3])=array($e[3],$e[0]);break;
					case 7:list($e[0],$e[1],$e[2],$e[3])=array($e[3],$e[2],$e[1],$e[0]);break;
					case 8:list($e[1],$e[2])=array($e[2],$e[1]);break;
					case 9:list($e[0],$e[3])=array($e[3],$e[0]);break;
			}
	}

	$a=array(
		"横の中心線に対して裏返し",
		"縦の中心線に対して裏返し",
		"反時計回りに270度回転",
		"反時計回りに90度回転",
		"動かさない",
		"左上から右下への対角線に対して裏返す",
		"右上から左下への対角線に対して裏返す",
		"反時計回りに180度回転",
		"左上から右下への対角線を中心として裏返し",
		"右上から左下への対角線を中心として裏返し"
	);
	
	$b=array("ul","ur","dl","dr");
	$c=$b;
	for($i=0;$i<3;$i++){
			$s=fgets(STDIN);
			//fscanf(STDIN,"%s\n",$s);
			$s2=substr($s,4);
			$s3=substr($s2,0,-1);
			move(array_search($s3,$a),$b);
	}
	print_r($b);
	for($i=0;;$i++){
			if($i==count($a)){
					echo "見つかりませんでした\n";
					break;
			}
			$d=$c;
			move($i,$d);
			if($d==$b){
					echo $a[$i]."\n";
					break;
			}
	}
	?>



