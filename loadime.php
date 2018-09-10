<?php
if(isset($_GET['load'])) $load=1;
if(isset($_GET['english'])) $english=1;

header ('Content-Type: text/javascript; charset=gbk');
header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

?>
var LCUI,LCIM;
var LIVECHARS = function() {

  var baseurl='http://www.livechars.com/';
  var coreimpage = baseurl + 'imetabs/coreim.php?v=1.16';
  var uipage = baseurl + 'imetabs/imui.php?v=1.24';
  var uphpage = baseurl + 'imetabs/uphpage.php';
  var logo = baseurl + 'images/small_logo.gif';

  var config={};
  <?if($english):?>config.note_en=true;<?endif;?>
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
  function add_version(is_en){
    var versioninfo;
    if(is_en){
      versioninfo="InputBar version: " + LCUI.version() + ". IM version: " + LCIM.version() + ". System phrases version: " + LCIM.phversion();
    }else{
      versioninfo="�������汾��" + LCUI.version() + "������ģ��汾��" + LCIM.version() + "��ϵͳ�ʿ�汾��" + LCIM.phversion();
    }
    var hlk=document.getElementById("helplk");
    if(hlk) hlk.title=versioninfo;
  }

  function _on_load(c) {

    if(LCUI && LCUI.version && LCIM && LCIM.version){
      LCUI.addUI();
      LCUI.switch_onoff(true);
      return;
    }

    LCIM={};
    LCUI={};
    scriptRequest(coreimpage,"core_js",false);
    scriptRequest(uipage,"ui_js",false);

    if(typeof embed == "undefined") embed=true;
    if(typeof taggedonly == "undefined") taggedonly=false;
    if(typeof inputbar != "undefined") initOn=inputbar;
    
    if(c){
      config=c;
    }
    
    isUIReady();
  }

  var loadtimer;
  function isUIReady(){
    if(!LCUI || !LCUI.version){
      loadtimer=setTimeout(isUIReady,100);
      return;
    }
    clearTimeout(loadtimer);
    LCUI.addUI();
    isIMReady();
  }

  function isIMReady(){
    if(!LCIM || !LCIM.version){
      loadtimer=setTimeout(isIMReady,300);
      return;
    }
    clearTimeout(loadtimer);
    LCIM.ParseUsrPhrsData("<?print $uphstr;?>");
    LCUI.on_load(config);
    add_version(config.note_en);
    uphreport();
  }

  <?if($load):?>_on_load();<?endif;?>

  /*************************************************/
  /* Public methods */
  /*************************************************/

  return {
    on_load : function(c) { return _on_load(c); },
    switchyw : function(){ return LCUI.switchyw(); },
    on : function(){ return LCUI.switch_onoff(true); },
    off : function(){ return LCUI.switch_onoff(false); }
  };

}();

