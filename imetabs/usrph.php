<?php
require_once "../include/auth.inc";

$ploc=$_GET['ploc'];

$row=checkcookie();
$uid=$row['uid'];
if(isset($row['email'])){
  $uemail=$row['email'];
  $db_conn = new mysqli("mysql505.ixwebhosting.com","C264588_input",
                        "Llysc190","C264588_LC");
  $db_conn->query("set names gbk");
  $query="SELECT phpinyin,phrase FROM userph WHERE uid={$uid}";

  $result=$db_conn->query($query);
  $uphstr="";
  for($i=0;$i<$result->num_rows;$i++){
    $row= @ $result->fetch_assoc();
    $uphstr .= $row['phpinyin'].$row['phrase'];
  }
}


header ('Content-Type: text/javascript; charset=gb18030');
print "uid={$uid};";
print "email=\"{$uemail}\";";
print "uphrs=\"{$uphstr}\";";
?>
