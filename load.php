<?php

$step = intval(@$_REQUEST['step']);

sleep(2);

switch ($step) {
	case 1:
		$websites 		= array( 1=>"www.abcefgh.com" , 2=>"www.123456790.com" , 3=>"www.xyz.com" );
		$websites_json 	= json_encode($websites);
		echo $websites_json;
		break;
	case 2:
		echo "i ist gleich 1";
		break;
	case 3:
		echo "i ist gleich 2";
		break;
	default:
		//echo "i ist nicht gleich 0, 1 oder 2";
}

?>