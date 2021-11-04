<?php
if(!defined('AREA')) { die('Access denied'); }

function checkEmail($email) {
  $email = trim($email);

  if ( strlen($email) > 255 ) {
		$valid_address = false;
  } else {
		if ( substr_count( $email, '@' ) > 1 ) {
			$valid_address = false;
		}
	
		if ( preg_match("/[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i", $email) ) {
			$valid_address = true;
		} else {
			$valid_address = false;
		}
  }

  if ($valid_address) {
		$domain = explode('@', $email);
	
		if ( !checkdnsrr($domain[1], "MX") && !checkdnsrr($domain[1], "A") ) {
			$valid_address = false;
		}
  }

  return $valid_address;
}

function nms_secure($request, $parameters = array()){
	$allowed_array = array();

	//prepare fields
	$temp = array();
	foreach($parameters as $key => $param){
		if(is_numeric($key)){
			$temp[$param] = 'normal';
		}else{
			$temp[$key] = $param;
		}
	}
	unset($parameters);

	//secure fields
	foreach($temp as $key => $value){
		if(!isset($request[$key])){
			$allowed_array[$key] = NULL;
		} else {
			if($value == 'htmlclean'){
				$allowed_array[$key] = nms_striptags($request[$key]);

			} elseif($value == 'number'){
				$allowed_array[$key] = nms_number($request[$key]);

			} else { //if($value == 'normal')
				$allowed_array[$key] = nms_trim($request[$key]);
			}
		}
	}
	
	unset($temp, $request, $parameters);
	return $allowed_array;
}

function nms_length($field, $min = 2, $max = 100) {
	if(isset($field) && strlen($field) >= $min && strlen($field) <= $max){
		return true;	
	} else {
		return false;	
	}
}

function nms_in_array($field, &$array, $key = 'id') {
	$found = false;

  foreach($array as $k) {
		if($k[$key] == $field) {
			$found = true;
			break;
		}
  }

	return $found;
}

function nms_trim($value){
	$value = is_array($value) ? array_map('nms_trim', $value) : trim($value);
	return $value;
}

function nms_striptags($value){
	$value = is_array($value) ? array_map('nms_striptags', $value) : strip_tags(trim($value));
	return $value;
}

function nms_number($value){
	$value = is_array($value) ? array_map('nms_number', $value) : filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	return $value;
}

function admin_save_logs($account) {
	GLOBAL $db, $getid;

	$blocked_fields = array('login_password', 'admin_password', 'admin_password_new', 'user_password');

	//prepare data
	$data['visit_id'] 				= isset($account['visit_id']) ? $account['visit_id'] : 0;
	$data['admin_id'] 				= isset($account['id']) ? $account['id'] : 0;

	$temp_url									= parse_url(user_actual_link);
	$data['page']							= isset($temp_url['path']) ? $temp_url['path'] : '';
	$data['get']							= isset($temp_url['query']) ? $temp_url['query'] : '';
	unset($temp_url);
	
	$data['post'] 						= '';
	if(!empty($_POST)) {
		$temp_post = $_POST;
		foreach($blocked_fields as $field) { if(isset($temp_post[$field])) { unset($temp_post[$field]); } }
		$data['post'] = print_r($temp_post, true);
		unset($temp_post);
	}

	$data['files'] 						= '';
	if(!empty($_FILES)) {
		$data['files'] = print_r($_FILES, true);
	}

	//prepare query
	$query = "INSERT INTO `".db_admins_logs."` SET 
																								`adminlog_adminvisit_id`='".$db->clean_one($data['visit_id'])."',
																								`adminlog_admin_id`='".$db->clean_one($data['admin_id'])."',
																								`adminlog_ip`='".$db->clean_one(myip)."',
																								`adminlog_page`='".$db->clean_one($data['page'])."',
																								`adminlog_element_id`='".$getid."',
																								`adminlog_get`='".$db->clean_one($data['get'])."',
																								`adminlog_post`='".$db->clean_one($data['post'])."',
																								`adminlog_files`='".$db->clean_one($data['files'])."',
																								`adminlog_added`='".TIMP."'
																					   ";
	unset($data);

	//insert query
	$db->insert($query);
}

function admin_save_action($type, $page, $id, $details) {
	global $db, $myAdmin;

	//prepare data
	$data['visit_id'] 				= isset($myAdmin['visit_id']) ? $myAdmin['visit_id'] : 0;
	$data['admin_id'] 				= isset($myAdmin['id']) ? $myAdmin['id'] : 0;
	if(is_array($details)) { $details = print_r($details, true); }

	//prepare query
	$query = "INSERT INTO `".db_admins_actions."` SET 
																								`adminaction_adminvisit_id`='".$db->clean_one($data['visit_id'])."',
																								`adminaction_admin_id`='".$db->clean_one($data['admin_id'])."',
																								`adminaction_ip`='".$db->clean_one(myip)."',
																								`adminaction_type`='".$db->clean_one($type)."',
																								`adminaction_page`='".$db->clean_one($page)."',
																								`adminaction_element_id`='".$id."',
																								`adminaction_action`='".$db->clean_one($details)."',
																								`adminaction_added`='".TIMP."'
																					   ";
	unset($data);

	//insert query
	$db->insert($query);
}

function end_page_execution() {
	GLOBAL $db;

	//$cache = ob_get_contents();
	
	$db->close();
	//ob_end_flush();
	while(@ob_end_flush());

	$end = microtime(true);
	//echo "\n<div style='text-align: right'>Page generated in ".round(($end - PAGE_PARSE_START_TIME), 4)." seconds.</div>";
}