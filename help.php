<?php
  require_once('HTML/Template/ITX.php');
  require_once ("include/auth.inc");

  $row=checkcookie();
  
  $template = new HTML_Template_ITX("./template");

  $template->loadTemplatefile("skeleton.tpl",true,true);
  $template->addBlockFile("CONTENT_CODE","help","help.tpl");
  $template->touchBlock("help");

  $template->setCurrentBlock("LOGINAREA");
  if(isset($row["email"])){
    $template->addBlockFile("LOGIN_CODE","welcome","welcome.tpl");
    $template->setVariable("UNAME",$row["email"]);
  }else{
    $template->addBlockFile("LOGIN_CODE","login","login.tpl");
    $template->touchBlock("login");
  }
  $template->parseCurrentBlock();
  $template->show();
?>


