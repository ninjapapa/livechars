<?php
if(isset($_GET["uid"])){
  $uid=$_GET["uid"];
  $v=preg_split('/:/',$_GET['uid']);
  $uid=$v[0];
  if($v[1]){
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
    echo "uphrs=\"{$uphstr}\";";
  }
}
$codefile="pyjt.js";
echo file_get_contents($codefile);
?>
