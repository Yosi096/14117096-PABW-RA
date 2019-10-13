<?php
	$name = array("lanirme","aduh","qifuat","toda","anevi","samid","kifuat");
	echo "Sebelum diurutkan : ";
	for($i=0;$i<7;$i++){
	    echo $name[$i];
	    echo ", ";
	}
	echo "\n";
	sort($name);
	$a = count($name);
	echo "Setelah diurutkan : ";
	for($i=0;$i<$a;$i++){
	    echo $name[$i];
	    echo ", ";
	}
	echo "\n";
?>