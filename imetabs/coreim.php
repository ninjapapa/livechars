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

  var _version = '1.16';

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

  var pytab="a°¢°¡ï¹ß¹ºÇàÄëçai°®°£°­°§°¤°©°¥°«°¬°¯êÓ°ª°¦°¨ö°ÞßÚÀàÈÑÂàÉæÈè¨an°²°¸°´°µ°³°¶°°°·°±÷öÚÏðÆâÖï§èñáí¹ãÞî³§Ûû††ang°º°»°¹ëçao°Â°Ä°Á°¾°Àà»°Ã°¼°½°¿÷é÷¡åÛæñöËñúÛêá®âÚÞÖÏùæÁòüéába°Ñ°Í°Ë°É°Ö°Õ°Ô°Î°Ï°Ó°Ð°È°Å°Ì°ÊôÎ°Æ²®öÑèËÝÃîÙ°Ç÷ÉÜØá±å±°ÒÅÃîàbai°×°Ù°Ü°Ý°Ú°ØêþÞã°Û°Þ²®ßÂban°ì°ë°ã°æ°å°à°é°á°ß°ç°è°ä°â°êÚæ°íñ£Ûàô²ãÝñ­îÓbang°ï°î°ô°ñ°ò°ó°÷°ø°ù°õ°ð°öÝòê´äºÅÔë«bao±£±¨±¦°ü±©±§±¬°û±¥±¤±ª°ý±«°ú±¢æßÅÙìÒñÙð±õÀÝáÆÙ°þÅÚ±¡ÆØöµå²bei±±±¸±»±³±¯±²±´±¶±­±°±®±¹ã£±·Úé±ºÝí±µÝÉÚýßÂÙÂ÷¹ñÔ±ÛØÃíÕben±¾±¼±¿±½êÚÛÐï¼Ìåº»beng±À±Ä±Á±Å±ÂàÔê´°ö±Ãbi±È±Ø±Õ±Ï±Ò±Ê±Ü±Î±Ë±Ú±Æ±Ç±É±Ð±×±Û±Ì±Ý±ÓØ°±ÔÃØèµ±Öæ¾ã¹åþ±Ñ±ÍÝ©Üêïõóëó÷åöóÙßÁõÏÙÂÜÅÃÚêÚå¨±Ùî¯î¢ÝÉ÷ÂÞµîéæÔò·ñÔ°Þáù·÷ääÛýßÙŒÂbian±ä±ß±ã±à±é±ç±á±æ±â±Þ±èòùØÒãêí¾öýÛÍñÛÜÐìÔíÜóÖ±åbiao±í±ê±ëïÚì­æ»ïðñÑ±ìì®àÑè¼ì©÷Ô÷§î¼æôbie±ð±î±ï±ñõ¿bin±ö±õ±ò±ôçÍéë÷ÞéÄ±÷ë÷±ó÷ÆïÙáÙçãÙÏbing²¢±ø²¡±ù±ý±ú±ü±ûÙ÷ÞðéÄ±þÆÁÚûKbo²¨²©²¥²®±¡²£°þ²±²µ²¦²ª²´²²²·°Ø²«²°âÄ²¤²³ô¤²§²­íç²¯õË²¬Þµë¢ÙñÝ©ð¾éÞà£õÀÆÇÆÂ°ãêþØÃîà°×õÛbu²»²¿²½²¼²¹²À²¶²·²¸±¤²º²¾ß²ÆÒõ³ê³åÍêÎîÐca²Áàê²ð²ëcai²Å²Æ²É²Ë²Ä²Ê²Â²Ã²È²Ì²Ç’ñcan²Î²Í²Ð²Ò²Ñ²Ó²Ïè²÷õæîåî²ôôÓcang²Ø²Ö²Ô²Õ²×Ø÷cao²Ù²Ý²Ü²Û²ÚàÐäîÜ³ô½ce²ß²â²á²à²ÞâüØÖcen²Îä¹á¯ceng²ãÔø²äàácha²î²ì²é²è²å²æ²ï²íÉ²ñÃ²çàê²êè¾æ±âÇïïïÊ²ëÀ¯éßé«Ôûâªãâé¶chai²ñ²î²ðîÎ²òÙ­ò²chan²úìø²ø²û²ô²öâã²ù²ü²ó²õäýÚÆó¸åîæ¿²÷åñå¤ïâõðêèµ¥æöâÜchang³¡³£³¤³§³ª³¢³¥³¦³©²ý³«³¨²þæÏâêæ½áäØöë©öðÝÅÛËÜÉÌÈÉÑã®ãÑêÆchao³¬³¯³±³´³³³­³°³®³²ìÌ´Â½ËêËche³µ³¹³·³¶³º³¸ÛåÕÞåø³ßchen³Á³Â³¼³¿³¾³Ã³½³Ä³Æí×³À³»Úßè¡àÁÉïö³³ÓÉòØ÷é´ÚÈå·ÞÓcheng³É³Ì³Ç³Æ³Ð³Ï³Ë³Å³Í³Ê³Î³ÒØ©³Ñ³È³ÓîªòÉîñÛôñÎõ¨Ê¢èÇèßëóêÉä¥àáîõchi³Ö³Ô³Ø³Ù³à³Ü³ß³â³Ý³Û³Õ³Þ³á³×ßêàÍ³Ú³ãß³à´ë·õØó×÷ÎâÁñÝð·óøÀëò¿Ü¯ðäÙÑæÊ²çôùÛæÛ­õ½Þõñ¡¶ßó¤íôáÜ…ÕchongÖØ³å³ä³ç³æ³èã¿âçÜû¼ëô¾ô©ÖÖï¥Ó¿Ðnchou³é³ð³ï³ó³ô³ë³î³ê³ñã°³ì³í³òàüöæäåñ¬Ù±öÅchu³ö´¦³ý³õ³þ´¡´¢´¥³øÐó³÷³ú³û³ù´£´¤òÜ÷íÛ»âð³üõéèÆãÀèúéËç©ñÒØ¡Ú°åøchuai´§õßÞõàÜà¨chuan´«´¨´©´¬´®´­´ªâ¶çÝë°ô­îËå×chuang´´´²´°´³´¯âë´Ñ´±ÇÀê¨×²chui´µ´¹´¸´¶é³´·×µÚïé¢chun´º´¿´À´¼´½´¾´»Ý»ðÈchuo´Âöº´Áê¡à¨õÖci´Î´Ë´Ê´Ì´Ç´È´Å´Í´ÉËÅ´Ä´Æ×È´Ã²îìôôÙ²ÞßÚôÒðËòºcong´Ó´Ï´Ò´Ô´Ð´ÑÜÊèÈæõè®çýcou´Õê£ëíé¨cu´Ù´Ö´×´Øõíâ§õ¾õ¡áÞéÊéã×äÇ÷´íÈ¤Ýýïßcuan´Ü´Ûß¥´ÚÔÜÙàìàcui´â´à´Ý´ß´äÝÍ´Þã²è­´á´ãÇÁßýë¥Ë¥ö¿cun´æ´å´çââ¶×ñåß—…¼cuo´í´ë´ì´è´é´êõãïóï±áÏØÈðîëâõºda´ó´ò´ï´ð´î´ñàª÷°÷²ÞÇðãñ×ßÕæ§ËþîãóÎâòí³dai´ú´ø´ý´ó´û´ü´ô´÷´õ´þ´ùµ¡÷ì´öçéá·Ü¤ææß°åÊçªß¾danµ«µ¥µ¯µ£µ°µ©µ­µ¨µ¤µ®µ¢µ¬íñµªµ¦ééóìµ§ñõð÷ÙÙÝÌÊ¯¾®à¢å£îãêæØéðãÚàdangµ±µ³µ´µµµ²ñÉå´îõí¸ÛÊÚÔdaoµ½µÀµ¼µ¹µ¶µºµÁµ·µ¾ß¶µ»µ¸µ¿ë®ìâôîâáàüdeµÄµÃµÂµØµ×ï½deiµÃdengµÈµÇµÆµÊµËµÉµÅ³ÎíãïëáØê­àâdiµØµÚµÄµ×µÍµÜµÛµÐµÖµÝµÎµÏµÙµÑàÖµÞµÕµÌÚ®ÚÐÌáµÓÛ¡íÆµÒïá÷¾èÜé¦êûÙáÑ¿íûØµÛææ·êëµÔíÚôÆìØÝ¶íLdiaàÇdianµãµçµäµêµéµßµæµîµíµìµëµááÛµàµèñ²çèµâµåõÚñ°ÚçØ¼îäô¡diaoµ÷µôµñµõµöµóµïµòõõÄñð·ï¢îööôµðŒÅdieµøµùµýµûµþµúµüà©ëºñóÜ¦õÚöøÞéð¬õÞding¶¨¶¥¶©¶¡¶¦¶¢¶¤¶£¶§Øêôúà¤î®ðÛîúëëçàíÖdiu¶ªdong¶¯¶«¶®¶¬¶´¶­¶³ßË¶°¶²¶±ëØá¼ë±íÏÛíâºdou¶¼¶·¶¹¶¶¶µ¶º¶¸ñ¼¶»ò½¶ÁÝúôYdu¶È¶À¶Á¶¼¶¾¶½¶É¶Ç¶Ä¶Å¶Â¶Ã¶Êà½äÂ¶ÆóÆ÷òë¹¶¿èüó¼ôî÷Ç¶Ùduan¶Î¶Ï¶Ì¶Ë¶Í¶ÐìÑóýé²×¨dui¶Ô¶Ó¶Ñ¶Òí¡íÔïæ¶Ødun¶Ù¶Ü¶Ö¶Ø¶×¶Ûãç¶Õ¶ÝíïìÀõ»íâïæí»¶Úduo¶à¶á¶ä¶È¶ã¶é¶èßÍ¶ß¶æ¶å¶Þîìõâ¶ç¶âèÞñÖÍÔãûßáe¶ñ¶í¶î¶ö¶ì°¢¶ô¶óØ¬¶ï¶ð¶ë¶ò¶êãµöù¶õÚÌæ¹ÛÑò¦éîÝàÚÀòÂëñßÀåíÝ­ïÉï¹ãÕðÊÑÆï°Å¶íÒeiÚÀen¶÷ßíÞôàÅÝìer¶ø¶þ¶ù¶û¶ú¶ü¶ý·¡åÇð¹çíîïÙ¦fa·¢·¨·¦·£·¥·§·¤·©ÛÒíÀfan·´·¹·­·¶·¸·³·µ·±·²·¬·º···«·ªèóÞ¬·®·¯á¦ÞÀõìî²ë¶È®·°ìÜáë¹ fang·½·Å·¿·À·Ã·Â·Á·»·¼·Ä·¾Úúô³áÝèÊöÐîÕfei·Ç·É·Ñ·Ï·Ê·Æ·Ë·È·Ð·Î·Ìåúç³ì³ôä·Íáôìéö­òãé¼ã­ðòöîëèÜÀÅáíÉäÇâöfen·Ö·Ý·Û·×·ß·Ü·Õ·Ò·Ù·Ø·à·Ô·Þ·Ú·ÓÙÇö÷çãèûfeng·ç·â·á·æ·å·î·è·ï·í·ì·ä·ê·ã·ë·éÙºããÛºÝ×í¿fo·ðfou·ñî·ó¾fu¸®¸´·þ¸º·ò¸»¸¸¸£¸¶¸±·ù¸½·û¸¯¸¾¸¡·ü¸²¸µ·ý·ô·ö¸¹¸§¸¨¸³¸°¸©·ø¸«¸·¸¤¸¿¸ÀÜ½¸¦¸¥·ó·÷¸ª¸­òð·õÙëæâ·úæÚòÝÜòð¥ôï¸¢¸¼ß»ÝÊöÖèõìðõÆ¸¬ÞÔÆÎÜÀäæÛ®ç¦öûâöíêòóî·õÃß¼·ðïûÝ³ò¶ÊÐÜÞÙìíëíÉ›šgaÞÎ¸Â¿§¸ÁÙ¤¼Û¼ÐæØÔþîÅ¸ìê¸ßÈgai¸Ã¸Ä¸Å¸ÇØ¤¸È¸ÆêàëÜÚë½æÛògan¸Ð¸É¸Ò¸Ï¸Ê¸Ë¸ÎÞÏéÏ¸Í¸Ñ¸Óß¦Ûá¸Ìãïí·ÜÕêºäÆôûä÷ç¤Ç¬ðáŽÖgang¸Õ¸Û¸Ö¸Ú¸Ü¸Ù¸Ô¸×î¸¸Øí°¿¸ô­óàgao¸ß¸æ¸ã¸â¸å¸à¸áØºéÂ¸ä¸ÝçÉÚ¾ê½¸Þð©éÀ½Áï¯Þ»Û¬ge¸ö¸ñ¸÷¸ï¸ç¸è¸ô¸î¸ó¸ð¸ì¸ê¸é¸í¸ë¸Ç÷À¿©àÃ¸õô´ÒÙíÑïÓÛÙØª¸òæüºÊØîò¢ò´ëõÜªÛÁºÏàAgei¸øgen¸ù¸úØ¨ßçôÞÝ¢geng¸ü¸û¹¢¸ý¹£ßì¸þ¹¡öáç®Ø¨âÙ¾±¾¬gong¹«¹¤¹¦¹²¹¥¹©¹§¹±¹¬¹­¹®¹°¹ªò¼¹¨ö¡ëÅçî¿¸ÞÃ¸Ø¿óºì¹¯gou¹»¹¹¹º¹·¹µ¹´¹³¹¶Ú¸¹¸èÛóôæÅì°åÜ¾äêíóÑçÃØþgu¹É¹Ê¹À¹Å¹Ë¹Ä¹Ì¹Ã¹Ç¹Â¹È¹Í¹¼¹¾¹½¹Á¹Æéï¹¿ïÀèôãéÚ¬ðóì±ð³ðÀêô÷½Í¹òÁÝÔØÅî­¼ÒêöáÄõýôþî¹îÜ»¬¸æ¼ÖßÉgua¹Ò¹ÏØÔ¹Ñ¹Î¹ÓßÉ¹Ðð»ëÒñøÀ¨ëáÚ´ÊÊèéÎÏguai¹Ö¹Ô¹ÕÞâguan¹Ø¹Û¹Ü¹Ù¹Ý¹ß¹Ú¹á¹à¹Þ¹×Ý¸ÙÄîÂäÊÂãÂÚñæÞèðÙ÷¤ëäguang¹â¹ã¹äë×áîßÛèægui¹æ¹ó¹é¹í¹ì¹ñ¹ð¹ê¹î¹å¹ë¹ò¹èð§¹ç¹ô¹ïêÐöÙ÷¬ØÐèíæ£êÁå³¿þÈ²âÑØÛóþãí«•gun¹ö¹÷Ùò¹õöççµíÞguo¹ú¹ý¹û¹ø¹ù¹üòåàþñøÛöé¤ë½â£òäÎÐï¾ÙåÞâßÃha¹þ¸òîþÏºhai»¹º£º¢º¦º¥º¡º§º¤ëÜò¤ºÙàËõ°¿Èhanººº«º¬º¹º®º¶º°º·º­º±º³º²ºµº¯º´å«º¸º©ºªº¨êÏ÷ýò¥ñüòÀÚõºÍÝÕáíìÊ¸Éò¢Þþ³§ãÛhangÐÐº½º¼º»ãìôû°¹èìç¬Ïïñþ¿ÔhaoºÃºÅºÁºÄºÀºÆº¾º¿Ýïê»ð©ºÂòºòÂºÑ¸äå©ò«º×Þ¶å°ºÔàÆheºÏºÇºÎºÍºÓºËºÈºÉºÕºØºÐº×ºÌÏÅºÒàÀºÖÛÀÛÖºÔºÊãØºÑò¢Ú­ºÂîÁÐ«¸ÇæüêÂà¾ôçàAheiºÚºÙàËhenºÜºÞºÝºÛhengºâºáºãºßºàèìÞ¿çñç¬ÐÐhongºìºäºêºéºåºèºçºæºëÚ§ÙêÞ®¹¯ãüÞ°Ùä´¥ãÈÝ¦…ËhouºóºòºñºïºîºíºðåËááðú÷¿óóö×Ü©ô×ýJhuºõ»¤»§ºöºô»¥ºúºþºý»¢ºÍºü»¦ºûä°»£ºùºø»¡ã±ºËº÷ìèàñõ­çúâ©ðÀéÎðÉìïâïßüìæ÷½ìÃõúÐíäïð­Ï·ìÎóËì²hua»¨»°»¯»ª»®»­»¬»©»«èëîüæèí¹»íhuai»µ»³»´»²»±õ×Ø«»®»°huan»¶»·»»»¹»º»Ã»¼»½»À»¾»Â»¸å¾»Á÷ßÛ¼»¿à÷âµöéåÕÛùÝÈß§Íîä¡Û¨ä½äñçÙûqhuang»Æ»Ê»Ä»Î»Å»Ñ»Í»Ë»Ì»Ð»É»Ï»Çáå»ÈåØäêÚòëÁó¨äÒóòñ¥öüè«hui»á»Ø»Ó»ã»Ù»Ö»Û»Ò÷â»Ô»Ú»Ý»Õ»æ»ß»ä»Þ»à»åèíÜî»âåçÚ¶êÍ»ÜÜö»×ä§çõÞ¥ò³³æ»²ßÜãÄËëà¹¶éÀ£ä«ßÔí£Þ’hun»ì»é»è»ê»ëâÆ»çÚ»¹õãÔäãçõhuo»î»ò»ð»ñ»õ»ï»ó»öºÍ»ô»íÞ½ó¶â·»¤¹èí¹àëïìïÁØåß«ÛÖji»ú¼º¼¸»ù¼Æ¼Ã¼Ç»÷¼Ê¼¼¼°¼¶¼¯¼«¼´¼Ì¼Í»ý¼¤¼È¼±¼­¼¨¼¾¼¦¼£¼ª¸ø¼®¼²»ø¼Ä¼Á¼É¼·¼Å¼À¼¡¼¢¼¹¼µßó¼¬¼Ë»üí¶¼½î¿¼¿¼©»û¼¥á§öê½å¼³ß´ð¢¼Âñ¤óÅêªÜùæ÷êéê÷õÒçÜØ½çá¼§»þôß÷Ù¼»Ýðì´åì÷äé®Ü¸ö«Ù¥Þáä©Úµê«ò±ïú¸ïêåðÝáÕ¾ÓØÀÜÁÆëÞªóÇöÝÆåâÑßâÆï½ÕéêÆæ½àÆÚÆäØÞÏµÙÊßÒ³Ôjia¼Ò¼Ó¼Û¼Ù¼Ü¼×¼Ñ¼Ý¼Ð¼Þ¼Î¼ØóÕåÈ¼Ú¼Ö¼ÕÙ¤¼ÏôÂê©ëÎçì¼ÔðèÇÑîòÐ®ØÅáµÏÄòÌõÊïØä¤ÝçñÊîþÛ£jian¼ä¼û½¨¼þ¼ò¼ü¼á¼õ¼ì¼à½¢½¥½¡¼ö¼é¼ý¼ø¼ù¼è¼æ¼â½£¼ç¼ô¼ß¼ú¼å¼ñ¼í¼ó¼î¼ë¼ð½¦ïµëìÚÉ½¤ÝÑ¼ê½§¼ãë¦íúöäêùå¿äÕÙÔÝóôåóÈàîê§é¥êð¼÷÷µðÏõÝÇ³èÅÏÐÞöñÐåÀê¯¼ïçÌŠ¦jiang½«½­½²½µ½±½®½¯½´½³½ª½©½¬½°çÖÇ¿ôøôÝç­Üüºçêñä®jiao½Ì½Ï½»½Ð½Ç½Å½¹¾õ½·½º½È½¾½É½Á½¼½Ë½Æ½Í½Î½¿½Ã½¶½Ê½ÄõÓ½½Ð£Ù®½À½¸½Ñð¨òÔ½ÂÜúæ¯öÞàÝôéÞØë¸Ü´á½æùáèõ´äÐjie½Ó½â½á½ç½Ú½×½é½ã½Ö½è½Ø½ä½Ù½Ò½à½Ý½ì½Ô½Ü½ß½ë½æ½Õ½ÞÚµÞ×àµèîæÝæ¼ò¡Ú¦½åôÉðÜ½êÙÉ¼Ûæ¢÷ºíÙèÎöÚ¼Òß¢à®ÙÊò»ßÒ¿¬½Ûjin½ø½ð½ñ½ü½ö¾¡½ô½û½ò½ï¾¢½÷½õ½î½ú½í½þ½óñæ½ýêîàäèªâËçÆéÈÝÀñÆîÄâÛæ¡½ùÝ£jing¾­¾«¾©¾¯¾³¾¹¾°¾ª¾²¾º¾µ¾´¾»¾¶¾¦¾®¾¢¾¸¾§¾±¾£¾¤Úå¾¨ã½Ý¼ãþÙÓ¾¥ö¦¾¬ìº¾·ëÂëæÌþåÉ¸üâ°æºØÙ÷ôëÖóäjiong¾½åÄ¾¼ìç‡åêÁjiu¾Í¾¿¾Ã¾È¾Æ¾Å¾É¾À¾Ë¾Â¾¾¾Î¾Ì¾Äð¯ôñ¾Êà±¾ÇðÕãÎèÑ÷ÝõíèêÙÖ¾ÁäÐju¾Ý¾ä¾ß¾Ö¾Ó¾Ù¾ç¾Þ¾à¾Û¾Ü¾æ¾ã¾Ø¾å³µ¾Ð¾Ñ¾Õ¾Ï¾â¾Úì«éÙ¾Ô½Û¾á¾×ÞäÙÆ¾Òö´åáÜÄöÂÜìé·åðõáôò÷¶îÒõ¶×ãÜÚï¸ÚªÇÒèÛöÄÝÏñÀ¹ññÕé§Çùé°è¢Ÿhjuan¾è¾í¾ë¾ì¾ê¾éÈ¦¾îä¸öÁïÔÛ²ïÃîÃèðÉíáújue¾õ¾ö¾ø½ÇáÈ¾ô¾òØÊ¾÷¾ñâ±¾ð¾ó½Àõê÷¬ÚÜÛÇàÙïãæÞÞ§½ÅÜ¥ó½àµàåìßõû¾ïèöçåéÓÈ²jun¾ü¾ù¾ý¾ú¾þ¿¡¿¤¾û¿¢¿¥¹êóÞ¿£ñä÷åÞ¦öÁÞÜ¾½®ka¿¨¿§¿¦ßÇ¹þ÷Ä¿©¿ÈëÌkai¿ª¿®¿­¿¬îø¿«âýÆñïÇâé¿ÈØÜÛîí¬kan¿´¿¯¿°¿³Ù©¼÷¿±¿²î«íèê¬ãÛÇ¶ÏÝkang¿¹¿µ¿¶¿¸¿º¿»¿·ØøãÊîÖkao¿¼¿¿¿¾¿½îíêûèàåêke¿É¿Æ¿Ë¿Í¿Ì¿Î¿Å¿Ç¿Ê¿Á¿Ã¿Ä¿È¿À¿Âî§ã¡ïýà¾òòñ½ðâäÛò¤çæòÂ¿¦ë´ºÇåíîÝï¾éðá³æì÷ÁÛÁken¿Ï¿Ò¿Ñ¿Ðö¸ñÌkeng¿Ó¿Ôï¬kong¿Õ¿Ø¿Ö¿×ÙÅóíáÇkou¿Ú¿Û¿Ü¿ÙßµÞ¢ØþÜÒíîku¿à¿â¿á¿Þ¿ã¿Ý¿ß÷¼ç«ØÚ¿æÜ¥à·kua¿ä¿ç¿å¿æ¿èÙ¨kuai¿ì¿é»á¿êëÚ¿ëØá¹ôÛ¦ßÃä«áöèíßàkuan¿î¿í÷Åkuang¿ö¿ñ¿ó¿ò¿õ¿ô¿ï¿ðÚ¿Ú²ßÑêÜÛÛæþÚ÷kui¿÷À£À¢À¡¿ø¿ý¿úØÑ¿û¿þåÓî¥¿üñùóñ¿ùØ¸à°ã¦êÒõÍÞñóåÚóã´ÙçÝÞà­òñkunÀ§À¥À¦À¤ï¿öïçû÷Õã§õ«ºøãÍ±—ˆÒkuoÀ¨À©À«ÀªòÒèéÊÊlaÀ­À®À°À¬À±À²À¯ê¹ååðøØÝíÇÂäñ®laiÀ´ÀµÀ³íùñ®ô¥áâáÁêãäþïªäµlanÀ¼ÀÁÀ¶ÀÃÀÀÀºÀ¸ÀÄÀ¹À·À½é­ÀÂÀ¿À»ìµñÜá°À¾ïçî½langÀËÀÊÀÇÀÉÀÈòëÀÆÀÅï¶à¥ÝõãÏlaoÀÏÀÍÀÎÀÑÀÐÀÌßëÀÒÀÓÀÔáÀõ²ðìèáÂçÁÊñìï©îîÂäleÁËÀÖÀÕÛøØìÀ¬àÏ÷¦ÀßÞÛß·leiÀàÀ×ÀÛÀáÀÝÀÕÀßÀÞÀÜÀÙÀÚÀØÙúñçæÐõªçÐéÛäðÚ³àÏlengÀäã¶ÀâÀãÁâÜ¨liÀïÀíÁ¦ÀûÁ¢ÀúÀýÀëÀîÀñÀ÷ÀøÀöÀèÁ§Á¥ÀðÁ£ÀåÀêÀôÀìÀæÀõï®ÀéÁ¤ö¨à¬ÀùÀþÀóÀçÀòî¾íÂìåÙµòÛà¦òÃÁ¨Ù³Á¡õ·Ý°óÒó»èÀæ²ð¿äàÞ¼åÎå¢îÇèÝÀüã¦õÈæËÝñîºðÝæêÛÞß¿ÛªêóéöØªôÏ÷óáûíÇçÊÑYliaÁ©lianÁªÁ´Á¬Á·Á³ÁµÁ¶Á¯Á®Á«Á±Á²Á°Á­éçñÍöãé¬äòå¥ì¢ÞÆçöÝ²ì¡ó¹liangÁ½Á¿Á¼ÁÁÁ¸Á¾ÁºÁ©Á¹ÁÂÁ»ÁÀõÔ÷ËÙûÜ®ö¦é£liaoÁËÁÏÁÄÁÆÁÉÁÅÁÈçÔÁÇÁÌÁÊÁÃâ²àÚÁÍÁÎÞ¤ðÒå¼îÉÞÍðÓlieÁÐÁÒÁÑÁÓÁÔßÖÙýôó÷àÞæÛøä£õñlinÁÖÁÙÁÚÁÜÁßÁÝ÷ëÁ×ÁØõïÁÛÁÕÝþâÞôÔá×åàßøÁÞì¢ÂéãÁéÝê¥Áàî¬lingÁìÁíÁîÁéÁäÁãÁèÁêÁåÁëÁáÁàÁâÁçñöÁæÀâê²àòÜßèùôáßÊç±öìÛ¹ãöèÚÁ¯òÈliuÁ÷ÁôÁùÁõÁïÁñä¯ÁøÁòÁöÁðÁóåÞïÖöÌÂ½Ã­æò±¥ðÒìÖï³ç¸ÛÏÂµ±Ãì¼longÁúÂ¡Â¢ÁýÂ£ÁþëÊÂ¤ÁûÁüççÜ×ãñÛâíÃñªèÐÅªlouÂ¥Â©ÂªÂ§÷ÃÂ¨à¶Â¦ïÎò÷ÙÍáÐðüÝäñïÂ¶luÂ·Â½Â¼Â³Â¶Â¹Â¯Â¬Â²Â«ÁùÂµÂ®Â¾Â¸Â­ê¤ààÂ»ãòäõÂ±Â´Â°öÔðØè´éñëªðµÂºäËåÖéûëÍèÓ½ÝÛäß£éÖÂÌïåÞ¤ôµÂÈóüluanÂÒÂÑÂÏÂÍÂÎÂÐÙõöÇð½èïæ®lueÂÔÂÓÁÌlunÂÛÂÖÂ×ÂØÂÙàðÂÚÂÕluoÂäÂÞÂßÂçÂåÂÜÂãÂÝÂæÂâÂàÞûÂáçóäðâ¤ÀÓÜýíÑÀÒõÈöÃïÝ¿©ÙùëáÀÆÞÛÙÀé¡ãø†ªlvÂÊÂÉÂÇÂÃÂÌÂÅÂÄÂ¿ÂÂÂÀÂËÂÁÂÈÂÆéµñÚãÌëöÂ¦ÞÛÙÍmaÂíÂèÂéÂëÂðÂïÂîÂìÂêó¡Ä¨æÖáï÷áÄ¦è¿Ã´ßémaiÂòÂôÂóÂñÂöÂõö²Ý¤Û½ßémanÂúÂýÂþÂüÂùÂøÂ÷ÂûÃ¡Âñ÷©ò©á£ì×çÏõçÜ¬òýïÜmangÃ¦Ã¤Ã¥Ã£Ã¢Ã§òþíËÚømaoÃ«Ã¬Ã³Ã°Ã²Ã¨Ã±Ã©Ã¯÷ÖÃªÃ®ÙóÃ­êóó±ë£è£î¦ÜâêÄí®á¹òúì¸ã÷ƒÓmeÃ´÷ámeiÃ»ÃÀÃ¿Ã¶Ã½ÃÃÃºÃ¹Ã¼Ã·ÃÁ÷ÈÃÄÃµÝ®ÃÂáÒÃ¸é¹äØÃ¾ñÇè£ÃÕÃÓmenÃÇÃÅÃÆÞÑí¯ìËîÍmengÃÉÃËÃÎÃÍÃÏÃÈëüÃÊãÂÃÌòìô¿ÛÂó·òµô»Ã¥Þ«ÝùmiÃ×ÃÜÃÔÃØÃÖÃÛßäÃÕÃÐÃÒÃÚÃÙÃÓÃÑâ¨Ú×åô÷ç÷ãà×ôéìòãèôÍåµÞÂëßÃÝØÂmianÃæÃâÃãÃàÃÞÃåÃßÃáëïÃääÏäÅö¼ííãæ¸©miaoÃèÃîÃçÃíÃëÃéÃìÃêç¿íµß÷íðèÂçÑèÃåãmieÃðÃïóúßãØÂØ¿óºminÃñÃôÃõÃöãýáºÃóÃòãÉçëö¼çÅÜåäÅçäíª•FmingÃ÷ÃûÃüÃùÃúÚ¤î¨õ¤ÜøäéêÔÃømiuÃýçÑmoÄ£ÄªÄ©Ä¬Ä¥ÃþÄ§Ä¦Ä«Ã»Ä­Ä®Ä¨Ä°Ä¯Ä¤Ä¢Âö÷áÄ¡ÝëÜÔÚÓï÷âÉºÙõöÎÞéâÃÃæÆñ¢Ã´ÍòºÑæÖïÒõøÃ°ßémouÄ³Ä±Ä²íøçÑöÊÙ°ßèÄµòúƒÓmuÄ¿Ä¸Ä¾Ä»Ä½ÄÂÄÁÄ£Ä¹Ä·Ä¼Ä¶ÄºÄµÄ´ãåÄÀÜÙØïðÍîâÀÑÛéß¼Ä²naÄÇÄÃÄÄÄÉÄÈÄÅÄÆÞàñÄëÇÄÏÚ«naiÄÌÄÍÄËÄÎÜµÝÁæØÄÄØ¾Ù¦èÍÄÊnanÄÑÄÏÄÐà«àïéªëîôöàîòïnangÄÒàìâÎêÙß­naoÄÔÄÖÄÕÄÓè§Ä×â®íÐîóòÍßÎèãØ«ÛñneÄØÄÄÚ«ÄÅÄÇneiÄÚÄÄÄÙÄÇnenÄÛí¥nengÄÜÅ¢ÜÑniÄãÄáÄàÄâÄæÄåÄäÄçÄÝÄßêÇÄØÄÞì»íþâõâ¥ìòîêÙ£öòÛèŠ…nianÄêÄîöóð¤ÄëÄéÄíöÓÄìÄèÕ³Õ·Ø¥éýÛþ†ˆniangÄïÄðniaoÄñÄòôÁëåæÕÄçÜànieÄóÄõÄùÄôõæÄ÷Äöô«à¿ÄøéÞò¨ÞÁØ¿ÚíninÄúí¥ningÄþÄýÄûÄüÅ¢ØúÅ¡ßÌå¸ñ÷niuÅ£Å¦Å¤æ¤Å¥ÞÖâîáðnongÅ©ÅªÅ¨Å§ßæÙ¯ÞÃnoußæññnuÅ¬Å«Å­åóæåæÛßÎæÀnuanÅ¯nueÅ°Å±ÚÊnuoÅµÅ²Å´Å³ÄÈßöÞùÙÐnvÅ®âîîÏô¬í¤oÅ¶àÞà¸ouÅ·Å¼Å¸Å¹Å»ÅºñîÚ©âæê±Å½àÞÇø…ËpaÅÂÅÀÅÁ°ÇÅ¿Å¾ÅÃ°ÒèËÝâóáÅÉîÙpaiÅÅÅÉÅÆÅÄÅÇÅÈÙ½ÆÈßßÅ¾ßÉpanÅÐÅÌÅÑÅÎÅÊÅËÅÏÅÍõçó´ÞÕ·¬ãúÅÖãÝñÈ°âÅö°ãñá˜„pangÅÔÅÖÅÓÅÒó¦áÝ°õ°òäèÝòåÌÅÕpaoÅÜÅÚÅÝÅ×ÅÛÅØâÒÅÙðåáó°üöµÞËëã³hpeiÅäÅåÅàÅâÅãÅæÅßÅáàúàÎ»µïÂì·ÚüÅÞö¬íÕõ¬«˜penÅçÅèäÔpengÅóÅöÅòÅõÅñÅíÅïÅìÅîÅëÅêÅôÅéâñÅðó²Ü¡àØpiÅúÆ¤Æ¨Æ¥Æ£ÅûÆ¢Æ¡±ÙÆ©Æ¦Æ§ÅüÅù·ñæÇñ±ÅýàèÅ÷ç¢ÅþñÔØ§ÅøÛ¯èÁî¢ò·ÚüõùÜ±ÜÅå¨ÛÜÜÖÚðê¶î¼îë»µ°Õß¨âÏñâÚéäÄßÁ±»òçÛýpianÆ¬ÆªÆ«±ãÆ­ôææé±âëÝ±éõäÚÒpiaoÆ±Æ¯Æ®ØâæÎçÎÆ°éèàÑî©Ý³æôÆÓ÷ÔpieÆ²Æ³ë­ÜÖØ¯pinÆ·ÆµÆ¶Æ´Æ¸ò­æ°êòæÉÞÕ±ôpingÆ½ÆÀÆÁÆ¾Æ»Æ¿Æ¹Æ¼Æº·ëæ³Ù·èÒöÒpoÆÆÆÅÆÈÆÂÆÄÆÇÆÃ²´ÆÉØÏçêÛ¶·±óÍîÇð«Úé²¨îÞÆÊÆÓãøê·pouÆÊÙöê³ÞåpuÆÕÆÏÆ×ÆÌÆËÆÓÆÐÆÖÆÍÆÒÆØÆÙÆÑ¸¬äßÙéå§ÆÎè±ÆÔë«õëïäîÇ±¤±©ïèõ³àÛqiÆäÆðÆÚÆøÆ÷ÆóÆæÆßÆûÆúÆìÆïÆåÆôÆÞÆëÆÛÆçÆñÆÝÆõÆíÆòÆàÆáÆüÆùÆÜè½áªÆöÆéõèä¿Æê÷èí¬ì÷Æîç÷÷¢ç²ÝÂÝÝÜù»üÆãÙ¹ÜÎçùñýÛßàÒêÈÆâØÁØ½á¨ôìÜ»æëãàèçòàÖ¦ÆýôëÖ»Þ­íÓÏª¼©Ý½éÊÆèì¥³žÑvqiaÇ¡¿¨ÆþÇ¢ñÊ÷ÄqianÇ°Ç®Ç§Ç±Ç©Ç¸Ç¨Ç£Ç³Ç·Ç²Ç«Ç´Ç¬Ç­ò¯Ç¶Ç¦ÏËÇ¯Çµå¹ÜÍÙ»ÚäÇ¥Þçç×ã¥í©Ç¤åºâãêùÙÝèýÇªóéîÔÜçôÇÜ·å½ÞþÝ¡ã»qiangÇ¿Ç¹ÇÀÇ½Ç»ÇºïÏÇ¼õÄñßê¨Ç¾ôÇïêéÉæÍãÝìÁãÞ½«qiaoÇÉÇÅÇÄÇÃÇÆÇÇÇÈÇÏÇÌõÎ¿ÇÇÂÇÍÇÎã¾ÇËÇÊÇÁÜñéÔíÍØäá½Èµ÷³½¶ÚÛÈ¸Ú½qieÇÒÇÐÇÔÇÑÇÓã«æªïÆôòêüÆõÛ§ÆãÆöóæã»Ù¤qinÇ×ÇÖÇÚÇØÇÙÇÕÇÞÇÝÇÜÇÛÇßÜËñæòûñûôÀâÛäÚÞìàºàßßÄéÕqingÇéÇåÇëÇáÇàÇìÇãÇæÇçÇèÇâÇäÇêòßÇ×óÀíààõö¥éÑ÷ôöëôìóäqiongÇîÇíñ·ÜäÚöÜºóÌõ¼òËqiuÇóÇòÇïÇðÇõÇô¹êòÇÇñöúôÃÇöò°³ðåÙôÜÜ´é±åÏáìòøÛÏÙ´äÐšÂquÈ¥ÇøÈ¡È¤ÇúÇ÷ÇýÇüÇþÇûÈ¢êïá«áéÇù÷ñòÐìîëÔÈ£Þ¡ãÖó½Û¾Þ¾Ú°ÆáôðöÄíáè³ñ³ÐçÜÄquanÈ«È¨È¯È¦È­ÈªÈ°È®Ú¹È¬òéÈ©È§ç¹ÜõóÜãªîýî°ÛÚ¾íéúqueÈ·È´È±È¸È¶È³ÈµãÚÈ²ÇÓã¡¿Çã×í¨qunÈºÈ¹åÒ÷åranÈ»È¼È¾È½ÜÛ÷×òÅrangÈÃÈÂÈÀÈÁÈ¿ð¦ìüraoÈÅÈÆÈÄæ¬òÍÜéèãreÈÈÈÇßöÈôrenÈËÈÏÈÎÈÌÈÊÈÐÈÍâ¿ÁÞÈÒÈÉÜóÈÑØðéíïþÝØ¶ùñÅí¥rengÈÔÈÓriÈÕrongÈÝÈÚÈÙÈÜÈØÈÞÈÛÈßÈÖÈ×áÉéÅáõëÀòîéFrouÈâÈáõåÈàôÛ÷·ruÈçÈëÈèÈåÈéÈäÈæå¦ÈìÈêÈãàéçÈÅ®ÄÃÝêñàä²äáï¨ruanÈíÈîëÃÈäruiÈðÈñî£ÈïÜÇÞ¨ò¸èÄrunÈóÈòruoÈõÈôÙ¼óèsaÈøÈöÈ÷ìªØ¦õÁØíêýsaiÈüÈûÈùàçË¼É«ÈúsanÈýÉ¢É¡âÌË®ë§Èþãßáê²ÎôÖsangÉ¥É£É¤ÞúíßòªsaoÉ¨É§É©ëýÉ¦ðþçÒÉÒËÒÜ£seÉ«ÈûÉªÉ¬ØÄð£»øï¤senÉ­sengÉ®shaÉ±É³É¶ÉµÉ²É´ÏÃÉ·öèÉ¯É°ö®ôÄï¡ððì¦É¼àÄßþêýshaiÉ¹É¸É«É±÷»õ§shanÉ½ÉÆÉ¾ÉÁÉÂÉ¿ÉÃÉÈÉÀµ¥É¼ÉÇÉºÚ¨õÇìøÉÄæ©ÉÉÉÅ÷­ô®äúÕ¤ëþÛ·æÓðÞîÌÜÏØßæó²ôµ§É»ÛïóµshangÉÏÉÌÉËÉÐÉÍÉÎÉÑéäõüìØç´ÉÊÌÀÛðshaoÉÙÉÜÉÕÉÔÉÚÉ×ÉÓÉÒÉØÉÖÉÛÜæô¹Û¿ÕÙÇÊè¼óâäûsheÉçÉèÉäÉæÉáÉãÉàÉÝÉßÉåÉâÉÞ÷êî´ÙÜÕÛîèÊ°â¦Ò¶ÞéäÜÉõØÇì¨Ê²sheiË­shenÊ²ÉíÉñÉîÉõÉêÉóÉìÉ÷ÉòÉø²ÎÉðÉöÉôÉëò×é©ÝØßÓÉéÉïïòÚÅÇßÝ·ÐÅôÖëÏäÉÚ·²ÉÞÓ«|shengÉúÉùÉýÊ¤Ê¡Ê¥Ê£Ê¢ÉüÉþ³ËÉûáÓóÏÙþêÉäÅíòshiÊÇÊ±ÊµÊÂÊÐÊ®ÊÀÊ¼Ê¹Ê§Ê·Ê½ÊÆÊ¦Ê¿Ê¶ÊÓÊ¯ÊÔÊ¾Ê³ÊÊËÆÊÍÊ©ÊÒÊ«Ê°Ê»Ê¬Ê²ÊÎÊ¨ÊÅÊÄÊªÊÏ³×ÊÁÊÌÊ´ÊÃÊºÊ¸ÊÈéøÊÉÊËÊÑÊ­öåôùÝéõ¹óÂÖÅÖ³ÝªìêË¶¸ÉÉäâ»õ§ßòÐêó§Ìáß±óßòÏêÛÚÖîæöõshouÊÖÊÜÊÕÊ×ÊØÊÛÊÚÊÙÊÞÊÝá÷ç·Êìô¼°ÇshuÊýÊõÊéÊôÊöÊ÷ÊìÊäÊøÊâÊóÊæÊåÊðÊèÊßÊêÊîÊàÊíÊúË¡ÊãÊûÊáÊñÊçÊïÊüÊþÊùÊëÛÓÙ¿ãðç£ÊòÝÄéËÐÄÓáïøØ­äø²Ùæ­âàì¯ÞóñâshuaË¢Ë£à§shuaiË¥Ë§ÂÊË¤Ë¦ó°shuanäÌË¨Ë©ãÅshuangË«Ë¬Ëªæ×ãñshuiË®Ë­Ë°Ë¯ËµÍÉshunË³Ë²Ë´Ë±¶ÜshuoËµË¶ÊýË¸Ë·îååùéÃË§ÝôÞ÷ó°àÊÂÊÉ×siË¼Ë¾ËÀËÄË¹ËÆË½Ë¿ËÂËÁËÇËºØËìëË»ËÃËÅòÏËÈãôæáÙ¹ÛÌñêóÓÙîÊ³Ìä²ÞäùãáßÐïÈæ¦´Í¶TsongËÍËÉËÎËÌËÏËÐËÊËËã¤áÔäÁâìÚ¡ñµáÂÝ¿souËÑËÔËÒâÈËÓì¬ÛÅÞ´ïËäÑàÕî¤à²suËÙËÕËØËßË×ËÞËÜËàöÕËÝËÚËÖóùÙíãºà¼ö¢ÚÕÝøËõä³Þ£ËÛsuanËãËáËââ¡suiËäËæËêËéËèËíËåËìËçËîåäÄòÝ´Ëëî¡ìÝå¡ÚÇíõsunËðËïËñáøöÀÝ¥é¾â¸suoËùË÷ËõËøËöàÂËóËôæ¶êýßïËòÉ¯ôÈèøàÊtaËûËüËýËþÌ¤ËúÌ£é½í³åÝÌ¢Ì¡õÁäâÍØîèãËäð÷£àªtaiÌ«Ì¨Ì¬Ì§Ì©Ì¥Ì­õÌÌ¦îÑëÄÛ¢´öææÌªÞ·öØß¾Å_tanÌ¸Ì¹Ì³Ì½µ¯Ì°Ì¾Ì¯Ì²Ì¿Ì¼ÌºÌ¶Ì±Ì·Ì®Ì»ìþÌµê¼Ì´Û°ïâñûå£ëþïÄîãôÊêætangÌÃÌÆÌÇÌÀÌÉÌËÌÁÌÈÌÅÌÌÌÊÌÂÌÄó«ÙÎôÊàûäçã®è©ïÛâ¼õ±éÌtaoÌÖÌ×ÌÓÌÑÌÒÌÕÌÔÌÍÌÎÌÏèºßûìâ÷Òß¶ÌÐä¬teÌØìýí«ß¯ï«teiß¯tengÌÚÌÛÌÙëøÌÜtiÌâÌåÌáÌæÌÝÌèÌßÌÞÌãÌéÌäÌëÌêÌçõ®ÙÃã©åÑðÃç¾ç°ÌàÞÐñÓµÌÜètianÌìÌïÌíÌîÌðÌñÌóéåÌòµèî±²ÏãÃîäëïãÙtiaoÌõµ÷ÌøÌôÌöÌ÷ñ»Ù¬óÔ÷ØôÐìöÜæöæòè¸©tieÌûÌúÌù÷ÑÝÆtingÌýÍ£Í¥Í§Í¦ÌüÍ¢Í¤òÑöªîúæÃÌþÍ¡èèî®ÜðtongÍ¬Í¨Í³Í´Í¯Í­Í²Í°Í©Í±äüÍ®Í«ÍªÜíâúô¾¶²Øçá¼Ù×íÏÙÚ¶±àÌíÅÛíÙ¡touÍ·Í¶ÍµÍ¸÷»î×tuÍÁÍ»Í¼Í¾Í½Í¿ÍÀÍÂÍÃÍºÍ¹Ý±ÝËîÊÓàˆMtuanÍÅÍÄî¶åèÞÒtuiÍÆÍËÍÈÍÇÍÉÍÊìÕß¯tunÍÌÍÍëàâ½¶ÚÍÎ¶ÖêÕ´ºÙÛÙàÍÊtuoÍÑÍÐÍÏÍ×ÍØÍÓÍÕÍÙÍÒÍÖíÈõÉÙ¢ãûÛçÍÔèÞîèÆÇö¾âÕéÒØ±õ¢¶æèØóêwaÍßÍÚÍÞÍÛÍÜÍàÍÝæ´Øô°¼ßÉwaiÍâÍáÒ¨áËwanÍêÍòÍåÍíÍæÍäÍëÍçÍìÍóÍèÍñÍðÍïÍãÍéæýÝ¸òêÍîÂûîµëäØàöéçþÜ¹ÝÒÃää½çºwangÍûÍøÍùÍõÍüÍöÍýÍôÍ÷Íúã¯Øè÷ÍéþÞÌweiÎªÎ»Î´Î¯Î£Î§Î½Î¬Î¶ÎÀÍþÎ¢Î¨Î¥Î°Î²Î±Î¿Î¸Î·Î¤Î¾ÎºÎ®Þ±â«Î©Î¹Î³Î¡æ¸Î¼á¡Î­Îµâ¬Î¦ÙËÚÃðôÎ«åÔãÇáÍàøçâáËÚóä¢àíìÐãíÝÚÚñöÕôºè¸ÒÅöÛÛ×ä¶ì¿wenÎÊÎÄÎÅÎÂÎÈãëÎÆÎÇÎÃÎÁÎÉö©ØØãÓÃâçäwengÎÌÎÍÎËÝîÞ³woÎÒÎÕÎÑÎÔÎÖÎÐÎÏÙÁä×ö»ÎÎÎÓá¢Ý«à¸íÒë¿wuÎÞÎïÎñÎåÎäÎóÎçÎèÎÝÎÚÎÛÎéÎòÎê¶ñÎíÎâÎØÎ×ÎáÎðÎëÎÜÎàÎãÎßÎîØ£ðÄÎìÎæåüæðòÚðÍæÄÎÙâèðíâäÚùå»åÃØõìÉÛÑêõì¶ÍöÛØßíÓÚä´ÛëÜÌâÐè»xiÎ÷ÏµÏ²Ï¢Ï£Ï°Ï¸ÎöÏ·Ï§Ï¯ÎüÏ´Ï¤ÎþÏ®Ï¡ÎûÎúÏ±Ï¦ÎõÎôÏ¶Ï¥ÏªÎýÙâÏ¨áãÏ©Ï¬ìûôËßñæÒó¬ìäÏ­õèòáÏ«äÀðªêØÞÉçôãÒÏ³éØì¨åïÀ°ôâÎùë¯êêÛ­ôÑì¤Àåìùó£ñÞä»õµÚÀÐ¯õ§ñÓÙÒÚôÈúÎøô¸ÜçÆèôªÆÜÆûñ¶xiaÏÂÏÄÏÅÏ¿ÏÀÏ¹ÏºÏÁÏ½ÏÃÏ¾Ï¼è¦Ï»åÚ÷ïáòèÔíÌßÈÐ®ÉÂÇ¢óÁá¬Ð±»£xianÏÖÏÈÏßÏÊÏÔÏÕÏÞÏ×ÏØÏÐÏÝÏÉÏÜÏÓÏÛÏÎÏÍÏÌÏËÏÆÏÒÏÚÏÙÏÑæµÏÏö±õ£ôÌåßÜÈÞºÏÇðïõÑÙþò¹Ï³Ï´æ©õÐïÄë¯Ñ¢Ý²ìÞ¼ûá­ììðÂáýóÚxiangÏëÏàÏóÏòÏñÏìÏîÏãÏçÏíÏäÏðÏê½µÏéÏáÏèÏïÏæÏåâÃÏâæøºåç½÷ÏÜ¼ó­ÝÙößâÔxiaoÐ¡Ð§ÏûÐ¦Ð£ÏúÏþÏôÏùÐ¢åÐÏöÏüÐ¥ÏýäìÐ¤ÏõÏ÷èÉÏø÷Ìæçóïóãç¯ßØºôèÕ½ÍáÅÑ§xieÐ©Ð»Ð´Ð­Ð²ÐµÐ³Ð°Ð¬Ð¹Ð¯Ð±Ð¶Ð·ÐªÐ¼ÙôÐ¸Ð®½âÐºÐ«åâÙÉÐ¨å¬Æõé¿ÛÄß¢ç¥ò¡õó÷ºéÇÑªâÝÞ¯â³º§½àÛÆÌëÒ¶çÓöÙxinÐÄÐÂÐÅÐÁÐÀÐ½Ð¾ÐÆÜ°Ñ°Ý·Ð¿öÎê¿ÐÃïâì§Ø¶xingÐÐÐÔÐÎÐËÐÍÐÇÐÒÐÕÐÑÐÌÊ¡ÐÈÐÉÐÓÐÊã¬ÐÏÜþß©Ê¤ÚêíÊÜôÜ°â¼xiongÐÖÐÛÐÜÐÙÐØÐ×ÐÚÜºxiuÐÞÐÝÐãÐäÐßÐàÐâÐåÐá³ôËÞäåâÊá¶õ÷ßÝð¼âÓ÷ÛxuÐèÐíÐøÐëÐòÐéÐ÷ÐîÐðÐìÐæÐêÐõÐöÐóÓõÚ¼ÐôÐïê¸ÐçèòÞ£íìÐñìãñãäÓÛ×í¹ä°çïõ¯äªßÝôÚÛÃxuanÑ¡ÐûÐýÐüÐþìÅÐúäÖÐùÑ¤Ñ£äöêÑè¯Ñ¢ÝæìÓÈ¯ãùÚÎÅ¯ïàÏØÙØ»¹îçÞïÛ÷é¸ûqxueÑ§ÑªÑ©Ï÷Ñ¨÷¨Ñ¥àåÑ¦ÚÊõ½í´xunÑµÑ¸Ñ°Ñ­Ñ¶Ñ²Ñ¯Ñ·Ñ«Ñ³Ñ¬Ñ®Ñ±Ü÷Ñ´õ¸á¾Þ¹áß»çÝ¡öàä­è¯êÖñ¿»èÛ÷Ùã¿£â´Þ¦Û¨âþä±yaÑÇÑ¹ÑÀÑÅÑÄÑ½Ñ¼ÑºÑ»Ñ¾ÑÈÑÆÑ¿ÑÃÑÂíýèâÑÁØóÞëë²í¼Ôþß¹Ûëçðñâæ«ðéá¬yaiÑÂíýyanÑÔÑÛÑÐÑéÑÏÑÝÑÌÑÓÑØÑÕÑÚÑáÑ×ÑÜÑÎÑÞÑÒÑàÑçÑßÑæÑÍÑÊÑÉÑãéÜÑÖÙ²äÎÑÙëçÑË÷ú÷ÊÑèÙÈÑÑÑåØÍÜ¾ÑäÙðëÙæÌóÛÑâêÌÇ¦Û±Û³áÃìÍãÆãÕØßåûî»ÚÝõ¦°©çüØÉÚçÒóÄèäÙÛï÷ÐâûÚ¥ÝÎyangÑùÑïÑëÑôÑøÑóÑöÑòÑîÑõÑ÷ÑìÑêÑíãóí¦ÑðÑñì¾Ñú÷±âóáàìÈòÕyaoÒªÒ©Ò¡Ò£ÑüÒ¥Ò«ÑýÒ§ÑûÒ¤Ò¦ßºØ²ëÈÑþÒ¢Ø³ñºèÃçÛðÎáæÔ¿Ò¨÷¥Å±áÅôíä¬é÷Ã´Ô¼ÌÕÞÖÓ´ï¢Ïýê×½ÄÀÖyeÒ²ÒµÒ¯Ò¹Ò°Ò³Ò¶ÒºÒ®Ò±Ò¬Ò·ÑÊÒ¸ÞÞÒ­Ò´ÚËØÌÉä×§ÚþêÊÐ°Õ¨ìÇyiÒ»ÒÔÒâÒÑÒåÒ×ÒéÒæÒ½ÒÉÒÀÒìÒÆÒÂÒÁÒÕÒÚÒËÒÅÒäÒëÒÛÒíÒÇÒÌÒàÒßÒÖÒÒÒÏÒáÒÄÒÎÞÄÒãÒêÒÝÒçÒïÒÜÒÐÒÓÒÃéóÒÈÒ¿âùÒèêÝÒÙ°¬ÒÍæäÞÈÒÊÒîß®Ò¾òæìÚß½äôÒØíôßÞåÆôàì½ðêØýçËâÂÒÞÞ²ôèØîá»Üèâ¢ñ´éìÉßßÚÛÙÜ²áÚÛüÙ«Ò·ÒºÎ²Ê³ÌúóÊñÂØæàÉÚ±Ò¼àæñ¯ï×ß×Ò´ïîÛÝîÆâøðùÏÛØ×ÚÖÜÓÒ¸ã¨÷ðÞÚ¶êì¥yinÒòÓ¡ÒýÒôÒøÒþÒõÒûÒöñ«ÒùÒ÷ÒóÒñÒúÒðò¾Ø·ö¸Ûóà³ë³Û´áþÌýäÎö¯Òüñ¿ÛßÑÌéÜµåâ¹Ü§î÷ä¦ÜáyingÓ¦Ó¢Ó°ÓªÓ²Ó­Ó¯Ó³Ó®Ó¤Ó¥Ó¬Ó£Ó±Ó«âßðÐÓ¨ó¿å­Ó§ÝÓÝºÓ©àÓéºò£ÜãÛ«è¬ÝöëôÞü¾°ÙøÜþñ¨äÞçøyoÓ´à¡ÓýyongÓÃÓÀÓµÓÂÓ¹Ó¾Ó¿Ó¶ÓºÓ½Ù¸Ó»ÓÁÓ¼Ó·ã¼ð®ÛÕà¯Ó¸ïÞÜ­Þ³÷«çß÷ÓyouÓÐÓÉÓÖÓÑÓÍÓÎÓÅÓÒÓÈÓÆÓÌÓ×ÓÊÓÇÓÕÓÄÓÓöÏ÷îØüÓËèÖÝ¬ÓÏàó÷øðàÝ¯òöôíØÕÞÌÝµéàå¶ë»ÓÔòøÙ§ÈÅòÄîðßÏß[yuÓÚÓïÔ¤ÓýÓëÓöÓàÓãÓòÓêÓñÓèÓûÓôÓîÓüÓþÓùÓßÓÞÓéÔ¥ÓðÔ£Ó÷ÓúÓäÓæÓõÔ¡Ô¢ÓØÓìì¶è¤Î¾ÓâÓóÓçÔ¦ÓíÓÝÓÜÓÙÚÍêìô§ÞíÓáãÐÓåÓÛ¹ÈØ®óÄÝÇæ¥ëéÚÄàôö¹ÓøåýðöðÖìÏå÷òõîÚòâæúØ¹â×ÖàêÅÙ¶í²ñ¾ìÛñÁâÅáÎØñìÙì£ðõÝÒáüàÞàöâÀÎµö§Û×ô¨ªyuanÔ­Ô±ÔªÔ¶Ô´ÔºÔ¸Ô°Ô®ÔµÔ¹Ô²Ô©Ô¨Ô¬Ô¯Ô§Ô³Ô«Ô·ãäæÂð°Ýæà÷ö½ë¼Ü«ÞòÛùè¥Ü¾ó¢ÍðóîîŠyueÔÂÔ½Ô¼ÀÖÔ¾ÔÄÔÀÔÃÔ¿ËµÔ»ÔÁÒ«îáèÝå®Ò©ê×ÙßßÜéÐë¾yunÔËÔÆÔÊÔÐÔÎÔÈÔÏÔ±ÔÌÔÍÔÉÜ¿ç¡ÔÅéæìÙÛ©ëµã³ÔÇáñã¢óÞè¹êÀzaÔÓÔÒÕ¦ßÆÔÑÔúÞÙàÒÔÛßþzaiÔÚÔÙÔÖÔØÔ××ÐÔÔÔÕáÌçÞzanÔÞÔÛÔÝÔÜô¢ôØôõêÃöÉÞÙè¶zang²ØÔàÔáÔßê°ÞÊzaoÔìÔçÔâÔãÔëÔèÔêÔïÔîÔäÔíÔæÔåÔéßðzeÔòÔðÔñÔóßõØÆÕ¦ê¾Ôõô·óåØÓ²àåÅÔôóÐÕ­àýzeiÔôzenÔõÚÚzengÔöÔùÔøÔ÷ï­çÕ×ÛîÀêµzhaÕ¨ÔúÕ©ÔüÕ¥Õ¢Õ§Õ£ÔûÕ¤ÔþòÆÕ¦ß¸é«Ôýßå²éÕ¡×õíÄÞêâÇßîðäà©À¯zhaiÕ®ÕªÕ¯Õ¬Õ­Õ«ÔñµÔíÎÔð¼Àñ©²àÆëzhanÕ½Õ¹Õ¾Õ¼Õ´Õ¶Õ»Õ°Õ³ÕÀÕ·²üÕ¸Õ¿Õ²Õ±ÕºÕµÚÞì¹Þø×êêèÔÝë•×zhang³¤ÕÅÕÂÕÇÕÆÕÏÕÍÕÊÕÌÕËÕÉÕÃè°ó¯ÕÈÕÎÕÁÕÄâ¯áÖÛµç´æÑá¤zhaoÕÕÕÒÕÐ×ÅÕÙÕÔ³¯ÕÖÕ×ÕÑÕÓÕØÚ¯îÈóÉßúèþ×¦×ÀÖø³°êËzheÕâÕß×ÅÕÛÕÜÕãÕÚÕÞéüÕáñÞÕÝðÑòØÚØèÏÕªô÷ÉåÕ¬Õàó§ß¡íÝÕÐØ±Öø†´zheiÕâzhenÕæÕðÕóÕëÕòÕäÕìÛÚÕñÕïìõÕêÕíÕîêâÕåÕçð²çÇóðÉïÕèé»ð¡Õéî³ëÓäÚé©ä¥éôëÞÖ¡Ýèèå¶GzhengÕþÕýÖ¤ÕùÕûÕ÷Ö¢ÕõÖ£ÕôÕöÕüóÝ¶¡Õøï£á¿ÕúÖ¡ÚºáçöëîÛzhiÖ®Ö»ÖªÖÆÖ±ÖÁÖ¸ÖÎÖ§ÖµÖÊÖÂÖ¾Ö¹ÖÃÖ°Ö¯Ö´ÖÇÖ½Ö³Ö²Ö·ÖÈÖ¬Ö¼Ö¥ÖÍÖ¦ÖÄÖÉÖ«Ö­Ö¨Ö¶ÖÀÖÅÖ¿ÖºÖ©Ê¶ÖÏåëÖËìíÊÏèäÖÌõ¥ìóèÙÜÆêÞõÜòÎèÎðëëÕÚìàùéùïôè×ð·ÞýØ´ôêæïÕãåéõÅÛúáçâåõÙõôÕÝÕ÷Û¤ðºzhongÖÐÖÖÖØÖÕÖÚÖÓÖÒÖÔÖ×ÖÙõàÚ£ÖÑó®âìïñô±zhouÖÜÖÞÖÝÖæÖÛÖèÖäÖáÖàÖåÖâÖçÖãç§ÖßëÐæûæ¨ôíßúÝ§ôüô¦ßLzhuÖ÷×¡×¢ÖúÖðÖøÖíÖþÖî×£×¤ÖéÖñÖìÖùÖòÖöÖýÖóÊõÖëÊôÖõÖïÖêÖüÖûÖôØùóÃÙªîùÜïõîèÌä¨ô¶ÖáóçéÆìÄÊíÅ¢Û¥÷æäóñÒä¾ÄþÜÑôãºBzhua×¥×¦ÎÎzhuai×§×ªàÜzhuan×ª×¨×¬×©´«×«×­âÍò§ãçßùzhuang×°×´×³×¯×²×±×®´±í°ãÝÙ×ÞÊÇPzhui×·×¹×¶×¸×º×µã·æíçÄà¨ö¿zhun×¼×»ÍÍöÀëÆzhuo×Å×À×Á×½×¿×¾×Ã×Æ×Ç×ÂïíäÃ×ÄßªìÌåªÚÂ½ÉÙ¾ä·ÕÐÖøõÖí½zi×Ó×Ô×Ê×Ö×Ð×Ë×Ì×Ï×É×Ñ×Îê¢æ¢è÷×È×Ò×Õí§×Íö·íöæÜïÅçÞðË÷ÚÚÑïöôôáÑêßñèÔÖßÚç»Ö¨ööóÊôÒõþö¤zong×Ü×Ú×Ý×Û×Ù×ØÙÌôÕ××ëê´ÓèÈzou×ß×à×á×ÞßúÖßåÁÛ¸æãÚîÖèÚÁzu×å×ã×é×æ×è×â×ä×çÙÞïßàÕÝÏzuan×ê×ëçÚ×¬ÔÜß¬õòzui×î×ï×ì×íôÈõþ¶Ñ¾×Þ©µØzun×ð×ñ÷®é×ß¤ÛÚ¿¡zuo×÷×ö×ó×ø×ò×ù×ôÔäìñßòõ¡×ÁíÄÚèâôàÜ×õëÑÚâóÐ´é";
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
