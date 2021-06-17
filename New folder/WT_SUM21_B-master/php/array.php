<?php
	$arr = array();//decleare
	$arr2= [];
	
	$arr3 = array("tanvir","sabbir","karim");
	$arr3[3] = "rafiq";
	$arr3[4] = "sattar";
	
	$arr3[] = "borkot"; //index 5
	$arr3[] = "jobbar"; //index 6
	
	$arr[] = 1; // 0
	$arr[] = 145; // 1
	
	$arr2[] = "asw";
	$arr2[] = "ase";
	
	for($i=0;$i<count($arr3);$i++){
		echo $arr3[$i].'<br>';
	}
	
	foreach($arr3 as $e){
		echo $e.'<br>';
	}
	
	//associative array
	$arr4= array();
	$arr5 = [];
	$arr6= array("tanvir" => 34,"sabbir"=>35);
	
	$arr4['tanvir'] = "35";
	$arr4["sabbir"] = "36";
	$arr4["karim"] = "37";
	
	echo "<br><br>";
	
	foreach($arr4 as $k){
		echo $k;
	}
	echo "<br><br>";
	foreach($arr4 as $k=>$v){
		echo "Key: $k and value $v<br>";
		//echo $arr4[$k];
	}
	
	
	
	
	
	
	
	
?>