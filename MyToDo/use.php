<?php
define('AREA', 'USE');

session_start();
require_once('include/config.php');
require_once('user_info.php');

header("Content-Type: text/html; charset=utf-8");
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("X-Robots-Tag: noindex, nofollow", true);

  if(file_exists('use/'.$identif.'.php')) { include('use/'.$identif.'.php'); } else { include('nopage.php'); exit(); }

$db->close();
?>