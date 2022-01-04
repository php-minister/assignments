<?php

################################
/*replace special character and 
make phone number **/
##############################
function solution($S) {
	
	$str = "";
	$repl_spec = preg_replace('/[^A-Za-z0-9-\-]/', '', $S);
	$ph_number = preg_replace('/-+/', '', $repl_spec);
	//echo join('-', str_split($ph_number, 3));exit;
	$num_arr = str_split($ph_number);
	$i=1;
	foreach($num_arr as $key => $num){

		$str.=$num_arr[$key];
		if($i==3) {
	      	$str.="-";
	      	$i=0;
	    }
	    $i++;
	}		
    return rtrim($str,'-');
}


$S = "00-44 48 5555 8361";
//output 004-448-555-583-61

echo solution($S);

?>