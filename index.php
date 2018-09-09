<?php
  require_once('HTML/Template/ITX.php');
  require_once ("include/auth.inc");

  $row=checkcookie();
  
  $template = new HTML_Template_ITX("./template");

  $template->loadTemplatefile("skeleton.tpl",true,true);
  $template->addBlockFile("CONTENT_CODE","bookmark","bookmark.tpl");
  $template->touchBlock("bookmark");

  if(isset($row["email"])){
    $template->addBlockFile("LOGIN_CODE","welcome","welcome.tpl");
    $template->setVariable("UNAME",$row["email"]);
  }else{
    $template->addBlockFile("LOGIN_CODE","login","login.tpl");
    $template->touchBlock("login");
  }

  $db_conn = new mysqli("mysql505.ixwebhosting.com","C264588_input",
                        "Llysc190","C264588_LC");
  $db_conn->query("SET NAMES gbk");
  $query="SELECT content,DATE(ctime) as date FROM news ORDER BY sticky DESC, ctime DESC LIMIT 10";
  $result=$db_conn->query($query);
  for($i=0;$i<$result->num_rows;$i++){
    $row = @ $result->fetch_assoc();
    $template->setCurrentBlock("NEWSBOX");
    $template->setVariable("NEWS_CODE",$row['content']);
    $template->setVariable("NEWS_DATE",$row['date']);
    $template->parseCurrentBlock();
  }
  $template->show();
?>
