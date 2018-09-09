var LCUI = function() {

  var _version = '1.13';
  var baseurl='http://www.livechars.com/';
  var logo = baseurl + 'images/small_logo.gif';

  if (document.all && !document.getElementById) {
    document.getElementById = function(id) {
      return document.all[id];
    }
  }

  var browser;
  var ieversion;

  if (navigator.appName.indexOf('Microsoft') != -1) browser = 'IE';
  else if (navigator.appName.indexOf('Netscape') != -1) browser = 'NS';
  else if (navigator.appName.indexOf('Opera') != -1) browser = 'OP';
  else browser = 'NS';

  if(browser == 'IE'){
    var ua = navigator.userAgent;
    var MSIEOffset = ua.indexOf("MSIE ");
    if (MSIEOffset == -1) 
      ieversion=0;
    else
      ieversion=parseFloat(ua.substring(MSIEOffset + 5, ua.indexOf(";", MSIEOffset)));
  }

  var Focused_area=null;
  var embed_style=true;

  var textelem_stack = new Array();

  var initOn = true;

  var ywinput = false;
  var fsinput = false;
  var pninput = true;

  var code_len = 12;
  var ctrl_keydown = false;
  var left_yinhao1 = false;
  var left_yinhao2 = false;
  var right_arrow = false;
  var cancel_key_event = false;

  var key_en = "1234567890abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ:;<>,.-_?/{[\\}]";
  var key_quan = "１２３４５６７８９０ａｂｃｄｅｆｇｈｉｊｋｌｍｎｏｐｑｒｓｔｕｖｗｘｙｚ！＠＃＄％＾＆＊（）ＡＢＣＤＥＦＧＨＩＪＫＬＭＮＯＰＱＲＳＴＵＶＷＸＹＺ：；《》，。－＿？／｛［、｝］";
  function ToFullShapeLetter(aStr) { // 将半形字母换成全形字母
    var s="";

    for (i=0;i<aStr.length;i++) {
      c = aStr.charAt(i);
      pos = key_en.indexOf(c);
      if(pos >= 0) s += key_quan.substr(pos,1);
    }

    return s;
  }

  function addListener(element, type, expression) {
    if(window.addEventListener) { // Standard
  //    element.removeEventListener(type, expression, false);
      element.addEventListener(type, expression, false);
      return true;
    } else if(window.attachEvent) { // IE
  //    element.detachEvent('on' + type, expression);
      element.attachEvent('on' + type, expression);
      return true;
    } else return false;
  }

  function dropListener(element, type, expression) {
    if(window.removeEventListener) { // Standard
      element.removeEventListener(type, expression, false);
      return true;
    } else if(window.detachEvent) { // IE
      element.detachEvent('on' + type, expression);
      return true;
    } else return false;
  }

  function cancelkey(e){
    e.cancelBubble=true;
    if(e.stopPropagation)e.stopPropagation();
    if (e.preventDefault) e.preventDefault();
    else e.returnValue = false;
  }


  function insert_char(str,obj) {
    if (str == "") return;
    switch (browser) {
      case 'IE':
        var r=document.selection.createRange();
        if(typeof r.text != "undefined") r.text=str;
        else{
          r.pasteHTML(str);
          r.collapse(false);
        }
        r.select(); // 不知何故，此码可取消选区。
        break;
      case 'NS': 
      // Gecko
        if(typeof obj.value != "undefined"){
          var selectionStart = obj.selectionStart;
          var selectionEnd = obj.selectionEnd;
          var oldScrollTop = obj.scrollTop; //因Gecko不会滚到该滚的地方。
          var oldScrollHeight = obj.scrollHeight;
          var oldLen = obj.value.length;
          
          obj.value = obj.value.substring(0, selectionStart) + str + obj.value.substring(selectionEnd);
          obj.selectionStart = obj.selectionEnd = selectionStart + str.length;
          if (obj.value.length == oldLen) {  // 如果用户在后面输入，就直接滚到后面。
            obj.scrollTop = obj.scrollHeight;
          } else if (obj.scrollHeight > oldScrollHeight) {  // 如果TextArea增加了高度，就滚下一点点
            obj.scrollTop = oldScrollTop + obj.scrollHeight - oldScrollHeight;
          } else { // 其它情形就滚回之前的地方
            obj.scrollTop = oldScrollTop;
          }
        }else{
          var f=obj;
          while(f.nodeType != Node.DOCUMENT_NODE) f=f.parentNode;
          f.execCommand('insertHTML',false,str);
        }
        break;
      default: // 其它，就在后面加字算了
        if(typeof obj.value != "undefined") obj.value += str;
        else{
          var f=obj;
          while(f.nodeType != Node.DOCUMENT_NODE) f=f.parentNode;
          f.execCommand('insertHTML',false,str);
        }
    }
  }

  function apply_change(){
    if(document.getElementById("code_field"))
      document.getElementById("code_field").innerHTML =  '&nbsp;<span style="color:purple">' + LCIM.code_field() + "</span>";
    if(document.getElementById("list_area"))
      document.getElementById("list_area").innerHTML =  LCIM.candidates() + "&nbsp;";
  }

  function clear_all() {
    LCIM.clear_all();
    apply_change();
  }

  function selected(e,c){
    var ich=LCIM.selected(c);
    if(typeof ich == "undefined" || ich == null) return;
    var targ=e.target?e.target:e.srcElement;
    insert_char(ich,targ);
    apply_change();
  }

  function fillPre(){
    if (LCIM.fillPre()){
      cancel_key_event = true;
      apply_change();
      return false;
    }
    return true;
  }

  function fillAft(){
    if (LCIM.fillAft()){
      cancel_key_event = true;
      apply_change();
      return false;
    }
    return true;
  }

  /****************************************************************/
  /* On Off switch and Init fuctions */
  /****************************************************************/

  function _switch_onoff(on,hold){
    if(typeof hold == "undefined") hold=false;
    if(typeof on == "undefined") on=true;

    var LCLeft=LCTop=0;
    if(on){
      var lcl=document.getElementById("lclogo");
      if(lcl){
        LCLeft=lcl.offsetLeft-440;
        LCTop=lcl.offsetTop;
        document.body.removeChild(lcl);
      }
      if(!document.getElementById("livecharinput")){
        var elem = document.createElement("div");
        elem.id="livecharinput";
        document.body.appendChild(elem);
        var instr="";
        instr += '<form>'; 
        instr += '  <table width="500px" border="1">';
        instr += '  <tr>';
        instr += '    <td id="list_area" style="width:350px;cursor: move;" onmousedown="LCUI.down(event)" onmouseup="LCUI.up(event)">&nbsp;</td>';
        instr += '    <td><table>';
        instr += '    <tr style="background-Color:#aa8">';
        instr += '      <td style="width:0.5em;">&nbsp;</td>';
        instr += '      <td id="ywswitch" style="width:1.1em;cursor: pointer;" onmouseup="LCUI.switchyw()">中</td>';
        instr += '      <td id="pyswitch" style="width:1.1em;cursor: pointer;" onmouseup="LCUI.switchpy()">字</td>';
        instr += '      <td id="fsswitch" style="width:1.1em;cursor: pointer;" onmouseup="LCUI.switchfs()">半</td>';
        instr += '      <td id="pnswitch" style="width:0.7em;padding-left:3px;cursor: pointer;" onmouseup="LCUI.switchpn()">。</td>';
        instr += '      <td id="helplk" title="在线帮助" style="width:0.6em;padding-left:1px;cursor: pointer;" onmouseup="LCUI.help()">?</td>';
        instr += '      <td id="off" title="输入条最小化" style="width:1.1em;padding-left:3px;cursor: pointer;" onmouseup="LIVECHARS.off()">Ｘ</td>';
        instr += '    </tr><tr>';
        instr += '      <td colspan="7" id="code_field" style="width:148px;cursor: move;" onmousedown="LCUI.down(event)" onmouseup="LCUI.up(event)">&nbsp;</td>';
        instr += '    </tr></table>';
        instr += '  </tr>';
        if(!embed_style){
          instr += '<tr><td colspan="2"><fieldset><div>';
          instr += '<textarea style="width: 100%;" rows="5" id="edit_area">';
          instr +=   '在此处输入，然后复制、粘贴到相应位置。';
          instr += '</textarea>';
          instr += '</div></fieldset></td></tr>';
        }
        instr += '  </table>';
        instr += '</form>';
        elem.innerHTML=instr;
        if(LCLeft > 0) elem.style.left=LCLeft + "px";
        if(LCTop > 0) elem.style.top=LCTop + "px";
        if(!embed_style){
          textelem_stack.push(document.getElementById("edit_area"));
          document.getElementById("edit_area").onmouseup=function (e){
            if(!e) e=window.event;
            e.target.value="";
            e.target.onmouseup=null;
            return true;
          };
        }
      }
      for(var j=0;j<textelem_stack.length;j++){
        //_switchyw will turn on keypress&keydown
        addListener(textelem_stack[j], 'keyup', _key_up);
      }
      _switchyw(ywinput);
      _switchpn(pninput);
      _switchfs(fsinput);
      _switchpy(false);
    }else{
      var lcl=document.getElementById("livecharinput");
      _switchyw(true);
      if(lcl){
        LCLeft=lcl.offsetLeft+440;
        LCTop=lcl.offsetTop;
        document.body.removeChild(lcl);
      }
      var elem = document.createElement("div");
      elem.id="lclogo";
      document.body.appendChild(elem);
      elem.style.cursor="move";
      elem.onmousedown=_down;
      elem.onmouseup=_up;
      if(LCLeft > 0) elem.style.left=LCLeft + "px";
      if(LCTop > 0) elem.style.top=LCTop + "px";
      if(hold) elem.title="加载数据中。请稍后双击这里激活活字输入法。";
      else{
        elem.title="双击恢复输入"; 
        elem.ondblclick= _on; 
      }
      clear_all();
    }
  }

  function _addUI(){

    if(document.getElementById('livecharinput')!=null) return;

    var elem = document.createElement("style");
    document.getElementsByTagName('HEAD').item(0).appendChild(elem);
    elem.type="text/css";
    var instr = '#livecharinput\n' +
 '{\n' +
 '  height:auto;\n' +
 '  padding:0px;\n' +
 '  z-index:900001;\n' +
 '  position: fixed;\n' +
 '  _position: absolute;\n' +
 '  top: 550px;\n' +
 '  _top:expression(eval(document.body.scrollTop+550));\n' +
 '  right: 100px;\n' +
 '}\n' +
 '#livecharinput table\n' +
 '{\n' +
 '  border-collapse:collapse;\n' +
 '  color: #000;\n' +
 '  background-Color: #ffa;\n' +
 '  padding:0px;\n' +
 '  margin:0px;\n' +
 '  font-size:12px;\n' +
 '}\n' +
 '#livecharinput fieldset\n' +
 '{\n' +
 '  border:0px;\n' +
 '  margin:0px;\n' +
 '  padding:0px;\n' +
 '}\n' +
 '\n' +
 '#lclogo\n' +
 '{\n' +
 '  border:2px solid black;\n' +
 '  height:69px;\n' +
 '  width:50px;\n' +
 '  z-index:900001;\n' +
 '  position: fixed;\n' +
 '  _position: absolute;\n' +
 '  top: 550px;\n' +
 '  _top:expression(eval(document.body.scrollTop+550));\n' +
 '  right: 100px;\n' +
 '  background:#ac1 url(' + logo + ') top left no-repeat;\n' +
 '}\n' +
 '\n' +
 '#zindexfix\n' +
 '{\n' +
 '  display:none;\n' + /*sorry for IE5*/
 '  display/**/:block;\n' + /*sorry for IE5*/
 '  position:absolute;\n' + /*must have*/
 '  top:0;\n' + /*must have*/
 '  left:0;\n' + /*must have*/
 '  z-index:-1;\n' + /*must have*/
 '  filter:mask();\n' + /*must have*/
 '  width:3000px;\n' + /*must have for any big value*/
 '  height:3000px;\n' + /*must have for any big value*/
 '}'; 
    var rules = document.createTextNode(instr);
    if(elem.styleSheet)
          elem.styleSheet.cssText = rules.nodeValue;
    else elem.appendChild(rules);

    if(ieversion > 5 && ieversion < 8){
      elem = document.createElement("iframe");
      elem.id="zindexfix";
      document.body.appendChild(elem);
      elem.style.width=document.body.clientWidth + 'px';
      elem.style.height=document.body.clientHeight + 'px';
    }

    if (window.opera){
      var eo = document.createElement("input");
      eo.setAttribute('type',"hidden");
      eo.setAttribute('id',"Q");
      eo.setAttribute('value'," ");
      document.body.appendChild(eo);
    }
  }
 

  function getalleditable(w){
    if(typeof w == "undefined" || w==null) w=window;

    /*
    try{
      var divs=w.document.getElementsByTagName('div');
      for(i=0;i<divs.length;i++){
        if(divs[i].contentEditable){
          textelem_stack.push(divs[i]);
        }
      }
    }catch(err){
    }
    */

    try{
      var frms=w.document.getElementsByTagName('iframe');
      for(var i=0;i<frms.length;i++){
        try{
        var f=frms[i];
        var eid=f.id;
        if(w.frames != null && w.frames[eid] != null
        && /on/i.test(w.frames[eid].document.designMode)){
          textelem_stack.push(w.frames[eid].document);
        }
        else if(f.contentWindow!=null && f.contentWindow.document!=null
          && f.contentWindow.document.designMode!=null
          && /on/i.test(f.contentWindow.document.designMode)){
          textelem_stack.push(f.contentWindow.document);
        }
        else if(f.document!=null && f.document.designMode != null
        && /on/i.test(f.document.designMode)){
          textelem_stack.push(f.document);
        }
        else if(f.contentDocument!=null && f.contentDocument.designMode != null
        && /on/i.test(f.contentDocument.designMode)){
          textelem_stack.push(f.contentDocument);
        }
        else if(f.contentWindow!=null && f.contentWindow.document!=null
            && f.contentWindow.document.body.contentEditable){
          textelem_stack.push(f.contentWindow.document);
        }
        }catch(err){
        }
      }
    }catch(err){
    }
    try{
      for(var k=0, df=w.document.forms, klen=df.length; k<klen; k++){
        for(j=0, els=df[k].elements; j<els.length; j++){
          if( /^text/.test( els[j].type ) ) {
            textelem_stack.push(els[j]);
          }
        }
      }
    }catch(err){
      //alert(err.description);
    }
  }

  /****************************************************/
  /* LIVECHARS setup */
  /****************************************************/

  function _on_load(embed,taggedonly,inputbar) {
    if(typeof taggedonly == "undefined") taggedonly=false;
    if(typeof inputbar != "undefined") initOn=inputbar;

    /*
    for(var j=0;j<textelem_stack.length;j++){
      dropListener(textelem_stack[j], 'keydown', _key_down);
      dropListener(textelem_stack[j], 'keypress', _key_press);
      dropListener(textelem_stack[j], 'keyup', _key_up);
    }
    */
    textelem_stack=[];
    if(embed){
      getalleditable();
      if(frames!=null){
        for(var i=0, fr=frames, len=fr.length; i<len; i++){
          getalleditable(fr[i]);
        }
      }
      if(textelem_stack.length<=0) return;
    }
    
    Focused_area = textelem_stack[0];
    //if(document.getElementById('livecharinput')==null)
      _switch_onoff(inputbar);
  }

  /****************************************************/
  /* KeyEvent handelers */
  /****************************************************/
  function _key_down(e) {
    if(!e) e=window.event;
    var key = (e.which) ? e.which : e.keyCode;
    var key_char = String.fromCharCode(key);
    ctrl_keydown = false;
    switch (key) {
      // Backspace
      case 8:
        if (LCIM.code_field() != "") {
          var str = LCIM.code_field();
          LCIM.code_field(str.substr(0, str.length-1));
          LCIM.on_code_change();
          apply_change();
          cancel_key_event = true;
          cancelkey(e);
          return false;
        }
        return true;
      // Tab
      case 9:
        /* overide tab???  */
        return true; 
      // Esc
      case 27:
        clear_all();
        cancel_key_event = true; //Esc会把全部文字删除，故禁止 Esc键 起任何作用。
        cancelkey(e);
        return false;
      // PageUp
      case 33:
      case 57383:// Opera 7.11
      case 188: //,
      case 109: //-
      case 189: //IE -
        return fillPre();
      // PageDown
      case 34:
      case 57384: // Opera 7.11
      case 190: //.
      case 107: //=
      case 187: //IE =
        return fillAft();
        
      // Enter
      case 13:
        if (LCIM.code_field()!="") {
          var targ=e.target?e.target:e.srcElement;
          insert_char( fsinput ?  ToFullShapeLetter(LCIM.code_field()) : LCIM.code_field(), targ);
          clear_all();
          cancel_key_event = true; // don't input the "Enter" key
          cancelkey(e);
          return false;
        }
        return true;
    
      //==F12
      case 123:
      case 57356: // Opera 7.11
        _switchfs();
        cancel_key_event = true;
        cancelkey(e);
        return (false);     
        
      // Ctrl
      case 17:
      case 57402: // Opera 7.11
        ctrl_keydown = true;
        break;
    }

    return(true);
  }

  function _key_press(e) {
    if(!e) e=window.event;
    var key = (e.which) ? e.which : e.keyCode;
    var c = String.fromCharCode(key);

    // Gecko 虽不能于 OnKeyDown 取消键，但它却是在 OnKeyPress 之后才执行键的动作，故于 OnKeyPress 取消键亦无所谓。
    // 但 Opera 在 OnKeyPress 之前已执行键的动作，故仍未能取消 Backspace 等键。  
    // 为什么不连IE也在此取消多一次？即在OnKeyDown取消，在OnKeyPress再取消。因会出现一个问题：快速输入文字时，第一个字会被取消。原因未知。
    
    if (browser == 'NS' || browser == 'OP') {
      if (cancel_key_event) {
        cancel_key_event = false;
        cancelkey(e);
        return false;
      }
    }
      
    if (e.ctrlKey) return true; 

    if((key == 39 || key == 34 || key == 46 || (key >= 113 && key <=123)) 
        && e.which == 0) return true; //FF right & pgdn & delete & F2 - F12
    
    if(/[a-z]/.test(c) || (/'/.test(c) && LCIM.code_field().length > 0)) {
      if (LCIM.code_field().length < code_len) {
        LCIM.code_field(LCIM.code_field() + c);
        LCIM.on_code_change();
        apply_change();
      }
      cancelkey(e);
      return false;
    }

    if (/[0-9 ]/.test(c) && LCIM.code_field() != "") {
      selected(e,c);
      cancelkey(e);
      return false;
    }

    if(c && (fsinput || pninput)){
      var targ=e.target?e.target:e.srcElement;
      if (c == '"') insert_char((left_yinhao2 = !left_yinhao2) ? '“' : '”',targ);
      else if (c == "'") insert_char((left_yinhao2 = !left_yinhao2) ? "‘" :  "’",targ);
      else if (pninput && /[a-zA-Z0-9]/.test(c)){
        if(pninput) insert_char(c,targ);
        else if(fsinput) insert_char(ToFullShapeLetter(c),targ);
      }
      else if (/[^a-zA-Z0-9]/.test(c) 
                && (e.shiftKey || /[;,.-=`\/\\\[\]]/.test(c))
                && ToFullShapeLetter(c)) 
        insert_char(ToFullShapeLetter(c),targ);
      else return true;
      cancelkey(e);
      return false;
    }

    return true;
  }

  function _key_up(e) {
    if(!e) e=window.event;
    var key = (e.which) ? e.which : e.keyCode;
    Focused_area=e.target?e.target:e.srcElement;
    // Ctrl
    if (key == 17 || key == 57402) {
      if (ctrl_keydown == true) {
        _switchyw();
        cancelkey(e);
        return false;
      }
    }
    return true;
  }

  function _switchyw(onoff){
    if(typeof onoff == "undefined") ywinput=!ywinput;
    else ywinput=onoff;
    if(!ywinput){
      for(var j=0;j<textelem_stack.length;j++){
        addListener(textelem_stack[j], 'keydown', _key_down);
        addListener(textelem_stack[j], 'keypress', _key_press);
      }
    }else{
      for(var j=0;j<textelem_stack.length;j++){
        dropListener(textelem_stack[j], 'keydown', _key_down);
        dropListener(textelem_stack[j], 'keypress', _key_press);
        ctrl_keydown = true;
      }
    }

    var elem=document.getElementById("ywswitch");
    if(!elem) return true;
    if(!ywinput){
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="中";
      elem.title="点击或按Ctrl键，切换到英文输入";
    }else{
      elem.style.backgroundColor="#000";
      elem.style.color="#fff";
      elem.innerHTML="英";
      elem.title="点击或按Ctrl键，切换到中文输入";
      clear_all();
    }
    //if(Focused_area) Focused_area.focus();
    return true;
  }

  function _switchpn(onoff){
    if(typeof onoff == "undefined") pninput=!pninput;
    else pninput=onoff;
    var elem=document.getElementById("pnswitch");
    if(!pninput){
      elem.style.backgroundColor="#000";
      elem.style.color="#fff";
      elem.innerHTML=".";
      elem.title="点击，切换到中文标点";
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="。";
      elem.title="点击，切换到英文标点";
    }
    //if(Focused_area) Focused_area.focus();
    return true;
  }

  function _switchfs(onoff){
    if(typeof onoff == "undefined") fsinput=!fsinput;
    else fsinput=onoff;
    var elem=document.getElementById("fsswitch");
    if(fsinput){
      elem.style.backgroundColor="#000";
      elem.style.color="#fff";
      elem.innerHTML="全";
      elem.title="点击，切换到半角输入";
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="半";
      elem.title="点击，切换到全角输入";
    }
    //if(Focused_area) Focused_area.focus();
    return true;
  }

  function _switchpy(onoff){
    if(typeof onoff == "undefined") LCIM.pyinput(!LCIM.pyinputi());
    else LCIM.pyinput(onoff);
    var elem=document.getElementById("pyswitch");
    if(LCIM.pyinput()){
      elem.style.backgroundColor="#000";
      elem.style.color="#fff";
      elem.innerHTML="拼";
      elem.title="点击，输入汉字";
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="字";
      elem.title="点击，输入汉语拼音";
    }
    //if(Focused_area) Focused_area.focus();
    return true;
  }

  /***************************/
  /* Mouse drag&drop support */
  /***************************/

  var dragok = false;
  var d,y=x=dy=dx=0;

  function _move(e){
    if (!e) e = window.event;
    if (dragok){
      var nx=ny=0;
      nx=e.clientX + document.body.scrollLeft;
      ny=e.clientY + document.body.scrollTop;
      d.style.left = dx + nx - x + "px";
      d.style.top  = dy + ny - y + "px";
      return false;
    }
  }

  function _down(e){
    if (!e) e = window.event;
    d=document.getElementById("livecharinput");
    if(!d) d=document.getElementById("lclogo");

    if(window.opera) document.getElementById("Q").focus();

    dragok = true;
    dx = d.offsetLeft;
    dy = d.offsetTop;
    x = e.clientX + document.body.scrollLeft;
    y = e.clientY + document.body.scrollTop;
    document.onmousedown = function () {return false;};
    document.onselectistart = function () {return false;};
    document.ondragstart = function () {return false;};
    document.onmousemove = _move;
    document.onmouseup = _up;
    return false;
  }

  function _up(e){
    dragok = false;
    document.onmousemove = null;
    document.onmouseup = null;
    document.onmousedown = null;
    document.onselectistart = null;
    document.ondragstart = null;
   // if(Focused_area) Focused_area.focus();
  }

  //_on_load(true,false,true);
  /*************************************************/
  /* Public methods */
  /*************************************************/

  return {
    on_load : function(embed,taggedonly,inputbar) { return _on_load(embed,taggedonly,inputbar); },
    addUI : function(){ return _addUI(); },
    move : function(e){ return _move(e); },
    down : function(e){ return _down(e); },
    up : function(e){ return _up(e); },
    key_down : function(e) { return _key_down(e); },
    key_press : function(e) { return _key_press(e); },
    key_up : function(e) { return _key_up(e); },
    switchyw : function(){ if(Focused_area) Focused_area.focus(); return _switchyw(); },
    switchpy : function(){ return _switchpy(); },
    switchfs : function(){ return _switchfs(); },
    switchpn : function(){ return _switchpn(); },
    help : function(){ return window.open('http://www.livechars.com/help.php'); },
    switch_onoff : function(v){ return _switch_onoff(v); },
    version: function() { return _version;}
  };

}();

