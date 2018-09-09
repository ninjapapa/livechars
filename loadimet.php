<?php
require_once "include/auth.inc";
$row=checkcookie();
$uid=$row['uid'];
if(isset($row['email'])){
  $uemail=$row['email'];
  $db_conn = new mysqli("mysql505.ixwebhosting.com","C264588_input",
                        "Llysc190","C264588_LC");
  $db_conn->query("set names gbk");
  $query="SELECT phpinyin,phrase FROM userph WHERE uid={$uid}";

  $result=$db_conn->query($query);
  $uphstr="";
  for($i=0;$i<$result->num_rows;$i++){
    $row= @ $result->fetch_assoc();
    $uphstr .= $row['phpinyin'].$row['phrase'];
  }
}

if(isset($_GET['load'])) $load=1;
$codefile="imetabs/pyjt.js";

header ('Content-Type: text/javascript; charset=gbk');
header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');

if(isset($_GET['refresh'])){
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
}

?>
var LIVECHARS = function() {

  var baseurl='http://www.livechars.com/';
  var coreimpage = baseurl + 'imetabs/coreimt.php';
  var uipage = baseurl + 'imetabs/imuit.js?v=1.11';
  var uphpage = baseurl + 'imetabs/uphpage.php';
  var logo = baseurl + 'images/small_logo.gif';

  var versioninfo;
  var uid = <?print $uid;?>;
  var email = "<?print $uemail;?>";
  var logininfo=(email)?"您已登录 " + email + "。点击这里查看帮助信息。"
                       :"您未登录，用户自组词将在使用结束后消失。点击这里查看帮助信息。";

  var _embed;
  var _taggedonly;
  var _inputbar;
  ////////////////////////////////////
  // Cross Domain Query (Ajax replacement)
  ////////////////////////////////////
  function scriptRequest(req,id,refresh)
  {
    var elem = document.createElement("script");
    var oHead = document.getElementsByTagName('HEAD').item(0);

    if(document.getElementById(id))
      oHead.removeChild(document.getElementById(id));

    elem.type = "text/javascript";
    elem.id = id;
    elem.charset = "gbk";
    if(refresh){
      if(req.match(/\?.*=/))
        req += '&noCacheIE=' + (new Date()).getTime();
      else
        req += '?noCacheIE=' + (new Date()).getTime();
    }
    elem.src= req;
    oHead.appendChild(elem);
  }

  ////////////////////////////////////
  // Report userPH
  ////////////////////////////////////
  var uphtimer;
  function uphreport(){
    if(LCIM.uphstr().length>0){
      var qstr=uphpage + '?uid=' + uid +
               '&uph=' + encodeURIComponent(LCIM.uphstr());
      
      scriptRequest(qstr,"uphreport_js",true);
    }
    uphtimer=setTimeout(uphreport,20000);
    LCIM.uphstr("");
  }
  

  /****************************************************/
  /* LIVECHARS setup */
  /****************************************************/
  function _on_load(embed,taggedonly,inputbar) {

    scriptRequest(coreimpage,"core_js",false);
    scriptRequest(uipage,"ui_js",false);

    if(typeof embed == "undefined") embed=true;
    if(typeof taggedonly == "undefined") taggedonly=false;
    if(typeof inputbar != "undefined") initOn=inputbar;
    
    _embed = embed;
    _taggedonly = taggedonly;
    _initOn = initOn;
    
    isSysReady();
  }

  var loadtimer;
  function isSysReady(){
    if(  typeof LCIM == "undefined" || typeof LCUI == "undefined"
       || !LCIM.version() || !LCUI.version() ){
      loadtimer=setTimeout(isSysReady,300);
      return;
    }
    clearTimeout(loadtimer);
    LCIM.ParseUsrPhrsData("<?print $uphstr;?>");
    LCUI.addUI();
    LCUI.on_load(_embed,_taggedonly,_initOn);
  //  LCUI.switch_onoff(_initOn);

    versioninfo="输入模块版本：" + LCUI.version() + "。系统词库版本：" + LCIM.version() + "。";
    var hlk=document.getElementById("helplk");
    if(hlk) hlk.title=versioninfo + logininfo;
   
    uphreport();
  }

  <?if($load):?>_on_load(true,false,true);<?endif;?>

  /*************************************************/
  /* Public methods */
  /*************************************************/

  return {
    on_load : function(embed,taggedonly,inputbar) { return _on_load(embed,taggedonly,inputbar); },
    switchyw : function(){ return LCUI.switchyw(); },
    on : function(){ return LCUI.switch_onoff(true); },
    off : function(){ return LCUI.switch_onoff(false); }
  };

}();

