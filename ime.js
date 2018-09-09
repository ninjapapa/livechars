var LIVECHARS = function() {

  if (document.all && !document.getElementById) {
    document.getElementById = function(id) {
      return document.all[id];
    }
  }

  var ui_version = '1.04';
  var baseurl='http://www.livechars.com/';
  var syspage = baseurl + 'imetabs/sysph.php?' + ui_version;
  var usrpage = baseurl + 'imetabs/usrph.php?' + ui_version;
  var uphpage = baseurl + 'imetabs/uphpage.php?' + ui_version;
  var logo = baseurl + 'images/small_logo.gif';

  var browser;
  var ieversion;

  var Focused_area=null;
  var embed_style=true;

  var textelem_stack = new Array();

  /******************************************************/
  /* Real IM stuff */
  /******************************************************/
  var code_field = "";
  var candidates = "";

  initOn = true;
  ywinput = false;
  pyinput = false;
  fsinput = false;
  pninput = true;
  left_yinhao1 = false;
  left_yinhao2 = false;
  ctrl_keydown = false;
  right_arrow = false;
  cancel_key_event = false;
  start_mem = -2;
  index_mem = 0;
  start_stack = new Array();
  index_stack = new Array();
  word_list = new Array();
  word_list_PY = new Array();

  phrase_stack = new Array();

  pytab="a°¢°¡ï¹àÄëçºÇß¹ai°®°¦°¥°£°«°¤°§°¬°­àÈ°©°¨íÁ°¯ö°ïÍ°ªæÈè¨àÉêÓÑÂŞßÚÀan°´°²°¸°¶°µ°±°³°·èñâÖï§°°ÚÏ÷ö³§ÛûŞîáí¹ãğÆang°º°»°¹ëçao°Â°¼°¾°Ä°À°ÁÛêæÁòüá®°ÃŞÖà»÷¡æññúéáÏù°½öË÷éåÛ°¿âÚba°Ñ°Ë°É°Ö°Í°Õ°Î°Ó°Ç°Ô°Ò°Ğ°È°Ì°Ï°ÅîÙôÎ°Ê°ÆöÑá±÷ÉÜØå±İÃ²®îàÅÃèËbai°Ù°×°Ú°Ü°İ°ØêşŞã°Ş°ÛßÂ²®ban°å°ë°ì°à°æ°á°ã°è°ß°â°é°ê°ç°ä°íîÓÛàñ­ñ£ô²Úæãİbang°ô°ï°î°ö°ğ°ó°õ°÷°ñ°ø°ò°ùäºİòÅÔê´ë«bao±¨°ü±£±¡±§±¦±¥ÅÙ±¬±©°û±¤±¢±«°ı°ú±ªİá°şğ±ìÒÆØÆÙõÀÙèöµÅÚå²æßñÙbei±»±¶±±±³±¸±­±²±´±®±°±¯ñØ±µ±ºßÂã£÷¹ØÃöÍíÕğÇİíÚé±·Úı±Û±¹ÙÂñÔİÉben±¾±½±¼±¿êÚÛÎÛĞï¼º»Ìåbeng±Ã±À±Á±Â±Äê´±ÅàÔ°öbi±È±Ø±Ú±Ê±Û±Õ±Æ±Ë±Ü±Ï±×±Ç±Ì±Ò±ÙßÁ±ÎîéÙÂ±ÉßÙ±Ğ±Ôèµ±ÓØ°æ¾±Öïõó÷óë±İåöÜêóÙî¯áùñÔİ©æÔääô°ôÅ÷ÂÃÚÃØå¨ŞµİÉ±Ñ·÷õÏâØã¹åş±ÍêÚÛıî¢ÜÅ°Şò·bian±ã±ß±ä±à±é±æ±ç±â±Ş±á±èØÒìÔÛÍãê±åçÂöıí¾ÜĞâíóÖíÜòùñÛñ¹biao±í±ê±ë÷§±ìñÑì­æ»ïÚè¼ì®÷Ôì©ñ¦ïğæôî¼àÑbie±ğ±ï±ñõ¿±îbin±ö±õ±ó±ò÷Ş±ô±÷éëáÙë÷çÍçãÙÏïÙéÄ÷Æbing²¢²¡±ø±û±ù±ş±ú±ıÙ÷±üŞğÆÁÚûğÚéÄbo²¨±¡²®²¥²¦°ş²©²´²¬²µ²£²ª²±²°²¯²«²§ô¤²­õËà£âÄ²³²²îàë¢²·õÛ²¤íçÙñÆÇğ¾éŞØÃêşõÀ°ã°Ø°×Şµİ©ÆÂbu²»²¿²¼²½²¹²¶²·²¾îĞ²ºîß²À²¸ß²±¤åÍõ³êÎê³ÆÒca²Áàêíå²ğ²ëcai²Å²É²Ë²Æ²Ä²Ê²Ã²Â²È²Ì²Çcan²Ğ²Ï²Î²Ò²ÍôÓ²Ó²Ñè²²ôæî÷õåîcang²Ø²Ö²Ô²ÕØ÷²×cao²İ²Û²Ü²Ùäî²Úô½àĞÜ³ó©ce²à²â²á²ß²ŞØÖâücená¯ä¹²Îceng²ãÔø²äàácha²î²é²è²å²ì²ç²æè¾²í²ê²ïÉ²é¶éßé«ãâàêæ±²ëâªñÃÔûïÊïïâÇÀ¯chai²ñ²ğ²î²òîÎğûÙ­ò²chan²ú²ô²ø²ù²ü²óìøäı²ö²õ²÷ÚÆó¸âãâÜ²ûåñæöïâêèõğå¤æ¿ÙæİÛµ¥åîchang³¤³§³£³¡³ª³¦³¢²ı³¥³«³©³¨æ½êÆ²şØöãÑë©öğã®ÌÈÜÉÉÑİÅÛËáäâêæÏchao³¯³¬³´³±³®³­³³³²³°êËñéâ÷ìÌ´Â½Ëche³µ³·³¶³¹³¸³ºíºÛå³ßåøÕŞchen³Â³¼³¾³Á³Ä³¿³ÃÚß³½å·³ÆàÁŞÓè¡³À³ÓÚÈö³³»é´í×Ø÷ÉòÉïcheng³É³Æ³Ç³Ê³Ë³Ì³ĞÊ¢³Å³Ï³È³Ó³Î³ÍØ©³ÑîõòÉîª³ÒèßëóñÎÛôîñèÇõ¨êÉàáä¥chi³Ô³ß³Ö³İ³Ø³Ù³à³á³Û³â³Õë·³Ú³ÜßêâÁàÍ³×ó×³Ş³ãß³ñİ÷Îôù¶ßò¿ó¤ÙÑÜİÛæõØí÷æÊÛ­ğ·óøà´Ü¯ñ¡áÜíôõ½ÀëŞõ²çğächong³æ³åÖØ³ä³ç³èï¥ã¿ô©ô¾âçÖÖÓ¿Üû¼ëchou³é³ô³ï³î³ó³ğ³í³ñ³ò³ì³ê³ëñ¬Ù±ã°àüöÅäåöæchu³ö´¦³ı³õ´¥³ş³û´¢³úĞó´¡³ø÷í´£³÷³üñÒç©âğÛ»èÆ´¤èúãÀ³ùåøØ¡éËòÜõéÚ°chuai´§õßà¨àÜŞõëúchuan´¬´«´©´¨´®´­ë°´ªô­îËâ¶çİå×ŞÅchuang´²´°´³´´´¯´±âëÇÀ×²´Ñê¨chui´µ´¸´¹´·´¶é³×µÚïé¢ç¶chun´º´¿´¼´½´À´»´¾òíğÈİ»chuo´Áà¨ê¡´ÂöºõÖci´Ë´Î´Ê´Ç´Å´É´Ì´Í´Æ´Ã´È´ÄìôßÚôÙËÅğËôÒÜë×È²î²Şòºcong´Ó´Ô´Ğ´Ï´Ò´ÑÜÊäÈçıèÈæõè®cou´Õëíé¨ê£cu´Ö´Ù´×´Øõ¾â§×äõíİıáŞéãõ¡´íÇ÷È¤éÊïßcuan´Û´ÜÙàß¥ÔÜ´Úìàïécui´ä´ß´à´Ş´İ´â´ãİÍßıéÁ´áË¥ö¿è­ã²ë¥ÇÁcun´å´æ´çââñå¶×cuo´í´êï±´ë´é´ì´èïóõãáÏëâõºğîØÈğûda´ó´ò´ï´ğ´îßÕàªóÎâòñ×ŞÇí³ğã´ñ÷²æ§÷°Ëşîãdai´ø´ú´ı´ü´÷´ô´û´ó´ù´şá·µ¡ß°÷ìÜ¤´õ´öåÊß¾çªçéæædanµ«µ¥µªµ­µ°µ£µ¯µ¤µ¨µ©µ¢µ§Ê¯ééµ®à¢µ¬íñóìİÌØéå£ğ÷êæµ¦ÙÙñõÚàğã¾®îãdangµ±µ³µ²µµµ´ñÉîõÛÊå´ÚÔí¸İĞdaoµ½µÀµ¹µ¶µ¼µºµ¾µÁë®µ·µ¸µ¿ß¶µ»âáìâôîàüdeµÄµÃµØµÂµ×ï½deiµÃdengµÈµÆµÇµÅµËµÉàâµÊê­íãô£ïëáØ³ÎdiµØµÚµÍµ×µÛµĞµÎµÜµÖµİµÌµÙµÑµÄµÓµÒµÏíÚÚ®æ·µŞµÕàÖØµÛ¡ÚĞÙáíÆèÜµÔôÆ÷¾Ìáİ¶íûé¦êëïáÛæÑ¿êûìØdiaàÇdianµãµçµæµêµäµâµîµáµßµèµàáÛµéµíµìô¡µåõÚñ²µëñ°ÚçÛãîäçèØ¼diaoµôµ÷µõµñµïµöµóµğöôµòõõï¢Äñîöğ·dieµùµşµüµøµûµúöøµığ¬Ûìñóà©ëºŞéõŞÜ¦õÚding¶¨¶¥¶¡¶©¶¤¶§¶¢¶¦¶£ñôëëçàà¤ğÛîúíÖôúØêî®diu¶ªîûdong¶¯¶«¶¬¶´¶®¶³¶­¶°ë±ßË¶²á¼íÏëË¶±ëØâºÛíá´ğ´dou¶¼¶·¶¹¶¶¶¸¶ºñ¼¶µİúóû¶»ò½¶Ádu¶È¶¼¶Á¶À¶Å¶¾¶Â¶½¶É¶Ç¶Æ¶ÄóÆ¶Ãó¼äÂ¶Êë¹à½¶¿èü÷ò÷ÇÜ¶¶ÙôîíØduan¶Î¶Ë¶Ì¶Ï¶Í¶ĞìÑé²óı×¨dui¶Ô¶Ó¶Ñ¶ÒíÔí¡¶Øïæí­dun¶Ö¶Ù¶×¶Ø¶Û¶Õ¶ÜìÀ¶İíïïæ¶Úãçíâí»õ»duo¶à¶á¶ä¶ã¶âõâ¶ç¶æ¶é¶è¶Ş¶åÍÔîìßÍèŞãõñÖãûßáç¶¶ß¶Èe¶î¶ñ¶í¶ï¶ö¶ì¶ê¶õ¶ğÅ¶ßÀ¶òåí¶ó¶ëãµïÉëñ¶ôİàéîÛÑØ¬öùò¦ğÊï°æ¹ãÕÚÌİ­ÜÃ°¢ÑÆòÂï¹ÚÀíÒeiÚÀenàÅ¶÷İìŞôßíer¶ø¶ş¶ù¶û¶ú¶ü·¡öÜÙ¦ğ¹åÇçíîï¶ıfa·¨·¢·§·¥·£·¦·¤ÛÒ·©íÀfan·´·²·­·¸·¹·¶·±·µ·¬·º·«·³·ª···°·¯·®ŞÀŞ¬èóî²á¦áëìÜë¶õìÈ®fang·Å·½·À·¿·¼·Ä·Ã·ÂöĞ·»·ÁèÊîÕô³áİÚú·¾ØÎfei·Ç·É·Ñ·Ï·Ê·Ë·Î·Æ·Ğåúö­·Íáô·ÈìéäÇòãç³ëèóõöîôä·ÌÜÀé¼ïĞì³ã­ğòâöÅáíÉfen·Ö·İ·Û·à·Ó·Ü·Ş·ß·×·Ø·Ò·ÙÙÇö÷·Õ·Úèû÷÷å¯·Ôçãfeng·ç·â·ì·å·î·ï·ë·á·è·æ·ä·êÙº·í·ã·éí¿ããßôÛºİ×fo·ğfou·ñó¾î·fu¸±¸´¸º¸®·ò¸»·ù¸½·ş¸¶¸£¸¸·ü¸¡¸¨·ö¸¯¸µ¸°¸³¸¹·ú¸²·ğ¸¥¸¾¸§¸©·û¸¦íÉ¸ª·÷·ı¸«·õ·ó¸¿Û®æÚ¸··ô·øôïåõìğğ¥ÙìöÖİÊõÆèõç¦¸¼¸Àíêòğİ³õÃïûæâíëß»á¥Ùëò¶òİç¨êç¸¢ÜŞ¸­âöî·¸¤ŞÔöûÜ½òóäæ¸¬ÜòÜÀß¼ÆÎÊĞga¸Â¸Á¼ĞîÅæÙÙ¤æØÔşê¸¿§¸ìŞÎßÈ¼Ûgai¸Ã¸Ä¸Ç¸Æ¸ÅØ¤Úë¸ÈÛò½æêàê®ëÜgan¸É¸Ë¸Ğ¸Ï¸Ò¸Ñ¸Ê¸Î¸Ì¸Ó¸ÍôûğáÜÕß¦í·ç¤Ûáä÷äÆêºÇ¬éÏãïŞÏgang¸Ö¸Õ¸×¸Ù¸Û¸Ú¸Ü¸Ô¸Ø¿¸óàî¸í°ô­gao¸ß¸ã¸æ¸å¸âê½¸á¸àï¯¸İÚ¾çÉ¸ŞÛ¬Øº¸äéÂŞ»éÀğ©½Áge¸ö¸÷¸ñ¸ô¸è¸î¸ç¸ï¸õ¸ê¸é¸ì¸ó¿©¸ëïÓ¸ğëõÜªíÑÛÁô´÷ÀàÃºÏæüë¡ØîÒÙñËÛÙ¸ò¸íò´Øªò¢¸ÇºÊgei¸øgen¸ú¸ùßçİ¢Ø¨ôŞgeng¸ü¸û¹£¸ı¹¢¸ş¹¡âÙßì¾±ç®öáØ¨¾¬gong¹²¹¤¹«¹©¹¦¹¥¹­¹¬¹¯¹±¹°¹§¹ªö¡¹¨¹®ëÅçîºìò¼ŞÃ¿ó¿¸¸Øgou¹»¹µ¹·¹³¹¹¹º¹´¹¸¹¶æÅçÃóÑì°ØşèÛêí÷¸óô¾äá¸Ú¸åÜñğgu¹Ê¹Å¹É¹Ì¹È¹Ç¹Ä¹Ë¹À¹Â¹Í¹ÃîÜ¹¿ïÀ¹¾ì±ğóöñ¼Öî­¹½¹¼ğÀÚ¬¹ÆİÔ¹ÁáÄõıòÁëûêôğ³éïßÉî¹êöØÅ÷½ãéôşèô¼Ò¸æ»¬Í¹gua¹Ò¹Î¹Ï¹ÑßÉ¹ÓØÔ¹ĞÚ´èéëÒğ»À¨ÎÏñøÊÊëáguai¹Ö¹Õ¹ÔŞâguan¹Ü¹Ù¹Ø¹Û¹İ¹à¹Ş¹Ú¹á¹ßîÂ¹×ÙÄŞèäÊ÷¤İ¸ğÙñæÂÚÂãëäguang¹â¹ã¹äßÛë×èæáîgui¹é¹ó¹è¹æ¹í¹ğ¹ì¹ò¹ê¹ñ¹î¹å¹çöÙ÷¬¹ë¹ïèíóşêĞğ§å³È²ØĞØÛ¹ôêÁæ£âÑ¿şãígun¹ö¹÷¹õÙòíŞöççµguo¹ı¹ú¹û¹ø¹ù¹üßÃâ£ÎĞòåÙåñøé¤ë½áÆÛöòäàşŞâï¾ha¹şîş¸òÏºhai»¹º£º¦º¢º¤àË¿Èº¥º§º¡õ°ºÙëÜò¤hanº¬ººº°º«º®º¸º¹ºµº¯º±º´ìÊº¶º²º­º©ò¥º·º³òÀ÷ıº¨å«ñüÚõãÛİÕêÏŞşºªºÍò¢¸É³§áíhangĞĞº½º¼º»ç¬ñşãì¿ÔÏïèìôû°¹haoºÃºÅºÁºÄºÀºÂºÆå°İïàãº¾ğ©Ş¶º¿òºàÆ¸äê»å©ºÑò«òÂºÔº×heºÍºÏºÎºÓºËºÈºÇºÖºÉºĞºÕºØºÌàÀò¢ÛÖº×ºÔÛÀãØêÂºÑÏÅîÁºÒÚ­ºÊôçæü¸ÇºÂĞ«à¾heiºÚºÙàËhenºÜºŞºİºÛhengºáºãºßºâºàçñèìŞ¿ĞĞç¬hongºìºéºæºäºçºåºèºêºëÚ§ãüÙäÙêŞ°Ş®İ¦ãÈ¹¯´¥houºóºñºòºîºíºğºïÜ©ö×ááô×÷¿ğúåËóóhu»§»¡»¥ºşºõºú»¢ºôºö»¤ºı»¦ºøºüõú÷½Ùüìæìèìï»£éõìÎä°ßüã±óËäïìÃâïì²õ­àñº÷éÎğ×çúºûğ­ò®ğÉºùâ©á²ºËğÀÏ·ºÍĞíhua»ª»¯»¨»°»­»®»¬èë»©í¹îüæè»«»íhuai»µ»³»´»±õ×»²»®»°Ø«huan»»»¹»·»¼»º»¶»À»½ä½»Â»ÃÛ¨»¸öéß§åÕ»¿÷ßäñà÷Û¼ïÌ»¾çÙå¾»ÁİÈâµä¡ÍîÛùhuang»Æ»Ê»Ä»É»Å»Î»È»Ì»Ñ»Ï»Ç»Íöü»ĞäêåØëÁóòäÒáåè«Úòó¨ñ¥»Ëhui»á»Ø»Ò»İ»Ù»Ó»Ô»ã»æ»Û»ÚŞ¥åç»Õ»Ö»à»ß»äèíí£»âà¹ä«»Ş»Üä§êÍÚ¶»åßÔÜîó³ßÜçÀÀ£çõÜö»×ãÄò³÷â»²¶é³æËëhun»ì»é»è»ê»ë»çäããÔÚ»âÆçõ¹õhuo»ò»î»ğ»õ»ï»ñ»ö»ô»ó»íïìïÁñëºÍàëŞ½â·ó¶ß«îØØåÛÖ»¤í¹¹èji¼°¼´¼¸»ú¼«¼È¼¶¼Ç»ı»ù¼¦¼¯¼Æ¼Á¼±¼¾¼Ì¼·¼Í»÷¼Ä¼Ã¼Ê¼®¼º¼£¼ªÆæ¼¤¼­Ø½¼¼¼¨¼À¼²¼¡¼¢Ïµ¼½¼¹¼¿ñ¤¼¬¼É¼Å¼§»ûóÅêå÷ä»ü¼³¼©êªÙÊ¼µß´ôß¼Ë»ş¼»æ÷Ø¢¼¥ïúä©öêŞáê«ö«ğ¢õÒßóåì¸øßÒî¿½åí¶÷Ùöİé®¼ÂéêçÜáÕÛÔÆä»øÙ¥ØŞŞªİğì´Æëò±ÜùØÀê÷Ü¸õÕá§ßâÜÁêéÚµÆÚóÇçá¸ï³Ô¾ÓÆå½à½ÕâÑğİÆïjia¼Ò¼Ó¼×¼Ü¼Û¼Ù¼Ğ¼Ø¼Ñ¼İ¼Ş¼Ö¼Î¼Õí¢¼Ô¼ÚïØåÈ¼ÏîòáµëÎä¤Û£ğèê©ğıİçôÂçìóÕõÊñÊòÌÇÑØÅĞ®Ù¤ÏÄîşjian¼ä¼û¼ş¼õ½¨½¥¼î¼â¼ò¼æ¼ì¼ç¼ô¼ü½¡¼á½£¼à¼ø¼ï½¢¼í¼ë¼ú¼ı¼ğ¼é¼å½¦¼ñê¯¼ù½§¼ãåÀ¼ßÚÉ¼ö¼óïµ½¤¼÷¼èàîôåêùëìóÈöä¼êäÕèÅ÷µİóÇ³ÙÔçÌñĞõÂë¦Şöê§ÛÈİÑé¥å¿íúêğÚÙğÏõİÏĞjiang½«½²½­½µ½ª½¯½¬½±½´½©½®½³½°ç­ñğêñä®ôİçÖíäÇ¿Üüôøºçjiao½Ï½Ğ½Ç½»½Å½Ì½º½½½¹½Ê½¸½É¾õ½Ñ½Î½Á½¿½Ë½À½Ã½ÆĞ£½¾½ÂŞØÙ®½¼½·½È½ÍöŞ½¶òÔáèäĞğ¨æ¯æùğÔõÓÜúôéá½ÙÕàİÜ´õ´ë¸½Äjie½â½Ú½Ó½á½×½Ô½ç½è½ì½Ø½Ö½ã½é½Ò½Ü½à½ß½İ½Ù½ä½ÕàµôÉèîíÙò¡¿¬¼Ò½æ½ëÚµ½ŞğÜ¼ÛÚ¦æ¼ò»Ş×à®½Û÷ºöÚ½êæİÙÊ½åæ¢ÙÉèÎß¢ßÒjin½ø½ü½ğ½ï½ñ½ô½ö¾¡½ş½ú¾¢½û½î½ò½í½õ½÷èªêî½óñÆ½ùñæ½ıİ£æ¡âËİÀÚáéÈàäêáçÆâÛîÄjing¾­¾¶¾«¾®¾¹¾³¾©¾»¾²¾¥¾ª¾´¾µ¾°¾±¾§¾¯¾º¾£ëæ¾¦¾¢ØÙëÖ¾¨¾¸ÙÓö¦İ¼â°æº¾·ìºã½¾¬åòëÂãşÚå¾¤åÉ¸ü÷ôóäÌşjiong¾½åÄ¾¼ìçêÁ‡åjiu¾Í¾Å¾É¾Æ¾Ã¾È¾¿ôñ¾À¾¾¾Ë¾Çğ¯ÙÖ¾Ê¾Âèê¾Ì¾Îà±¾ÄğÕ¾ÁãÎ÷İèÑõíäĞju¾İ¾Ö¾ä¾Ù¾à¾ß¾ç¾Û¾Ó¾Õ¾Ş¾Ø¾â¾ã½Û¾Ü¾×¾åîÒ¾Ğ¾Ï¾Ôõ¶åáñÕÚªéÙ¾áé§¾Òï¸ÇÒ³µ¾æöÄåğŞäöÂè¢ö´¾ÚÜÚ÷¶¾ÑÜìé·ñÀì«é°ÙÆôòêøõáÜÄ¹ñèÛ×ãÇùİÏjuan¾í¾è¾ê¾î¾ëÈ¦¾ìïÔ¾éáúèğöÁîÃÛ²ä¸ïÃÉíjue¾ö¾ø¾õ¾ò¾ôàÙ¾ğŞ§¾ï½ÀØÊ¾ó¾÷ïãçåèöõê¾ñáÈõûâ±ìßÛÇÚÜéÓØãæŞ½Åàå½Çàµó½÷¬È²Ü¥jun¾ü¾ù¾ı¾ú¿¤¿¡¾ş¿¥¿¢¿£¾û÷åŞÜñä¹êöÁóŞŞ¦¾½ka¿¨¿¦ßÇØûëÌ¿§¿©¹ş¿È÷Äkai¿ª¿­¿«¿¬¿®âıîøï´ØÜâéÛîïÇİÜ¿Èí¬Æñkan¿´¿³¿¯¿±¿°¿²Ù©ê¬ãÛ¼÷î«íèÇ¶İ¨ÏİÛÉkang¿¹¿µ¿¸¿»¿·îÖØø¿¶ãÊ¿ºkao¿¿¿¼¿¾¿½èàêûîíåêke¿É¿Æ¿Ç¿Ì¿Î¿Å¿Í¿Ã¿Ë¿Â¿Á¿È¿Ä¿ÊäÛë´î§ò¤éğà¾ñ½ï¾¿Àã¡ğâá³òÂç¼ïıîİòòæìçæ÷ÁºÇåí¿¦ÛÁken¿Ï¿Ñ¿Ò¿ĞñÌö¸keng¿Ó¿Ôï¬kong¿×¿Õ¿Ö¿ØÙÅáÇóíkou¿Ú¿ÛóØ¿Üßµ¿ÙíîŞ¢ÜÒØşku¿à¿Ş¿â¿İ¿ã¿á¿ßØÚ÷¼Ü¥à·ç«¿ækua¿ç¿å¿ä¿è¿æÙ¨kuai¿ì¿é¿êØáëÚÛ¦¿ëáößàä«»áèí¹ôßÃkuan¿í¿î÷Åkuang¿ó¿ò¿ö¿ñ¿ğ¿õ¿ôæşÚ¿¿ïÚ÷ŞÅêÜÛÛÚ²ßÑkui¿÷À£¿ı¿úÀ¡¿ü¿ûà°¿øÀ¢Ùçã´ŞñØÑÚóåÓã¦ñùòñØ¸êÒİŞõÍóñî¥¿ùà­¿şóåkunÀ¥À§À¦À¤õ«çûãÍï¿ã§÷ÕöïºøkuoÀ©À«À¨ÀªÊÊòÒèélaÀ­À²À¯À°À±Âäñ®ğøååê¹ØİíÇÀ¬À®laiÀ´ÀµÀ³ñ®ïªáâäşêãô¥áÁíùäµlanÀ¶À¼ÀÃÀ¸ÀºÀ¹ÀÄÀÂÀÀÀÁá°À¿À½ïçî½ìµé­À»À·ñÜäíÀ¾langÀËÀÇÀÉÀÊÀÈà¥ÀÅãÏÀÆï¶òëİ¹ïüİõlaoÀÏÀÍÀÎÀÌÀÔßëÀĞÀÓõ²ÀÑğìÀÒï©ÂäîîñìáÀèáÁÊÂçleÁËÀÖÀÕÀß÷¦ØìàÏãîß·À¬ÛøŞÛleiÀàÀÛÀ×ÀáÀßÀİÀØÀÕÀÙÀŞõªàÏÀÚÙúæĞñçéÛÀÜÚ³çĞäğlengÀäÀâÀãã¶Ü¨ÁâliÀïÁ¦Á¢ÀıÀîÀûÀëÀíÁ£ÀñÁ¨ÀúÀçÀöÀôÁ¥ÀèÀøÀåÀæÀğï®ó»Á¡À÷ÀõÁ¤éöÀùÀéèİÙµÀêôÏÛªæËæêõ·İ°÷¯Ù³òÃŞ¼óÒíÂäàîºÀüõÈóöö¨ğ¿òÛ÷óà¬Àóî¾çÊß¿İñÀşìåÀìèÀÁ§å¢áûæ²ğİÛŞğßÜÂöâÀòà¦åÎØªã¦êóîÇíÇliaÁ©lianÁ¬Á³ÁªÁ·Á´Á¶Á®Á«Á±öãÁ¯ÁµÁ­Á²é¬Á°ì¡äòçöó¹ñÏéçŞÆİüå¥ñÍì¢İ²liangÁ½Á¿ÁºÁ¸ÁÁÁ¾Á©Á¼Á¹Á»ÁÂÁÀõÔé£÷ËÜ®Ùûö¦İ¹liaoÁÏÁÉÁËÁÅÁÄÁÈÁÆÁÃàÚÁÎÁÇÁÌå¼Ş¤îÉÁÍÁÊâ²ğÓçÔŞÍğÒlieÁĞÁÑÁÒÁÓßÖÁÔÙı÷àõñä£ôóÛøŞælinÁÖÁ×ÁÚÁÙÁÜÁÛÁÕÁàÁØâŞÁİéİî¬ÁßãÁÁŞßøåàôÔõïá×÷ëì¢ê¥İşÂélingÁíÁãÁîÁìÁäÁéÁêÁåÁáÁëÁèç±ÁâãööìÁæñöèÚÀâôáèùÜßßÊÛ¹òÈê²àòÁçÁàÁ¯liuÁùÁ÷ÁôÁõÁòÁïÁøÁóÁöåŞç¸ä¯Â½öÌìÖğÒÁñïÖæòÂµì¼ï³Áğ±ÃÃ­±¥ÛÏlongÁúÁıÂ¡Â¢Â£ÛâÁûÂ¤ÁşÅªíÃñªãñÜ×ÁüëÊèĞççlouÂ¥Â©Â¶Â§Â¨à¶ÂªñïÂ¦ïÎáĞİä÷Ãò÷ğüÙÍluÂ·Â¯Â½Â³Â¼Â¶Â¬Â²Â«Â»Â¹Â±Â®Â°Â´Â­ÂµöÔéÖÂÌïåÂ¾ß£ãòÛääõè´Â¸óüğØÂºê¤åÖëÍèÓôµààğµëªéñäËéûŞ¤ÁùÂÈ½İluanÂÒÂÑèïÂÍÂĞöÇÙõæ®ÂÏğ½ÂÎlueÂÔÂÓï²ÁÌlunÂÛÂÖÂ×ÂØÂÕÂÚÂÙàğluoÂäÂŞÂåÂİÂçÂÜÂàÂæÂáÂãÂâÂßíÑëáÙÀŞÛ¿©ñ§ŞûöÃé¡ïİÜıäğÙùãøâ¤çóÀÓõÈÀÒÀÆñËlvÂÊÂÁÂÉÂÌÂÈÂËÂÀÂÇÂÃÂ¿ÂÅÂÂÂÄÂÆŞÛãÌéµñÚëöïùÙÍÂ¦maÂğÂíÂèÂïÂîÂéÂëÄ¨áïÂìè¿Âê÷áó¡Ä¦Ã´æÖßémaiÂòÂôÂóÂñÂõÂößéİ¤Û½ö²manÂúÂıÂüÂùÂ÷ÂşÂû÷©òıá£çÏÃ¡Ü¬÷´ÂøïÜò©ì×ÂñõçmangÃ¦Ã¢Ã¤Ã£Ã§òşÃ¥ÚøäİíËmaoÃ«Ã°Ã±Ã³Ã¯ÃªÃ¨Ã²Ã©Ã¬Ã­í®Ã®÷Öá¹ì¸î¦êóè£ã÷Üâë£òúó±êÄÙómeÃ´÷ámeiÃ¿ÃÀÃ»ÃºÃ·Ã¸ÃÃÃ¾Ã¹Ã¶Ã¼é¹Ã½÷ÈÃÄÃÁÃÂİ®ïÑÃµñÇä¼ÃÕâ­áÒÃÓğÌäØè£menÃÇÃÅÃÆìËŞÑí¯îÍmengÃÉÃÎÃÍÃÏÃÌÃËÃÈòµÛÂó·íæŞ«òìëüÃÊô¿İùô»ãÂÃ¥miÃ×ÃÜÃØÃÔÃİÃÛÃĞÃÖÃÙÃÕÃÑÃÚÃÓÃÒëßåôØÂ÷çôÍà×ŞÂåµâ¨ãèßä÷ãìòÚ×ôémianÃæÃŞÃâÃåÃßÃàÃáÃãííÃäãæö¼äÅäÏëï¸©miaoÃçÃëÃíÃîÃèÃìçÑÃêåãÃéíµç¿íğèÂğÅß÷èÃmieÃğÃïóúßãóºØ¿ØÂminÃñÃôÃöÃóÃòãÉçÅÃõíªçëçä÷ªãıáºÜåö¼äÅmingÃûÃ÷ÃüÃùÃúÜøÚ¤î¨Ãøäéõ¤êÔmiuÃıçÑmoÄ©Ä£Ä¥Ä¤ÃşÄªÄ¨Ä«Ã»Ä¬Ä¦Ä®Ä­Ä§İëÄ¢ÚÓâÉÄ°ñòÄ¡éâºÙï÷ïÒÎŞõøñ¢õöÜÔæÆÍòæÖÄ¯Ã°÷áÂöºÑÃ´ÃÃßémouÄ³Ä±íøÄ²ßèöÊòÖÙ°çÑòúÄµmuÄ¾Ä¶Ä¿Ä¸Ä»Ä·ÄÂÄ¹Ä£ÄÁîâÄ¼Ä½ÄºÄÀÄ´ãåÄµß¼ÛéÜÙØïë¤Ä²ÀÑğÍnaÄÇÄÃÄÄÄÆÄÉÄÅÄÈŞàïÕëÇñÄÄÏÚ«naiÄËÄÍÄÌÄÎÄÊİÁØ¾ÜµèÍÙ¦ÄÄæØnanÄÏÄÑÄĞàïéªà«òïôöëîàînangÄÒêÙàìß­âÎnaoÄÔÄÖÄÓÄÕîóÄ×Ø«ßÎÛñíĞòÍâ®è§èãneÄØÚ«ÄÅÄÄÄÇneiÄÚÄÙÄÄÄÇnenÄÛí¥nengÄÜÅ¢ÜÑniÄãÄàÄáÄâÄæÄØÄİÄåÄßÄŞÄäîêÄçíşêÇöòÛèÙ£â¥ì»âõìònianÄêÄîğ¤ÄíÄëØ¥ÄéÄìöÓÄèéıÛşÕ·öóÕ³niangÄïÄğniaoÄñÄòëåÜàôÁæÕÄçnieÄøÄóÄùŞÁÄôÄõÄöõæô«Úíà¿Ä÷ò¨éŞØ¿ninÄúí¥ningÄıÄşÅ¡ÄüÅ¢Äûå¸ßÌñ÷ØúniuÅ£Å¤Å¦æ¤Å¥ŞÖâîáğnongÅ©ÅªÅ¨Å§Ù¯ŞÃßænouññßænuÅ¬Å­Å«åóæÛæÀæåßÎnuanÅ¯nueÅ°Å±ÚÊnuoÅµÅ²ßöÅ³Å´ÙĞï»ŞùÄÈnvÅ®îÏí¤ô¬âîoÅ¶àŞà¸ouÅ·Å¼ÅºÅ¹Å½ñîÅ»Å¸ê±Ú©âæÇøàŞpaÅÂÅÀ°Ò°ÇÅÁÅ¿Å¾èËóáİâÅÉÅÃîÙpaiÅÉÅÅÅÄÅÆÆÈİåÙ½ÅÇßßÅÈßÉÅ¾panÅÌÅĞÅÎÅÑÅÊÅËÅÏÅÍÅÖó´ãİãúõçŞÕñáñÈ°ã°â·¬ÅöpangÅÔÅÖÅÓÅÒÅÕó¦äèåÌ°õáİİò°òpaoÅÜÅİÅÚÅ×ÅÙÅÛáóğåëãâÒŞËÅØöµ°üpeiÅäÅàÅãÅåÅßÅâÅŞÅæö¬ÅáàÎïÂì·õ¬àú»µÚüíÕpenÅçÅèäÔpengÅöÅïÅõÅğÅíÅîÅòÅôÅñÅóÅëÅìÅéâñàØó²ÅêÜ¡piÅúÆ¤Å÷Æ¥Åû±ÙÅüÆ¢Æ©Æ¨Æ£Æ§îëñ±Ø§ÅøÅùÜ±Åşõùç¢àèÛ¯î¼æÇÛÜÚüèÁÜÅÛıò·ß¨ê¶ÅıØòÚğâÏòçÆ¡î¢äÄÆ¦Úé·ñßÁñÔñâ»µ±»°Õå¨ÜÖpianÆ¬ÆªÆ«Æ­ôææéÚÒëİõäêú±â±ãçÂ±épiaoÆ±Æ®Æ¯î©Æ°ØâæÎçÎàÑóªÆÓéèİ³æô÷ÔpieÆ²Æ³ÜÖë­Ø¯pinÆ·Æ´Æ¶ÆµÆ¸æÉé¯êòæ°ò­ŞÕ±ôpingÆ½Æ¿Æ¾ÆÀÆ¼ÆÁÆºÆ»Æ¹öÒèÒæ³Ú¢Ù··ëpoÆÆÆÂÆÄÆÈÆÅÆÃÆÇîŞîÇÆÉÚé²´óÍØÏğ«ê·çêÛ¶·±ãøÆÓ²¨ÆÊpouÆÊÙöŞåê³puÆÌÆÕÆ×ÆËÆÍÆÔÆÑÆÏ¸¬ÆÖÆÓÆØÆÒïèàÛäßè±ÙéÆÎõëÆÙÆĞïäå§ë«±¤±©á¥îÇõ³qiÆäÆğÆßÆøÆ÷ÆÚÆëÆûÆæÆìÆöÆŞÆåÆñÆïÆôÆáÆúÆòÆçÆÛÆí÷¢ÆîÆùÆõÆóİÂÆèí¬ç÷ç²ÆİÆüÆêÆÜñıÆàÆãáªéÊçùØÁíÓêÈàÒØ½æëè½ÆéŞ­Ûßôëì÷ÆâèçÙ¹Ü»á¨ä¿÷èÜÎÆıòàİ½İİôìãàòÓ»ü¼©ì¥õèÜùÏªÖ¦Ö»qiaÇ¡Æş¿¨Ç¢İÖ÷ÄñÊqianÇ°Ç§Ç®Ç¦Ç³Ç±Ç©Ç¨Ç¬Ç£Ç·Ç«ÏËÇ¶Ç¯Ç´Ç²Ç¥ÜÍÇ­Ç¸Ü·Ù»ÇµÜçÇªÇ¤ò¯îÔÙİŞçåºã¥ç×í©á©ëÉå¹ã»å½Úäèıóéêùİ¡ŞşôÇâãqiangÇ¿Ç½Ç¹ÇÀÇ»Ç¼ÇºôÇïêéÉæÍÇ¾ïÏïºìÁê¨õÄòŞñßãŞ½«ãİqiaoÇÅÇÆÇÃÇÉÇÇÇÌÇÈÇËÇÂÇÏÇÄ¿ÇÇÍÇÎéÔÇÊõÎÜñã¸ØäÇÁíÍÈ¸çØã¾ÚÛ÷³Ú½á½½¶ÈµqieÇÒÇĞÇÔæªïÆÇÑÇÓêüã»Û§ã«óæôòÙ¤ÆöÆõÆãqinÇ×ÇØÇÙÇÖÇİÇÚÇÕÇÜÇŞñûÜËÇßàßŞìÇÛôÀï·ßÄäÚéÕàºòûâÛñæqingÇåÇëÇàÇáÇâÇéÇäÇìÇãÇçÇêÇèóä÷ôÇæóÀíààõòßöëÜÜö¥éÑôìÇ×qiongÇîÇíñ·ÜäòËÚöõ¼öÆóÌÜºqiuÇóÇòÇïÇğÛÏÇñÇôòøåÙôÜÇõôÃÙ´é±ÇööúòÇ÷üåÏáìò°êääĞ¹ê³ğÜ´quÈ¥ÇøÈ¡ÇúÇ÷ÇşÇıÇüÈ¢È¤ÇûöÄğ¶Çùáéìîêïë¬ó½ØÎè³÷ñŞ¾íáñ³òĞá«Ş¡ëÔÈ£ôğãÖÛ¾Ú°ÜÄĞçÆáÛÉquanÈ«È¨È¦È°ÈªÈ­È©È®È¯ÜõòéîıÈ§÷ÜóÜÈ¬Ú¹î°éúãªç¹¾íÛÚqueÈ´È·È±È¸ãÚÈ²ÈµÈ¶È³ã×í¨¿ÇÇÓã¡qunÈºÈ¹åÒ÷åranÈ»È¼È¾÷×È½òÅÜÛrangÈÃÈÂÈÀÈ¿ÈÁğ¦ìüraoÈÆÈÄÈÅèãæ¬ÜéòÍreÈÈÈÇÈôßörenÈËÈÎÈÏÈÊÈÌÈĞÈÍÈÉñÅÜóØğïşİØéíÈÒÈÑâ¿¶ùÁŞí¥rengÈÓÈÔriÈÕrongÈÜÈÛÈİÈŞÈÙÈÚÈØÈÖéÅÈ×ÈßëÀáõòîáÉrouÈâÈàÈá÷·õåôÛruÈçÈëÈéÈåÈêÈèÈãÈäï¨Èìä²äáİêå¦ÈæŞ¸ò¬ñààéçÈÅ®ÄÃruanÈíÈîëÃÈäruiÈğÈñÈïî£ò¸èÄŞ¨ÜÇrunÈóÈòruoÈôÈõóèÙ¼saÈöÈøÈ÷Ø¦ØíëÛìªêıõÁsaiÈûÈüÈúÈùÉ«àçË¼sanÈıÉ¢É¡ÈşË®ãßë§âÌáêôÖ²ÎsangÉ£É¥É¤ŞúòªíßsaoÉ©É¨É§É¦ëıÉÒğşçÒÜ£öşçØËÒseÉ«É¬ï¤ÉªØÄğ£Èû»øsenÉ­sengÉ®shaÉ±É³É°É´É¶ÉµÉ²É¯ö®É·àÄğğÏÃöèÉ¼ï¡ßşì¦ôÄêıshaiÉ¸É¹É«õ§÷»É±shanÉ½ÉÆÉÈÉÁÉ¼ÉÂÕ¤ÉÀÉÃÜÏÉÅÉ¾÷­É¿ÉÉÚ¨ÉÄÉ»ëşµ¥ğŞ²ôô®îÌÉÇäúæóõÇæ©ÉºÛïÛ·óµæÓÛÉµ§ØßìøshangÉÏÉÌÉĞÉËÉÍìØõüÉÊÛğÉÎÉÑéäç´ÌÀshaoÉÙÉÕÉÔÉÒÉÜÉ×ÇÊÉÚÉÛÉÓÉØÜæäûô¹ÉÖÛ¿ÕÙóâòÙè¼sheÉçÉèÉäÉáÉãÉàÉæÉßÕÛÉİÉâÉåÉŞ÷êÙÜâ¦î´äÜØÇì¨Ê°ŞéÒ¶ÉõÊ²îèsheiË­shenÉîÉíÉõÉñÉìÉôÉóÉòÊ²ÉêÉğÉöÉéÉøÉ÷ò×ôÖ²ÎÉëëÏïòßÓÚÅäÉÉïÚ·é©İØİ·ĞÅÇßŞÓ²ÉshengÉúÊ¡ÉùÉıÉşÊ¤Ê¢Ê¥óÏÊ£ÉüÉû³ËíòáÓäÅêÉÙşshiÊÇÊ®Ê±Ê¹Ê½ÊÂÊĞÊ¾ÊµÊ¯ÊÒÊ·Ê³Ê«ÊÏÊÓÊÔÊ¦ÊÀÊ¼ÊªÊ©Ê¿ÊÆÊ¶Ê§ÊÊÊÍÊ»Ê°Ê´ÊÎÊ¬ÊÄÊÈÊÌÊ²Ê¸ÊÃÚÖÊ­¸ÉÊÑÊ¨ÊÅÊËÊºóÂêÛÊÁİªÊÉõ§éøõ¹ß±İéÛõîæĞêó§ìÂìêâ»ÖÅÖ³öåËÆóßöõ³×ÌáË¶ÉäôùòÏßòshouÊÜÊÖÊÕÊ×ÊØÊìÊİÊÙÊÚÊÛÊŞç·á÷ô¼°ÇshuÊıÊéÊ÷ÊôÊöÊäÊìÊõÊøÊúÊèÊğÊåÊíÊâÊñÊóì¯ÊßÊáÊëÊæÊçÊêÊüÊşË¡ãğÊùÊîÙ¿ÊòÊàÊãŞóç£İÄÊïïøÊûëòÛÓäøâàæ­ë¨Ø­ĞÄÓáñâ²ÙéËshuaË¢Ë£à§shuaiÂÊË¦Ë¥Ë¤Ë§ó°shuanË©Ë¨ãÅäÌshuangË«ËªË¬æ×ãñshuiË®Ë­Ë°Ë¯ËµÍÉshunË³Ë²Ë´Ë±¶ÜshuoËµİôË·Ë¶îåË¸éÃåùŞ÷ÊıÂÊË§ó°É×àÊsiËÄËÀËÆË¿Ë¹Ë¼Ë¾Ë½ËÇËÂËºìëÙ¹ËÁË»ËÃËÈØËËÅïÈßĞÛÌãôæáæ¦ğ¸òÏñêäùóÓçÁÙîìáãáÊ³²Ş´ÍÌäsongËÍËÎËÉËÌËÏËÊáÔËĞñµäÁâìã¤ËËáÂİ¿Ú¡souËÒËÑà²ÛÅËÔì¬âÈŞ´äÑïËî¤àÕËÓòôsuËØËÕËÙËßË×ËÜËàËŞËÚËÖöÕãºËİà¼ËÛÙíóùİøÚÕËõö¢ä³Ş£suanËáËãËââ¡suiËäËæËêËéËëËìËåËèìİËçËíî¡ÚÇåäËîíõå¡İ´ÄòsunËïËğËñé¾İ¥öÀáøâ¸suoËùË÷ËõËøËóËöàÂôÈËôËòíüæ¶ßïèøàÊÉ¯êıtaËûËüËıËşÌ¤Ëúîèé½÷£Ì¢ÍØÌ¡õÁÌ£äâãËåİàªäğí³taiÌ«Ì¨Ì¬Ì§Ì©Ì¥îÑÌ¦Ì­ëÄÌªìÆß¾Û¢öØõÌŞ·ææ´ötanÌ¸Ì¼Ì²Ì½Ì¿µ¯Ì¯Ì¾ê¼Ì°Ì³Ì·Ì¹Ì¶ÌºÌ®Ì±ÌµÌ´îãÌ»ìşÛ°å£ñûïÄïâëşôÊêætangÌÆÌÇÌÀÌÃÌÉÌÁÌÌÌÈÌËÌÅÌÂÌÊÙÎÌÄäçïÛè©â¼éÌàûñíõ±ó¥ó«ôÊï¦ã®taoÌ×ÌÓÌÍÌÖÌÎÌÒÌÕÌÔÌÏìâÌÑä¬÷ÒèºßûØ»ÌĞß¶teÌØï«ìıí«ß¯teiß¯tengÌÚÌÙÌÛëøÌÜtiÌåÌáÌâÌæÌßÌàÌãÌİÌêÌŞÌäÌëÌéåÑñÓÌèã©ÜèÌçÙÃç°ç¾õ®ğÃŞĞµÌtianÌìÌïÌîÌíÌğÌòÌóéåãÃãÙî±ŞİÌñîäµèëï²ÏtiaoÌõÌøµ÷Ìô÷ØÌ÷ôĞÙ¬ñ»öæö¶ÌöìöóÔòèÜæ¸©tieÌúÌùÌûİÆ÷ÑtingÌıÍ£Í¥Í¦ÌüÍ¢ÌşÍ¤èèÍ§Í¡öªİãòÑÜğæÃî®îúñôtongÍ¬Í¨Í­Í²Í³Í°Í¯Í´âúÍªÍ©Í±ÙÚàÌÍ«¶²¶±Ù¡Í®ÜíäüíÅØçÙ×á¼Ûíô¾íÏtouÍ·Í¶Í¸Íµ÷»î×tuÍ¼ÍÁÍ¿Í½Í»Í¾Í¹ÍÂÍÃÍÀÍºîÊİ±Ü¢õ©İËÓàÜ¶tuanÍÅÍÄŞÒåèî¶tuiÍÆÍÈÍËÍÊÍÇÍÉß¯ìÕtunÍÍÍÌÍÎ¶ÚÙÛêÕëàâ½ÍÊ´º¶ÖÙàtuoÍÑÍĞÍÏÍ×ÍØÍÓÍÕÍÖÍÔÙ¢ÍÒÛçéÒÍÙãûèŞóêõÉõ¢íÈèØØ±ö¾âÕÆÇîè¶æwaÍÚÍßÍÛÍŞÍİÍÜÍà°¼Øôæ´ëğßÉwaiÍâÍááËÒ¨wanÍòÍêÍíÍëÍäÍæÍåÍìÍèÍçÍîÍóÍéòêÍñÍğÍïØàÍãçºçşëäîµÜ¹æıÂûÃäİÒİ¸öé÷´ä½wangÍõÍùÍûÍøÍüÍöÍúÍôÍıÍ÷Øèã¯÷ÍéşŞÌweiÎªÎ»Î´Î¬Î¢Î¨Î¹Î¯Î½Î¶Î²Î§ÎºÎ¸ÍşÎÀÎ±Î³Î©Î°Î£æ¸Î·åÔÎ¤Î¿Î¥Ş±Î®Î¼â¬Î¾ìĞá¡ÎµÛ×Î­Î¦çâãíÙËâ«ÚÃáÍàøÎ«ôºÎ¡öÛè¸ğôÚñä¶ê¦İÚãÇì¿ä¢àíÒÅáËÚóöÕwenÎÊÎÄÎÂÎÅÎÈÎÆÎÇÎÃö©ÎÁÎÉãëãÓØØÙïè·ÃâçäwengÎÌÎÍÎËŞ³İîwoÎÒÎÕÎÑÎÔÎĞä×ÎÖÎÏà¸ÙÁÎÓë¿íÒİ«ö»á¢ÎÎwuÎåÎŞÎïÎâÎéÎİÎñÎäÎáÎóÎçÎíÎòÎÚÎÛÎğÎèßíÎìÎÙÎæÎãÎØÎêÎÜÎëâäÎ×ÎîØ£ÎàÎß¶ñì¶ä´åüæğØõå»ğÍğíâèåÃÚãêõÜÌæÄÚùğÄòÚÛØâĞöÈ÷ùÍöìÉè»ÓÚÛÑÛëxiÏµÎ÷Ï¸ÎüÏ´Ï²Ï¡Ï°Ï¤Ï·Ï¢ÎıÏ¯Ï£Ï©ÎöÏªÏ¶Ï®Ï§Ï³Ï¥Ï¦ÎøÎõÎùÏ¨ÙâŞÉáãÏ±ÎôÎşôËæÒÆÜä»ìûêØÏ­Ï¬ì¨ìäÎûäÀÎúõµİ¾÷ûÛ­êêó£ôâãÒçôßñô¸ó¬Üçâ¾ì¤ğªÚôÏ«òáÀ°ñ¶ìùõèÙÒéØİûñÓåïôÑİßôªÆèñŞÚÀõ§ØÎÆûÀåĞ¯ë¯ÈúxiaÏÂÏÄÏºÏÅÏ¼ÏÁÏ¿Ï¹Ï»ÏÀÏ½ßÈÏÃÏ¾áòåÚè¦íÌ÷ïóÁ»£èÔÇ¢Ğ±Ğ®á¬ÉÂxianÏßÏÈÏØÏÖÏÒÏÔÏÊÏŞÏ×ÏÆÏÍÏÉÏÓÏËÏÕÏİÏÜÏÌÏĞÏÙõ£ÏÎÏÚæµÏÛÏÇŞºë¯ÜÈÙşÏÑÏÏåßììö±óÚò¹ïÄáıìŞõĞİ²á­¼ûôÌõÑğÂğïÏ³Ï´æ©Ñ¢xiangÏòÏëÏóÏàÏîÏñÏäÏçÏãÏìÏéÏêÏïÏæÏâÏáÏíâÃÏğ½µÏèÏåößæøâÔó­Ü¼ç½İÙ÷ÏºåxiaoĞ¡Ğ¦Ğ£ÏûÏúÏ÷Ğ§Ğ¢ÏôÏşĞ¤ÏõÏöÏüĞ¥óïÏùç¯óãåĞßØÏıæçäìèÕ÷ÌÏøòÙáÅèÉÑ§½ÍºôxieĞ´Ğ©Ğ±Ğ»Ğ­Ğ¶ĞµĞ¬Ğ¨ĞªĞ¼Ğ·Ğ®Ğ²Ğ¹Ğ¯Ğ°ĞºĞ³ÑªĞ¸äÍÙôÙÉÛÄÛÆâ³é¿Ğ«éÇ½âçÓâİß¢ò¡Ò¶å¬öÙŞ¯õóåâç¥Æõº§Ìë÷º½àxinĞÂĞÄĞÅĞ¾Ğ¿ĞÁĞÀĞ½Ü°ĞÆì§öÎĞÃÑ°İ·Ø¶ê¿ïâxingĞÔĞĞĞÎĞÍĞÇĞÕĞËĞÌĞÑĞÓĞÒĞÏÊ¡ĞÉĞÈß©íÊĞÊÜôã¬â¼ÚêÜşÜ°Ê¤xiongĞØĞÖĞÛĞ×ĞÜĞÙĞÚÜºxiuĞŞĞãĞàĞåĞİĞâĞääåĞáĞß³ôËŞ÷ÛâÓğ¼ßİâÊõ÷á¶xuĞèĞëĞìĞíĞøĞòĞóĞéĞîĞğĞ÷ĞçñãĞñĞõĞöĞêĞôĞïçïìãĞæÓõÛ×Ş£ä°ôÚèòõ¯äÓäªíìí¹ÛÃÚ¼ßİê¸xuanÑ¡ĞıĞûĞüĞşĞùé¸è¯ĞúÑ£ìÅíÛìÓÑ¤êÑîçÑ¢ãùäöÚÎïàİæğçÙØäÖÈ¯Şï»¹ÏØÛ÷Å¯xueÑ§ÑªÑ©Ñ¨Ï÷Ñ¥÷¨Ñ¦õ½ÚÊàåí´xunÑ¶Ñ°Ñ´Ñ®Ñ²ÑµÑ­Ñ«Ñ¬Ñ¸Ü÷Ñ¯Ñ·ñ¿Ñ±öàŞ¹ä­Ş¦Ñ³âşä±áßêÖÛ÷á¾Û¨â´»ç¿£åæÙãİ¡õ¸»èè¯yaÑ¹Ñ½ÑÇÑ¼Ñ¿ÑÀÑÅÑÂÔşÑºë²ÑÆÑÁÑ»í¼Ñ¾ÑÄèâÑÃÑÈñâíıæ«ÛëØóá¬ğéŞëåÂçğß¹yaiÑÂíıyanÑÔÑÛÑÎÑÌÑØÑÏÑÒÑÓÑÉÑéÑàÑİÑĞÑ×ÑÊÑÕëçÑáÑçÑÚÑæÑŞÑßÑÍæÌéÜÑÜÑåÑËáÃÑãìÍâûÑâÑÙÑÖ÷úêÌÑèØßÑäÛ±óÛãÕëÙäÎçü÷ĞÙÈÚİåûØÍõ¦÷ÊÛ³Ú¥äÙÜ¾ÒóÙ²ØÉî»ÑÑİÎÇ¦ãÆÙğÚç°©ÄèÛïyangÑùÑøÑõÑîÑòÑóÑïÑôÑíÑöÑ÷ÑëÑğÑêìÈÑúÑñì¾÷±ãóÑìâóáàí¦òÕyaoÒªÒ©ÑüÒ¡Ò§Ò¤Ò¦Ò«ÑûÑıÒ£Ò¢áæÒ¨Ô¿ÑşÒ¥ëÈ÷¥èÃçÛßºï¢ğÎÌÕçòÔ¼ê×ôíØ³Å±ñºÃ´é÷Ø²½ÄáÊÀÖÓ´ä¬ŞÖÏıáÅyeÒ²ÒºÒ¶ÒµÒ³Ò¹Ò¯Ò°Ò®Ò±ÚËÒ·ÚşÒ¬Ò´Ò­ìÇÒ¸×§ØÌêÊîôŞŞĞ°ÑÊÉäÕ¨yiÒ»ÒÔÒÑÒÒÒàÒ×ÒåÒÆÒâÒÚÒÀÒËÒìÒÓÒéÒÂÒÛÒæÒÁÒíÒÅÒÉÒÕÒ½ÒÄÒëÒĞÒİÒÇÒÖÒäÒÎÒÌã¨ÒçØ×Òãß®ÒÍÒÃÒØôıÒ¼ß×ŞÄàæäôÒêÒÊæäâùåÆØîÒ¿êİàÉÒ¾ØæîÆÒáØıÜÓâÂÒßâ¢ÒÏï×Ü²ôàçËÚ±ñ´ßŞŞÚÒîÒèéìŞÈÒŞì½ÒÜÒÈìÚéóô¯Ù«Ş²¶êÛüáÚÜèß½á»âøÒïÊ³ì¥Î²ğêñÂÛİÉß÷ğôèïîòæñ¯ğù°¬ÒÙíôÒºÒ´Ò·ÚÖÒ¸ÌúÛÙóÊßÚÏÛyinÒòÒôÒıÒøÓ¡ÒõÒûÒşÒóÒñÒ÷ÒùÒğÒüî÷â¹Òöñ«ÒúÜ§ä¦à³ö¯ÛóßÅò¾ë³ÜáØ·Û´Ûßáşö¸äÎµåÑÌñ¿ÌıéÜyingÓ¦Ó¢ÓªÓ²Ó°Ó­Ó³Ó¯Ó¥Ó±Ó®Ó¤Ó¬Ó£Ó©ÙøÓ§ò£çøå­Ó«Ó¨ñ¨İºâßÛ«ó¿éºÜãàÓëôŞüè¬äëğĞİÓİöäŞÜş¾°yoÓ´à¡ÓıyongÓÃÓÀÓ¿ÓÂÓµ÷«Ó¼Ó¹Ó¾Ó¶ÓºÓ½ğ®ÛÕÓ·Ù¸Ó»ã¼Ó¸Ü­ÓÁà¯÷ÓïŞçßŞ³youÓĞÓÖÓÉÓÍÓÒÓÈÓ×ÓÎÓÔÓÅÓÑÓËÓÌÓÓÓÕÓÄÓÇØÕÓÊÓÆğàØüèÖéàİ¬å¶îğÓÏë»òÄßÏ÷øİ¯öÏİµÙ§òøòÊ÷îŞÌàóòöôíÈÅyuÓëÓÚì¶ÓãÓúÓàÓèÓêÓûÓïÓöÓñÓıÔ£Ô¤ÓòÓæÓüÔ¥ÓğÓŞÔ¢ÓùÔ¡ÓîÓşÚÍÓáÓíÓÙÓøÓâæúÓôÓ÷ÓØÓÜØ¹âÅÓõÓİÓßÓéÓåÓäí²Ô¦ÓçØ®óÄå÷æ¥àöÓìÓÛîÚŞíãĞÚÄÓóè¤ëéâ×ì£ìÏğõØñêìñÁİÇö§áüñ¾àôìÛô¨Ù¶òâÎ¾ô§ğÖİ÷ìÙÎµÖàåıáÎí±êÅö¹ğÁİÒâÀğöòõ¹ÈàŞÛ×ëòë¨yuanÔ²ÔªÔ­Ô¶Ô±ÔºÔ¬Ô¸Ô´Ô°ÔµÔ®Ô¹Ô©æÂÔ«ë¼Ô³Ô¨Ô·à÷Ü«ğ°ÛùÔ¯íóö½ŞòóîéÚó¢è¥Ô§ãäÜ¾ÍğİæyueÔÂÔ½Ô¼Ô»ÀÖÔ¾ÔÄÔÁÔÀÔ¿ÔÃîáë¾ÙßéĞèİËµå®ßÜê×Ò«Ò©yunÔÆÔËÔÈÔÏÔÊÔÌÔÎÔĞìÙÜ¿Û©ÔÅè¹ÔÉÔÍã¢ÔÇã³éæáñêÀëµóŞç¡Ô±zaÔÓÔÒÕ¦ÔÑÔúßÆÔÛŞÙßşàÒzaiÔÚÔÙÔØÔÔÔÖÔÕÔ×áÌçŞ×ĞzanÔÛÔŞÔİô¢ŞÙöÉÔÜôõè¶ôØêÃzangÔà²ØÔáÔßê°æàŞÊzaoÔçÔìÔâÔîÔïÔãÔäÔíÔåÔæÔêÔèÔëßğÔéçØzeÔòÔğÔóØÆÔñÕ¦ßõàıô·óĞØÓê¾óååÅ²àÔõÔôÕ­zeiÔôzenÔõÚÚzengÔöÔùÔ÷ÔøêµçÕï­îÀ×ÛzhaÔüÕ¨ÔşÔúÕ¢Õ¤Õ¥Õ©Õ§ÔıÕ¡Õ£Ôûé«Şê×õ÷şß¸ßåğäíÄòÆßîÀ¯²éâÇà©Õ¦zhaiÕ¯ÕªÕ­Õ«Õ®Õ¬µÔÔñ¼Àñ©íÎ²àÔğÆëzhanÕ¼Õ¾Õ½Õ´Õ³ÕµÕºÕ°Õ±Õ²Õ¶Õ»²üÕ·Õ¿ÕÀÕ¹Õ¸ŞøÚŞì¹Ôİêè×êzhang³¤ÕÅÕÂÕÉÕÆÕÌÕÍÕÇÕÊÕÏÕÈÕÁè°ÕÃÛµÕÎØëá¤áÖâ¯ó¯æÑÕËÕÄç´zhaoÕÒÕÕ×ÅÕÔÕĞÕÖÕÙÚ¯Õ×ÕÑ³¯ÕÓÕØ×¦îÈèşßúóÉÖø³°êË×ÀzheÕâ×ÅÕßÕÛÕãÕÚÕÜÕàÕáñŞéüô÷òØÕŞÚØÕİíİÖøğÑß¡èÏÕĞÕªÕ¬ó§ÉåØ±zheiÕâzhenÕæÕëÕòÕñÕäÕóÕğÕêÕèÕíëŞÕåÕìÕéÕïÕçêâèåìõğ¡ÛÚé»ä¥éôî³çÇÕîğ²Ö¡óğİèëÓé©äÚÉïzhengÕıÕşÖ¤ÕùÕûÕôÕ÷Ö£Ö¢ÕöÕõîÛÖ¡ÕúÕüóİï£ÚºÕøá¿áçöë¶¡zhiÖ®Ö»ÖÆÖÁÖªÖµÖ¸ÖÊÖ±Ö§ÖÎÖ½ÖÃÖ¯ÖÂÖ¾Ö¦Ö¹Ö²õ¥Ö°Ö­ÖÇÖ¥Ö¬Ö´ÖÀÖ¼òÎÖ³Ö«ÖÌÖÍÖ·Ö¨ÖºÛ¤Ö¶ÖÈÖÉÖÄêŞéòèÎìóìíïôáçÖ¿ÖÅÖËÖÏÚìåëŞıåéğëÛúëùè×õôàùõÜéùğºâåæïèäíéèÙõÅÖ©ôêØ´ÜÆö£ëÕõÙÊÏÊ¶Õ÷ğ·ÕİÕãzhongÖĞÖÖÖØÖÓÖÕÖÚÖÒÖÙÖ×ÖÔÖÑÚ£õàô±ïñó®âìzhouÖáÖÜÖİÖåÖÛÖŞÖâÖèÖàÖçæûç§ÖäëĞôíÖßÖãæ¨Öæô¦ôüİ§íØßúzhu×¡Ö÷×¢ÖíÖúÖê×¤ÖîÖìÖùÖğÖñÖøÖóÖéÖıÖşÖô×£ÖüÖïÖòóÃÖûØùÖöñÒîùóçìÄèÌÖõõîä¾éÆÙªÛ¥÷æğæÜïäóä¨ğñô¶ÜÑéÍÖëôãÊôÊõÖáÅ¢ÄşÊízhua×¥ÎÎ×¦zhuai×§×ªàÜzhuan×ª×¨´«×©×¬×«×­âÍßùò§ãçzhuang×°×´×¯×³×®×²´±×±ŞÊãÜãİí°Ù×zhui×·×¶×¹×µ×º×¸çÄã·æíö¿à¨zhun×¼×»ëÆñ¸ÍÍöÀzhuo×½×À×Å×Ç×Æ×¿×Ã×¾ïí×Ä×Áßªí½åª×ÂÙ¾ÚÂìúäÃä·½ÉìÌÖøÕĞõÖzi×Ó×Ô×Ö×Ê×Ï×È×Ñ×ĞÖ¨×Õ×Ì×Ëö¤è÷æ¢í§ç»êßööê¢ñèïÅö·÷ÚáÑ×ÉôôóÊõş×ÍÚÑíöïö×Î×ÒæÜÜëôÒßÚğËÔÖçŞzong×Ü×İ×Ú×Û×Ø×Ù××ëêôÕÙÌèÈ´Ózou×ß×à×á×ŞÚÁåÁæãÚîÛ¸öíÖßßúÖèzu×é×å×ã×â×è×æ×ä×çİÏÙŞïßàÕzuan×êß¬×ëçÚõò×¬ÔÜzui×î×ï×ì×í¾×õşŞ©¶ÑµØôÈzun×ğ×ñé×ß¤÷®¿¡ÛÚzuo×÷×ö×ø×ù×ó×ò×ô×õßò´éÔäìñàÜâôÚâëÑÚèõ¡óĞ×ÁíÄ";
  yunmu="ang:¨¡ng,¨¢ng,¨£ng,¨¤ng;eng:¨¥ng,¨¦ng,¨§ng,¨¨ng;ing:¨©ng,¨ªng,¨«ng,¨¬ng;ong:¨­ng,¨®ng,¨¯ng,¨°ng;ai:¨¡i,¨¢i,¨£i,¨¤i;ei:¨¥i,¨¦i,¨§i,¨¨i;ui:u¨©,u¨ª,u¨«,u¨¬;ao:¨¡o,¨¢o,¨£o,¨¤o;ou:¨­u,¨®u,¨¯u,¨°u;iu:i¨±,i¨²,i¨³,i¨´;ie:i¨¥,i¨¦,i¨§,i¨¨;ue:u¨¥,u¨¦,u¨§,u¨¨,¨¹¨¥,¨¹¨¦,¨¹¨§,¨¹¨¨;ve:¨¹¨¥,¨¹¨¦,¨¹¨§,¨¹¨¨;er:¨¥r,¨¦r,¨§r,¨¨r;an:¨¡n,¨¢n,¨£n,¨¤n;en:¨¥n,¨¦n,¨§n,¨¨n;in:¨©n,¨ªn,¨«n,¨¬n;un:¨±n,¨²n,¨³n,¨´n;a:¨¡,¨¢,¨£,¨¤;o:¨­,¨®,¨¯,¨°;e:¨¥,¨¦,¨§,¨¨;i:¨©,¨ª,¨«,¨¬;u:¨±,¨²,¨³,¨´;v:¨µ,¨¶,¨·,¨¸,¨¹;";

  pyindex = new Array();
  chartab = new Array();
  yunmutab = new Array();
  phrstab = new Array();

  userPH = new Array();
  UPHbuff = new triplet("", "", 0);

  parsedPY = new Array();
  possible1Full = new Array();

  code_table = new Array();
  code_len = 12;

  key_en = "1234567890abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ:;<>,.-_?/{[\\}]";
  key_quan = "£±£²£³£´£µ£¶£·£¸£¹£°£á£â£ã£ä£å£æ£ç£è£é£ê£ë£ì£í£î£ï£ğ£ñ£ò£ó£ô£õ£ö£÷£ø£ù£ú£¡£À££¡ç£¥£Ş£¦£ª£¨£©£Á£Â£Ã£Ä£Å£Æ£Ç£È£É£Ê£Ë£Ì£Í£Î£Ï£Ğ£Ñ£Ò£Ó£Ô£Õ£Ö£×£Ø£Ù£Ú£º£»¡¶¡·£¬¡££­£ß£¿£¯£û£Û¡¢£ı£İ";
  function ToFullShapeLetter(aStr) { // ½«°ëĞÎ×ÖÄ¸»»³ÉÈ«ĞÎ×ÖÄ¸
    var s="";

    for (i=0;i<aStr.length;i++) {
      c = aStr.charAt(i);
      pos = key_en.indexOf(c);
      if(pos >= 0) s += key_quan.substr(pos,1);
    }

    return s;
  }

  function popu_phrase(){
    phrase_stack=[];
    for(i=0;i<possible1Full.length;i++){
      if(!phrstab[possible1Full[i]]) continue; /* need fix*/
      for(j=0;j<phrstab[possible1Full[i]].length;j++){
        var tmp=phrstab[possible1Full[i]][j].match(/([a-z' ]+)([^a-z' 0-9;]+)([a-z0-9][a-z0-9])/);
        pys=tmp[1].split(" ");
        if(!pys[1].match("^" + parsedPY[1])) 
            continue;
        var mlen=(parsedPY.length > pys.length)?pys.length:parsedPY.length;
        for(k=1;k<mlen;k++)
          if(!pys[k].match("^" + parsedPY[k])) break;
        if(k==mlen){
          var tmptri=new triplet(tmp[1],tmp[2],parseInt('0x' + tmp[3]));
          if (pys.length == parsedPY.length) tmptri.freq += 0x0100;
          if (pys[1].length == parsedPY[1].length) tmptri.freq += 0x0200;
          phrase_stack.push(tmptri);
        }
      }
    }
 
    phrase_stack.sort(function (a,b){
        return b.freq-a.freq;
        }); 
  }

  function create_word_list(start, index) {
    if(start < -1 || (start < 0 && pyinput) ) return;


    var cnt = 0;
    var pycode = "";
    var same_code_words=[];
    candidates = "";
    word_list=[];

    if(start < 0 &&  index == 0) {
      popu_phrase();
      if (phrase_stack.length == 0){
        start = 0;
        same_code_words = chartab[possible1Full[start]].split("");
        pycode = possible1Full[start];
      }
    }

    if(start >= 0 && pyinput){
      pysplit=sheng_yu(possible1Full[start]);
      same_code_words = pysplit[1].split(",");
    }else if (start >= 0 && !pyinput){
      same_code_words = chartab[possible1Full[start]].split("");
    }
    pycode = possible1Full[start];

    while (cnt < 10) {
      if (start >= 0){
        word_list[cnt] = (pyinput)?pysplit[0] + same_code_words[index]
                                :same_code_words[index];
        word_list_PY[cnt] = pycode;
      }else{
        word_list[cnt] = phrase_stack[index].word;
        word_list_PY[cnt] = phrase_stack[index].py;
      }
      candidates += '<span style="color:purple">' + ((cnt+1) % 10) + '</span>'
                    + '.<span style="color:blue">' + word_list[cnt];
                    + '</span> ';
      cnt++;
      index++;
 
      if(start < 0 &&  index >= phrase_stack.length) {
        start = 0;
        index = 0;
        same_code_words = chartab[possible1Full[start]].split("");
        pycode = possible1Full[start];
      }else if (start >=0 && index >= same_code_words.length) {
        start++;
        index = 0;
        if (start >= possible1Full.length) {
          start = -2;
          break;
        }
        if(pyinput){
          pysplit=sheng_yu(possible1Full[start]);
          same_code_words = pysplit[1].split(",");
        }else{
          same_code_words = chartab[possible1Full[start]].split("");
        }
        pycode = possible1Full[start];
      }
    }

    if (start >= -1) {
      if (start_stack.length > 1) {
      candidates += ' < >';
      } else {
        candidates += ' >';
      }
    } else if (start_stack.length > 1) {
      candidates += ' <';
    } else {
      candidates += '';
    }
    start_mem = start;
    index_mem = index;
    document.getElementById("list_area").innerHTML = candidates + "&nbsp;" 
  }

  function parsePY(){
    parsedPY = [];
    possible1Full = [];
    if (code_field.length < 1) return 0;

    cmp=/ /;
    total = 0;
    offset = 0;
    count = 2; /* 1 always valid */
    while( offset + count <= code_field.length){
      ahead = code_field.charAt(offset);
      if (ahead == "'"){
        offset += 1;
        count = 2;
        continue;
      }
      if(typeof pyindex[ahead] == "undefined"){
        code_field=(code_field.length > offset)?
                code_field.substr(0,offset) + code_field.substr(offset+1):
                code_field.substr(0,offset);
        continue;
      }
      cmp.compile(" " + code_field.substr(offset,count) + "[^ ]*");
      if(pyindex[ahead].match(cmp)) count += 1;
      else {
        parsedPY[total++]=code_field.substr(offset,count-1);
        offset += count-1;
        count = 2;
      }
    }
    ahead = code_field.charAt(offset);
    if(ahead == "'") offset ++;
    else if(typeof pyindex[ahead] == "undefined")
        code_field=(code_field.length > offset)?
                code_field.substr(0,offset) + code_field.substr(offset+1):
                code_field.substr(0,offset);
    if(offset < code_field.length) parsedPY[total++]=code_field.substr(offset,count-1);

    if(parsedPY.length == 0) return;

    cmp.compile(" " + parsedPY[0] + "[^ ]*","g");
    result=pyindex[parsedPY[0].charAt(0)].match(cmp);

    for(i=0;i<result.length;i++) possible1Full[i]=result[i].replace(/ /g,"");
    return total;
  }

  function sheng_yu(str){
    for (ym in yunmutab){
      result=str.match("^(.*)(" + ym + ")$");
      if(result) {
        var rt=[];
        rt[0]=result[1];
        rt[1]=yunmutab[ym];
        return rt;
      }
    }
    return null;
  }

  function on_code_change(){
    for (i=0;i<=9;i++) {
      word_list[i] = "";
    }
    candidates = "";
    start_stack = [];
    index_stack = [];
    if (code_field != "") {
      parsePY();
      if(parsedPY.length == 0){
       clear_all();
       return;
      }
      start=(parsedPY.length>1)?-1:0;
      start_stack.push(start);
      index_stack.push(0);
      create_word_list(start, 0);
    }
    document.getElementById("code_field").innerHTML =  '&nbsp;<span style="color:purple">' + code_field + "</span>";
    document.getElementById("list_area").innerHTML =  candidates + "&nbsp;";
  }

  function insert_char(str,obj) {
    if (str == "") return;
    switch (browser) {
      case 'IE':
        var r=document.selection.createRange();
        r.text=str;
        r.select(); // ²»ÖªºÎ¹Ê£¬´ËÂë¿ÉÈ¡ÏûÑ¡Çø¡£
        break;
      case 'NS': 
      // Gecko
        var selectionStart = obj.selectionStart;
        var selectionEnd = obj.selectionEnd;
        var oldScrollTop = obj.scrollTop; //ÒòGecko²»»á¹öµ½¸Ã¹öµÄµØ·½¡£
        var oldScrollHeight = obj.scrollHeight;
        var oldLen = obj.value.length;
        
        obj.value = obj.value.substring(0, selectionStart) + str + obj.value.substring(selectionEnd);
        obj.selectionStart = obj.selectionEnd = selectionStart + str.length;
        if (obj.value.length == oldLen) {  // Èç¹ûÓÃ»§ÔÚºóÃæÊäÈë£¬¾ÍÖ±½Ó¹öµ½ºóÃæ¡£
          obj.scrollTop = obj.scrollHeight;
        } else if (obj.scrollHeight > oldScrollHeight) {  // Èç¹ûTextAreaÔö¼ÓÁË¸ß¶È£¬¾Í¹öÏÂÒ»µãµã
          obj.scrollTop = oldScrollTop + obj.scrollHeight - oldScrollHeight;
        } else { // ÆäËüÇéĞÎ¾Í¹ö»ØÖ®Ç°µÄµØ·½
          obj.scrollTop = oldScrollTop;
        }
        break;
      default: // ÆäËü£¬¾ÍÔÚºóÃæ¼Ó×ÖËãÁË
        obj.value += str;
    }
  }

  function selected(e,c){
    if (!/[0-9 ]/.test(c)) return;
    var ind=(c==" ")?0:(9+parseInt(c))%10;
    var ich=word_list[ind];
    if(typeof ich == "undefined") return;
    var targ=e.target?e.target:e.srcElement;
    insert_char(ich,targ);

    if (ich.length < parsedPY.length){
      if(!pyinput){
        if(UPHbuff.py.length  > 0) UPHbuff.py += " ";
        UPHbuff.py += word_list_PY[ind];
        UPHbuff.word += ich;
      }
      code_field = parsedPY.slice(ich.length,parsedPY.length).join('');
      on_code_change();
    }else{
      if(UPHbuff.py.length  > 0){
        UPHbuff.py += " ";
        UPHbuff.py += word_list_PY[ind];
        UPHbuff.word += ich;
        userPH.push(new triplet(UPHbuff.py,UPHbuff.word,0));
        var ahead=UPHbuff.py.match(/^[^ ]+/)[0];
        if(typeof phrstab[ahead] != "undefined")
          phrstab[ahead].push(UPHbuff.py + UPHbuff.word + 'ff');
        UPHbuff.py="";
        UPHbuff.word="";
      }
      clear_all();
    }
  }

  function fillPre(){
    if (code_field != "") {
      if(start_stack.length > 1){
        start_stack.pop();  index_stack.pop();
        create_word_list(start_stack[start_stack.length-1], index_stack[index_stack.length-1]);
      }
      cancel_key_event = true;
      return false;
    }
    return true;
  }

  function fillAft(){
    if (code_field != "") {
      if (start_mem >= -1) {
        start_stack.push(start_mem);
        index_stack.push(index_mem);
        create_word_list(start_mem, index_mem);
      }
      cancel_key_event = true;
      return false;
    }
    return true;
  }

  function clear_all() {
    code_field = "";
    if(document.getElementById("code_field"))
      document.getElementById("code_field").innerHTML = "&nbsp;";
    candidates = "";
    if(document.getElementById("list_area"))
      document.getElementById("list_area").innerHTML = "&nbsp;";
  }


  ////////////////////////////////////
  // Load Tab and Phrase
  ////////////////////////////////////
  function LoadPYtab() {
    pyindex=[];
    chartab=[];
    var result = pytab.match(/[a-z']+[^a-z']+/g);
    for (i=0;i<result.length;i++) {
      par=result[i].match(/([a-z']+)([^a-z']+)/);
      chartab[par[1]]=par[2];
      if (!pyindex[par[1].charAt(0)]) pyindex[par[1].charAt(0)]="";
      pyindex[par[1].charAt(0)] += " " + par[1];
    }
  }

  function LoadYMtab() {
    yunmutab=[];
    var result = yunmu.match(/[^;]+;/g);
    for (i=0;i<result.length;i++) {
      par=result[i].match(/^([a-z]+):([^;]+);$/);
      yunmutab[par[1]]=par[2];
    }
  }

  function triplet(py,word,freq){
    this.py=py;
    this.word=word;
    this.freq=freq;
  }

  function ParseSysPhrsData(){
    phrstab=[];
    var pattern = /([a-z]+)[a-z' ]+[^a-z0-9]+[a-z0-9][a-z0-9]/g;
    var par;
    while((par=pattern.exec(phrs)) != null){
      if (!phrstab[par[1]]) phrstab[par[1]]=[];
      phrstab[par[1]].push(par[0]);
    }
  }

  function ParseUsrPhrsData(){
    if(typeof uphrs != "undefined" && uphrs.length>0){
      var pattern = /([a-z]+)[a-z' ]+[^a-z' 0-9;]+/g;
      var par;
      while((par=pattern.exec(uphrs)) != null){
        if(!phrstab[par[1]]) phrstab[par[1]]=[];
        phrstab[par[1]].push(par[0] + 'ff');
      }
    }
  }

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
    elem.charset = "gb18030";
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
  // Dynamically load JS
  ////////////////////////////////////
  var loadtimer;
  function isSysReady(){
    if(  typeof phrs == "undefined"){
      loadtimer=setTimeout(isSysReady,300);
      return;
    }
    clearTimeout(loadtimer);
    ParseSysPhrsData();
    switch_onoff(initOn);
    isUsrReady();
  }

  var authtimer;
  var authcheckcnt=0;
  function isUsrReady(){
    if(typeof uid == "undefined" && authcheckcnt < 500){
       authtimer=setTimeout(isUsrReady,300);
       authcheckcnt++;
       return;
    }
    clearTimeout(authtimer);
    if(typeof uid != "undefined"){
      ParseUsrPhrsData();
      uphreport();
      var hlk=document.getElementById("helplk");
      if(hlk){
        hlk.title="ÊäÈëÄ£¿é°æ±¾£º" + ui_version + "¡£ÏµÍ³´Ê¿â°æ±¾£º" + sysph_version + "¡£";
        if(email)
          hlk.title += "ÄúÒÑµÇÂ¼ " + email + "¡£µã»÷ÕâÀï²é¿´°ïÖúĞÅÏ¢¡£";
        else
          hlk.title += "ÄúÎ´µÇÂ¼£¬ÓÃ»§×Ô×é´Ê½«ÔÚÊ¹ÓÃ½áÊøºóÏûÊ§¡£µã»÷ÕâÀï²é¿´°ïÖúĞÅÏ¢¡£";
      }
    }
  }

  ////////////////////////////////////
  // Report userPH
  ////////////////////////////////////
  var uphtimer;
  function uphreport(){
    if(userPH.length>0){
      var uphstr='';
      for(var i=0;i<userPH.length;i++)
        uphstr += userPH[i].py + userPH[i].word;
       
      var qstr=uphpage + '&uid=' + uid +
               '&uph=' + encodeURIComponent(uphstr);
      
      scriptRequest(qstr,"uphreport_js",true);
    }
    uphtimer=setTimeout(uphreport,20000);
    userPH=[];
  }
  

  /****************************************************************/
  /* On Off switch and Init fuctions */
  /****************************************************************/

  function switch_onoff(on,hold){
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
      var elem = document.createElement("div");
      elem.id="livecharinput";
      document.body.appendChild(elem);
      var instr="";
      instr += '<form>'; 
      instr += '  <table width="500px" border="1">';
      instr += '  <tr>';
      instr += '    <td id="list_area" style="width:350px;cursor: move;" onmousedown="LIVECHARS.down(event)" onmouseup="LIVECHARS.up(event)">&nbsp;</td>';
      instr += '    <td><table>';
      instr += '    <tr style="background-Color:#aa8">';
      instr += '      <td style="width:0.5em;">&nbsp;</td>';
      instr += '      <td id="ywswitch" style="width:1.1em;cursor: pointer;" onmouseup="LIVECHARS.switchyw()">ÖĞ</td>';
      instr += '      <td id="pyswitch" style="width:1.1em;cursor: pointer;" onmouseup="LIVECHARS.switchpy()">×Ö</td>';
      instr += '      <td id="fsswitch" style="width:1.1em;cursor: pointer;" onmouseup="LIVECHARS.switchfs()">°ë</td>';
      instr += '      <td id="pnswitch" style="width:0.7em;padding-left:3px;cursor: pointer;" onmouseup="LIVECHARS.switchpn()">¡£</td>';
      instr += '      <td id="helplk" title="ÔÚÏß°ïÖú" style="width:0.6em;padding-left:1px;cursor: pointer;" onmouseup="LIVECHARS.help()">?</td>';
      instr += '      <td id="off" title="ÊäÈëÌõ×îĞ¡»¯" style="width:1.1em;padding-left:3px;cursor: pointer;" onmouseup="LIVECHARS.off()">£Ø</td>';
      instr += '    </tr><tr>';
      instr += '      <td colspan="7" id="code_field" style="width:148px;cursor: move;" onmousedown="LIVECHARS.down(event)" onmouseup="LIVECHARS.up(event)">&nbsp;</td>';
      instr += '    </tr></table>';
      instr += '  </tr>';
      if(!embed_style){
        instr += '<tr><td colspan="2"><fieldset><div>';
        instr += '<textarea style="width: 100%;" rows="5" id="edit_area">';
        instr +=   'ÔÚ´Ë´¦ÊäÈë£¬È»ºó¸´ÖÆ¡¢Õ³Ìùµ½ÏàÓ¦Î»ÖÃ¡£';
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
      for(var j=0;j<textelem_stack.length;j++){
        textelem_stack[j].onkeydown=LIVECHARS.key_down;
        textelem_stack[j].onkeypress=LIVECHARS.key_press;
        textelem_stack[j].onkeyup=LIVECHARS.key_up;
      }
      _switchyw(ywinput);
      _switchpn(pninput);
      _switchfs(fsinput);
      _switchpy(pyinput);
    }else{
      var lcl=document.getElementById("livecharinput");
      if(lcl){
        LCLeft=lcl.offsetLeft+440;
        LCTop=lcl.offsetTop;
        document.body.removeChild(lcl);
      }
      var elem = document.createElement("div");
      elem.id="lclogo";
      document.body.appendChild(elem);
      elem.style.cursor="move";
      elem.onmousedown=LIVECHARS.down;
      elem.onmouseup=LIVECHARS.up;
      if(LCLeft > 0) elem.style.left=LCLeft + "px";
      if(LCTop > 0) elem.style.top=LCTop + "px";
      if(hold) elem.title="¼ÓÔØÊı¾İÖĞ¡£ÇëÉÔºóË«»÷ÕâÀï¼¤»î»î×ÖÊäÈë·¨¡£";
      else{
        elem.title="Ë«»÷»Ö¸´ÊäÈë"; 
        elem.ondblclick= LIVECHARS.on; 
      }
      for(var j=0;j<textelem_stack.length;j++){
        textelem_stack[j].onkeydown=null;
        textelem_stack[j].onkeypress=null;
      }
      clear_all();
    }
  }

  function addUI(){
    var posstr='';
    if(ieversion > 0 && ieversion < 7) posstr='absolute';
    else posstr='fixed';

    var elem = document.createElement("style");
    document.getElementsByTagName('HEAD').item(0).appendChild(elem);
    elem.type="text/css";
    var instr = '#livecharinput\n' +
 '{\n' +
 '  height:auto;\n' +
 '  padding:0px;\n' +
 '  z-index:9000001;\n' +
 '  float: right;\n' +
 '  position: ' + posstr + ';\n' +
 '  top: 550px;\n' +
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
 '  z-index:9000001;\n' +
 '  position: ' + posstr + ';\n' +
 '  top: 550px;\n' +
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
 

  /****************************************************/
  /* LIVECHARS setup */
  /****************************************************/
  function _on_load(embed,taggedonly,inputbar) {

    var today=new Date();
    var month=today.getMonth()+1;
    syspage += "&v=" + today.getFullYear() + (month>10?month:'0' + month);

    scriptRequest(syspage,"sys_js",false);
    scriptRequest(usrpage,"usr_js",true);

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

    embed_style=embed;
    if(typeof taggedonly == "undefined") taggedonly=false;
    if(typeof inputbar != "undefined") initOn=inputbar;

    if(embed_style){
      for(var i=0, df=document.forms, len=df.length; i<len; i++){
        for(j=0, els=df[i].elements; j<els.length; j++){
          if( /^text/.test( els[j].type ) ) {
            if(!taggedonly || /^LIVECHARS/.test( els[j].className ))
              textelem_stack.push(els[j]);
          }
        }
      }
      if(textelem_stack.length<=0) return;
    }
    
    addUI();
    //switch_onoff(false);
    Focused_area = textelem_stack[0];

    isSysReady();

    clear_all();
    if(Focused_area) Focused_area.focus();

    LoadPYtab();
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
        if (code_field != "") {
          var str = code_field;
          code_field = str.substr(0, str.length-1);
          on_code_change();
          cancel_key_event = true;
          return false;
        }
        return true;
      // Tab
      case 9:
        /*
        var targ=e.target?e.target:e.srcElement;
        insert_char('&nbsp;',targ);
        cancel_key_event = true;
        */
        return true; 
      // Esc
      case 27:
        code_field = "";
        document.getElementById("code_field").innerHTML = "&nbsp;";
          candidates = "";
        document.getElementById("list_area").innerHTML = "&nbsp;";
        clear_all();
        cancel_key_event = true; //Esc»á°ÑÈ«²¿ÎÄ×ÖÉ¾³ı£¬¹Ê½ûÖ¹ Esc¼ü ÆğÈÎºÎ×÷ÓÃ¡£
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
        if (code_field!="") {
          var targ=e.target?e.target:e.srcElement;
          if (browser == 'NS') cancel_key_event = true; // don't input the "Enter" key
          insert_char( fsinput ?  ToFullShapeLetter(code_field) : code_field, targ);
          clear_all();
          return false;
        }
        return true;
    
      //==F12
      case 123:
      case 57356: // Opera 7.11
      _switchfs();
      cancel_key_event = true;
      return (false);     
        
      // Ctrl
      case 17:
      case 57402: // Opera 7.11
        ctrl_keydown = true;
        break;
    }

    
    if (e.ctrlKey) ctrl_keydown = true;
    return(true);
  }

  function _key_press(e) {
    if(!e) e=window.event;
    var key = (e.which) ? e.which : e.keyCode;
    var c = String.fromCharCode(key);

    // Gecko Ëä²»ÄÜÓÚ OnKeyDown È¡Ïû¼ü£¬µ«ËüÈ´ÊÇÔÚ OnKeyPress Ö®ºó²ÅÖ´ĞĞ¼üµÄ¶¯×÷£¬¹ÊÓÚ OnKeyPress È¡Ïû¼üÒàÎŞËùÎ½¡£
    // µ« Opera ÔÚ OnKeyPress Ö®Ç°ÒÑÖ´ĞĞ¼üµÄ¶¯×÷£¬¹ÊÈÔÎ´ÄÜÈ¡Ïû Backspace µÈ¼ü¡£  
    // ÎªÊ²Ã´²»Á¬IEÒ²ÔÚ´ËÈ¡Ïû¶àÒ»´Î£¿¼´ÔÚOnKeyDownÈ¡Ïû£¬ÔÚOnKeyPressÔÙÈ¡Ïû¡£Òò»á³öÏÖÒ»¸öÎÊÌâ£º¿ìËÙÊäÈëÎÄ×ÖÊ±£¬µÚÒ»¸ö×Ö»á±»È¡Ïû¡£Ô­ÒòÎ´Öª¡£
    
    if (browser == 'NS' || browser == 'OP') {
      if (cancel_key_event) {
        cancel_key_event = false;
        return false;
      }
    }
      
    if (e.ctrlKey) return true; 

    if((key == 39 || key == 34 || key == 46 || (key >= 113 && key <=123)) 
        && e.which == 0) return true; //FF right & pgdn & delete & F2 - F12
    
    if(/[a-z]/.test(c) || (/'/.test(c) && code_field.length > 0)) {
      if (code_field.length < code_len) {
        code_field += c;
        on_code_change();
      }
      return false;
    }

    if (/[0-9 ]/.test(c) && code_field != "") {
      selected(e,c);
      return false;
    }

    if(c && (fsinput || pninput)){
      var targ=e.target?e.target:e.srcElement;
      if (c == '"') insert_char((left_yinhao2 = !left_yinhao2) ? '¡°' : '¡±',targ);
      else if (c == "'") insert_char((left_yinhao2 = !left_yinhao2) ? "¡®" :  "¡¯",targ);
      else if (pninput && /[a-zA-Z0-9]/.test(c)){
        if(pninput) insert_char(c,targ);
        else if(fsinput) insert_char(ToFullShapeLetter(c),targ);
      }
      else if (/[^a-zA-Z0-9]/.test(c) 
                && (e.shiftKey || /[;,.-=`\/\\\[\]]/.test(c))
                && ToFullShapeLetter(c)) 
        insert_char(ToFullShapeLetter(c),targ);
      else return true;
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
      }
    }
    return true;
  }

  function _switchyw(onoff){
    if(typeof onoff == "undefined") ywinput=!ywinput;
    else ywinput=onoff;
    var elem=document.getElementById("ywswitch");
    if(!ywinput){
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="ÖĞ";
      elem.title="µã»÷»ò°´Ctrl¼ü£¬ÇĞ»»µ½Ó¢ÎÄÊäÈë";
      for(var j=0;j<textelem_stack.length;j++){
        textelem_stack[j].onkeydown=LIVECHARS.key_down;
        textelem_stack[j].onkeypress=LIVECHARS.key_press;
      }
    }else{
      elem.style.backgroundColor="#000";
      elem.style.color="#fff";
      elem.innerHTML="Ó¢";
      elem.title="µã»÷»ò°´Ctrl¼ü£¬ÇĞ»»µ½ÖĞÎÄÊäÈë";
      for(var j=0;j<textelem_stack.length;j++){
        textelem_stack[j].onkeydown=null;
        textelem_stack[j].onkeypress=null;
        ctrl_keydown = true;
      }
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
      elem.title="µã»÷£¬ÇĞ»»µ½ÖĞÎÄ±êµã";
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="¡£";
      elem.title="µã»÷£¬ÇĞ»»µ½Ó¢ÎÄ±êµã";
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
      elem.innerHTML="È«";
      elem.title="µã»÷£¬ÇĞ»»µ½°ë½ÇÊäÈë";
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="°ë";
      elem.title="µã»÷£¬ÇĞ»»µ½È«½ÇÊäÈë";
    }
    //if(Focused_area) Focused_area.focus();
    return true;
  }

  function _switchpy(onoff){
    if(typeof onoff == "undefined") pyinput=!pyinput;
    else pyinput=onoff;
    if(pyinput){
      LoadYMtab();
    }
    var elem=document.getElementById("pyswitch");
    if(pyinput){
      elem.style.backgroundColor="#000";
      elem.style.color="#fff";
      elem.innerHTML="Æ´";
      elem.title="µã»÷£¬ÊäÈëºº×Ö";
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="×Ö";
      elem.title="µã»÷£¬ÊäÈëººÓïÆ´Òô";
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
    document.onmousemove = LIVECHARS.move;
    document.onmouseup = LIVECHARS.up;
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
    on_load : function(embed,taggedonly,inputbar) { return _on_load(embed,taggedonly,inputbar); },
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
    on : function(){ return switch_onoff(true); },
    off : function(){ return switch_onoff(false); }
  };

}();
