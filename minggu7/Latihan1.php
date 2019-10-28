<?php
	function swap(&$a,&$b){
	    $c=$a;
	    $a=$b;
	    $b=$c;
	}
	$v1=19;
	$v2=7;
	
	echo "Sebelum Ditukar \n";
	echo "\t Variabel 1 = $v1\n";
	echo "\t Variabel 2 = $v2\n";
	
	swap($v1,$v2);
	
	echo "Setelah Ditukar \n";
	echo "\t Variabel 1 = $v1\n";
	echo "\t Variabel 2 = $v2\n";
?>