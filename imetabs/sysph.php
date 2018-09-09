<?php
header ('Content-Type: text/javascript; charset=gb18030');
header("Expires: ".gmdate("D, d M Y H:i:s", time()+315360000)." GMT");
header("Cache-Control: max-age=315360000");

$codefile="pyjt.js";
echo file_get_contents($codefile);
?>
