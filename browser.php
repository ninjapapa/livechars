<?php
  require_once('HTML/Template/ITX.php');
  require_once ("include/auth.inc");

  $row=checkcookie();
  
  $template = new HTML_Template_ITX("./template");

  if($_GET['url']){
    $url=$_GET['url'];
    if(preg_match('/^http/',$_GET['url'])) $url=$_GET['url'];
    else $url="http://" . $_GET['url'];
    $template->loadTemplatefile("browser.tpl",true,true);
    $template->touchBlock("IME_JS");
    $template->setVariable("ONLOAD_STR",'onload="LIVECHARS.on_load(false,false)"');
    $template->setVariable("URL",$url);
    $template->parseCurrentBlock();
    $template->show();
  }else{
    $template->loadTemplatefile("skeleton.tpl",true,true);
    $template->setVariable("ONLOAD_STR",'');
    $template->addBlockFile("CONTENT_CODE","urlform","urlform.tpl");
    $template->touchBlock("urlform");

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
  }
?>


