<?php
if(!defined('AREA')) { die('Access denied'); }

//functions
function secREAD($string) {
	if(!is_array($string)) { $qu = trim($string); }
	return $string;
}

function location($array = '', $thispag = '') {
  $list = "<div id=\"breadcrumbs\" class=\"breadcrumbs page-max-width\"><a href=\"/\" class=\"home\">Acasa</a> / ";		
  if(is_array($array)) {
		foreach ($array as $each) {
			$list .= "<a href=\"".$each[1]."\" title=\"".$each[0]."\">".$each[0]."</a> / ";
		}
  }	
  $list .= "<strong title=\"$thispag\">$thispag</strong>\n</div>\n";
  print $list;
}

function MyEmailCrypt($email) {
	$character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz'; 
	$key = str_shuffle($character_set); 
	$cipher_text = ''; 
	$id = 'e'.rand(1,999999999);
	for ($i=0;$i<strlen($email);$i+=1) { $cipher_text.= $key[strpos($character_set,$email[$i])]; }
  
	$script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";'; 
	$script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));'; 
	$script.= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"<\/a>"'; 
	$script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")"; 
	$script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>'; 
	return '<span id="'.$id.'"></span>'.$script; 
}

function SetTimeExp($days = 1) {
	$timeExp = time() + (60 * 60 * 24 * $days);
	return $timeExp;
}

function set_notification($message) {
  $_SESSION['notification'] = $message;
}

function check_if_spider() {
    GLOBAL $db, $header;

    $info = array();
    $spiders = array('Googlebot', 'bingbot', 'Yammybot', 'Openbot', 'Yahoo', 'Slurp', 'msnbot', 'ia_archiver', 'Lycos', 'Scooter', 'AltaVista', 'Teoma', 'Gigabot', 'Googlebot-Mobile', 'MJ12bot', 'DotBot', 'AhrefsBot', 'price.ro agent', 'YandexBot', 'Baiduspider');
    foreach ($spiders as $spider) {
        if(strpos(user_agent,$spider) !=false) { 
            $db->insert("INSERT INTO `".db_spiders."` SET `spider_area`='".AREA."', `spider_url`='".$db->clean_one(user_actual_link)."', `spider_referer`='".$db->clean_one(user_referer)."', `spider_ip`='".$db->clean_one(myip)."', `spider_user_agent`='".$db->clean_one(user_agent)."', `spider_added`='".TIMP."'");
            $header['is_spider'] = 1;
        }
    }
}

function findArrArr(&$arr, $id) {
	foreach($arr as $k) {
		if($k['id'] == $id) return $k['text'];
	}
}

