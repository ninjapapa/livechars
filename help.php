<?php
  require_once('HTML/Template/ITX.php');
  $template = new HTML_Template_ITX("./template");

  $template->loadTemplatefile("skeleton.tpl",true,true);
  $template->addBlockFile("CONTENT_CODE","help","help.tpl");
  $template->touchBlock("help");

  $template->parseCurrentBlock();
  $template->show();
?>


