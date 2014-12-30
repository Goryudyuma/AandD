<?php
include('Math/BigInteger.php');
$a = new Math_BigInteger('0');
$b = new Math_BigInteger('1');

for($i=0;$i<1000;$i++){
echo $i." ".$a->toString()."\n";
$b=$a->add($b);
$a=$b->subtract($a);

}

?>
