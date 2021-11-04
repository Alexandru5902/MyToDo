<?php
if(!defined('AREA')) { die('Access denied'); }

// $timeExp = time() + (60 * 60 * 24 * 30); //30 days
// if(isset($_COOKIE['nms'])) {
//   $nmsID = $_COOKIE['nms'];
// } else { 
//   $nmsID = session_id();
//   setcookie('nms', $nmsID, $timeExp, "/", domain_path);
// }

// check if is spider
check_if_spider();
if($header['is_spider'] == 1) { $timeExp = time() + (60 * 60 * 1); /* 1 ora pt roboti */ }

// notification
if(isset($_SESSION['notification']) && $_SESSION['notification'] != '') { $warningmsg = $_SESSION['notification']; unset($_SESSION['notification']); }

$statuses_options_post_selectbox = makeSelect($statuses_options);







