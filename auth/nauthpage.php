<?php
require_once "../include/auth.inc";

$ploc=$_GET['ploc'];

$row=checkcookie();
$uid=$row['uid'];
if(isset($row['email'])) $uemail=$row['email'];

header ('Content-Type: text/javascript; charset=gb18030');
?>
tran_uid="<?print $uid;?>";
tran_email="<?print $uemail;?>";
