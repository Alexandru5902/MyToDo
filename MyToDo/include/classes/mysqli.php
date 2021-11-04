<?php
if(!defined('AREA')) { die('Access denied'); }

class mysql {
  private $db;

  function __construct() {
	  global $mysql;	
	  $this->connect($mysql);		
  }
  
  function connect($mysql){
	  $this->db = mysqli_connect($mysql['host'], $mysql['user'], $mysql['pass'], $mysql['base']);
  }
  
  function query($sql){
	  return mysqli_query($this->db, $sql);
  }

  function insert($sql){
	  $this->query($sql);		
  }
  
  function insert_id($sql){
	  $this->query($sql);
	  return mysqli_insert_id($this->db);
  }

  function update($sql){
	  $this->query($sql);
  }

  function delete($sql){
	  $this->query($sql);
  }

  function fetch_one($sql){
	  $query = $this->query($sql);
	  $fetch = mysqli_fetch_array($query, MYSQLI_ASSOC);
	  return $fetch;
  }
  
  function fetch_all($sql){
	  $results = array();
	  $query = $this->query($sql);
	  if($query){
			while($fetch = mysqli_fetch_array($query, MYSQLI_ASSOC)){
				$results[] = $fetch;	
			}
		}
	  return $results;		
  }
  
  function num_results($sql){
	  $num = mysqli_num_rows($this->query($sql));
	  return $num;
  }

  function affected_rows($sql){
	  $this->query($sql);
	  return mysqli_affected_rows($this->db);
  }
    
  function close(){
	  mysqli_close($this->db);		
  }

	//security functions for one field
  function clean_one($string, $opt = NULL) { //for insert
		$string = trim($string);

		if($opt == 'espace') {
			return mysqli_real_escape_string($this->db, $string);
		} elseif($opt == 'encode') {
			return htmlspecialchars_decode(trim($string), ENT_QUOTES);
		} else {
			return mysqli_real_escape_string($this->db, htmlspecialchars_decode(trim($string), ENT_QUOTES));
		}
  }

  function show_one($string, $opt = NULL){ //for read
		if($opt == 'espace') {
			return stripslashes($string);
		} elseif($opt == 'encode') {
			return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
		} else {
			return htmlspecialchars(stripslashes($string), ENT_QUOTES, 'UTF-8');
		}
  }

	//security functions recursive
	function clean($value){
		$value = is_array($value) ? array_map(array($this, 'clean'), $value) : $this->clean_one($value);
		return $value;
	}

	function show($value){
		$value = is_array($value) ? array_map(array($this, 'show'), $value) : $this->show_one($value);
		return $value;
	}

	function clean_escape($value){
		$value = is_array($value) ? array_map(array($this, 'clean_escape'), $value) : $this->clean_one($value, 'escape');
		return $value;
	}

	function show_escape($value){
		$value = is_array($value) ? array_map(array($this, 'show_escape'), $value) : $this->show_one($value, 'escape');
		return $value;
	}

	function clean_encode($value){
		$value = is_array($value) ? array_map(array($this, 'clean_encode'), $value) : $this->clean_one($value, 'encode');
		return $value;
	}

	function show_encode($value){
		$value = is_array($value) ? array_map(array($this, 'show_encode'), $value) : $this->show_one($value, 'encode');
		return $value;
	}

	//save action function
  function save_action($type, $page, $id = 0, $details = '') {
		GLOBAL $myAdmin;

		if(is_array($details)) { $details = print_r($details,true); }
		$details = $this->clean_one($details);

		$this->query("INSERT INTO `".db_admins_actions."` SET `action_admin_id`='".$myAdmin['id']."', `action_date`='".TIMP."', `action_ip`='".$this->clean_one(myip)."', `action_type`='".$type."', `action_page`='".$page."', `action_element_id`='".$id."', `action_details`='".$details."'");
  }

}
?>