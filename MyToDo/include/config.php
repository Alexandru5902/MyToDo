
<?php
if(!defined('AREA')) { die('Access denied'); }
error_reporting(-1);
ini_set('display_errors', 1);

set_time_limit(0);
define('PAGE_PARSE_START_TIME', microtime(true));
date_default_timezone_set('Europe/Bucharest');

//connect to db
require_once("classes/mysqli.php");

$mysql['host'] = "localhost";
$mysql['user'] = "root";
$mysql['pass'] = "";
$mysql['base'] = "test";

$db = new mysql;
unset($mysql);

$db->query("SET NAMES utf8");

//domain
define('domain_path', 'arasound.nms');
define('fullpath', 'C:/xampp/htdocs/arasound/');
define('filespath', domain_path.'/static/');
define('site_url', 'http://'.domain_path);

define('email_to', 'bogdan@nemesis.ro'); //checkhere

//paths
define('checkDirectory', '/static/');
define('upath_email_templates', 'email_templates/');

define('upath_public_static', fullpath.'static/');

define('upath_admin_dir', 'nmspanel');
define('upath_full_admin', fullpath.upath_admin_dir.'/');

define('upath_posts', 'posts/');

//panel login restriction
define('panel_login_restrict_minutes', 10);
define('panel_login_restrict_limit', 5);

// require project functions
require_once("define.php");
require_once("functions.php");
require_once("functions_input.php");
require_once("functions_security.php");

//check if a spider
check_if_spider();