function noDiacritics($string) {
	//cyrylic transcription
	$cyrylicFrom = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
	$cyrylicTo   = array('A', 'B', 'W', 'G', 'D', 'Ie', 'Io', 'Z', 'Z', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'Ch', 'C', 'Tch', 'Sh', 'Shtch', '', 'Y', '', 'E', 'Iu', 'Ia', 'a', 'b', 'w', 'g', 'd', 'ie', 'io', 'z', 'z', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'ch', 'c', 'tch', 'sh', 'shtch', '', 'y', '', 'e', 'iu', 'ia'); 
   
	$from = array("Á", "À", "Â", "Ä", "Ă", "Ā", "Ã", "Å", "Ą", "Æ", "Ć", "Ċ", "Ĉ", "Č", "Ç", "Ď", "Đ", "Ð", "É", "È", "Ė", "Ê", "Ë", "Ě", "Ē", "Ę", "Ə", "Ġ", "Ĝ", "Ğ", "Ģ", "á", "à", "â", "ä", "ă", "ā", "ã", "å", "ą", "æ", "ć", "ċ", "ĉ", "č", "ç", "ď", "đ", "ð", "é", "è", "ė", "ê", "ë", "ě", "ē", "ę", "ə", "ġ", "ĝ", "ğ", "ģ", "Ĥ", "Ħ", "I", "Í", "Ì", "İ", "Î", "Ï", "Ī", "Į", "Ĳ", "Ĵ", "Ķ", "Ļ", "Ł", "Ń", "Ň", "Ñ", "Ņ", "Ó", "Ò", "Ô", "Ö", "Õ", "Ő", "Ø", "Ơ", "Œ", "ĥ", "ħ", "ı", "í", "ì", "i", "î", "ï", "ī", "į", "ĳ", "ĵ", "ķ", "ļ", "ł", "ń", "ň", "ñ", "ņ", "ó", "ò", "ô", "ö", "õ", "ő", "ø", "ơ", "œ", "Ŕ", "Ř", "Ś", "Ŝ", "Š", "Ş", "Ť", "Ţ", "Þ", "Ú", "Ù", "Û", "Ü", "Ŭ", "Ū", "Ů", "Ų", "Ű", "Ư", "Ŵ", "Ý", "Ŷ", "Ÿ", "Ź", "Ż", "Ž", "ŕ", "ř", "ś", "ŝ", "š", "ş", "ß", "ť", "ţ", "þ", "ú", "ù", "û", "ü", "ŭ", "ū", "ů", "ų", "ű", "ư", "ŵ", "ý", "ŷ", "ÿ", "ź", "ż", "ž");
	$to   = array("A", "A", "A", "A", "A", "A", "A", "A", "A", "AE", "C", "C", "C", "C", "C", "D", "D", "D", "E", "E", "E", "E", "E", "E", "E", "E", "G", "G", "G", "G", "G", "a", "a", "a", "a", "a", "a", "a", "a", "a", "ae", "c", "c", "c", "c", "c", "d", "d", "d", "e", "e", "e", "e", "e", "e", "e", "e", "g", "g", "g", "g", "g", "H", "H", "I", "I", "I", "I", "I", "I", "I", "I", "IJ", "J", "K", "L", "L", "N", "N", "N", "N", "O", "O", "O", "O", "O", "O", "O", "O", "CE", "h", "h", "i", "i", "i", "i", "i", "i", "i", "i", "ij", "j", "k", "l", "l", "n", "n", "n", "n", "o", "o", "o", "o", "o", "o", "o", "o", "o", "R", "R", "S", "S", "S", "S", "T", "T", "T", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "W", "Y", "Y", "Y", "Z", "Z", "Z", "r", "r", "s", "s", "s", "s", "B", "t", "t", "b", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "w", "y", "y", "y", "z", "z", "z");
  
	$from = array_merge($from, $cyrylicFrom);
	$to   = array_merge($to, $cyrylicTo);
	
	$newstring = str_replace($from, $to, $string);   
	return $newstring;
}

function slugString($string) {
	$string = strtolower(noDiacritics(trim($string)));
	$string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
	$string = preg_replace("/[\s-]+/", " ", $string);
	$string = preg_replace("/[\s_]/", "-", $string);
	return $string;
}

function uploadFile($folder = upath_public_static, $input = 'file', $newName = '') {
	GLOBAL $errmsg;
  
	if(is_uploaded_file($_FILES[$input]['tmp_name']) && ($_FILES[$input]['error'] == 0)) {
		  set_time_limit(0);
	  
		  $filename = $_FILES[$input]['name'];
		  $fileupload = $_FILES[$input]['tmp_name'];
	  
		  $path_parts = pathinfo($filename);
		  $filetype = strtolower($path_parts['extension']);
		  
		  if($newName != '') { $theName = slugString($newName); } else { $theName = slugString($path_parts['filename']); }
	  
		  if(file_exists($folder.$theName.'.'.$filetype)) {
			  $now = 1;
			  while(file_exists($folder.$theName.'-'.$now.'.'.$filetype))	{ $now++; }	
			  $theName = $theName.'-'.$now;
		  } 
	  
		  $uploadFPath = $folder.$theName.'.'.$filetype;
		  $move = move_uploaded_file($fileupload, $uploadFPath);
		  if (!$move){ $errmsg .= "The file could not be copied.<br />"; }
	  
	} else { $errmsg .= 'An error occurred while trying to upload your file.<br />'; } 
	
	return $theName.'.'.$filetype;
}

