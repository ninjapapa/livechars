<?php
require_once('HTML/Template/ITX.php');
require_once("include/auth.inc");

$db_conn = new mysqli("mysql505.ixwebhosting.com","C264588_input",
                      "Llysc190","C264588_LC");
$row=checkcookie();
$uid=$row['uid'];
if(isset($row['email'])) $uid=createUser($db_conn);

if(isset($_POST['useremail']) && isset($_POST['password'])){
  $email=$_POST['useremail'];
  $passwdmd5=md5($_POST['password']);
  $query="SELECT passwd,ucookie FROM user WHERE email='{$email}'";
  $result=$db_conn->query($query);
  if($result->num_rows == 1){
    $row = @ $result->fetch_assoc();
    if($row['passwd'] == $passwdmd5){
      setcookie('L',$row['ucookie'],time()+60*60*24*365,"/");
      header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');
      header("Location: http://www.livechars.com");
      exit;
    }else{
      header("Location: signin.php?message=existemail");
      exit;
    }
  }
  $query="UPDATE user SET email='{$email}',passwd='{$passwdmd5}' WHERE uid={$uid}";
  $db_conn->query($query);
  header("Location: http://www.livechars.com");
}else{
  $template = new HTML_Template_ITX("./template");

  $template->loadTemplatefile("skeleton.tpl",true,true);
  $template->addBlockFile("CONTENT_CODE","signin","signin.tpl");
  $template->touchBlock("signin");

  if(isset($_GET['message'])){
    if($_GET['message'] == "badlogin")
      $message="�����¼��Ϣ�������µ�¼��ע�����û���";
    else if($_GET['message'] == "existemail")
      $message="�����ṩ�ĵ��������Ѿ�ע�ᣬ��ѡ���������䣬��������ȷ�����¼��";
    $template->setCurrentBlock("MESS");
    $template->setVariable("MESSAGE",$message);
    $template->parseCurrentBlock();
  }
  $template->show();
}
?>


