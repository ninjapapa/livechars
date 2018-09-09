<?php
setlocale("zh_CN.gbk");
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) 
  ob_start("ob_gzhandler"); 
else ob_start();

header ('Content-Type: text/javascript; charset=gbk');
header("Expires: ".gmdate("D, d M Y H:i:s", time()+315360000)." GMT");
header("Cache-Control: max-age=315360000");

$codefile="pyjt.js";
?>
/******************************************************/
/* Real IM stuff */
/******************************************************/

var LCIM = new function() {

  var _version = '1.14';

  <?
    echo file_get_contents($codefile);
  ?>
  _code_field = "";
  _candidates = "";

  _pyinput = false;

  var start_mem = -2;
  var index_mem = 0;
  var start_stack = new Array();
  var index_stack = new Array();

  var phrase_stack = new Array();

  var pytab="a°¢°¡ï¹àÄëçºÇß¹ai°®°¦°¥°£°«°¤°§°¬°­àÈ°©°¨íÁ°¯ö°ïÍ°ªæÈè¨àÉêÓÑÂÞßÚÀan°´°²°¸°¶°µ°±°³°·èñâÖï§°°ÚÏ÷ö³§ÛûÞîáí¹ãðÆang°º°»°¹ëçao°Â°¼°¾°Ä°À°ÁÛêæÁòüá®°ÃÞÖà»÷¡æññúéáÏù°½öË÷éåÛ°¿âÚba°Ñ°Ë°É°Ö°Í°Õ°Î°Ó°Ç°Ô°Ò°Ð°È°Ì°Ï°ÅîÙôÎ°Ê°ÆöÑá±÷ÉÜØå±ÝÃ²®îàÅÃèËbai°Ù°×°Ú°Ü°Ý°ØêþÞã°Þ°ÛßÂ²®ban°å°ë°ì°à°æ°á°ã°è°ß°â°é°ê°ç°ä°íîÓÛàñ­ñ£ô²ÚæãÝbang°ô°ï°î°ö°ð°ó°õ°÷°ñ°ø°ò°ùäºÝòÅÔê´ë«bao±¨°ü±£±¡±§±¦±¥ÅÙ±¬±©°û±¤±¢±«°ý°ú±ªÝá°þð±ìÒÆØÆÙõÀÙèöµÅÚå²æßñÙbei±»±¶±±±³±¸±­±²±´±®±°±¯ñØ±µ±ºßÂã£÷¹ØÃöÍíÕðÇÝíÚé±·Úý±Û±¹ÙÂñÔÝÉben±¾±½±¼±¿êÚÛÎÛÐï¼º»Ìåbeng±Ã±À±Á±Â±Äê´±ÅàÔ°öbi±È±Ø±Ú±Ê±Û±Õ±Æ±Ë±Ü±Ï±×±Ç±Ì±Ò±ÙßÁ±ÎîéÙÂ±ÉßÙ±Ð±Ôèµ±ÓØ°æ¾±Öïõó÷óë±ÝåöÜêóÙî¯áùñÔÝ©æÔääô°ôÅ÷ÂÃÚÃØå¨ÞµÝÉ±Ñ·÷õÏâØã¹åþ±ÍêÚÛýî¢ÜÅ°Þò·bian±ã±ß±ä±à±é±æ±ç±â±Þ±á±èØÒìÔÛÍãê±åçÂöýí¾ÜÐâíóÖíÜòùñÛñ¹biao±í±ê±ë÷§±ìñÑì­æ»ïÚè¼ì®÷Ôì©ñ¦ïðæôî¼àÑbie±ð±ï±ñõ¿±îbin±ö±õ±ó±ò÷Þ±ô±÷éëáÙë÷çÍçãÙÏïÙéÄ÷Æbing²¢²¡±ø±û±ù±þ±ú±ýÙ÷±üÞðÆÁÚûðÚéÄbo²¨±¡²®²¥²¦°þ²©²´²¬²µ²£²ª²±²°²¯²«²§ô¤²­õËà£âÄ²³²²îàë¢²·õÛ²¤íçÙñÆÇð¾éÞØÃêþõÀ°ã°Ø°×ÞµÝ©ÆÂbu²»²¿²¼²½²¹²¶²·²¾îÐ²ºîß²À²¸ß²±¤åÍõ³êÎê³ÆÒca²Áàêíå²ð²ëcai²Å²É²Ë²Æ²Ä²Ê²Ã²Â²È²Ì²Çcan²Ð²Ï²Î²Ò²ÍôÓ²Ó²Ñè²²ôæî÷õåîcang²Ø²Ö²Ô²ÕØ÷²×cao²Ý²Û²Ü²Ùäî²Úô½àÐÜ³ó©ce²à²â²á²ß²ÞØÖâücená¯ä¹²Îceng²ãÔø²äàácha²î²é²è²å²ì²ç²æè¾²í²ê²ïÉ²é¶éßé«ãâàêæ±²ëâªñÃÔûïÊïïâÇÀ¯chai²ñ²ð²î²òîÎðûÙ­ò²chan²ú²ô²ø²ù²ü²óìøäý²ö²õ²÷ÚÆó¸âãâÜ²ûåñæöïâêèõðå¤æ¿ÙæÝÛµ¥åîchang³¤³§³£³¡³ª³¦³¢²ý³¥³«³©³¨æ½êÆ²þØöãÑë©öðã®ÌÈÜÉÉÑÝÅÛËáäâêæÏchao³¯³¬³´³±³®³­³³³²³°êËñéâ÷ìÌ´Â½Ëche³µ³·³¶³¹³¸³ºíºÛå³ßåøÕÞchen³Â³¼³¾³Á³Ä³¿³ÃÚß³½å·³ÆàÁÞÓè¡³À³ÓÚÈö³³»é´í×Ø÷ÉòÉïcheng³É³Æ³Ç³Ê³Ë³Ì³ÐÊ¢³Å³Ï³È³Ó³Î³ÍØ©³ÑîõòÉîª³ÒèßëóñÎÛôîñèÇõ¨êÉàáä¥chi³Ô³ß³Ö³Ý³Ø³Ù³à³á³Û³â³Õë·³Ú³ÜßêâÁàÍ³×ó×³Þ³ãß³ñÝ÷Îôù¶ßò¿ó¤ÙÑÜÝÛæõØí÷æÊÛ­ð·óøà´Ü¯ñ¡áÜíôõ½ÀëÞõ²çðächong³æ³åÖØ³ä³ç³èï¥ã¿ô©ô¾âçÖÖÓ¿Üû¼ëchou³é³ô³ï³î³ó³ð³í³ñ³ò³ì³ê³ëñ¬Ù±ã°àüöÅäåöæchu³ö´¦³ý³õ´¥³þ³û´¢³úÐó´¡³ø÷í´£³÷³üñÒç©âðÛ»èÆ´¤èúãÀ³ùåøØ¡éËòÜõéÚ°chuai´§õßà¨àÜÞõëúchuan´¬´«´©´¨´®´­ë°´ªô­îËâ¶çÝå×ÞÅchuang´²´°´³´´´¯´±âëÇÀ×²´Ñê¨chui´µ´¸´¹´·´¶é³×µÚïé¢ç¶chun´º´¿´¼´½´À´»´¾òíðÈÝ»chuo´Áà¨ê¡´ÂöºõÖci´Ë´Î´Ê´Ç´Å´É´Ì´Í´Æ´Ã´È´ÄìôßÚôÙËÅðËôÒÜë×È²î²Þòºcong´Ó´Ô´Ð´Ï´Ò´ÑÜÊäÈçýèÈæõè®cou´Õëíé¨ê£cu´Ö´Ù´×´Øõ¾â§×äõíÝýáÞéãõ¡´íÇ÷È¤éÊïßcuan´Û´ÜÙàß¥ÔÜ´Úìàïécui´ä´ß´à´Þ´Ý´â´ãÝÍßýéÁ´áË¥ö¿è­ã²ë¥ÇÁcun´å´æ´çââñå¶×cuo´í´êï±´ë´é´ì´èïóõãáÏëâõºðîØÈðûda´ó´ò´ï´ð´îßÕàªóÎâòñ×ÞÇí³ðã´ñ÷²æ§÷°Ëþîãdai´ø´ú´ý´ü´÷´ô´û´ó´ù´þá·µ¡ß°÷ìÜ¤´õ´öåÊß¾çªçéæædanµ«µ¥µªµ­µ°µ£µ¯µ¤µ¨µ©µ¢µ§Ê¯ééµ®à¢µ¬íñóìÝÌØéå£ð÷êæµ¦ÙÙñõÚàðã¾®îãdangµ±µ³µ²µµµ´ñÉîõÛÊå´ÚÔí¸ÝÐdaoµ½µÀµ¹µ¶µ¼µºµ¾µÁë®µ·µ¸µ¿ß¶µ»âáìâôîàüdeµÄµÃµØµÂµ×ï½deiµÃdengµÈµÆµÇµÅµËµÉàâµÊê­íãô£ïëáØ³ÎdiµØµÚµÍµ×µÛµÐµÎµÜµÖµÝµÌµÙµÑµÄµÓµÒµÏíÚÚ®æ·µÞµÕàÖØµÛ¡ÚÐÙáíÆèÜµÔôÆ÷¾ÌáÝ¶íûé¦êëïáÛæÑ¿êûìØdiaàÇdianµãµçµæµêµäµâµîµáµßµèµàáÛµéµíµìô¡µåõÚñ²µëñ°ÚçÛãîäçèØ¼diaoµôµ÷µõµñµïµöµóµðöôµòõõï¢Äñîöð·dieµùµþµüµøµûµúöøµýð¬Ûìñóà©ëºÞéõÞÜ¦õÚding¶¨¶¥¶¡¶©¶¤¶§¶¢¶¦¶£ñôëëçàà¤ðÛîúíÖôúØêî®diu¶ªîûdong¶¯¶«¶¬¶´¶®¶³¶­¶°ë±ßË¶²á¼íÏëË¶±ëØâºÛíá´ð´dou¶¼¶·¶¹¶¶¶¸¶ºñ¼¶µÝúóû¶»ò½¶Ádu¶È¶¼¶Á¶À¶Å¶¾¶Â¶½¶É¶Ç¶Æ¶ÄóÆ¶Ãó¼äÂ¶Êë¹à½¶¿èü÷ò÷ÇÜ¶¶ÙôîíØduan¶Î¶Ë¶Ì¶Ï¶Í¶ÐìÑé²óý×¨dui¶Ô¶Ó¶Ñ¶ÒíÔí¡¶Øïæí­dun¶Ö¶Ù¶×¶Ø¶Û¶Õ¶ÜìÀ¶Ýíïïæ¶Úãçíâí»õ»duo¶à¶á¶ä¶ã¶âõâ¶ç¶æ¶é¶è¶Þ¶åÍÔîìßÍèÞãõñÖãûßáç¶¶ß¶Èe¶î¶ñ¶í¶ï¶ö¶ì¶ê¶õ¶ðÅ¶ßÀ¶òåí¶ó¶ëãµïÉëñ¶ôÝàéîÛÑØ¬öùò¦ðÊï°æ¹ãÕÚÌÝ­ÜÃ°¢ÑÆòÂï¹ÚÀíÒeiÚÀenàÅ¶÷ÝìÞôßíer¶ø¶þ¶ù¶û¶ú¶ü·¡öÜÙ¦ð¹åÇçíîï¶ýfa·¨·¢·§·¥·£·¦·¤ÛÒ·©íÀfan·´·²·­·¸·¹·¶·±·µ·¬·º·«·³·ª···°·¯·®ÞÀÞ¬èóî²á¦áëìÜë¶õìÈ®fang·Å·½·À·¿·¼·Ä·Ã·ÂöÐ·»·ÁèÊîÕô³áÝÚú·¾ØÎfei·Ç·É·Ñ·Ï·Ê·Ë·Î·Æ·Ðåúö­·Íáô·ÈìéäÇòãç³ëèóõöîôä·ÌÜÀé¼ïÐì³ã­ðòâöÅáíÉfen·Ö·Ý·Û·à·Ó·Ü·Þ·ß·×·Ø·Ò·ÙÙÇö÷·Õ·Úèû÷÷å¯·Ôçãfeng·ç·â·ì·å·î·ï·ë·á·è·æ·ä·êÙº·í·ã·éí¿ããßôÛºÝ×fo·ðfou·ñó¾î·fu¸±¸´¸º¸®·ò¸»·ù¸½·þ¸¶¸£¸¸·ü¸¡¸¨·ö¸¯¸µ¸°¸³¸¹·ú¸²·ð¸¥¸¾¸§¸©·û¸¦íÉ¸ª·÷·ý¸«·õ·ó¸¿Û®æÚ¸··ô·øôïåõìðð¥ÙìöÖÝÊõÆèõç¦¸¼¸ÀíêòðÝ³õÃïûæâíëß»á¥Ùëò¶òÝç¨êç¸¢ÜÞ¸­âöî·¸¤ÞÔöûÜ½òóäæ¸¬ÜòÜÀß¼ÆÎÊÐga¸Â¸Á¼ÐîÅæÙÙ¤æØÔþê¸¿§¸ìÞÎßÈ¼Ûgai¸Ã¸Ä¸Ç¸Æ¸ÅØ¤Úë¸ÈÛò½æêàê®ëÜgan¸É¸Ë¸Ð¸Ï¸Ò¸Ñ¸Ê¸Î¸Ì¸Ó¸ÍôûðáÜÕß¦í·ç¤Ûáä÷äÆêºÇ¬éÏãïÞÏgang¸Ö¸Õ¸×¸Ù¸Û¸Ú¸Ü¸Ô¸Ø¿¸óàî¸í°ô­gao¸ß¸ã¸æ¸å¸âê½¸á¸àï¯¸ÝÚ¾çÉ¸ÞÛ¬Øº¸äéÂÞ»éÀð©½Áge¸ö¸÷¸ñ¸ô¸è¸î¸ç¸ï¸õ¸ê¸é¸ì¸ó¿©¸ëïÓ¸ðëõÜªíÑÛÁô´÷ÀàÃºÏæüë¡ØîÒÙñËÛÙ¸ò¸íò´Øªò¢¸ÇºÊgei¸øgen¸ú¸ùßçÝ¢Ø¨ôÞgeng¸ü¸û¹£¸ý¹¢¸þ¹¡âÙßì¾±ç®öáØ¨¾¬gong¹²¹¤¹«¹©¹¦¹¥¹­¹¬¹¯¹±¹°¹§¹ªö¡¹¨¹®ëÅçîºìò¼ÞÃ¿ó¿¸¸Øgou¹»¹µ¹·¹³¹¹¹º¹´¹¸¹¶æÅçÃóÑì°ØþèÛêí÷¸óô¾äá¸Ú¸åÜñðgu¹Ê¹Å¹É¹Ì¹È¹Ç¹Ä¹Ë¹À¹Â¹Í¹ÃîÜ¹¿ïÀ¹¾ì±ðóöñ¼Öî­¹½¹¼ðÀÚ¬¹ÆÝÔ¹ÁáÄõýòÁëûêôð³éïßÉî¹êöØÅ÷½ãéôþèô¼Ò¸æ»¬Í¹gua¹Ò¹Î¹Ï¹ÑßÉ¹ÓØÔ¹ÐÚ´èéëÒð»À¨ÎÏñøÊÊëáguai¹Ö¹Õ¹ÔÞâguan¹Ü¹Ù¹Ø¹Û¹Ý¹à¹Þ¹Ú¹á¹ßîÂ¹×ÙÄÞèäÊ÷¤Ý¸ðÙñæÂÚÂãëäguang¹â¹ã¹äßÛë×èæáîgui¹é¹ó¹è¹æ¹í¹ð¹ì¹ò¹ê¹ñ¹î¹å¹çöÙ÷¬¹ë¹ïèíóþêÐð§å³È²ØÐØÛ¹ôêÁæ£âÑ¿þãígun¹ö¹÷¹õÙòíÞöççµguo¹ý¹ú¹û¹ø¹ù¹üßÃâ£ÎÐòåÙåñøé¤ë½áÆÛöòäàþÞâï¾ha¹þîþ¸òÏºhai»¹º£º¦º¢º¤àË¿Èº¥º§º¡õ°ºÙëÜò¤hanº¬ººº°º«º®º¸º¹ºµº¯º±º´ìÊº¶º²º­º©ò¥º·º³òÀ÷ýº¨å«ñüÚõãÛÝÕêÏÞþºªºÍò¢¸É³§áíhangÐÐº½º¼º»ç¬ñþãì¿ÔÏïèìôû°¹haoºÃºÅºÁºÄºÀºÂºÆå°Ýïàãº¾ð©Þ¶º¿òºàÆ¸äê»å©ºÑò«òÂºÔº×heºÍºÏºÎºÓºËºÈºÇºÖºÉºÐºÕºØºÌàÀò¢ÛÖº×ºÔÛÀãØêÂºÑÏÅîÁºÒÚ­ºÊôçæü¸ÇºÂÐ«à¾heiºÚºÙàËhenºÜºÞºÝºÛhengºáºãºßºâºàçñèìÞ¿ÐÐç¬hongºìºéºæºäºçºåºèºêºëÚ§ãüÙäÙêÞ°Þ®Ý¦ãÈ¹¯´¥houºóºñºòºîºíºðºïÜ©ö×ááô×÷¿ðúåËóóhu»§»¡»¥ºþºõºú»¢ºôºö»¤ºý»¦ºøºüõú÷½Ùüìæìèìï»£éõìÎä°ßüã±óËäïìÃâïì²õ­àñº÷éÎð×çúºûð­ò®ðÉºùâ©á²ºËðÀÏ·ºÍÐíhua»ª»¯»¨»°»­»®»¬èë»©í¹îüæè»«»íhuai»µ»³»´»±õ×»²»®»°Ø«huan»»»¹»·»¼»º»¶»À»½ä½»Â»ÃÛ¨»¸öéß§åÕ»¿÷ßäñà÷Û¼ïÌ»¾çÙå¾»ÁÝÈâµä¡ÍîÛùhuang»Æ»Ê»Ä»É»Å»Î»È»Ì»Ñ»Ï»Ç»Íöü»ÐäêåØëÁóòäÒáåè«Úòó¨ñ¥»Ëhui»á»Ø»Ò»Ý»Ù»Ó»Ô»ã»æ»Û»ÚÞ¥åç»Õ»Ö»à»ß»äèíí£»âà¹ä«»Þ»Üä§êÍÚ¶»åßÔÜîó³ßÜçÀÀ£çõÜö»×ãÄò³÷â»²¶é³æËëhun»ì»é»è»ê»ë»çäããÔÚ»âÆçõ¹õhuo»ò»î»ð»õ»ï»ñ»ö»ô»ó»íïìïÁñëºÍàëÞ½â·ó¶ß«îØØåÛÖ»¤í¹¹èji¼°¼´¼¸»ú¼«¼È¼¶¼Ç»ý»ù¼¦¼¯¼Æ¼Á¼±¼¾¼Ì¼·¼Í»÷¼Ä¼Ã¼Ê¼®¼º¼£¼ªÆæ¼¤¼­Ø½¼¼¼¨¼À¼²¼¡¼¢Ïµ¼½¼¹¼¿ñ¤¼¬¼É¼Å¼§»ûóÅêå÷ä»ü¼³¼©êªÙÊ¼µß´ôß¼Ë»þ¼»æ÷Ø¢¼¥ïúä©öêÞáê«ö«ð¢õÒßóåì¸øßÒî¿½åí¶÷ÙöÝé®¼ÂéêçÜáÕÛÔÆä»øÙ¥ØÞÞªÝðì´Æëò±ÜùØÀê÷Ü¸õÕá§ßâÜÁêéÚµÆÚóÇçá¸ï³Ô¾ÓÆå½à½ÕâÑðÝÆïjia¼Ò¼Ó¼×¼Ü¼Û¼Ù¼Ð¼Ø¼Ñ¼Ý¼Þ¼Ö¼Î¼Õí¢¼Ô¼ÚïØåÈ¼ÏîòáµëÎä¤Û£ðèê©ðýÝçôÂçìóÕõÊñÊòÌÇÑØÅÐ®Ù¤ÏÄîþjian¼ä¼û¼þ¼õ½¨½¥¼î¼â¼ò¼æ¼ì¼ç¼ô¼ü½¡¼á½£¼à¼ø¼ï½¢¼í¼ë¼ú¼ý¼ð¼é¼å½¦¼ñê¯¼ù½§¼ãåÀ¼ßÚÉ¼ö¼óïµ½¤¼÷¼èàîôåêùëìóÈöä¼êäÕèÅ÷µÝóÇ³ÙÔçÌñÐõÂë¦Þöê§ÛÈÝÑé¥å¿íúêðÚÙðÏõÝÏÐjiang½«½²½­½µ½ª½¯½¬½±½´½©½®½³½°ç­ñðêñä®ôÝçÖíäÇ¿Üüôøºçjiao½Ï½Ð½Ç½»½Å½Ì½º½½½¹½Ê½¸½É¾õ½Ñ½Î½Á½¿½Ë½À½Ã½ÆÐ£½¾½ÂÞØÙ®½¼½·½È½ÍöÞ½¶òÔáèäÐð¨æ¯æùðÔõÓÜúôéá½ÙÕàÝÜ´õ´ë¸½Äjie½â½Ú½Ó½á½×½Ô½ç½è½ì½Ø½Ö½ã½é½Ò½Ü½à½ß½Ý½Ù½ä½ÕàµôÉèîíÙò¡¿¬¼Ò½æ½ëÚµ½ÞðÜ¼ÛÚ¦æ¼ò»Þ×à®½Û÷ºöÚ½êæÝÙÊ½åæ¢ÙÉèÎß¢ßÒjin½ø½ü½ð½ï½ñ½ô½ö¾¡½þ½ú¾¢½û½î½ò½í½õ½÷èªêî½óñÆ½ùñæ½ýÝ£æ¡âËÝÀÚáéÈàäêáçÆâÛîÄjing¾­¾¶¾«¾®¾¹¾³¾©¾»¾²¾¥¾ª¾´¾µ¾°¾±¾§¾¯¾º¾£ëæ¾¦¾¢ØÙëÖ¾¨¾¸ÙÓö¦Ý¼â°æº¾·ìºã½¾¬åòëÂãþÚå¾¤åÉ¸ü÷ôóäÌþjiong¾½åÄ¾¼ìçêÁ‡åjiu¾Í¾Å¾É¾Æ¾Ã¾È¾¿ôñ¾À¾¾¾Ë¾Çð¯ÙÖ¾Ê¾Âèê¾Ì¾Îà±¾ÄðÕ¾ÁãÎ÷ÝèÑõíäÐju¾Ý¾Ö¾ä¾Ù¾à¾ß¾ç¾Û¾Ó¾Õ¾Þ¾Ø¾â¾ã½Û¾Ü¾×¾åîÒ¾Ð¾Ï¾Ôõ¶åáñÕÚªéÙ¾áé§¾Òï¸ÇÒ³µ¾æöÄåðÞäöÂè¢ö´¾ÚÜÚ÷¶¾ÑÜìé·ñÀì«é°ÙÆôòêøõáÜÄ¹ñèÛ×ãÇùÝÏjuan¾í¾è¾ê¾î¾ëÈ¦¾ìïÔ¾éáúèðöÁîÃÛ²ä¸ïÃÉíjue¾ö¾ø¾õ¾ò¾ôàÙ¾ðÞ§¾ï½ÀØÊ¾ó¾÷ïãçåèöõê¾ñáÈõûâ±ìßÛÇÚÜéÓØãæÞ½Åàå½Çàµó½÷¬È²Ü¥jun¾ü¾ù¾ý¾ú¿¤¿¡¾þ¿¥¿¢¿£¾û÷åÞÜñä¹êöÁóÞÞ¦¾½ka¿¨¿¦ßÇØûëÌ¿§¿©¹þ¿È÷Äkai¿ª¿­¿«¿¬¿®âýîøï´ØÜâéÛîïÇÝÜ¿Èí¬Æñkan¿´¿³¿¯¿±¿°¿²Ù©ê¬ãÛ¼÷î«íèÇ¶Ý¨ÏÝÛÉkang¿¹¿µ¿¸¿»¿·îÖØø¿¶ãÊ¿ºkao¿¿¿¼¿¾¿½èàêûîíåêke¿É¿Æ¿Ç¿Ì¿Î¿Å¿Í¿Ã¿Ë¿Â¿Á¿È¿Ä¿ÊäÛë´î§ò¤éðà¾ñ½ï¾¿Àã¡ðâá³òÂç¼ïýîÝòòæìçæ÷ÁºÇåí¿¦ÛÁken¿Ï¿Ñ¿Ò¿ÐñÌö¸keng¿Ó¿Ôï¬kong¿×¿Õ¿Ö¿ØÙÅáÇóíkou¿Ú¿ÛóØ¿Üßµ¿ÙíîÞ¢ÜÒØþku¿à¿Þ¿â¿Ý¿ã¿á¿ßØÚ÷¼Ü¥à·ç«¿ækua¿ç¿å¿ä¿è¿æÙ¨kuai¿ì¿é¿êØáëÚÛ¦¿ëáößàä«»áèí¹ôßÃkuan¿í¿î÷Åkuang¿ó¿ò¿ö¿ñ¿ð¿õ¿ôæþÚ¿¿ïÚ÷ÞÅêÜÛÛÚ²ßÑkui¿÷À£¿ý¿úÀ¡¿ü¿ûà°¿øÀ¢Ùçã´ÞñØÑÚóåÓã¦ñùòñØ¸êÒÝÞõÍóñî¥¿ùà­¿þóåkunÀ¥À§À¦À¤õ«çûãÍï¿ã§÷ÕöïºøkuoÀ©À«À¨ÀªÊÊòÒèélaÀ­À²À¯À°À±Âäñ®ðøååê¹ØÝíÇÀ¬À®laiÀ´ÀµÀ³ñ®ïªáâäþêãô¥áÁíùäµlanÀ¶À¼ÀÃÀ¸ÀºÀ¹ÀÄÀÂÀÀÀÁá°À¿À½ïçî½ìµé­À»À·ñÜäíÀ¾langÀËÀÇÀÉÀÊÀÈà¥ÀÅãÏÀÆï¶òëÝ¹ïüÝõlaoÀÏÀÍÀÎÀÌÀÔßëÀÐÀÓõ²ÀÑðìÀÒï©ÂäîîñìáÀèáÁÊÂçleÁËÀÖÀÕÀß÷¦ØìàÏãîß·À¬ÛøÞÛleiÀàÀÛÀ×ÀáÀßÀÝÀØÀÕÀÙÀÞõªàÏÀÚÙúæÐñçéÛÀÜÚ³çÐäðlengÀäÀâÀãã¶Ü¨ÁâliÀïÁ¦Á¢ÀýÀîÀûÀëÀíÁ£ÀñÁ¨ÀúÀçÀöÀôÁ¥ÀèÀøÀåÀæÀðï®ó»Á¡À÷ÀõÁ¤éöÀùÀéèÝÙµÀêôÏÛªæËæêõ·Ý°÷¯Ù³òÃÞ¼óÒíÂäàîºÀüõÈóöö¨ð¿òÛ÷óà¬Àóî¾çÊß¿ÝñÀþìåÀìèÀÁ§å¢áûæ²ðÝÛÞðßÜÂöâÀòà¦åÎØªã¦êóîÇíÇliaÁ©lianÁ¬Á³ÁªÁ·Á´Á¶Á®Á«Á±öãÁ¯ÁµÁ­Á²é¬Á°ì¡äòçöó¹ñÏéçÞÆÝüå¥ñÍì¢Ý²liangÁ½Á¿ÁºÁ¸ÁÁÁ¾Á©Á¼Á¹Á»ÁÂÁÀõÔé£÷ËÜ®Ùûö¦Ý¹liaoÁÏÁÉÁËÁÅÁÄÁÈÁÆÁÃàÚÁÎÁÇÁÌå¼Þ¤îÉÁÍÁÊâ²ðÓçÔÞÍðÒlieÁÐÁÑÁÒÁÓßÖÁÔÙý÷àõñä£ôóÛøÞælinÁÖÁ×ÁÚÁÙÁÜÁÛÁÕÁàÁØâÞÁÝéÝî¬ÁßãÁÁÞßøåàôÔõïá×÷ëì¢ê¥ÝþÂélingÁíÁãÁîÁìÁäÁéÁêÁåÁáÁëÁèç±ÁâãööìÁæñöèÚÀâôáèùÜßßÊÛ¹òÈê²àòÁçÁàÁ¯liuÁùÁ÷ÁôÁõÁòÁïÁøÁóÁöåÞç¸ä¯Â½öÌìÖðÒÁñïÖæòÂµì¼ï³Áð±ÃÃ­±¥ÛÏlongÁúÁýÂ¡Â¢Â£ÛâÁûÂ¤ÁþÅªíÃñªãñÜ×ÁüëÊèÐççlouÂ¥Â©Â¶Â§Â¨à¶ÂªñïÂ¦ïÎáÐÝä÷Ãò÷ðüÙÍluÂ·Â¯Â½Â³Â¼Â¶Â¬Â²Â«Â»Â¹Â±Â®Â°Â´Â­ÂµöÔéÖÂÌïåÂ¾ß£ãòÛääõè´Â¸óüðØÂºê¤åÖëÍèÓôµààðµëªéñäËéûÞ¤ÁùÂÈ½ÝluanÂÒÂÑèïÂÍÂÐöÇÙõæ®ÂÏð½ÂÎlueÂÔÂÓï²ÁÌlunÂÛÂÖÂ×ÂØÂÕÂÚÂÙàðluoÂäÂÞÂåÂÝÂçÂÜÂàÂæÂáÂãÂâÂßíÑëáÙÀÞÛ¿©ñ§ÞûöÃé¡ïÝÜýäðÙùãøâ¤çóÀÓõÈÀÒÀÆñËlvÂÊÂÁÂÉÂÌÂÈÂËÂÀÂÇÂÃÂ¿ÂÅÂÂÂÄÂÆÞÛãÌéµñÚëöïùÙÍÂ¦maÂðÂíÂèÂïÂîÂéÂëÄ¨áïÂìè¿Âê÷áó¡Ä¦Ã´æÖßémaiÂòÂôÂóÂñÂõÂößéÝ¤Û½ö²manÂúÂýÂüÂùÂ÷ÂþÂû÷©òýá£çÏÃ¡Ü¬÷´ÂøïÜò©ì×ÂñõçmangÃ¦Ã¢Ã¤Ã£Ã§òþÃ¥ÚøäÝíËmaoÃ«Ã°Ã±Ã³Ã¯ÃªÃ¨Ã²Ã©Ã¬Ã­í®Ã®÷Öá¹ì¸î¦êóè£ã÷Üâë£òúó±êÄÙómeÃ´÷ámeiÃ¿ÃÀÃ»ÃºÃ·Ã¸ÃÃÃ¾Ã¹Ã¶Ã¼é¹Ã½÷ÈÃÄÃÁÃÂÝ®ïÑÃµñÇä¼ÃÕâ­áÒÃÓðÌäØè£menÃÇÃÅÃÆìËÞÑí¯îÍmengÃÉÃÎÃÍÃÏÃÌÃËÃÈòµÛÂó·íæÞ«òìëüÃÊô¿Ýùô»ãÂÃ¥miÃ×ÃÜÃØÃÔÃÝÃÛÃÐÃÖÃÙÃÕÃÑÃÚÃÓÃÒëßåôØÂ÷çôÍà×ÞÂåµâ¨ãèßä÷ãìòÚ×ôémianÃæÃÞÃâÃåÃßÃàÃáÃãííÃäãæö¼äÅäÏëï¸©miaoÃçÃëÃíÃîÃèÃìçÑÃêåãÃéíµç¿íðèÂðÅß÷èÃmieÃðÃïóúßãóºØ¿ØÂminÃñÃôÃöÃóÃòãÉçÅÃõíªçëçä÷ªãýáºÜåö¼äÅmingÃûÃ÷ÃüÃùÃúÜøÚ¤î¨Ãøäéõ¤êÔmiuÃýçÑmoÄ©Ä£Ä¥Ä¤ÃþÄªÄ¨Ä«Ã»Ä¬Ä¦Ä®Ä­Ä§ÝëÄ¢ÚÓâÉÄ°ñòÄ¡éâºÙï÷ïÒÎÞõøñ¢õöÜÔæÆÍòæÖÄ¯Ã°÷áÂöºÑÃ´ÃÃßémouÄ³Ä±íøÄ²ßèöÊòÖÙ°çÑòúÄµmuÄ¾Ä¶Ä¿Ä¸Ä»Ä·ÄÂÄ¹Ä£ÄÁîâÄ¼Ä½ÄºÄÀÄ´ãåÄµß¼ÛéÜÙØïë¤Ä²ÀÑðÍnaÄÇÄÃÄÄÄÆÄÉÄÅÄÈÞàïÕëÇñÄÄÏÚ«naiÄËÄÍÄÌÄÎÄÊÝÁØ¾ÜµèÍÙ¦ÄÄæØnanÄÏÄÑÄÐàïéªà«òïôöëîàînangÄÒêÙàìß­âÎnaoÄÔÄÖÄÓÄÕîóÄ×Ø«ßÎÛñíÐòÍâ®è§èãneÄØÚ«ÄÅÄÄÄÇneiÄÚÄÙÄÄÄÇnenÄÛí¥nengÄÜÅ¢ÜÑniÄãÄàÄáÄâÄæÄØÄÝÄåÄßÄÞÄäîêÄçíþêÇöòÛèÙ£â¥ì»âõìònianÄêÄîð¤ÄíÄëØ¥ÄéÄìöÓÄèéýÛþÕ·öóÕ³niangÄïÄðniaoÄñÄòëåÜàôÁæÕÄçnieÄøÄóÄùÞÁÄôÄõÄöõæô«Úíà¿Ä÷ò¨éÞØ¿ninÄúí¥ningÄýÄþÅ¡ÄüÅ¢Äûå¸ßÌñ÷ØúniuÅ£Å¤Å¦æ¤Å¥ÞÖâîáðnongÅ©ÅªÅ¨Å§Ù¯ÞÃßænouññßænuÅ¬Å­Å«åóæÛæÀæåßÎnuanÅ¯nueÅ°Å±ÚÊnuoÅµÅ²ßöÅ³Å´ÙÐï»ÞùÄÈnvÅ®îÏí¤ô¬âîoÅ¶àÞà¸ouÅ·Å¼ÅºÅ¹Å½ñîÅ»Å¸ê±Ú©âæÇøàÞpaÅÂÅÀ°Ò°ÇÅÁÅ¿Å¾èËóáÝâÅÉÅÃîÙpaiÅÉÅÅÅÄÅÆÆÈÝåÙ½ÅÇßßÅÈßÉÅ¾panÅÌÅÐÅÎÅÑÅÊÅËÅÏÅÍÅÖó´ãÝãúõçÞÕñáñÈ°ã°â·¬ÅöpangÅÔÅÖÅÓÅÒÅÕó¦äèåÌ°õáÝÝò°òpaoÅÜÅÝÅÚÅ×ÅÙÅÛáóðåëãâÒÞËÅØöµ°üpeiÅäÅàÅãÅåÅßÅâÅÞÅæö¬ÅáàÎïÂì·õ¬àú»µÚüíÕpenÅçÅèäÔpengÅöÅïÅõÅðÅíÅîÅòÅôÅñÅóÅëÅìÅéâñàØó²ÅêÜ¡piÅúÆ¤Å÷Æ¥Åû±ÙÅüÆ¢Æ©Æ¨Æ£Æ§îëñ±Ø§ÅøÅùÜ±Åþõùç¢àèÛ¯î¼æÇÛÜÚüèÁÜÅÛýò·ß¨ê¶ÅýØòÚðâÏòçÆ¡î¢äÄÆ¦Úé·ñßÁñÔñâ»µ±»°Õå¨ÜÖpianÆ¬ÆªÆ«Æ­ôææéÚÒëÝõäêú±â±ãçÂ±épiaoÆ±Æ®Æ¯î©Æ°ØâæÎçÎàÑóªÆÓéèÝ³æô÷ÔpieÆ²Æ³ÜÖë­Ø¯pinÆ·Æ´Æ¶ÆµÆ¸æÉé¯êòæ°ò­ÞÕ±ôpingÆ½Æ¿Æ¾ÆÀÆ¼ÆÁÆºÆ»Æ¹öÒèÒæ³Ú¢Ù··ëpoÆÆÆÂÆÄÆÈÆÅÆÃÆÇîÞîÇÆÉÚé²´óÍØÏð«ê·çêÛ¶·±ãøÆÓ²¨ÆÊpouÆÊÙöÞåê³puÆÌÆÕÆ×ÆËÆÍÆÔÆÑÆÏ¸¬ÆÖÆÓÆØÆÒïèàÛäßè±ÙéÆÎõëÆÙÆÐïäå§ë«±¤±©á¥îÇõ³qiÆäÆðÆßÆøÆ÷ÆÚÆëÆûÆæÆìÆöÆÞÆåÆñÆïÆôÆáÆúÆòÆçÆÛÆí÷¢ÆîÆùÆõÆóÝÂÆèí¬ç÷ç²ÆÝÆüÆêÆÜñýÆàÆãáªéÊçùØÁíÓêÈàÒØ½æëè½ÆéÞ­Ûßôëì÷ÆâèçÙ¹Ü»á¨ä¿÷èÜÎÆýòàÝ½ÝÝôìãàòÓ»ü¼©ì¥õèÜùÏªÖ¦Ö»qiaÇ¡Æþ¿¨Ç¢ÝÖ÷ÄñÊqianÇ°Ç§Ç®Ç¦Ç³Ç±Ç©Ç¨Ç¬Ç£Ç·Ç«ÏËÇ¶Ç¯Ç´Ç²Ç¥ÜÍÇ­Ç¸Ü·Ù»ÇµÜçÇªÇ¤ò¯îÔÙÝÞçåºã¥ç×í©á©ëÉå¹ã»å½ÚäèýóéêùÝ¡ÞþôÇâãqiangÇ¿Ç½Ç¹ÇÀÇ»Ç¼ÇºôÇïêéÉæÍÇ¾ïÏïºìÁê¨õÄòÞñßãÞ½«ãÝqiaoÇÅÇÆÇÃÇÉÇÇÇÌÇÈÇËÇÂÇÏÇÄ¿ÇÇÍÇÎéÔÇÊõÎÜñã¸ØäÇÁíÍÈ¸çØã¾ÚÛ÷³Ú½á½½¶ÈµqieÇÒÇÐÇÔæªïÆÇÑÇÓêüã»Û§ã«óæôòÙ¤ÆöÆõÆãqinÇ×ÇØÇÙÇÖÇÝÇÚÇÕÇÜÇÞñûÜËÇßàßÞìÇÛôÀï·ßÄäÚéÕàºòûâÛñæqingÇåÇëÇàÇáÇâÇéÇäÇìÇãÇçÇêÇèóä÷ôÇæóÀíààõòßöëÜÜö¥éÑôìÇ×qiongÇîÇíñ·ÜäòËÚöõ¼öÆóÌÜºqiuÇóÇòÇïÇðÛÏÇñÇôòøåÙôÜÇõôÃÙ´é±ÇööúòÇ÷üåÏáìò°êääÐ¹ê³ðÜ´quÈ¥ÇøÈ¡ÇúÇ÷ÇþÇýÇüÈ¢È¤ÇûöÄð¶Çùáéìîêïë¬ó½ØÎè³÷ñÞ¾íáñ³òÐá«Þ¡ëÔÈ£ôðãÖÛ¾Ú°ÜÄÐçÆáÛÉquanÈ«È¨È¦È°ÈªÈ­È©È®È¯ÜõòéîýÈ§÷ÜóÜÈ¬Ú¹î°éúãªç¹¾íÛÚqueÈ´È·È±È¸ãÚÈ²ÈµÈ¶È³ã×í¨¿ÇÇÓã¡qunÈºÈ¹åÒ÷åranÈ»È¼È¾÷×È½òÅÜÛrangÈÃÈÂÈÀÈ¿ÈÁð¦ìüraoÈÆÈÄÈÅèãæ¬ÜéòÍreÈÈÈÇÈôßörenÈËÈÎÈÏÈÊÈÌÈÐÈÍÈÉñÅÜóØðïþÝØéíÈÒÈÑâ¿¶ùÁÞí¥rengÈÓÈÔriÈÕrongÈÜÈÛÈÝÈÞÈÙÈÚÈØÈÖéÅÈ×ÈßëÀáõòîáÉrouÈâÈàÈá÷·õåôÛruÈçÈëÈéÈåÈêÈèÈãÈäï¨Èìä²äáÝêå¦ÈæÞ¸ò¬ñààéçÈÅ®ÄÃruanÈíÈîëÃÈäruiÈðÈñÈïî£ò¸èÄÞ¨ÜÇrunÈóÈòruoÈôÈõóèÙ¼saÈöÈøÈ÷Ø¦ØíëÛìªêýõÁsaiÈûÈüÈúÈùÉ«àçË¼sanÈýÉ¢É¡ÈþË®ãßë§âÌáêôÖ²ÎsangÉ£É¥É¤ÞúòªíßsaoÉ©É¨É§É¦ëýÉÒðþçÒÜ£öþçØËÒseÉ«É¬ï¤ÉªØÄð£Èû»øsenÉ­sengÉ®shaÉ±É³É°É´É¶ÉµÉ²É¯ö®É·àÄððÏÃöèÉ¼ï¡ßþì¦ôÄêýshaiÉ¸É¹É«õ§÷»É±shanÉ½ÉÆÉÈÉÁÉ¼ÉÂÕ¤ÉÀÉÃÜÏÉÅÉ¾÷­É¿ÉÉÚ¨ÉÄÉ»ëþµ¥ðÞ²ôô®îÌÉÇäúæóõÇæ©ÉºÛïÛ·óµæÓÛÉµ§ØßìøshangÉÏÉÌÉÐÉËÉÍìØõüÉÊÛðÉÎÉÑéäç´ÌÀshaoÉÙÉÕÉÔÉÒÉÜÉ×ÇÊÉÚÉÛÉÓÉØÜæäûô¹ÉÖÛ¿ÕÙóâòÙè¼sheÉçÉèÉäÉáÉãÉàÉæÉßÕÛÉÝÉâÉåÉÞ÷êÙÜâ¦î´äÜØÇì¨Ê°ÞéÒ¶ÉõÊ²îèsheiË­shenÉîÉíÉõÉñÉìÉôÉóÉòÊ²ÉêÉðÉöÉéÉøÉ÷ò×ôÖ²ÎÉëëÏïòßÓÚÅäÉÉïÚ·é©ÝØÝ·ÐÅÇßÞÓ²ÉshengÉúÊ¡ÉùÉýÉþÊ¤Ê¢Ê¥óÏÊ£ÉüÉû³ËíòáÓäÅêÉÙþshiÊÇÊ®Ê±Ê¹Ê½ÊÂÊÐÊ¾ÊµÊ¯ÊÒÊ·Ê³Ê«ÊÏÊÓÊÔÊ¦ÊÀÊ¼ÊªÊ©Ê¿ÊÆÊ¶Ê§ÊÊÊÍÊ»Ê°Ê´ÊÎÊ¬ÊÄÊÈÊÌÊ²Ê¸ÊÃÚÖÊ­¸ÉÊÑÊ¨ÊÅÊËÊºóÂêÛÊÁÝªÊÉõ§éøõ¹ß±ÝéÛõîæÐêó§ìÂìêâ»ÖÅÖ³öåËÆóßöõ³×ÌáË¶ÉäôùòÏßòshouÊÜÊÖÊÕÊ×ÊØÊìÊÝÊÙÊÚÊÛÊÞç·á÷ô¼°ÇshuÊýÊéÊ÷ÊôÊöÊäÊìÊõÊøÊúÊèÊðÊåÊíÊâÊñÊóì¯ÊßÊáÊëÊæÊçÊêÊüÊþË¡ãðÊùÊîÙ¿ÊòÊàÊãÞóç£ÝÄÊïïøÊûëòÛÓäøâàæ­ë¨Ø­ÐÄÓáñâ²ÙéËshuaË¢Ë£à§shuaiÂÊË¦Ë¥Ë¤Ë§ó°shuanË©Ë¨ãÅäÌshuangË«ËªË¬æ×ãñshuiË®Ë­Ë°Ë¯ËµÍÉshunË³Ë²Ë´Ë±¶ÜshuoËµÝôË·Ë¶îåË¸éÃåùÞ÷ÊýÂÊË§ó°É×àÊsiËÄËÀËÆË¿Ë¹Ë¼Ë¾Ë½ËÇËÂËºìëÙ¹ËÁË»ËÃËÈØËËÅïÈßÐÛÌãôæáæ¦ð¸òÏñêäùóÓçÁÙîìáãáÊ³²Þ´ÍÌäsongËÍËÎËÉËÌËÏËÊáÔËÐñµäÁâìã¤ËËáÂÝ¿Ú¡souËÒËÑà²ÛÅËÔì¬âÈÞ´äÑïËî¤àÕËÓòôsuËØËÕËÙËßË×ËÜËàËÞËÚËÖöÕãºËÝà¼ËÛÙíóùÝøÚÕËõö¢ä³Þ£suanËáËãËââ¡suiËäËæËêËéËëËìËåËèìÝËçËíî¡ÚÇåäËîíõå¡Ý´ÄòsunËïËðËñé¾Ý¥öÀáøâ¸suoËùË÷ËõËøËóËöàÂôÈËôËòíüæ¶ßïèøàÊÉ¯êýtaËûËüËýËþÌ¤Ëúîèé½÷£Ì¢ÍØÌ¡õÁÌ£äâãËåÝàªäðí³taiÌ«Ì¨Ì¬Ì§Ì©Ì¥îÑÌ¦Ì­ëÄÌªìÆß¾Û¢öØõÌÞ·ææ´ötanÌ¸Ì¼Ì²Ì½Ì¿µ¯Ì¯Ì¾ê¼Ì°Ì³Ì·Ì¹Ì¶ÌºÌ®Ì±ÌµÌ´îãÌ»ìþÛ°å£ñûïÄïâëþôÊêætangÌÆÌÇÌÀÌÃÌÉÌÁÌÌÌÈÌËÌÅÌÂÌÊÙÎÌÄäçïÛè©â¼éÌàûñíõ±ó¥ó«ôÊï¦ã®taoÌ×ÌÓÌÍÌÖÌÎÌÒÌÕÌÔÌÏìâÌÑä¬÷ÒèºßûØ»ÌÐß¶teÌØï«ìýí«ß¯teiß¯tengÌÚÌÙÌÛëøÌÜtiÌåÌáÌâÌæÌßÌàÌãÌÝÌêÌÞÌäÌëÌéåÑñÓÌèã©ÜèÌçÙÃç°ç¾õ®ðÃÞÐµÌtianÌìÌïÌîÌíÌðÌòÌóéåãÃãÙî±ÞÝÌñîäµèëï²ÏtiaoÌõÌøµ÷Ìô÷ØÌ÷ôÐÙ¬ñ»öæö¶ÌöìöóÔòèÜæ¸©tieÌúÌùÌûÝÆ÷ÑtingÌýÍ£Í¥Í¦ÌüÍ¢ÌþÍ¤èèÍ§Í¡öªÝãòÑÜðæÃî®îúñôtongÍ¬Í¨Í­Í²Í³Í°Í¯Í´âúÍªÍ©Í±ÙÚàÌÍ«¶²¶±Ù¡Í®ÜíäüíÅØçÙ×á¼Ûíô¾íÏtouÍ·Í¶Í¸Íµ÷»î×tuÍ¼ÍÁÍ¿Í½Í»Í¾Í¹ÍÂÍÃÍÀÍºîÊÝ±Ü¢õ©ÝËÓàÜ¶tuanÍÅÍÄÞÒåèî¶tuiÍÆÍÈÍËÍÊÍÇÍÉß¯ìÕtunÍÍÍÌÍÎ¶ÚÙÛêÕëàâ½ÍÊ´º¶ÖÙàtuoÍÑÍÐÍÏÍ×ÍØÍÓÍÕÍÖÍÔÙ¢ÍÒÛçéÒÍÙãûèÞóêõÉõ¢íÈèØØ±ö¾âÕÆÇîè¶æwaÍÚÍßÍÛÍÞÍÝÍÜÍà°¼Øôæ´ëðßÉwaiÍâÍááËÒ¨wanÍòÍêÍíÍëÍäÍæÍåÍìÍèÍçÍîÍóÍéòêÍñÍðÍïØàÍãçºçþëäîµÜ¹æýÂûÃäÝÒÝ¸öé÷´ä½wangÍõÍùÍûÍøÍüÍöÍúÍôÍýÍ÷Øèã¯÷ÍéþÞÌweiÎªÎ»Î´Î¬Î¢Î¨Î¹Î¯Î½Î¶Î²Î§ÎºÎ¸ÍþÎÀÎ±Î³Î©Î°Î£æ¸Î·åÔÎ¤Î¿Î¥Þ±Î®Î¼â¬Î¾ìÐá¡ÎµÛ×Î­Î¦çâãíÙËâ«ÚÃáÍàøÎ«ôºÎ¡öÛè¸ðôÚñä¶ê¦ÝÚãÇì¿ä¢àíÒÅáËÚóöÕwenÎÊÎÄÎÂÎÅÎÈÎÆÎÇÎÃö©ÎÁÎÉãëãÓØØÙïè·ÃâçäwengÎÌÎÍÎËÞ³ÝîwoÎÒÎÕÎÑÎÔÎÐä×ÎÖÎÏà¸ÙÁÎÓë¿íÒÝ«ö»á¢ÎÎwuÎåÎÞÎïÎâÎéÎÝÎñÎäÎáÎóÎçÎíÎòÎÚÎÛÎðÎèßíÎìÎÙÎæÎãÎØÎêÎÜÎëâäÎ×ÎîØ£ÎàÎß¶ñì¶ä´åüæðØõå»ðÍðíâèåÃÚãêõÜÌæÄÚùðÄòÚÛØâÐöÈ÷ùÍöìÉè»ÓÚÛÑÛëxiÏµÎ÷Ï¸ÎüÏ´Ï²Ï¡Ï°Ï¤Ï·Ï¢ÎýÏ¯Ï£Ï©ÎöÏªÏ¶Ï®Ï§Ï³Ï¥Ï¦ÎøÎõÎùÏ¨ÙâÞÉáãÏ±ÎôÎþôËæÒÆÜä»ìûêØÏ­Ï¬ì¨ìäÎûäÀÎúõµÝ¾÷ûÛ­êêó£ôâãÒçôßñô¸ó¬Üçâ¾ì¤ðªÚôÏ«òáÀ°ñ¶ìùõèÙÒéØÝûñÓåïôÑÝßôªÆèñÞÚÀõ§ØÎÆûÀåÐ¯ë¯ÈúxiaÏÂÏÄÏºÏÅÏ¼ÏÁÏ¿Ï¹Ï»ÏÀÏ½ßÈÏÃÏ¾áòåÚè¦íÌ÷ïóÁ»£èÔÇ¢Ð±Ð®á¬ÉÂxianÏßÏÈÏØÏÖÏÒÏÔÏÊÏÞÏ×ÏÆÏÍÏÉÏÓÏËÏÕÏÝÏÜÏÌÏÐÏÙõ£ÏÎÏÚæµÏÛÏÇÞºë¯ÜÈÙþÏÑÏÏåßììö±óÚò¹ïÄáýìÞõÐÝ²á­¼ûôÌõÑðÂðïÏ³Ï´æ©Ñ¢xiangÏòÏëÏóÏàÏîÏñÏäÏçÏãÏìÏéÏêÏïÏæÏâÏáÏíâÃÏð½µÏèÏåößæøâÔó­Ü¼ç½ÝÙ÷ÏºåxiaoÐ¡Ð¦Ð£ÏûÏúÏ÷Ð§Ð¢ÏôÏþÐ¤ÏõÏöÏüÐ¥óïÏùç¯óãåÐßØÏýæçäìèÕ÷ÌÏøòÙáÅèÉÑ§½ÍºôxieÐ´Ð©Ð±Ð»Ð­Ð¶ÐµÐ¬Ð¨ÐªÐ¼Ð·Ð®Ð²Ð¹Ð¯Ð°ÐºÐ³ÑªÐ¸äÍÙôÙÉÛÄÛÆâ³é¿Ð«éÇ½âçÓâÝß¢ò¡Ò¶å¬öÙÞ¯õóåâç¥Æõº§Ìë÷º½àxinÐÂÐÄÐÅÐ¾Ð¿ÐÁÐÀÐ½Ü°ÐÆì§öÎÐÃÑ°Ý·Ø¶ê¿ïâxingÐÔÐÐÐÎÐÍÐÇÐÕÐËÐÌÐÑÐÓÐÒÐÏÊ¡ÐÉÐÈß©íÊÐÊÜôã¬â¼ÚêÜþÜ°Ê¤xiongÐØÐÖÐÛÐ×ÐÜÐÙÐÚÜºxiuÐÞÐãÐàÐåÐÝÐâÐääåÐáÐß³ôËÞ÷ÛâÓð¼ßÝâÊõ÷á¶xuÐèÐëÐìÐíÐøÐòÐóÐéÐîÐðÐ÷ÐçñãÐñÐõÐöÐêÐôÐïçïìãÐæÓõÛ×Þ£ä°ôÚèòõ¯äÓäªíìí¹ÛÃÚ¼ßÝê¸xuanÑ¡ÐýÐûÐüÐþÐùé¸è¯ÐúÑ£ìÅíÛìÓÑ¤êÑîçÑ¢ãùäöÚÎïàÝæðçÙØäÖÈ¯Þï»¹ÏØÛ÷Å¯xueÑ§ÑªÑ©Ñ¨Ï÷Ñ¥÷¨Ñ¦õ½ÚÊàåí´xunÑ¶Ñ°Ñ´Ñ®Ñ²ÑµÑ­Ñ«Ñ¬Ñ¸Ü÷Ñ¯Ñ·ñ¿Ñ±öàÞ¹ä­Þ¦Ñ³âþä±áßêÖÛ÷á¾Û¨â´»ç¿£åæÙãÝ¡õ¸»èè¯yaÑ¹Ñ½ÑÇÑ¼Ñ¿ÑÀÑÅÑÂÔþÑºë²ÑÆÑÁÑ»í¼Ñ¾ÑÄèâÑÃÑÈñâíýæ«ÛëØóá¬ðéÞëåÂçðß¹yaiÑÂíýyanÑÔÑÛÑÎÑÌÑØÑÏÑÒÑÓÑÉÑéÑàÑÝÑÐÑ×ÑÊÑÕëçÑáÑçÑÚÑæÑÞÑßÑÍæÌéÜÑÜÑåÑËáÃÑãìÍâûÑâÑÙÑÖ÷úêÌÑèØßÑäÛ±óÛãÕëÙäÎçü÷ÐÙÈÚÝåûØÍõ¦÷ÊÛ³Ú¥äÙÜ¾ÒóÙ²ØÉî»ÑÑÝÎÇ¦ãÆÙðÚç°©ÄèÛïyangÑùÑøÑõÑîÑòÑóÑïÑôÑíÑöÑ÷ÑëÑðÑêìÈÑúÑñì¾÷±ãóÑìâóáàí¦òÕyaoÒªÒ©ÑüÒ¡Ò§Ò¤Ò¦Ò«ÑûÑýÒ£Ò¢áæÒ¨Ô¿ÑþÒ¥ëÈ÷¥èÃçÛßºï¢ðÎÌÕçòÔ¼ê×ôíØ³Å±ñºÃ´é÷Ø²½ÄáÊÀÖÓ´ä¬ÞÖÏýáÅyeÒ²ÒºÒ¶ÒµÒ³Ò¹Ò¯Ò°Ò®Ò±ÚËÒ·ÚþÒ¬Ò´Ò­ìÇÒ¸×§ØÌêÊîôÞÞÐ°ÑÊÉäÕ¨yiÒ»ÒÔÒÑÒÒÒàÒ×ÒåÒÆÒâÒÚÒÀÒËÒìÒÓÒéÒÂÒÛÒæÒÁÒíÒÅÒÉÒÕÒ½ÒÄÒëÒÐÒÝÒÇÒÖÒäÒÎÒÌã¨ÒçØ×Òãß®ÒÍÒÃÒØôýÒ¼ß×ÞÄàæäôÒêÒÊæäâùåÆØîÒ¿êÝàÉÒ¾ØæîÆÒáØýÜÓâÂÒßâ¢ÒÏï×Ü²ôàçËÚ±ñ´ßÞÞÚÒîÒèéìÞÈÒÞì½ÒÜÒÈìÚéóô¯Ù«Þ²¶êÛüáÚÜèß½á»âøÒïÊ³ì¥Î²ðêñÂÛÝÉß÷ðôèïîòæñ¯ðù°¬ÒÙíôÒºÒ´Ò·ÚÖÒ¸ÌúÛÙóÊßÚÏÛyinÒòÒôÒýÒøÓ¡ÒõÒûÒþÒóÒñÒ÷ÒùÒðÒüî÷â¹Òöñ«ÒúÜ§ä¦à³ö¯ÛóßÅò¾ë³ÜáØ·Û´Ûßáþö¸äÎµåÑÌñ¿ÌýéÜyingÓ¦Ó¢ÓªÓ²Ó°Ó­Ó³Ó¯Ó¥Ó±Ó®Ó¤Ó¬Ó£Ó©ÙøÓ§ò£çøå­Ó«Ó¨ñ¨ÝºâßÛ«ó¿éºÜãàÓëôÞüè¬äëðÐÝÓÝöäÞÜþ¾°yoÓ´à¡ÓýyongÓÃÓÀÓ¿ÓÂÓµ÷«Ó¼Ó¹Ó¾Ó¶ÓºÓ½ð®ÛÕÓ·Ù¸Ó»ã¼Ó¸Ü­ÓÁà¯÷ÓïÞçßÞ³youÓÐÓÖÓÉÓÍÓÒÓÈÓ×ÓÎÓÔÓÅÓÑÓËÓÌÓÓÓÕÓÄÓÇØÕÓÊÓÆðàØüèÖéàÝ¬å¶îðÓÏë»òÄßÏ÷øÝ¯öÏÝµÙ§òøòÊ÷îÞÌàóòöôíÈÅyuÓëÓÚì¶ÓãÓúÓàÓèÓêÓûÓïÓöÓñÓýÔ£Ô¤ÓòÓæÓüÔ¥ÓðÓÞÔ¢ÓùÔ¡ÓîÓþÚÍÓáÓíÓÙÓøÓâæúÓôÓ÷ÓØÓÜØ¹âÅÓõÓÝÓßÓéÓåÓäí²Ô¦ÓçØ®óÄå÷æ¥àöÓìÓÛîÚÞíãÐÚÄÓóè¤ëéâ×ì£ìÏðõØñêìñÁÝÇö§áüñ¾àôìÛô¨Ù¶òâÎ¾ô§ðÖÝ÷ìÙÎµÖàåýáÎí±êÅö¹ðÁÝÒâÀðöòõ¹ÈàÞÛ×ëòë¨yuanÔ²ÔªÔ­Ô¶Ô±ÔºÔ¬Ô¸Ô´Ô°ÔµÔ®Ô¹Ô©æÂÔ«ë¼Ô³Ô¨Ô·à÷Ü«ð°ÛùÔ¯íóö½ÞòóîéÚó¢è¥Ô§ãäÜ¾ÍðÝæyueÔÂÔ½Ô¼Ô»ÀÖÔ¾ÔÄÔÁÔÀÔ¿ÔÃîáë¾ÙßéÐèÝËµå®ßÜê×Ò«Ò©yunÔÆÔËÔÈÔÏÔÊÔÌÔÎÔÐìÙÜ¿Û©ÔÅè¹ÔÉÔÍã¢ÔÇã³éæáñêÀëµóÞç¡Ô±zaÔÓÔÒÕ¦ÔÑÔúßÆÔÛÞÙßþàÒzaiÔÚÔÙÔØÔÔÔÖÔÕÔ×áÌçÞ×ÐzanÔÛÔÞÔÝô¢ÞÙöÉÔÜôõè¶ôØêÃzangÔà²ØÔáÔßê°æàÞÊzaoÔçÔìÔâÔîÔïÔãÔäÔíÔåÔæÔêÔèÔëßðÔéçØzeÔòÔðÔóØÆÔñÕ¦ßõàýô·óÐØÓê¾óååÅ²àÔõÔôÕ­zeiÔôzenÔõÚÚzengÔöÔùÔ÷ÔøêµçÕï­îÀ×ÛzhaÔüÕ¨ÔþÔúÕ¢Õ¤Õ¥Õ©Õ§ÔýÕ¡Õ£Ôûé«Þê×õ÷þß¸ßåðäíÄòÆßîÀ¯²éâÇà©Õ¦zhaiÕ¯ÕªÕ­Õ«Õ®Õ¬µÔÔñ¼Àñ©íÎ²àÔðÆëzhanÕ¼Õ¾Õ½Õ´Õ³ÕµÕºÕ°Õ±Õ²Õ¶Õ»²üÕ·Õ¿ÕÀÕ¹Õ¸ÞøÚÞì¹ÔÝêè×êzhang³¤ÕÅÕÂÕÉÕÆÕÌÕÍÕÇÕÊÕÏÕÈÕÁè°ÕÃÛµÕÎØëá¤áÖâ¯ó¯æÑÕËÕÄç´zhaoÕÒÕÕ×ÅÕÔÕÐÕÖÕÙÚ¯Õ×ÕÑ³¯ÕÓÕØ×¦îÈèþßúóÉÖø³°êË×ÀzheÕâ×ÅÕßÕÛÕãÕÚÕÜÕàÕáñÞéüô÷òØÕÞÚØÕÝíÝÖøðÑß¡èÏÕÐÕªÕ¬ó§ÉåØ±zheiÕâzhenÕæÕëÕòÕñÕäÕóÕðÕêÕèÕíëÞÕåÕìÕéÕïÕçêâèåìõð¡ÛÚé»ä¥éôî³çÇÕîð²Ö¡óðÝèëÓé©äÚÉïzhengÕýÕþÖ¤ÕùÕûÕôÕ÷Ö£Ö¢ÕöÕõîÛÖ¡ÕúÕüóÝï£ÚºÕøá¿áçöë¶¡zhiÖ®Ö»ÖÆÖÁÖªÖµÖ¸ÖÊÖ±Ö§ÖÎÖ½ÖÃÖ¯ÖÂÖ¾Ö¦Ö¹Ö²õ¥Ö°Ö­ÖÇÖ¥Ö¬Ö´ÖÀÖ¼òÎÖ³Ö«ÖÌÖÍÖ·Ö¨ÖºÛ¤Ö¶ÖÈÖÉÖÄêÞéòèÎìóìíïôáçÖ¿ÖÅÖËÖÏÚìåëÞýåéðëÛúëùè×õôàùõÜéùðºâåæïèäíéèÙõÅÖ©ôêØ´ÜÆö£ëÕõÙÊÏÊ¶Õ÷ð·ÕÝÕãzhongÖÐÖÖÖØÖÓÖÕÖÚÖÒÖÙÖ×ÖÔÖÑÚ£õàô±ïñó®âìzhouÖáÖÜÖÝÖåÖÛÖÞÖâÖèÖàÖçæûç§ÖäëÐôíÖßÖãæ¨Öæô¦ôüÝ§íØßúzhu×¡Ö÷×¢ÖíÖúÖê×¤ÖîÖìÖùÖðÖñÖøÖóÖéÖýÖþÖô×£ÖüÖïÖòóÃÖûØùÖöñÒîùóçìÄèÌÖõõîä¾éÆÙªÛ¥÷æðæÜïäóä¨ðñô¶ÜÑéÍÖëôãÊôÊõÖáÅ¢ÄþÊízhua×¥ÎÎ×¦zhuai×§×ªàÜzhuan×ª×¨´«×©×¬×«×­âÍßùò§ãçzhuang×°×´×¯×³×®×²´±×±ÞÊãÜãÝí°Ù×zhui×·×¶×¹×µ×º×¸çÄã·æíö¿à¨zhun×¼×»ëÆñ¸ÍÍöÀzhuo×½×À×Å×Ç×Æ×¿×Ã×¾ïí×Ä×Áßªí½åª×ÂÙ¾ÚÂìúäÃä·½ÉìÌÖøÕÐõÖzi×Ó×Ô×Ö×Ê×Ï×È×Ñ×ÐÖ¨×Õ×Ì×Ëö¤è÷æ¢í§ç»êßööê¢ñèïÅö·÷ÚáÑ×ÉôôóÊõþ×ÍÚÑíöïö×Î×ÒæÜÜëôÒßÚðËÔÖçÞzong×Ü×Ý×Ú×Û×Ø×Ù××ëêôÕÙÌèÈ´Ózou×ß×à×á×ÞÚÁåÁæãÚîÛ¸öíÖßßúÖèzu×é×å×ã×â×è×æ×ä×çÝÏÙÞïßàÕzuan×êß¬×ëçÚõò×¬ÔÜzui×î×ï×ì×í¾×õþÞ©¶ÑµØôÈzun×ð×ñé×ß¤÷®¿¡ÛÚzuo×÷×ö×ø×ù×ó×ò×ô×õßò´éÔäìñàÜâôÚâëÑÚèõ¡óÐ×ÁíÄ";
  var yunmu="ang:¨¡ng,¨¢ng,¨£ng,¨¤ng;eng:¨¥ng,¨¦ng,¨§ng,¨¨ng;ing:¨©ng,¨ªng,¨«ng,¨¬ng;ong:¨­ng,¨®ng,¨¯ng,¨°ng;ai:¨¡i,¨¢i,¨£i,¨¤i;ei:¨¥i,¨¦i,¨§i,¨¨i;ui:u¨©,u¨ª,u¨«,u¨¬;ao:¨¡o,¨¢o,¨£o,¨¤o;ou:¨­u,¨®u,¨¯u,¨°u;iu:i¨±,i¨²,i¨³,i¨´;ie:i¨¥,i¨¦,i¨§,i¨¨;ue:u¨¥,u¨¦,u¨§,u¨¨,¨¹¨¥,¨¹¨¦,¨¹¨§,¨¹¨¨;ve:¨¹¨¥,¨¹¨¦,¨¹¨§,¨¹¨¨;er:¨¥r,¨¦r,¨§r,¨¨r;an:¨¡n,¨¢n,¨£n,¨¤n;en:¨¥n,¨¦n,¨§n,¨¨n;in:¨©n,¨ªn,¨«n,¨¬n;un:¨±n,¨²n,¨³n,¨´n;a:¨¡,¨¢,¨£,¨¤;o:¨­,¨®,¨¯,¨°;e:¨¥,¨¦,¨§,¨¨;i:¨©,¨ª,¨«,¨¬;u:¨±,¨²,¨³,¨´;v:¨µ,¨¶,¨·,¨¸,¨¹;";

  var phrs;

  var pyindex = new Array();
  var chartab = new Array();
  var yunmutab = new Array();
  var phrstab = new Array();

  function triplet(py,word,freq){
    this.py=py;
    this.word=word;
    this.freq=freq;
  }

  var userPH = "";
  var UPHbuff = new triplet("", "", 0);

  var parsedPY = new Array();
  var possible1Full = new Array();

  var word_list = new Array();
  var word_list_PY = new Array();

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
    if(start < -1 || (start < 0 && _pyinput) ) return;

    var cnt = 0;
    var pycode = "";
    var same_code_words=[];
    _candidates = "";
    word_list=[];

    if(start < 0 &&  index == 0) {
      popu_phrase();
      if (phrase_stack.length == 0){
        start = 0;
        same_code_words = chartab[possible1Full[start]].split("");
        pycode = possible1Full[start];
      }
    }

    if(start >= 0 && _pyinput){
      pysplit=sheng_yu(possible1Full[start]);
      same_code_words = pysplit[1].split(",");
    }else if (start >= 0 && !_pyinput){
      same_code_words = chartab[possible1Full[start]].split("");
    }
    pycode = possible1Full[start];

    while (cnt < 10) {
      if (start >= 0){
        word_list[cnt] = (_pyinput)?pysplit[0] + same_code_words[index]
                                :same_code_words[index];
        word_list_PY[cnt] = pycode;
      }else{
        word_list[cnt] = phrase_stack[index].word;
        word_list_PY[cnt] = phrase_stack[index].py;
      }
      _candidates += '<span style="color:purple">' + ((cnt+1) % 10) + '</span>'
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
        if(_pyinput){
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
      _candidates += ' < >';
      } else {
        _candidates += ' >';
      }
    } else if (start_stack.length > 1) {
      _candidates += ' <';
    } else {
      _candidates += '';
    }
    start_mem = start;
    index_mem = index;
  }

  function parsePY(){
    parsedPY = [];
    possible1Full = [];
    if (_code_field.length < 1) return 0;

    cmp=/ /;
    total = 0;
    offset = 0;
    count = 2; /* 1 always valid */
    while( offset + count <= _code_field.length){
      ahead = _code_field.charAt(offset);
      if (ahead == "'"){
        offset += 1;
        count = 2;
        continue;
      }
      if(typeof pyindex[ahead] == "undefined"){
        _code_field=(_code_field.length > offset)?
                _code_field.substr(0,offset) + _code_field.substr(offset+1):
                _code_field.substr(0,offset);
        continue;
      }
      cmp.compile(" " + _code_field.substr(offset,count) + "[^ ]*");
      if(pyindex[ahead].match(cmp)) count += 1;
      else {
        parsedPY[total++]=_code_field.substr(offset,count-1);
        offset += count-1;
        count = 2;
      }
    }
    ahead = _code_field.charAt(offset);
    if(ahead == "'") offset ++;
    else if(typeof pyindex[ahead] == "undefined")
        _code_field=(_code_field.length > offset)?
                _code_field.substr(0,offset) + _code_field.substr(offset+1):
                _code_field.substr(0,offset);
    if(offset < _code_field.length) parsedPY[total++]=_code_field.substr(offset,count-1);

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

  function _clear_all() {
    _code_field = "";
    _candidates = "";
  }


  function _on_code_change(){
    for (i=0;i<=9;i++) {
      word_list[i] = "";
    }
    _candidates = "";
    start_stack = [];
    index_stack = [];
    if (_code_field != "") {
      parsePY();
      if(parsedPY.length == 0){
       _clear_all();
       return;
      }
      start=(parsedPY.length>1)?-1:0;
      start_stack.push(start);
      index_stack.push(0);
      create_word_list(start, 0);
    }
  }

  _selected = function(c){
    if (!/[0-9 ]/.test(c)) return null;
    var ind=(c==" ")?0:(9+parseInt(c))%10;
    var ich=word_list[ind];
    if(typeof ich == "undefined") return null;

    if (ich.length < parsedPY.length){
      if(!_pyinput){
        if(UPHbuff.py.length  > 0) UPHbuff.py += " ";
        UPHbuff.py += word_list_PY[ind];
        UPHbuff.word += ich;
      }
      _code_field = parsedPY.slice(ich.length,parsedPY.length).join('');
      _on_code_change();
    }else{
      if(UPHbuff.py.length  > 0){
        UPHbuff.py += " ";
        UPHbuff.py += word_list_PY[ind];
        UPHbuff.word += ich;
        userPH += UPHbuff.py + UPHbuff.word;
        var ahead=UPHbuff.py.match(/^[^ ]+/)[0];
        if(typeof phrstab[ahead] != "undefined")
          phrstab[ahead].push(UPHbuff.py + UPHbuff.word + 'ff');
        UPHbuff.py="";
        UPHbuff.word="";
      }
      _clear_all();
    }
    return ich;
  }

  _fillPre = function(){
    if (_code_field != "" && start_stack.length > 1) {
      start_stack.pop();  index_stack.pop();
      create_word_list(start_stack[start_stack.length-1], index_stack[index_stack.length-1]);
      return(true);
    }
    return(false);
  }

  _fillAft = function(){
    if (_code_field != "" && start_mem >= -1) {
      start_stack.push(start_mem);
      index_stack.push(index_mem);
      create_word_list(start_mem, index_mem);
      return(true);
    }
    return(false);
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

  function ParseSysPhrsData(){
    if(phrstab.length > 0) return;
    // phrstab=[];
    var pattern = /([a-z]+)[a-z' ]+[^a-z0-9]+[a-z0-9][a-z0-9]/g;
    var par;
    while((par=pattern.exec(phrs)) != null){
      if (!phrstab[par[1]] || typeof phrstab[par[1]] != 'object') phrstab[par[1]]=new Array();
      phrstab[par[1]].push(par[0]);
    }
  }

  _ParseUsrPhrsData = function(uphrs){
    if(typeof uphrs != "undefined" && uphrs.length>0){
      var pattern = /([a-z]+)[a-z' ]+[^a-z' 0-9;]+/g;
      var par;
      while((par=pattern.exec(uphrs)) != null){
      if (!phrstab[par[1]] || typeof phrstab[par[1]] != 'object') phrstab[par[1]]=new Array();
        phrstab[par[1]].push(par[0] + 'ff');
      }
    }
  }

  LoadPYtab();
  LoadYMtab();
  ParseSysPhrsData();

  return {
    code_field : function(v){ if(typeof v == "undefined"){ return _code_field;}else{ _code_field = v;return};},
    candidates : function(){ return _candidates;},
    pyinput : function(v){ if(typeof v == "undefined"){ return _pyinput;}else{ _pyinput = v;return};},
    uphstr : function(v){ if(typeof v == "undefined"){ return userPH;}else{ userPH = v;return};},

    clear_all : function(){ return _clear_all(); },
    on_code_change : function(){ return _on_code_change(); },
    selected : function(c){ return _selected(c); },
    fillPre : function(){ return _fillPre(); },
    fillAft : function(){ return _fillAft(); },
    ParseUsrPhrsData : function(v){ return _ParseUsrPhrsData(v); },
    phversion: function() { return sysph_version;},
    version: function() { return _version;}
  };

}();