function send_notification($email_template, $email, $values, $from = '', $temp_subject = '') {
    require_once("classes/email.php");
    global $db;
    
      $template = $db->fetch_one("SELECT * FROM `".db_email_templates."` WHERE `template_id` = '".$email_template."'");
      //$template = array('template_title' => 'Contact', 'template_page' => 'default.html', 'template_content' => '{MESSAGE}', 'template_vars' => '{MESSAGE}');
    if(is_array($template)){
          $mimemail = new nomad_mimemail();
          //check here
          $smtp_host	= "";
          $smtp_user	= "";
          $smtp_pass	= "";
  
          if($from == '') { $from = $smtp_user; }
          $to				= $email;
          $subject	= trim(stripslashes($template['template_title'].' '.$temp_subject));
          $main_template = site_url.checkDirectory.upath_email_templates.'default.html';
          if($template['template_page'] != '' && file_exists(site_url.checkDirectory.upath_email_templates.$template['template_page'])) { $main_template = site_url.checkDirectory.upath_email_templates.$template['template_page']; }
       
          $html = file_get_contents($main_template);
          $html = str_replace('{BODY}', $template['template_content'], $html);
          $html = str_replace('{DOMAINURL}', site_url, $html);
          $html	= stripslashes(str_replace(explode(",",$template['template_vars']), $values, $html));
          $text	= strip_tags($html);  
  
          $mimemail->set_from("info@gb-law.uk","GBLaw");
          $mimemail->set_reply_to($from);
          $mimemail->set_to($to);
          $mimemail->set_subject($subject);
          $mimemail->set_text($text);
          $mimemail->set_html($html);
          $mimemail->set_smtp_host($smtp_host);
          $mimemail->set_smtp_auth($smtp_user, $smtp_pass);
          
          //$mimemail->send();
          $db->insert("INSERT INTO `".db_queue."` SET `queue_ip`='".$db->clean_one(myip)."', `queue_from`='".$db->clean_one($from)."', `queue_to`='".$db->clean_one($to)."', `queue_subject`='".$db->clean_one($subject)."', `queue_mail`='".base64_encode(gzcompress(preg_replace('!\s+!smi', ' ', $html)))."', `queue_user_agent`='".$db->clean_one(user_agent)."', `queue_added`='".TIMP."'");
    }
  }
  function clean($vars) {
	foreach($vars as $key => $item) {
		$vars[$key] = strip_tags(trim($item));
	}
	return $vars;		
}

function makeSelect($array, $type = 0) {
	if(!is_array($array)) return false;
	
	$return = array();
	foreach($array as $key=>$value) {
		  if($type == 1) {
			  array_push($return, array('id'=> $value['id'], 'text'=> $value['text']));
		  } else {
			  array_push($return, array('id'=> $value['id'], 'text'=> $value['text']));
		  }
	}
  
	return $return;
}

