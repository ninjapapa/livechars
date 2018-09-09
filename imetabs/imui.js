var LCUI = function() {

  var _version = '1.24';
  var baseurl='http://www.livechars.com/';
  var logo = baseurl + 'images/small_logo.gif';

  var t_help0="在线帮助";
  var t_kill0="输入条最小化";
  var t_logo0="词库加载中，请稍候...";
  var t_logo1="双击恢复输入";
  var t_zhongying0="点击或按Ctrl键，切换到英文输入";
  var t_zhongying1="点击或按Ctrl键，切换到中文输入";
  var t_biaodian0="点击，切换到英文标点";
  var t_biaodian1="点击，切换到中文标点";
  var t_quanjiao0="点击，切换到半角输入";
  var t_quanjiao1="点击，切换到全角输入";
  var t_pinyin0="点击，输入汉语拼音";
  var t_pinyin1="点击，输入汉字";

  var t_en_help0="Online Help";
  var t_en_kill0="Minimize Input Bar";
  var t_en_logo0="Loading Data, Please wait ---";
  var t_en_logo1="Double Click to return to Input Bar";
  var t_en_zhongying0="Click here or hit Ctrl key to switch to English input";
  var t_en_zhongying1="Click here or hit Ctrl key to switch to Chinese input";
  var t_en_biaodian0="Click here to switch to English Punctuation";
  var t_en_biaodian1="Click here to switch to Chinese Punctuation";
  var t_en_quanjiao0="Click here to switch to single-width char";
  var t_en_quanjiao1="Click here to switch to double-width char";
  var t_en_pinyin0="Click here to input HanYu PinYin";
  var t_en_pinyin1="Click here to input Chinese Characters";



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

  var Focused_area;

  var textelem_stack = new Array();

  var taggedonly = false;
  var inputbar = true;
  var note_en = false;

  var ywinput = false;
  var fsinput = false;
  var pninput = true;

  var versioninfo;

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
    if(element.addEventListener) { // Standard
      element.addEventListener(type, expression, false);
      return true;
    } else if(element.attachEvent) { // IE
      element.attachEvent('on' + type, expression);
      return true;
    } else {
      /*
      element['on' + type]=expression;
      */
      return false;
    }
  }

  function dropListener(element, type, expression) {
    if(typeof expression != "function"){
      return;
    }
    if(element.removeEventListener) { // Standard
      element.removeEventListener(type, expression, false);
      return true;
    } else if(element.detachEvent) { // IE
      element.detachEvent('on' + type, expression);
      return true;
    } else {
      //element['on' + type]=null;
      return false;
    }
  }

  function cancelkey(e){
    e.cancelBubble=true;
    if(e.stopPropagation)e.stopPropagation();
    if (e.preventDefault) e.preventDefault();
    else e.returnValue = false;
  }

  function insert_char(str,obj) {
    if (str == "") return;
    if(window.getSelection){
      if(typeof obj.value != "undefined"){
        var selectionStart = obj.selectionStart;
        var selectionEnd = obj.selectionEnd;
        var oldScrollTop = obj.scrollTop; //因Gecko不会滚到该滚的地方。
        var oldScrollHeight = obj.scrollHeight;
        var oldLen = obj.value.length;

        obj.value = obj.value.substring(0, selectionStart) + str + obj.value.substring(selectionEnd);
        obj.selectionStart = obj.selectionEnd = selectionStart + str.length;
        if (obj.value.length == oldLen) {  // 如果用户在后面输入，就直接滚到后
          obj.scrollTop = obj.scrollHeight;
        } else if (obj.scrollHeight > oldScrollHeight) {  // 如果TextArea增加>
          obj.scrollTop = oldScrollTop + obj.scrollHeight - oldScrollHeight;
        } else { // 其它情形就滚回之前的地方
          obj.scrollTop = oldScrollTop;
        }
      }else{
        var f=obj;
        while(f.nodeType != Node.DOCUMENT_NODE) f=f.parentNode;
        f.execCommand('insertHTML',false,str);
      }
    }else if(document.selection){
      var r=document.selection.createRange();
      if(typeof r.text != "undefined"){
        r.text=str;
      }else{
        r.pasteHTML(str);
        r.collapse(false);
      }
      r.select(); 
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
    if(!ich) return;
    var targ=e.target?e.target:e.srcElement;
    insert_char(ich,targ);
    apply_change();
  }

  function fillPre(e){
    if (LCIM.fillPre()){
      cancel_key_event = true;
      apply_change();
      cancelkey(e);
      return false;
    }
    return true;
  }

  function fillAft(e){
    if (LCIM.fillAft()){
      cancel_key_event = true;
      apply_change();
      cancelkey(e);
      return false;
    }
    return true;
  }

  /****************************************************************/
  /* On Off switch and Init fuctions */
  /****************************************************************/
  function add_inputbar(LCLeft,LCTop){
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
    instr += '      <td id="helplk" title="';
    instr +=  note_en?t_en_help0:t_help0;
    instr += '" style="width:0.6em;padding-left:1px;cursor: pointer;" onmouseup="LCUI.help()">?</td>';
    instr += '      <td id="off" title="';
    instr +=  note_en?t_en_kill0:t_kill0;
    instr += '" style="width:1.1em;padding-left:3px;cursor: pointer;" onmouseup="LIVECHARS.off()">Ｘ</td>';
    instr += '    </tr><tr>';
    instr += '      <td colspan="7" id="code_field" style="width:148px;cursor: move;" onmousedown="LCUI.down(event)" onmouseup="LCUI.up(event)">&nbsp;</td>';
    instr += '    </tr></table>';
    instr += '  </tr>';
    instr += '  </table>';
    instr += '</form>';
    elem.innerHTML=instr;
    if(LCLeft > 0) elem.style.left=LCLeft + "px";
    if(LCTop > 0) elem.style.top=LCTop + "px";
    elem.ondblclick=_switch_onoff;
  }

  function add_logo(LCLeft,LCTop,load_data){
    var elem = document.createElement("div");
    elem.id="lclogo";
    document.body.appendChild(elem);
    elem.style.cursor="move";
    elem.onmousedown=_down;
    elem.onmouseup=_up;
    if(LCLeft > 0) elem.style.left=LCLeft + "px";
    if(LCTop > 0) elem.style.top=LCTop + "px";

    if(load_data){
      elem.title=note_en?t_en_logo0:t_logo0;
    }else{
      elem.title=note_en?t_en_logo1:t_logo1;
      elem.ondblclick= _switch_onoff; 
    }
  }

  function _switch_onoff(on){
    if(typeof on == "undefined") on=true;

    var LCLeft=LCTop=0;
    if(on){
      textelem_stack=[];
      getalleditable();
      addListener(document, "keyup", hot_key);
      if(frames){
        for(var i=0, fr=frames, len=fr.length; i<len; i++){
          try{
            addListener(fr[i].document, "keyup", hot_key);
            getalleditable(fr[i]);
          }catch(e){
            //alert(e);
          }
        }
      }
      if(textelem_stack.length<=0) return;
      Focused_area = textelem_stack[0];

      var lcl=document.getElementById("lclogo");
      if(lcl){
        LCLeft=lcl.offsetLeft-440;
        LCTop=lcl.offsetTop;
        document.body.removeChild(lcl);
      }
      if(!document.getElementById("livecharinput")){
        add_inputbar(LCLeft,LCTop);
        if(versioninfo && document.getElementById("helplk")){
          document.getElementById("helplk").title=versioninfo;
        }
      }

      for(var j=0;j<textelem_stack.length;j++){
        //_switchyw will turn on keypress&keydown
        addListener(textelem_stack[j], 'keyup', _key_up);
      }
      _switchyw(false);
      _switchpn(pninput);
      _switchfs(fsinput);
      _switchpy(false);
    }else{
      var lcl=document.getElementById("livecharinput");
      if(lcl){
        if(document.getElementById("helplk")){
          versioninfo=document.getElementById("helplk").title;
        }
        _switchyw(true);
        LCLeft=lcl.offsetLeft+440;
        LCTop=lcl.offsetTop;
        document.body.removeChild(lcl);
      }
      if(!document.getElementById("lclogo")){
        add_logo(LCLeft,LCTop,false);
      }
      clear_all();
    }
  }

  function _addUI(){
    if(!document.getElementById('livecharinput')){
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
  '  top: 450px;\n' +
  '  _top:expression(eval(document.body.scrollTop+450));\n' +
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
  '  top: 450px;\n' +
  '  _top:expression(eval(document.body.scrollTop+450));\n' +
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
    add_logo(0,0,true);
  }

  function getalleditable(w){
    if(!w) w=window;
    if(!w.document || !w.document.getElementsByTagName) return;

    var elem, frms, i, f, eid;
    elem=w.document.getElementsByTagName('div');
    for(i=0;i<elem.length;i++){
      if(elem[i].contentEditable=="true"){
        textelem_stack.push(elem[i]);
      }
    }
    elem=w.document.getElementsByTagName('textarea');
    for(i=0;i<elem.length;i++){
      textelem_stack.push(elem[i]);
    }
    elem=w.document.getElementsByTagName('input');
    for(i=0;i<elem.length;i++){
      textelem_stack.push(elem[i]);
    }


    frms=w.document.getElementsByTagName('iframe');
    for(i=0;i<frms.length;i++){
      f=frms[i];
      try{
        eid=f.id;
        if(w.frames && w.frames[eid] && w.frames[eid].document
        && /on/i.test(w.frames[eid].document.designMode)){
          textelem_stack.push(w.frames[eid].document);
        }else if(f.contentWindow && f.contentWindow.document
          && f.contentWindow.document.designMode
          && /on/i.test(f.contentWindow.document.designMode)){
          textelem_stack.push(f.contentWindow.document);
        }else if(f.document && f.document.designMode
        && /on/i.test(f.document.designMode)){
          textelem_stack.push(f.document);
        }else if(f.contentDocument && f.contentDocument.designMode 
        && /on/i.test(f.contentDocument.designMode)){
          textelem_stack.push(f.contentDocument);
        }else if(f.contentWindow && f.contentWindow.document
            && f.contentWindow.document.body
            && f.contentWindow.document.body.contentEditable=="true"){
          textelem_stack.push(f.contentWindow.document);
        }
      }catch(e){
        //alert(e);
      }
    }

    if(taggedonly){
      for(i=0;i<textelem_stack.length;i++){
        if(!textelem_stack[i].className.match(/^LIVECHARS/)){
          textelem_stack.splice(i,1);
          i--;
        }
      }
    }
  }

  /****************************************************/
  /* LIVECHARS setup */
  /****************************************************/

  var curr_sTop=document.body.scrollTop;
  function _on_load(config){
  //function _on_load(embed,taggedonly,inputbar) {
    if(config && typeof config.taggedonly != "undefined") taggedonly=config.taggedonly;
    if(config && typeof config.inputbar != "undefined") inputbar=config.inputbar;
    if(config && typeof config.note_en != "undefined") note_en=config.note_en;

    _switch_onoff(inputbar);
    curr_sTop=document.body.scrollTop;
    if(browser == 'IE' && curr_sTop){
      addListener(window,"scroll",ie_scroll);
    }
  }

  /****************************************************/
  /* KeyEvent handelers */
  /****************************************************/
  function ie_scroll(e){
    var elem;
    if(document.getElementById("livecharinput")){
      elem=document.getElementById("livecharinput");
    }else if(document.getElementById("lclogo")){
      elem=document.getElementById("lclogo");
    }
    if(elem){
      elem.style.top=(document.body.scrollTop - curr_sTop +elem.offsetTop) + "px";
    }
    curr_sTop=document.body.scrollTop;
  }


  function hot_key(e) {
    if(!e) e=window.event;
    var key = (e.which) ? e.which : e.keyCode;
    //shift+F5
    if((key == 116 || key == 57349) && e.shiftKey){
      _switch_onoff(true);
    }
    return true;
  }

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
        return fillPre(e);
      // PageDown
      case 34:
      case 57384: // Opera 7.11
      case 190: //.
      case 107: //=
      case 61: //= FF Linux
      case 187: //IE =
        return fillAft(e);
        
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
        return false;     
        
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

    if(((key>=37 && key<=40) || key == 34 || key == 46 || (key >= 113 && key <=123)) 
        && e.which == 0) return true; //FF arrows & pgdn & delete & F2 - F12
    
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
    cancel_key_event = false;
    // Ctrl
    if (key == 17 || key == 57402) {
      if (ctrl_keydown == true) {
        _switchyw();
        cancelkey(e);
        return false;
      }
    }
    //Shift + F5
    if((key == 116 || key == 57349) && e.shiftKey){
      _switch_onoff(true);
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
      elem.title=note_en?t_en_zhongying0:t_zhongying0;
    }else{
      elem.style.backgroundColor="#000";
      elem.style.color="#fff";
      elem.innerHTML="英";
      elem.title=note_en?t_en_zhongying1:t_zhongying1;
      clear_all();
    }
    //if(Focused_area) Focused_area.focus();
    return true;
  }

  function _switchpn(onoff){
    if(typeof onoff == "undefined") pninput=!pninput;
    else pninput=onoff;
    var elem=document.getElementById("pnswitch");
    if(pninput){
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="。";
      elem.title=note_en?t_en_biaodian0:t_biaodian0;
    }else{
      elem.style.backgroundColor="#000";
      elem.style.color="#fff";
      elem.innerHTML=".";
      elem.title=note_en?t_en_biaodian1:t_biaodian1;
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
      elem.title=note_en?t_en_quanjiao0:t_quanjiao0;
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="半";
      elem.title=note_en?t_en_quanjiao1:t_quanjiao1;
    }
    //if(Focused_area) Focused_area.focus();
    return true;
  }

  function _switchpy(onoff){
    if(typeof onoff == "undefined") LCIM.pyinput(!LCIM.pyinput());
    else LCIM.pyinput(onoff);
    var elem=document.getElementById("pyswitch");
    if(LCIM.pyinput()){
      elem.style.backgroundColor="#000";
      elem.style.color="#fff";
      elem.innerHTML="拼";
      elem.title=note_en?t_en_pinyin1:t_pinyin1;
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="字";
      elem.title=note_en?t_en_pinyin0:t_pinyin0;
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

  /*************************************************/
  /* Public methods */
  /*************************************************/

  return {
    on_load : function(config) { return _on_load(config); },
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

