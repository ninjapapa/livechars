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

  var pytab="a����������߹ai�������������������Ȱ����������Ͱ��������������an��������������������藺�����������������ang��������ao�°����İ���������᮰���������������������۰���ba�Ѱ˰ɰְͰհΰӰǰ԰ҰаȰ̰ϰ����ΰʰ����������ò�������bai�ٰװڰܰݰ�����ް��²�ban���������߰������������������bang�������������������������bao���������������ٱ����������������������������������������bei�����������������������ر�������������������鱷���۱�������ben��������������Ｚ���beng�ñ����±�괱��԰�bi�ȱرڱʱ۱ձƱ˱ܱϱױǱ̱ұ��������±��ٱб�赱�ذ澱�������������������ݩ���������������޵�ɱѷ����������������Ű��bian��߱������ޱ������������������������������biao����������������������������bie��������bin��������ޱ���������������������bing������������������������������bo������������������������������������������Ĳ�����뢲��۲������������������ذ�޵ݩ��bu�����������������в��߲���߲�����������ca��������cai�Ųɲ˲ƲĲʲò²Ȳ̲�can�вϲβҲ��ӲӲ�貲�������cang�زֲԲ�����cao�ݲ۲ܲ��������ܳ�ce����߲�����cen�乲�ceng��������cha��������農����ɲ��������汲��������������chai���������٭�chan����������������������������ܲ����������������۵���chang��������������������������Ʋ�������������������������chao�������������������������̴½�che���������������������chen�³������ĳ����߳�巳�����衳������������������cheng�ɳƳǳʳ˳̳�ʢ�ųϳȳӳγ�ة��������������������������chi�Գֳ߳ݳسٳ��۳��뷳ڳ������ͳ��׳޳�߳����������������������ۭ����ܯ���������������chong����س�������������ӿ����chou����������������ٱ���������chu�������������������󴡳��������������ۻ�ƴ���������ء������ڰchuai�����������chuan������������밴������������chuang����������������ײ���chui�����������׵����chun������������������ݻchuo���꡴�����ci�˴δʴǴŴɴ̴ʹƴôȴ����������������Ȳ���cong�ӴԴдϴҴ������������cou������cu�ִٴ״��������������������Ȥ����cuan�۴���ߥ�ܴ�����cui��ߴ�޴ݴ����������˥�������cun���������cuo����ﱴ��������������������da�������������������������������dai�������������������᷵�߰��ܤ������߾�����dan������������������������ʯ�鵮ࢵ�������������浦�������㾮��dang�����������������������dao����������������뮵�����߶����������de�ĵõصµ��dei��deng�ȵƵǵŵ˵������������س�di�صڵ͵׵۵еεֵܵݵ̵ٵѵĵӵҵ���ڮ淵޵���صۡ�������ܵ�������ݶ���������ѿ����dia��dian���������ߵ���۵���������������������ؼdiao�������������������������die���������������������������ܦ��ding������������������������������������diu����dong������������������˶�����˶��������dou������������񼶵��������du�ȶ������Ŷ��¶��ɶǶƶ��ƶ���¶��ྲྀ�������ܶ������duan�ζ˶̶϶Ͷ������רdui�ԶӶѶ�����������dun�ֶٶ׶ض۶ն������������������duo������������޶�����������������綶߶�e�������������Ŷ���������������������ج�����������ݭ�ð����������ei��en�Ŷ�������er����������������٦��������fa���������������ҷ���fan������������������������������������ެ�����������Ȯfang�ŷ��������ķ÷��з�����������������fei�ǷɷѷϷʷ˷ηƷ������������������������������������������fen�ַݷ۷�ӷܷ޷߷׷طҷ������շ�����寷���feng�������������ٺ�����������ۺ��fo��fou����fu���������򸻷����������������������������������𸥸����������ɸ�����������ۮ�ڸ����������������������禸�������ݳ��������߻��������縢�޸��������ܽ���測����߼����ga�¸�������٤����긿������ȼ�gai�øĸǸƸ�ؤ�����������gan�ɸ˸иϸҸѸʸθ̸Ӹ�������ߦ����������Ǭ������gang�ָո׸ٸ۸ڸܸԸؿ��������gao�߸����꽸��ﯸ�ھ�ɸ�۬غ����޻����ge�����������������󿩸��Ӹ���ܪ���������ú�����������ٸ���ت�Ǻ�gei��gen������ݢب��geng�����������������쾱���ب��gong���������������������������������������ÿ󿸸�gou��������������������������������������ڸ����gu�ʹŹɹ̹ȹǹĹ˹��¹͹��ܹ����������������ڬ���Թ������������������������������Ҹ滬͹gua�ҹιϹ��ɹ��Թ�ڴ���������������guai�ֹչ���guan�ܹٹع۹ݹ�޹ڹ���¹���������ݸ����������guang������������gui������������������������������Ȳ���۹�����ѿ���gun�������������guo������������������������������������ha������Ϻhai�����������˿Ⱥ������������han�����������������������ʺ�������򥺷��������������������������ɳ���hang�к�������������������hao�úź��ĺ��º�����㺾�޶����Ƹ��婺���ºԺ�he�ͺϺκӺ˺ȺǺֺɺкպغ�����ֺ׺������º�������ڭ�������Ǻ�Ы�hei�ں���hen�ܺ޺ݺ�heng���ߺ������޿���hong����������ڧ������ްޮݦ�ȹ���hou���������ܩ��������������hu���������������������������������������ﻣ���������������������������������ɺ��Ჺ���Ϸ����hua���������������뻩�����軫��huai���������׻�����ثhuan����������������佻»�ۨ����ߧ�ջ�������ۼ�̻���徻���������huang�ƻʻĻɻŻλȻ̻ѻϻǻ�����������������������hui��ػһݻٻӻԻ��ۻ�ޥ��ջֻ�߻��������䫻޻����ڶ�����������������������⻲�����hun�����������ڻ������huo�����������������������޽��߫�����ֻ�����ji�����������ȼ��ǻ��������Ƽ������̼��ͻ��ļüʼ��������漤��ؽ������������ϵ������񤼬�ɼż����������������ʼ�ߴ�߼˻�����آ�����������������������������鮼������������٥��ު������������ܸ���������ڵ�������Ծ�����������jia�ҼӼ׼ܼۼټмؼѼݼ޼ּμ����Լ����ȼ�������ۣ�����������������������Ю٤����jian������������������������ὣ����｢����������彦��꯼����������ɼ���ﵽ��������������������������ǳ������������������������������jiang��������������������������������������ǿ������jiao�Ͻнǽ��Ž̽������ʽ��ɾ��ѽν����˽��ý�У������ٮ�����Ƚ��޽������������������������ܴ��븽�jie��ڽӽ�׽Խ���ؽֽ��ҽܽ�߽ݽٽ���������򡿬�ҽ��ڵ���ܼ�ڦ����஽����ڽ����ʽ������ߢ��jin����������������������������������ƽ����ݣ�������������������jing���������������������������������������澦�����־�������ݼ�溾��㽾��������徤�ɸ�������jiong���ľ�������jiu�;žɾƾþȾ�������˾���־ʾ���̾�౾��վ�����������ju�ݾ־�پ�߾�۾Ӿվ޾ؾ��۾ܾ׾��ҾоϾ�������ڪ�پ�駾���ҳ��������������������������������������Ĺ���������juan�������Ȧ���Ծ���������۲�����jue����������پ�ާ����ʾ���������������������������޽��������Ȳܥjun���������������������������������ަ��ka���������̿���������kai������������������������ܿ�����kan������������٩��ۼ����Ƕݨ����kang�����������������ʿ�kao����������������ke�ɿƿǿ̿οſͿÿ˿¿��ȿĿ����������﾿����������������������������ken�Ͽѿҿ�����keng�ӿ��kong�׿տֿ�������kou�ڿ��ؿ�ߵ����ޢ����ku��޿�ݿ�������ܥ�竿�kua������٨kuai��������ۦ������䫻�������kuan������kuang������������ڿ����������ڲ��kui��������������ి�������������������ظ���������୿���kun���������������������kuo��������������la��������������������������lai���������������������lan����������������������������������������lang��������������������ݹ����lao���������������������������������������le����������������߷������lei������������������������������������ڳ����leng�������ܨ��li������������������������������������������������������������ٵ����۪������ݰ��ٳ��޼��������������������������߿�������������������������������ت�������lia��lian�������������������������������������������������ݲliang�����������������������������ܮ����ݹliao�������������������������ޤ���������������lie�������������������������lin�������������������������������������������������ling���������������������������������������������۹�����������liu����������������������½������������µ�����í����long����¡¢£����¤��Ū���������������lou¥©¶§¨�ª��¦��������������lu·¯½³¼¶¬²«»¹±®°´­µ��������¾ߣ�������¸����º�������������������ޤ���Ƚ�luan��������������������lue�������lun����������������luo�������������������������������ۿ������������������������������lv������������������¿���������������������¦ma��������������Ĩ����������Ħô����mai��������������ݤ۽��man���������������������áܬ�������������mangæâäãç��å������maoëðñóïêèòéìí��î��������������������meô��meiÿ��ûú÷ø��þùöü�ý��������ݮ��õ���������������men��������������meng��������������������ޫ��������������åmi��������������������������������������������������������mian�����������������������������︩miao���������������������������������mie���������ؿ��min���������������������������������ming������������ڤ���������miu����moĩģĥĤ��ĪĨīûĬĦĮĭħ��Ģ����İ��ġ����������������������įð������ô����mouĳı��Ĳ������ٰ����ĵmuľĶĿĸĻķ��Ĺģ����ļĽĺ��Ĵ��ĵ߼�������Ĳ����na������������������������ګnai������������ؾܵ��٦����nan������������������nang������߭��nao������������ث������������ne��ګ������nei��������nen����neng��Ţ��ni����������������������������������٣������nian���������إ������������շ��ճniang����niao��������������nie��������������������������ؿnin����ning����š��Ţ���������niuţŤŦ�ť������nongũŪŨŧٯ����nou����nuŬŭū����������nuanůnueŰű��nuoŵŲ��ųŴ�������nvŮ��������oŶ���ouŷżźŹŽ��ŻŸ�ک������pa�����Ұ���ſž������������pai������������ٽ��������žpan������������������������������Ȱ�ⷬ��pang��������������̰������pao����������������������������pei�����������������������������������pen������peng���������������������������������ܡpi��Ƥ��ƥ������ƢƩƨƣƧ���ا����ܱ�������ۯ��������������ߨ�����������ơ���Ʀ��������⻵�������pianƬƪƫƭ����������������±�piaoƱƮƯ�ư�������������ݳ����pieƲƳ���دpinƷƴƶƵƸ��������ձ�pingƽƿƾ��Ƽ��ƺƻƹ�����ڢٷ��po���������������������鲴��������۶�����Ӳ���pou�������pu���������������ϸ�����������������������������뫱��������qi������������������������������������������������������������������������������������������ؽ�����ޭ����������ٹܻ����������ݽ�������ӻ��������Ϫֻ֦qiaǡ����Ǣ������qianǰǧǮǦǳǱǩǨǬǣǷǫ��ǶǯǴǲǥ��ǭǸܷٻǵ��ǪǤ���������������������������ݡ������qiangǿǽǹ��ǻǼǺ��������Ǿ�������������޽���qiao���������������������Ŀ��������������������ȸ�������ڽώ�ȵqie����������������ۧ�����٤������qin����������������������������������������������qing��������������������������������������������������qiong�����������������ܺqiu������������������������ٴ�����������������й��ܴquȥ��ȡ����������ȢȤ��������������������޾������ޡ��ȣ����۾ڰ��������quanȫȨȦȰȪȭȩȮȯ������ȧ����Ȭڹ����繾���queȴȷȱȸ��Ȳȵȶȳ���������qunȺȹ����ranȻȼȾ��Ƚ����rang������ȿ�����rao�������������re��������ren��������������������������������⿶�����reng����ri��rong������������������������������rou������������ru���������������������������޸�������Ů��ruan��������rui����������ި��run����ruo������ټsa������ئ���������sai��������ɫ��˼san��ɢɡ��ˮ��������ֲ�sangɣɥɤ�����saoɩɨɧɦ��������ܣ������seɫɬ�ɪ�������senɭsengɮshaɱɳɰɴɶɵɲɯ��ɷ��������ɼ��������shaiɸɹɫ����ɱshanɽ������ɼ��դ��������ɾ��ɿ��ڨ��ɻ�����޲��������������ɺ��۷����ɵ�����shang���������������������������shao������������������������������ۿ�������she�������������������������������������ʰ��Ҷ��ʲ��shei˭shen����������������ʲ���������������ֲ���������������ڷ���ݷ�����Ӳ�sheng��ʡ������ʤʢʥ��ʣ����������������shi��ʮʱʹʽ����ʾʵʯ��ʷʳʫ������ʦ��ʼʪʩʿ��ʶʧ����ʻʰʴ��ʬ������ʲʸ����ʭ����ʨ����ʺ������ݪ��������߱����������������ֳ������������˶��������shou�����������������������������shu���������������������������������������������������ˡ������ٿ���������������������������ح���������shuaˢˣ�shuai��˦˥ˤ˧�shuan˩˨����shuang˫˪ˬ����shuiˮ˭˰˯˵��shun˳˲˴˱��shuo˵��˷˶��˸����������˧�����si������˿˹˼˾˽����˺��ٹ��˻������������������������������������ʳ�޴���song��������������������������ݿڡsou������������޴�����������su�����������������������������������������ޣsuan�������sui��������������������������������ݴ��sun�������ݥ�����suo�����������������������������ɯ��ta��������̤�������̢��̡��̣�����������taį̧̫̬̩̥��̦̭��̪��߾ۢ����޷���tan̸̼̲̽̿��̯̾�̷̶̵̴̰̳̹̺̮̱��̻��۰�������������tang������������������������������������������������tao����������������������������ػ��߶te�������߯tei߯teng����������ti����������������������������������������������е�tian�������������������������������tiao��������������٬��������������温tie����������ting��ͣͥͦ��͢��ͤ��ͧ͡���������������tongͬͨͭͲͳͰͯʹ��ͪͩͱ����ͫ����١ͮ�����������������touͷͶ͸͵����tuͼ��Ϳͽͻ;͹������ͺ��ݱܢ������ܶtuan���������tui������������߯��tun�����ζ���������ʴ�����tuo������������������٢����������������������ر���������wa�������������఼�������wai������Ҩwan��������������������������������������������ܹ��������ݸ�����wang�����������������������������weiΪλδά΢ΨιίνζβΧκθ����αγΩΰΣ�η��ΤοΥޱήμ�ξ���ε��έΦ�������������Ϋ��Ρ�������������������������wen�����������������������������������weng������޳��wo������������������������ݫ�����wu����������������������������������������������������������أ���߶���������������������������������������������������xiϵ��ϸ��ϴϲϡϰϤϷϢ��ϯϣϩ��Ϫ϶ϮϧϳϥϦ������Ϩ������ϱ���������������ϭϬ�����������ݾ��ۭ���������������������ϫ���������������������������������������Я���xia����Ϻ��ϼ��ϿϹϻ��Ͻ����Ͼ���������������ǢбЮ���xian���������������������������������������������������޺��������������������������ݲ᭼���������ϳϴ�Ѣxiang�������������������������������������������������ܼ����Ϻ�xiaoСЦУ������ЧТ����Ф������Х�����������������������������ѧ�ͺ�xieдЩблЭжеЬШЪмзЮвйЯакгѪи������������Ы�ǽ�����ߢ�Ҷ���ޯ���������������xin������оп����нܰ�������Ѱݷض���xing������������������������ʡ����ߩ������������ܰʤxiong��������������ܺxiu�������������������߳���������������xu������������������������������������������������ޣ����������������ڼ���xuanѡ��������������ѣ������Ѥ����Ѣ����������������ȯ�ﻹ����ůxueѧѪѩѨ��ѥ��Ѧ��������xunѶѰѴѮѲѵѭѫѬѸ��ѯѷ�ѱ��޹�ަѳ����������ۨⴻ翣����ݡ�����yaѹѽ��Ѽѿ��������Ѻ�����ѻ��Ѿ��������������������������߹yai����yan����������������������������������������������������������������������������������۱������������������������۳ڥ��ܾ��ٲ�������Ǧ�����簩����yang�������������������������������������������������yaoҪҩ��ҡҧҤҦҫ����ңҢ��ҨԿ��ҥ��������ߺ�������Լ����سű�ô��ز������Ӵ�������yeҲҺҶҵҳҹүҰҮұ��ҷ��ҬҴҭ��Ҹק��������а����ըyiһ��������������������������������������������ҽ�������������������������߮��������Ҽ��������������������ҿ����Ҿ�������������������ܲ����ڱ��������������������������٫޲��������߽�����ʳ�β�������������������������ҺҴҷ��Ҹ����������yin��������ӡ��������������������������ܧ������������ط۴�������ε��������yingӦӢӪӲӰӭӳӯӥӱӮӤӬӣө��ӧ����ӫӨ�ݺ��۫�������������������������yoӴ���yong����ӿ��ӵ��ӼӹӾӶӺӽ���ӷٸӻ�Ӹܭ���������޳you������������������������������������������������ݬ������������ݯ��ݵ٧����������������yu�������������������������ԣԤ������ԥ����Ԣ��ԡ��������������������������ع����������������Ԧ��خ��������������������������������������������������ٶ��ξ��������ε�������������������������������yuanԲԪԭԶԱԺԬԸԴ԰ԵԮԹԩ��ԫ�ԳԨԷ��ܫ���ԯ������������ԧ��ܾ����yue��ԽԼԻ��Ծ������Կ�����������˵�����ҫҩyun������������������ܿ۩���������������������Աza����զ��������������zai��������������������zan���������������������zang������������zao��������������������������������ze����������զ��������������Ų�����խzei��zen����zeng����������������zha��ը����բդեթէ��ագ���������߸�����������������զzhaiկժխիծլ�������β�����zhanռվսմճյպհձղնջ��շտ��չո�����������zhang���������������������������۵����������������zhao��������������گ���ѳ�����צ����������������zhe��������������������������������������ߡ����ժլ���رzhei��zhen���������������������������������������������������֡�����������zheng����֤��������֣֢������֡�������ں������붡zhiֻ֮����ֵָ֪��ֱ֧��ֽ��֯��־ֲֹ֦��ְ֭��ִ֥֬��ּ��ֳ֫����ֶַֺ֨ۤ��������������������ֿ�������������������������������������������֩��ش����������ʶ�������zhong����������������������ڣ���������zhou����������������������������������������ݧ����zhuס��ע������פ����������������������ף�������������������������������٪ۥ���������������������������Ţ����zhuaץ��צzhuaiקת��zhuanתר��ש׬׫׭�������zhuangװ״ׯ׳׮ײ��ױ����������zhui׷׶׹׵׺׸��������zhun׼׻�������zhuo׽��������׿��׾������ߪ�����پ������䷽���������zi����������������֨���������������������������������������������������������������zong���������������������ȴ�zou����������������۸��������zu������������������������zuan��߬������׬��zui������������ީ�ѵ���zun������ߤ������zuo�����������������������������������������";
  var yunmu="ang:��ng,��ng,��ng,��ng;eng:��ng,��ng,��ng,��ng;ing:��ng,��ng,��ng,��ng;ong:��ng,��ng,��ng,��ng;ai:��i,��i,��i,��i;ei:��i,��i,��i,��i;ui:u��,u��,u��,u��;ao:��o,��o,��o,��o;ou:��u,��u,��u,��u;iu:i��,i��,i��,i��;ie:i��,i��,i��,i��;ue:u��,u��,u��,u��,����,����,����,����;ve:����,����,����,����;er:��r,��r,��r,��r;an:��n,��n,��n,��n;en:��n,��n,��n,��n;in:��n,��n,��n,��n;un:��n,��n,��n,��n;a:��,��,��,��;o:��,��,��,��;e:��,��,��,��;i:��,��,��,��;u:��,��,��,��;v:��,��,��,��,��;";

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
