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

header("Content-type: text/css; charset: UTF-8");

// function compress($buffer) {
//   $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
//   $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
//   $buffer = str_replace('{ ', '{', $buffer);
//   $buffer = str_replace(' }', '}', $buffer);
//   $buffer = str_replace('; ', ';', $buffer);
//   $buffer = str_replace(', ', ',', $buffer);
//   $buffer = str_replace(' {', '{', $buffer);
//   $buffer = str_replace('} ', '}', $buffer);
//   $buffer = str_replace(': ', ':', $buffer);
//   $buffer = str_replace(' ,', ',', $buffer);
//   $buffer = str_replace(' ;', ';', $buffer);

//   return $buffer;
// }
include('font-awesome.min.css');
include('hamburgers.min.css');
include('owl.carousel.min.css');
include('owl.theme.css');
include('css.css');

ob_end_flush();
?>