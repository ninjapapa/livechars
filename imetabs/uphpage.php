<?php
if ($_GET['uph'] && $_GET['uid']){
  $uid=$_GET['uid'];

  $db_conn = new mysqli("mysql505.ixwebhosting.com","C264588_input",
                        "Llysc190","C264588_LC");
  $db_conn->query("set names utf8");

  $uphstr=$_GET['uph'];
  $mcnt=preg_match_all("/[a-z ']+[^a-z' ]+/",$uphstr,$phs);
  foreach ($phs[0] as $ph){
    if (preg_match("/^([a-z ']+)([^a-z' ]+)$/",$ph,$matched)){
      $query = "INSERT INTO userph VALUES ({$uid}, 
                \"{$matched[2]}\",\"{$matched[1]}\",NULL)";
      $result = $db_conn->query($query);
    }
  }
}
?>
