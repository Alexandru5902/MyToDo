<?php
error_reporting(0);
$timeExp = time() + (60 * 60 * 24 * 10);

/*
ob_start("ob_gzhandler");
ob_start("compress");
header("Cache-Control: must-revalidate");
header("Expires: " . gmdate ("D, d M Y H:i:s", $timeExp) . " GMT");
header('ETag: '.md5(floor(time()/30)*30));
*/

header("Content-type: text/javascript; charset: UTF-8");

function compress($buffer) {
//  $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
//  $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
  return $buffer;
}

include('jquery.js');
include('owl.carousel.min.js');
include('js.js');

ob_end_flush();
?>