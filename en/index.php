<?php
  require_once('HTML/Template/ITX.php');
  require_once ("../include/auth.inc");

  $idrow=checkcookie();
  
  $template = new HTML_Template_ITX("./template");
  $template->loadTemplatefile("skeleton.tpl",true,true);
  $template->addBlockFile("CONTENT_CODE","info","info.tpl");
  $template->touchBlock("info");

  $template->setCurrentBlock("LOGINAREA");
  if(isset($idrow["email"])){
    $template->addBlockFile("LOGIN_CODE","welcome","welcome.tpl");
    $template->setVariable("UNAME",$idrow["email"]);
  }else{
    $template->addBlockFile("LOGIN_CODE","login","login.tpl");
    $template->touchBlock("login");
  }
  $template->parseCurrentBlock();
  $template->show();
?>


