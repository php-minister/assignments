<?php


//https://app.codility.com/c/run/87R7QV-W2B/

##############################
//find the matching criteria
##############################
function solution($A, $B, $P) {

	$matched_results = array();
	foreach($B as $k => $b){

		$pos = strpos($b, $P);
		if($pos !== false) {
		   $matched_results[] = $A[$k];
		}		
	}
	//count the array result and get first properly matched
	if(count($matched_results) >0){
		echo "Result(s): ";
		sort($matched_results);
		print_r($matched_results[0]);
		echo "<hr />";
	}else{
		echo "NO CONTACT";
	}
}


//for example #1
$A = ["pim","pom"];
$B = ["99999999","777888999"];
$P = "88999";

//for example #2

$A = ["sander","amy", "ann", "michael"];
$B = ["123456789","234567890","789123456","123123123"];
$P = "1";


//for example #3

//$A = ["adam","eva", "leo"];
//$B = ["121212121","111111111","444555666"];
//$P = "112";


solution($A, $B, $P);


?>