<?php
	echo "Mencari Bilangan Prima dari 1-37\n";
	
	for($a=1;$a<=37;$a++){
	    $b=0;
	    for($c=1;$c<=$a;$c++){
	        if($a%$c==0){
	            $b++;
	        }
	    }
	    if($b==2){
	        echo "\t -->";
	        echo $a;
	        echo "\n";
	    }
	}
?>