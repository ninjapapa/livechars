<?php
  require_once('HTML/Template/ITX.php');
  require_once ("include/auth.inc");

  $row=checkcookie();
  
  $template = new HTML_Template_ITX("./template");

  $template->loadTemplatefile("skeleton.tpl",true,true);
  $template->addBlockFile("CONTENT_CODE","bookmark","bookmark.tpl");
  $template->touchBlock("bookmark");

  $template->show();
?>
