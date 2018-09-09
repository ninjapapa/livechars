<?php
setlocale("zh_CN.gbk");
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) 
  ob_start("ob_gzhandler"); 
else ob_start();

header ('Content-Type: text/javascript; charset=gbk');
header("Expires: ".gmdate("D, d M Y H:i:s", time()+315360000)." GMT");
header("Cache-Control: max-age=315360000");

$codefile="imui.js";
echo file_get_contents($codefile);
?>

