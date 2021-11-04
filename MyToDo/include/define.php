<?php
if(!defined('AREA')) { die('Access denied'); }

define('TIMP', date('Y-m-d H:i:s'));
if(isset($_SERVER['REMOTE_ADDR'])) { define('myip', $_SERVER['REMOTE_ADDR']); } else { define('myip', '127.0.0.1'); }
if(isset($_SERVER['HTTP_USER_AGENT'])) { define('user_agent', $db->show_one($_SERVER['HTTP_USER_AGENT'], 'encode')); } else { define('user_agent', ''); }
if(isset($_SERVER['HTTP_REFERER'])) { define('user_referer', $db->show_one($_SERVER['HTTP_REFERER'], 'encode')); } else { define('user_referer', ''); }
if(isset($_SERVER['REQUEST_URI'])) { define('user_actual_link', $db->show_one($_SERVER['REQUEST_URI'], 'encode')); } else { define('user_actual_link', ''); }
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) { define('user_ajax', 1); } else { define('user_ajax', 0); }

$identif = isset($_GET['pag']) ? $db->show_one($_GET['pag']) : "index";

//admin variables
$getid 			= isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT) ? $_GET['id'] : 0;
$action 		= isset($_GET['action']) ? $db->show_one(strip_tags($_GET['action']), 'encode') : "";
$slug 			= isset($_GET['slug']) ? $db->show_one(strip_tags($_GET['slug']), 'encode') : "";
$pg 				= isset($_GET['pg']) && is_numeric($_GET['pg']) ? $_GET['pg'] : 1;
$perpage 		= 60;
$sqlLimit 	= ' LIMIT '.(($pg * $perpage) - $perpage).', '.$perpage;
$sqlOrder		= "";
$sqlWhere 	= "";
$errmsg 		= "";
$warningmsg = "";
$nr 				= (($pg * $perpage) - $perpage);

// DEFAULT VALUES //
$header['title'] 						= 'Arasound';
$header['description'] 					= ''; 
$header['keywords'] 				    = '';
$header['pagename'] 					= '';
$header['menu']							= '';

$header['is_spider'] 						= 0;
$header['nofollow'] 						= 0;

$header['offer']                        = 1;

$header['rel_url']                      = '';

$header['cookie_consent'] = 1;

define('db_email_templates', 'nms_email_templates');
define('db_nopage', 'nms_nopage');
define('db_spiders', 'nms_spiders');
define('db_queue', 'nms_queue');
define('email_address', 'office@arasound.ro');
define('phone_number', '0721 246 129');
define('id_google', 'UA-19940169-42');

// ADMIN VALUES
$header['breadcrumb'] = 1;
$header['breadarray'] = array();

$header['theme'] = 0;
$header['tinymce'] = 0;

define('db_admins', 'nms_admins');
define('db_admins_actions', 'nms_admins_actions');
define('db_admins_logins', 'nms_admins_logins');
define('db_admins_logs', 'nms_admins_logs');
define('db_admins_nopage', 'nms_admins_nopage');
define('db_admins_sessions', 'nms_admins_sessions');
define('db_admins_visitors', 'nms_admins_visitors');

define('db_posts','nms_posts');
define('db_posts_description','nms_posts_description');
define('db_posts_images','nms_posts_images');

//verify cookie consent
if(isset($_COOKIE['consentcookie']) && $_COOKIE['consentcookie'] == 'y') {
	$header['cookie_consent'] = 0;
}

//allowed images extensions
$allow_image_ext = array("gif","jpeg","jpg","pjpeg","x-png","png");


//images dimensions
define('image_normal_width', '1920');
define('image_normal_height', '1080');
define('image_thumb_people_width', '500');
define('image_thumb_width', '800');
define('image_thumb_height', '500');
define('image_small_width', '250');
define('image_small_height', '250');
