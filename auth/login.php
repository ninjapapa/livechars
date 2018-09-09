<?php
if(isset($_POST['signin'])){
  header("Location: ../signin.php");
  exit;
}

$db_conn = new mysqli("mysql505.ixwebhosting.com","C264588_input",
                      "Llysc190","C264588_LC");

if(isset($_POST['useremail']) && isset($_POST['password'])){
  $email=$_POST['useremail'];
  $passwdmd5=md5($_POST['password']);
  $query="SELECT uid,ucookie FROM user WHERE email='{$email}' AND passwd='{$passwdmd5}'";
  $result=$db_conn->query($query);
  if($result->num_rows == 1){
    $row = @ $result->fetch_assoc();
    setcookie('L',$row['ucookie'],time()+60*60*24*365,"/");
    header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');
    header("Location: http://www.livechars.com");
    exit;
  }
}

header("Location: ../signin.php?message=badlogin");
?>


