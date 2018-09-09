<?php
  require_once('HTML/Template/ITX.php');
  require_once ("../include/auth.inc");

  $idrow=checkcookie();
  
  $template = new HTML_Template_ITX("./template");
  $template->loadTemplatefile("skeleton.tpl",true,true);
  $template->touchBlock("IME_JS");
  $template->setVariable("ONLOAD_STR",'onload="LIVECHARS.on_load({note_en:true})"');
  $template->addBlockFile("CONTENT_CODE","inputspace","inputspace.tpl");
  $template->touchBlock("inputspace");

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


