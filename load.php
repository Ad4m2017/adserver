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
		echo '	<select name="dates" multiple>';
		echo '		<option value="19.06.2018">19.06.2018 | 1 USD</option>';
		echo '		<option value="20.06.2018" disabled>20.06.2018 | 1 USD</option>';
		echo '		<option value="21.06.2018">21.06.2018 | 1 USD</option>';
		echo '		<option value="22.06.2018">22.06.2018 | 1 USD</option>';
		echo '		<option value="23.06.2018">23.06.2018 | 1 USD</option>';
		echo '	</select>';
		echo '<div class="txt-c">Price:<span id="price">0 USD</span></div>';
		echo '<div class="txt-c"><div id="btn_save" class="green_button">Save</div></div>';
		break;
	default:
		//echo "i ist nicht gleich 0, 1 oder 2";
}

?>