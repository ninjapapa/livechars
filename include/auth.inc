<?php
function createUser($db_conn){
  $cid="L" . md5(uniqid("",true));
  setcookie('L',$cid,time()+60*60*24*365,"/");
  $query = "INSERT INTO user SET ucookie = \"{$cid}\"";
  $db_conn->query($query);
  $uid=$db_conn->insert_id;
  return $uid;
}

function checkcookie(){
  $db_conn= new mysqli("mysql505.ixwebhosting.com","C264588_input",
                       "Llysc190", "C264588_LC");
  if (isset($_COOKIE['L'])){
    $query = "SELECT uid,email FROM user WHERE ucookie =\"{$_COOKIE['L']}\"";
    $result = $db_conn->query($query);
    if($result->num_rows == 1){
      $row = @ $result->fetch_assoc();
      return $row;
    }
  }
  $uid=createUser($db_conn);
  $row['uid']=$uid;
  return $row;
}

?>
