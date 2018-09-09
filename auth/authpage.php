<?php
require_once "../include/auth.inc";

$ploc=$_GET['ploc'];

$row=checkcookie();
$uid=$row['uid'];
if(isset($row['email'])) $uemail=$row['email'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <script type="text/javascript">
  window.name = "#uid=<?print $uid;?>:<?print $uemail;?>";
  window.location = "<?print $ploc;?>/LCdummy";
  </script>
</head>
</html
