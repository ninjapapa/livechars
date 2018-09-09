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

  pytab="a����������߹ai�������������������Ȱ����������Ͱ��������������an��������������������藺����������������ang��������ao�°����İ���������᮰���������������������۰���ba�Ѱ˰ɰְͰհΰӰǰ԰ҰаȰ̰ϰ����ΰʰ����������ò�������bai�ٰװڰܰݰ�����ް��²�ban���������߰������������������bang�������������������������bao���������������ٱ����������������������������������������bei�����������������������ر�������������������鱷���۱�������ben��������������Ｚ���beng�ñ����±�괱��԰�bi�ȱرڱʱ۱ձƱ˱ܱϱױǱ̱ұ��������±��ٱб�赱�ذ澱�������������������ݩ���������������޵�ɱѷ����������������Ű��bian��߱������ޱ�����������������������������biao���������������������������bie��������bin��������ޱ���������������������bing������������������������������bo������������������������������������������Ĳ�����뢲��۲������������������ذ�޵ݩ��bu�����������������в��߲���߲�����������ca��������cai�Ųɲ˲ƲĲʲò²Ȳ̲�can�вϲβҲ��ӲӲ�貲�������cang�زֲԲ�����cao�ݲ۲ܲ��������ܳ�ce����߲�����cen�乲�ceng��������cha��������農���ɲ��������汲��������������chai���������٭�chan����������������������������ܲ����������������۵���chang��������������������������Ʋ�������������������������chao�������������������������̴½�che��������������������chen�³������ĳ����߳�巳�����衳������������������cheng�ɳƳǳʳ˳̳�ʢ�ųϳȳӳγ�ة��������������������������chi�Գֳ߳ݳسٳ��۳��뷳ڳ������ͳ��׳޳�߳����������������������ۭ����ܯ���������������chong����س�������������ӿ����chou���������������ٱ���������chu�������������������󴡳������������ۻ�ƴ���������ء������ڰchuai�����������chuan������������밴������������chuang����������������ײ���chui�����������׵����chun������������������ݻchuo���꡴�����ci�˴δʴǴŴɴ̴ʹƴôȴ����������������Ȳ���cong�ӴԴдϴҴ������������cou������cu�ִٴ״��������������������Ȥ����cuan�۴���ߥ�ܴ�����cui��ߴ�޴ݴ����������˥�������cun���������cuo���ﱴ��������������������da������������������������������dai�������������������᷵�߰��ܤ������߾�����dan������������������������ʯ�鵮ࢵ�������������浦�������㾮��dang����������������������dao����������������뮵�����߶����������de�ĵõصµ��dei��deng�ȵƵǵŵ˵������������س�di�صڵ͵׵۵еεֵܵݵ̵ٵѵĵӵҵ���ڮ淵޵���صۡ�������ܵ�������ݶ���������ѿ����dia��dian���������ߵ���۵��������������������ؼdiao�������������������������die���������������������������ܦ��ding������������������������������������diu����dong������������������˶�����˶��������dou������������񼶵��������du�ȶ������Ŷ��¶��ɶǶƶ��ƶ���¶��ྲྀ�������ܶ������duan�ζ˶̶϶Ͷ������רdui�ԶӶѶ��������dun�ֶٶ׶ض۶ն�����������������duo������������޶�����������������綶߶�e������������Ŷ��������������������ج�����������ݭ�ð����������ei��en�Ŷ�������er����������������٦��������fa���������������ҷ���fan������������������������������������ެ�����������Ȯfang�ŷ��������ķ÷��з�����������������fei�ǷɷѷϷʷ˷ηƷ������������������������������������������fen�ַݷ۷�ӷܷ޷߷׷طҷ������շ�����寷���feng�������������ٺ���������ۺ��fo��fou����fu���������򸻷����������������������������������𸥸����������ɸ�����������ۮ�ڸ����������������������禸�������ݳ��������߻��������縢�޸��������ܽ���測����߼����ga�¸�������٤����긿������ȼ�gai�øĸǸƸ�ؤ�����������gan�ɸ˸иϸҸѸʸθ̸Ӹ�������ߦ���������Ǭ������gang�ָո׸ٸ۸ڸܸԸؿ�������gao�߸����꽸��ﯸ�ھ�ɸ�۬غ����޻����ge�����������������󿩸��Ӹ���ܪ���������ú�����������ٸ���ت�Ǻ�gei��gen������ݢب��geng�����������������쾱���ب��gong���������������������������������������ÿ󿸸�gou��������������������������������������ڸ����gu�ʹŹɹ̹ȹǹĹ˹��¹͹��ܹ����������������ڬ���Թ������������������������������Ҹ滬͹gua�ҹιϹ��ɹ��Թ�ڴ���������������guai�ֹչ���guan�ܹٹع۹ݹ�޹ڹ���¹���������ݸ����������guang������������gui�����������������������������Ȳ���۹�����ѿ���gun�������������guo������������������������������������ha������Ϻhai�����������˿Ⱥ������������han�����������������������ʺ�������򥺷��������������������������ɳ���hang�к�������������������hao�úź��ĺ��º�����㺾�޶����Ƹ��婺���ºԺ�he�ͺϺκӺ˺ȺǺֺɺкպغ�����ֺ׺������º�������ڭ�������Ǻ�Ы�hei�ں���hen�ܺ޺ݺ�heng���ߺ������޿���hong����������ڧ������ްޮݦ�ȹ���hou��������ܩ��������������hu���������������������������������������ﻣ���������������������������������ɺ��Ჺ���Ϸ����hua���������������뻩����軫��huai���������׻�����ثhuan����������������佻»�ۨ����ߧ�ջ�������ۼ�̻���徻���������huang�ƻʻĻɻŻλȻ̻ѻϻǻ�����������������������hui��ػһݻٻӻԻ��ۻ�ޥ��ջֻ�߻������䫻޻����ڶ�����������������������⻲�����hun�����������ڻ������huo�����������������������޽��߫�����ֻ���ji�����������ȼ��ǻ��������Ƽ������̼��ͻ��ļüʼ��������漤��ؽ������������ϵ������񤼬�ɼż����������������ʼ�ߴ�߼˻�����آ����������������������������鮼������������٥��ު������������ܸ���������ڵ�������Ծ�����������jia�ҼӼ׼ܼۼټмؼѼݼ޼ּμ��Լ����ȼ�������ۣ�����������������������Ю٤����jian������������������������ὣ����｢���������彦��꯼����������ɼ���ﵽ��������������������������ǳ������������������������������jiang��������������������������������������ǿ������jiao�Ͻнǽ��Ž̽������ʽ��ɾ��ѽν����˽��ý�У������ٮ�����Ƚ��޽������������������������ܴ��븽�jie��ڽӽ�׽Խ���ؽֽ��ҽܽ�߽ݽٽ���������򡿬�ҽ��ڵ���ܼ�ڦ����஽����ڽ����ʽ������ߢ��jin���������������������������������ƽ����ݣ�������������������jing���������������������������������������澦�����־�������ݼ�溾��㽾��������徤�ɸ�������jiong���ľ�������jiu�;žɾƾþȾ�������˾���־ʾ���̾�౾��վ�����������ju�ݾ־�پ�߾�۾Ӿվ޾ؾ��۾ܾ׾��ҾоϾ�������ڪ�پ�駾���ҳ��������������������������������������Ĺ���������juan������Ȧ���Ծ���������۲�����jue����������پ�ާ����ʾ���������������������������޽��������Ȳܥjun���������������������������������ަ��ka���������̿���������kai������������������������ܿ����kan������������٩��ۼ����Ƕݨ����kang�����������������ʿ�kao����������������ke�ɿƿǿ̿οſͿÿ˿¿��ȿĿ����������﾿��������������������������ken�Ͽѿҿ�����keng�ӿ��kong�׿տֿ�������kou�ڿ��ؿ�ߵ����ޢ����ku��޿�ݿ�������ܥ�竿�kua������٨kuai��������ۦ������䫻������kuan�����kuang������������ڿ����������ڲ��kui��������������ి�������������������ظ���������୿���kun���������������������kuo��������������la��������������������������lai���������������������lan����������������������������������������lang��������������������ݹ����lao���������������������������������������le����������������߷������lei������������������������������������ڳ����leng�������ܨ��li������������������������������������������������������������ٵ����۪������ݰ��ٳ��޼��������������������������߿�������������������������������ت�������lia��lian�������������������������������������������������ݲliang�����������������������������ܮ����ݹliao�������������������������ޤ���������������lie�������������������������lin�������������������������������������������������ling���������������������������������������������۹�����������liu����������������������½������������µ�����í����long����¡¢£����¤��Ū���������������lou¥©¶§¨�ª��¦��������������lu·¯½³¼¶¬²«»¹±®°´­µ��������¾ߣ�������¸����º�������������������ޤ���Ƚ�luan��������������������lue�������lun����������������luo�������������������������������ۿ������������������������������lv������������������¿���������������������¦ma��������������Ĩ����������Ħô����mai��������������ݤ۽��man���������������������áܬ�������������mangæâäãç��å������maoëðñóïêèòéìí�î��������������������meô��meiÿ��ûú÷ø��þùöü�ý��������ݮ��õ���������������men�������������meng��������������������ޫ��������������åmi��������������������������������������������������������mian�����������������������������︩miao��������������������������������mie���������ؿ��min��������������������������������ming������������ڤ���������miu����moĩģĥĤ��ĪĨīûĬĦĮĭħ��Ģ����İ��ġ����������������������įð������ô����mouĳı��Ĳ������ٰ����ĵmuľĶĿĸĻķ��Ĺģ����ļĽĺ��Ĵ��ĵ߼�������Ĳ����na������������������������ګnai������������ؾܵ��٦����nan������������������nang������߭��nao������������ث������������ne��ګ������nei��������nen���neng��Ţ��ni����������������������������������٣������nian���������إ������������շ��ճniang����niao��������������nie��������������������������ؿnin���ning����š��Ţ���������niuţŤŦ�ť������nongũŪŨŧٯ����nou����nuŬŭū����������nuanůnueŰű��nuoŵŲ��ųŴ�������nvŮ�������oŶ���ouŷżźŹŽ��ŻŸ�ک������pa�����Ұ���ſž������������pai������������ٽ��������žpan������������������������������Ȱ�ⷬ��pang��������������̰������pao����������������������������pei�����������������������������������pen������peng���������������������������������ܡpi��Ƥ��ƥ������ƢƩƨƣƧ���ا����ܱ�������ۯ��������������ߨ�����������ơ���Ʀ��������⻵�������pianƬƪƫƭ����������������±�piaoƱƮƯ�ư�������������ݳ����pieƲƳ���دpinƷƴƶƵƸ��������ձ�pingƽƿƾ��Ƽ��ƺƻƹ�����ڢٷ��po���������������������鲴��������۶�����Ӳ���pou�������pu���������������ϸ�����������������������������뫱��������qi�����������������������������������������������������������������������������������������ؽ�����ޭ����������ٹܻ����������ݽ�������ӻ��������Ϫֻ֦qiaǡ����Ǣ������qianǰǧǮǦǳǱǩǨǬǣǷǫ��ǶǯǴǲǥ��ǭǸܷٻǵ��ǪǤ��������������������������ݡ������qiangǿǽǹ��ǻǼǺ��������Ǿ�������������޽���qiao���������������������Ŀ��������������������ȸ�������ڽώ�ȵqie����������������ۧ�����٤������qin����������������������������������������������qing��������������������������������������������������qiong�����������������ܺqiu������������������������ٴ�����������������й��ܴquȥ��ȡ����������ȢȤ��������������������޾������ޡ��ȣ����۾ڰ��������quanȫȨȦȰȪȭȩȮȯ������ȧ����Ȭڹ����繾���queȴȷȱȸ��Ȳȵȶȳ�������qunȺȹ����ranȻȼȾ��Ƚ����rang������ȿ�����rao�������������re��������ren��������������������������������⿶����reng����ri��rong������������������������������rou������������ru���������������������������޸�������Ů��ruan��������rui����������ި��run����ruo������ټsa������ئ���������sai��������ɫ��˼san��ɢɡ��ˮ��������ֲ�sangɣɥɤ�����saoɩɨɧɦ��������ܣ������seɫɬ�ɪ�������senɭsengɮshaɱɳɰɴɶɵɲɯ��ɷ��������ɼ��������shaiɸɹɫ����ɱshanɽ������ɼ��դ��������ɾ��ɿ��ڨ��ɻ�����޲��������������ɺ��۷����ɵ�����shang���������������������������shao������������������������������ۿ�������she�������������������������������������ʰ��Ҷ��ʲ��shei˭shen����������������ʲ���������������ֲ���������������ڷ���ݷ�����Ӳ�sheng��ʡ������ʤʢʥ��ʣ����������������shi��ʮʱʹʽ����ʾʵʯ��ʷʳʫ������ʦ��ʼʪʩʿ��ʶʧ����ʻʰʴ��ʬ������ʲʸ����ʭ����ʨ����ʺ������ݪ��������߱����������������ֳ������������˶��������shou�����������������������������shu���������������������������������������������������ˡ������ٿ���������������������������ح���������shuaˢˣ�shuai��˦˥ˤ˧�shuan˩˨����shuang˫˪ˬ����shuiˮ˭˰˯˵��shun˳˲˴˱��shuo˵��˷˶��˸����������˧�����si������˿˹˼˾˽����˺��ٹ��˻������������������������������������ʳ�޴���song��������������������������ݿڡsou������������޴�����������su�����������������������������������������ޣsuan�������sui��������������������������������ݴ��sun�������ݥ�����suo�����������������������������ɯ��ta��������̤�������̢��̡��̣����������taį̧̫̬̩̥��̦̭��̪��߾ۢ����޷���tan̸̼̲̽̿��̯̾�̷̶̵̴̰̳̹̺̮̱��̻��۰�������������tang������������������������������������������������tao����������������������������ػ��߶te������߯tei߯teng����������ti����������������������������������������������е�tian�������������������������������tiao��������������٬��������������温tie����������ting��ͣͥͦ��͢��ͤ��ͧ͡���������������tongͬͨͭͲͳͰͯʹ��ͪͩͱ����ͫ����١ͮ�����������������touͷͶ͸͵����tuͼ��Ϳͽͻ;͹������ͺ��ݱܢ������ܶtuan���������tui������������߯��tun�����ζ���������ʴ�����tuo������������������٢����������������������ر���������wa�������������఼�������wai������Ҩwan��������������������������������������������ܹ��������ݸ�����wang�����������������������������weiΪλδά΢ΨιίνζβΧκθ����αγΩΰΣ�η��ΤοΥޱήμ�ξ���ε��έΦ�������������Ϋ��Ρ�������������������������wen�����������������������������������weng������޳��wo������������������������ݫ�����wu����������������������������������������������������������أ���߶���������������������������������������������������xiϵ��ϸ��ϴϲϡϰϤϷϢ��ϯϣϩ��Ϫ϶ϮϧϳϥϦ������Ϩ������ϱ���������������ϭϬ�����������ݾ��ۭ���������������������ϫ���������������������������������������Я���xia����Ϻ��ϼ��ϿϹϻ��Ͻ����Ͼ���������������ǢбЮ���xian���������������������������������������������������޺��������������������������ݲ᭼���������ϳϴ�Ѣxiang�������������������������������������������������ܼ����Ϻ�xiaoСЦУ������ЧТ����Ф������Х�����������������������������ѧ�ͺ�xieдЩблЭжеЬШЪмзЮвйЯакгѪи������������Ы�ǽ�����ߢ�Ҷ���ޯ���������������xin������оп����нܰ�������Ѱݷض���xing������������������������ʡ����ߩ������������ܰʤxiong��������������ܺxiu�������������������߳���������������xu������������������������������������������������ޣ���������������ڼ���xuanѡ��������������ѣ������Ѥ����Ѣ����������������ȯ�ﻹ����ůxueѧѪѩѨ��ѥ��Ѧ�������xunѶѰѴѮѲѵѭѫѬѸ��ѯѷ�ѱ��޹�ަѳ����������ۨⴻ翣����ݡ�����yaѹѽ��Ѽѿ��������Ѻ�����ѻ�Ѿ��������������������������߹yai����yan����������������������������������������������������������������������������������۱������������������������۳ڥ��ܾ��ٲ�������Ǧ�����簩����yang������������������������������������������������yaoҪҩ��ҡҧҤҦҫ����ңҢ��ҨԿ��ҥ��������ߺ�������Լ����سű�ô��ز������Ӵ�������yeҲҺҶҵҳҹүҰҮұ��ҷ��ҬҴҭ��Ҹק��������а����ըyiһ��������������������������������������������ҽ�������������������������߮��������Ҽ��������������������ҿ����Ҿ�������������������ܲ����ڱ��������������������������٫޲��������߽�����ʳ�β�������������������������ҺҴҷ��Ҹ����������yin��������ӡ��������������������������ܧ������������ط۴�������ε��������yingӦӢӪӲӰӭӳӯӥӱӮӤӬӣө��ӧ����ӫӨ�ݺ��۫�������������������������yoӴ���yong����ӿ��ӵ��ӼӹӾӶӺӽ���ӷٸӻ�Ӹܭ���������޳you������������������������������������������������ݬ������������ݯ��ݵ٧����������������yu�������������������������ԣԤ������ԥ����Ԣ��ԡ��������������������������ع���������������Ԧ��خ��������������������������������������������������ٶ��ξ��������ε������������������������������yuanԲԪԭԶԱԺԬԸԴ԰ԵԮԹԩ��ԫ�ԳԨԷ��ܫ���ԯ������������ԧ��ܾ����yue��ԽԼԻ��Ծ������Կ�����������˵�����ҫҩyun������������������ܿ۩���������������������Աza����զ��������������zai��������������������zan���������������������zang������������zao��������������������������������ze����������զ��������������Ų�����խzei��zen����zeng����������������zha��ը����բդեթէ��ագ���������߸�����������������զzhaiկժխիծլ�������β�����zhanռվսմճյպհձղնջ��շտ��չո�����������zhang���������������������������۵����������������zhao��������������گ���ѳ�����צ����������������zhe��������������������������������������ߡ����ժլ���رzhei��zhen���������������������������������������������������֡�����������zheng����֤��������֣֢������֡�������ں������붡zhiֻ֮����ֵָ֪��ֱ֧��ֽ��֯��־ֲֹ֦��ְ֭��ִ֥֬��ּ��ֳ֫����ֶַֺ֨ۤ��������������������ֿ�������������������������������������������֩��ش����������ʶ�������zhong����������������������ڣ���������zhou����������������������������������������ݧ����zhuס��ע������פ����������������������ף�������������������������������٪ۥ���������������������������Ţ����zhuaץ��צzhuaiקת��zhuanתר��ש׬׫׭�������zhuangװ״ׯ׳׮ײ��ױ���������zhui׷׶׹׵׺׸��������zhun׼׻�������zhuo׽��������׿��׾������ߪ����پ������䷽���������zi����������������֨��������������������������������������������������������������zong���������������������ȴ�zou����������������۸��������zu������������������������zuan��߬������׬��zui�����������ީ�ѵ���zun������ߤ������zuo�����������������������������������������";
  yunmu="ang:��ng,��ng,��ng,��ng;eng:��ng,��ng,��ng,��ng;ing:��ng,��ng,��ng,��ng;ong:��ng,��ng,��ng,��ng;ai:��i,��i,��i,��i;ei:��i,��i,��i,��i;ui:u��,u��,u��,u��;ao:��o,��o,��o,��o;ou:��u,��u,��u,��u;iu:i��,i��,i��,i��;ie:i��,i��,i��,i��;ue:u��,u��,u��,u��,����,����,����,����;ve:����,����,����,����;er:��r,��r,��r,��r;an:��n,��n,��n,��n;en:��n,��n,��n,��n;in:��n,��n,��n,��n;un:��n,��n,��n,��n;a:��,��,��,��;o:��,��,��,��;e:��,��,��,��;i:��,��,��,��;u:��,��,��,��;v:��,��,��,��,��;";

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
  key_quan = "������������������������������������������������������������磥�ޣ����������£ãģţƣǣȣɣʣˣ̣ͣΣϣУѣңӣԣգ֣ףأ٣ڣ��������������ߣ������ۡ�����";
  function ToFullShapeLetter(aStr) { // ��������ĸ����ȫ����ĸ
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
        r.select(); // ��֪�ιʣ������ȡ��ѡ����
        break;
      case 'NS': 
      // Gecko
        var selectionStart = obj.selectionStart;
        var selectionEnd = obj.selectionEnd;
        var oldScrollTop = obj.scrollTop; //��Gecko��������ù��ĵط���
        var oldScrollHeight = obj.scrollHeight;
        var oldLen = obj.value.length;
        
        obj.value = obj.value.substring(0, selectionStart) + str + obj.value.substring(selectionEnd);
        obj.selectionStart = obj.selectionEnd = selectionStart + str.length;
        if (obj.value.length == oldLen) {  // ����û��ں������룬��ֱ�ӹ������档
          obj.scrollTop = obj.scrollHeight;
        } else if (obj.scrollHeight > oldScrollHeight) {  // ���TextArea�����˸߶ȣ��͹���һ���
          obj.scrollTop = oldScrollTop + obj.scrollHeight - oldScrollHeight;
        } else { // �������ξ͹���֮ǰ�ĵط�
          obj.scrollTop = oldScrollTop;
        }
        break;
      default: // ���������ں����������
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
        hlk.title="����ģ��汾��" + ui_version + "��ϵͳ�ʿ�汾��" + sysph_version + "��";
        if(email)
          hlk.title += "���ѵ�¼ " + email + "���������鿴������Ϣ��";
        else
          hlk.title += "��δ��¼���û�����ʽ���ʹ�ý�������ʧ���������鿴������Ϣ��";
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
      instr += '      <td id="ywswitch" style="width:1.1em;cursor: pointer;" onmouseup="LIVECHARS.switchyw()">��</td>';
      instr += '      <td id="pyswitch" style="width:1.1em;cursor: pointer;" onmouseup="LIVECHARS.switchpy()">��</td>';
      instr += '      <td id="fsswitch" style="width:1.1em;cursor: pointer;" onmouseup="LIVECHARS.switchfs()">��</td>';
      instr += '      <td id="pnswitch" style="width:0.7em;padding-left:3px;cursor: pointer;" onmouseup="LIVECHARS.switchpn()">��</td>';
      instr += '      <td id="helplk" title="���߰���" style="width:0.6em;padding-left:1px;cursor: pointer;" onmouseup="LIVECHARS.help()">?</td>';
      instr += '      <td id="off" title="��������С��" style="width:1.1em;padding-left:3px;cursor: pointer;" onmouseup="LIVECHARS.off()">��</td>';
      instr += '    </tr><tr>';
      instr += '      <td colspan="7" id="code_field" style="width:148px;cursor: move;" onmousedown="LIVECHARS.down(event)" onmouseup="LIVECHARS.up(event)">&nbsp;</td>';
      instr += '    </tr></table>';
      instr += '  </tr>';
      if(!embed_style){
        instr += '<tr><td colspan="2"><fieldset><div>';
        instr += '<textarea style="width: 100%;" rows="5" id="edit_area">';
        instr +=   '�ڴ˴����룬Ȼ���ơ�ճ������Ӧλ�á�';
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
      if(hold) elem.title="���������С����Ժ�˫�����Ｄ��������뷨��";
      else{
        elem.title="˫���ָ�����"; 
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
        cancel_key_event = true; //Esc���ȫ������ɾ�����ʽ�ֹ Esc�� ���κ����á�
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

    // Gecko �䲻���� OnKeyDown ȡ����������ȴ���� OnKeyPress ֮���ִ�м��Ķ��������� OnKeyPress ȡ����������ν��
    // �� Opera �� OnKeyPress ֮ǰ��ִ�м��Ķ���������δ��ȡ�� Backspace �ȼ���  
    // Ϊʲô����IEҲ�ڴ�ȡ����һ�Σ�����OnKeyDownȡ������OnKeyPress��ȡ����������һ�����⣺������������ʱ����һ���ֻᱻȡ����ԭ��δ֪��
    
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
      if (c == '"') insert_char((left_yinhao2 = !left_yinhao2) ? '��' : '��',targ);
      else if (c == "'") insert_char((left_yinhao2 = !left_yinhao2) ? "��" :  "��",targ);
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
      elem.innerHTML="��";
      elem.title="�����Ctrl�����л���Ӣ������";
      for(var j=0;j<textelem_stack.length;j++){
        textelem_stack[j].onkeydown=LIVECHARS.key_down;
        textelem_stack[j].onkeypress=LIVECHARS.key_press;
      }
    }else{
      elem.style.backgroundColor="#000";
      elem.style.color="#fff";
      elem.innerHTML="Ӣ";
      elem.title="�����Ctrl�����л�����������";
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
      elem.title="������л������ı��";
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="��";
      elem.title="������л���Ӣ�ı��";
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
      elem.innerHTML="ȫ";
      elem.title="������л����������";
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="��";
      elem.title="������л���ȫ������";
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
      elem.innerHTML="ƴ";
      elem.title="��������뺺��";
    }else{
      elem.style.backgroundColor="#aa8";
      elem.style.color="#000";
      elem.innerHTML="��";
      elem.title="��������뺺��ƴ��";
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
