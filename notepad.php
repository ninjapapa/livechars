<?php
  require_once('HTML/Template/ITX.php');

  $template = new HTML_Template_ITX("./template");
  $template->loadTemplatefile("skeleton.tpl",true,true);
  $template->touchBlock("IME_JS");
  $template->setVariable("ONLOAD_STR",'onload="LIVECHARS.on_load(true,true,true)"');
  $template->addBlockFile("CONTENT_CODE","inputspace","inputspace.tpl");
  $template->touchBlock("inputspace");

  $template->parseCurrentBlock();
  $template->show();
?>