function cropImageBG($file, $thumb = '') {
	$info = getimagesize($file);
	if($thumb == '') $thumb = $file;
  
	switch ($info[2]) {
		  case IMAGETYPE_GIF  : $img = imagecreatefromgif($file);  break;
		  case IMAGETYPE_JPEG : $img = imagecreatefromjpeg($file); break;
		  case IMAGETYPE_PNG  : $img = imagecreatefrompng($file);  break;
	}
  
	//force white background if transparency
	  $image = imagecreatetruecolor(imagesx($img), imagesy($img)); 
	  imagefill($image, 0, 0, imagecolorallocate($image, 255, 255, 255));
	imagecopy($image, $img, 0, 0, 0, 0, imagesx($image), imagesy($image));
	  $img = $image;
	
	//find the size of the borders
	$b_top = 0;
	$b_btm = 0;
	$b_lft = 0;
	$b_rt = 0;
  
	//top
	for(; $b_top < imagesy($img); ++$b_top) {
		  for($x = 0; $x < imagesx($img); ++$x) {
			  if(imagecolorat($img, $x, $b_top) != 0xFFFFFF) {
			   break 2; //out of the 'top' loop
			  }
		  }
	}
	
	//bottom
	for(; $b_btm < imagesy($img); ++$b_btm) {
		  for($x = 0; $x < imagesx($img); ++$x) {
			  if(imagecolorat($img, $x, imagesy($img) - $b_btm-1) != 0xFFFFFF) {
			   break 2; //out of the 'bottom' loop
			  }
		  }
	}
	
	//left
	for(; $b_lft < imagesx($img); ++$b_lft) {
		  for($y = 0; $y < imagesy($img); ++$y) {
			  if(imagecolorat($img, $b_lft, $y) != 0xFFFFFF) {
			   break 2; //out of the 'left' loop
			  }
		  }
	}
	
	//right
	for(; $b_rt < imagesx($img); ++$b_rt) {
		  for($y = 0; $y < imagesy($img); ++$y) {
			  if(imagecolorat($img, imagesx($img) - $b_rt-1, $y) != 0xFFFFFF) {
			   break 2; //out of the 'right' loop
			  }
		  }
	}
  
	//copy the contents, excluding the border
	$image = imagecreatetruecolor(imagesx($img)-($b_lft+$b_rt), imagesy($img)-($b_top+$b_btm)); 
	imagecopy($image, $img, 0, 0, $b_lft, $b_top, imagesx($image), imagesy($image));
  
	switch ($info[2]) {
		  case IMAGETYPE_GIF  : imagegif($image,  $thumb);      break;
		  case IMAGETYPE_JPEG : imagejpeg($image, $thumb, 100); break;
		  case IMAGETYPE_PNG  : imagepng($image,  $thumb, 9);   break;
	}
  }
  
  function checkImageSize($file, $width = image_normal_width, $height = image_normal_height, $thumb = '') {
	$info = getimagesize($file);
	if($thumb == '') $thumb = $file;
  
	if($info[0] != $width || $info[1] != $height) {  
		  switch ($info[2]) {
			  case IMAGETYPE_GIF  : $src = imagecreatefromgif($file);  break;
			  case IMAGETYPE_JPEG : $src = imagecreatefromjpeg($file); break;
			  case IMAGETYPE_PNG  : $src = imagecreatefrompng($file);  break;
		  }
		  
		  $tmp = imagecreatetruecolor($width, $height);
		  imagefilledrectangle($tmp, 0, 0, $width, $height, imagecolorallocate($tmp, 255, 255, 255));
		  imagecopy($tmp, $src, (($width-$info[0])/2), (($height-$info[1])/2), 0, 0, $info[0], $info[1]);
	  
		  switch ($info[2]) {
			  case IMAGETYPE_GIF  : imagegif($tmp,  $file);      break;
			  case IMAGETYPE_JPEG : imagejpeg($tmp, $file, 100); break;
			  case IMAGETYPE_PNG  : imagepng($tmp,  $file, 9);   break;
		  }
	}
  }
  
  function putWatermark($file, $protected = '') {
	$info = getimagesize($file);
	if($protected == '') $protected = $file;
	if(empty($info)) return 0;
  
	// watermark info
	$watermark = imagecreatefrompng(constant('watermark'));
	$watermark_width = imagesx($watermark);  
	$watermark_height = imagesy($watermark);  
  
	switch ($info[2]) {
	  case IMAGETYPE_GIF  : $src = imagecreatefromgif($file);  break;
	  case IMAGETYPE_JPEG : $src = imagecreatefromjpeg($file); break;
	  case IMAGETYPE_PNG  : $src = imagecreatefrompng($file);  break;
	}
  
	imagecopy($src, $watermark, (($info[0]-$watermark_width)/2), (($info[1]-$watermark_height)/2), 0, 0, $watermark_width, $watermark_height);  
  
	switch ($info[2]) {
	  case IMAGETYPE_GIF  : imagegif($src,  $protected);      break;
	  case IMAGETYPE_JPEG : imagejpeg($src, $protected, 100); break;
	  case IMAGETYPE_PNG  : imagepng($src,  $protected, 9);   break;
	}
  
  }

  function rrmdir($dir) {
	foreach(glob($dir . '/*') as $file) {
		  if(is_dir($file)) { rrmdir($file); } else { unlink($file); }
	}
	rmdir($dir);
  }
