<?php

$step = intval(@$_REQUEST['step']);

sleep(2);

switch ($step) {
	case 1:
		echo '<div class="title">Select Website:</div>';
		echo '<select id="ad-website">';
		echo '	<option value="" selected disabled></option>';
		echo '	<option value="www.xyz.com">www.xyz.com</option>';
		echo '	<option value="www.xyz.com">www.sasd.com</option>';
		echo '	<option value="www.xyz.com">www.32f2.com</option>';
		echo '</select>';
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