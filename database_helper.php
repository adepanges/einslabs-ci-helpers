<?php

function paramatize_data($field, $data = array(), $mandatory_check = array()){
	$out = [];

	foreach ($field as $key => $value) {
		if(isset($data[$value])) $out[$value] = $data[$value];
	}

	if(!empty($mandatory_check)) {

	}

	return $out;
}