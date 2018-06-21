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
		echo '<div class="title">Select Ad Size:</div>';
		echo '<select id="ad-size">';
		echo '	<option value="" selected disabled></option>';
		echo '	<option value="160x600">160x600</option>';
		echo '	<option value="120x600">120x600</option>';
		echo '	<option value="728x90">728x90</option>';
		echo '</select>';
		break;
		break;
	case 3:
		echo '<div class="title">Select Date(s):</div>';
		echo '	<select id="ad-dates" multiple>';
		for ($i = 0; $i <= 90; $i++) {
			$date = date("D, d-m-Y", time() + (86400 * $i));
			echo '		<option data-price="1" value="' . $date . '">' . $date . ' | 1 USD</option>';
		}
	echo '	</select>';
		echo '<div class="txt-c"><div id="btn_save_and_pay" class="green_button">Pay 0 USD</div></div>';
		break;
	default:
		//echo "i ist nicht gleich 0, 1 oder 2";
}

?>