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

  var pytab="a�����߹������ai���������������������Ӱ��������������������an�������������������������������������ang��������ao�°İ�����໰ð��������������������������������ba�ѰͰ˰ɰְհ԰ΰϰӰаȰṴ̋��ΰƲ��������ٰ������屰�����bai�װٰܰݰڰ�����۰޲���ban���������߰������������������bang�������������������������bao��������������������������������������������ٰ��ڱ������bei������������������������㣱��鱺�������������Ա�����ben��������������庻beng���ı��ű���괰���bi�ȱرձϱұʱܱα˱ڱƱǱɱбױ۱̱ݱ�ذ����赱������ѱ�ݩ������������������������娱�������޵������԰����������ٌ�bian��߱�������ޱ���������������������ֱ�biao�����������ѱ�������������bie�������bin��������������ı���������������bing���������������������ı������Kbo�����������������������������ز����Ĳ����������粯�˲�޵���ݩ���������°����������bu������������������������߲�����������ca������cai�ŲƲɲ˲Ĳʲ²òȲ̲ǒ�can�βͲвҲѲӲ�����������cang�زֲԲղ���cao�ٲݲܲ۲�����ܳ��ce�߲��������cen����ceng��������cha���������ɲ�ò�����������ʲ������������chai�����β�٭�chan���������������������������濲���������赥����chang�����������������������������������������������������chao�������������������̴½���che��������������������chen���³������ó��ĳ��׳������������������������cheng�ɳ̳ǳƳгϳ˳ųͳʳγ�ة�ѳȳ������������ʢ�������������chi�ֳԳسٳ�ܳ߳�ݳ۳ճ޳�����ͳڳ�߳������������������ܯ�����ʲ�����ۭ����������܅�chong�س�������������������ӿ�nchou�����������㰳����������ٱ��chu�����������������������������������ۻ����������������ءڰ��chuai���������chuan������������������������chuang������������Ѵ����ײchui��������鳴�׵���chun��������������ݻ��chuo����������ci�δ˴ʴ̴ǴȴŴʹ��ŴĴ��ȴò����ٲ��������cong�ӴϴҴԴд����������cou������cu�ٴִ״��������������������Ȥ����cuan�ܴ�ߥ��������cui���ݴߴ��ʹ��譴�������˥��cun���������ߗ��cuo����������������������da������������������������������dai�����������������������������ܤ��߰���߾dan�������������������������񵪵����쵧��������ʯ��������������dang��������������������dao������������������߶���������������de�ĵõµص��dei��deng�ȵǵƵʵ˵ɵų����������di�صڵĵ׵͵ܵ۵еֵݵεϵٵ��ֵ޵յ�ڮ�����ۡ�Ƶ������������ѿ��ص������������ݶ�Ldia��dian������ߵ�������۵������������ؼ����diao���������������������������die������������������ܦ���������ding����������������������������������diu��dong���������������˶��������������dou��������������񼶻�����Ydu�ȶ����������ɶǶĶŶ¶ö���¶�����빶�������Ƕ�duan�ζ϶̶˶Ͷ������רdui�ԶӶѶ�������dun�ٶֶܶض׶���ն�������������duo����ȶ����Ͷ߶�������������������e������찢����ج�������������������������������ݭ����������Ŷ��ei��en����������er�����������������������٦fa��������������������fan������������������������������ެ�����������Ȯ�����빠fang���ŷ����÷·������ķ�������������fei�ǷɷѷϷʷƷ˷ȷзη����������������������������������fen�ַݷ۷׷߷ܷշҷٷط�Է޷ڷ���������feng����������������ٺ��ۺ���fo��fou����fu���������򸻸�������������������������������������������������������ܽ���������������������������︢��߻���������Ƹ���������ۮ������������߼����ݳ����������ɛ�ga�θ¿���٤�ۼ������Ÿ����gai�øĸŸ�ؤ�ȸ����������gan�иɸҸϸʸ˸����ϸ͸Ѹ�ߦ����������������Ǭ���gang�ո۸ָڸܸٸԸ��������gao�߸������غ�¸����ھ꽸�������޻۬ge�������������������������ø�����������ت������������ܪ�����Agei��gen����ب����ݢgeng������������������ب�پ���gong��������������������������򼹨������øؿ�칯gou����������������ڸ����������ܾ���������gu�ɹʹ��Ź˹Ĺ̹ùǹ¹ȹ͹����������ﹿ������ڬ����������͹�����������������ܻ������gua�ҹ��Թѹι��ɹ����������ڴ������guai�ֹԹ���guan�ع۹ܹٹݹ߹ڹ��޹�ݸ��������������������guang������������gui��������������������������������峿�Ȳ��������gun������������guo����������������������������������ha������Ϻhai��������������������������han������������������������������嫺�������������������������ʸ��������hang�к��������������������hao�úź��ĺ��ƺ����������ºѸ����޶尺���he�ϺǺκͺӺ˺Ⱥɺպغк׺��ź��������ֺԺ��غ��ڭ����Ы����������Ahei�ں���hen�ܺ޺ݺ�heng����ߺ���޿�����hong����������ڧ��ޮ����ް�䴥��ݦ��hou��������������������ܩ���Jhu���������������������ͺ�����䰻�������㱺˺�����������������������������������Ϸ�����hua��������������������������huai������������ث����huan�����������û��������»�徻���ۼ�������������ߧ���ۨ������qhuang�ƻʻĻλŻѻͻ˻̻лɻϻ���������������������hui��ػӻ�ٻֻۻ���Իڻݻջ�߻�޻���������ڶ�ͻ��������ޥ�滲������๶�������ޒhun�������ƻ�ڻ��������huo�����������ͻ���޽�ⷻ������������߫��ji���������Ƽüǻ��ʼ������������̼ͻ����ȼ����������������������ļ��ɼ��ż����������󼬼˻�������������弳ߴ������������������ؽ�ἧ�����ټ���������ܸ��٥���ڵ�����������վ�������ު������������������������ϵ���ҳ�jia�ҼӼۼټܼ׼Ѽݼм޼μ����ȼڼּ�٤����������������Ю������������������ۣjian���������������ར����������������⽣����߼�������������ɽ��Ѽ꽧���������������������������������ǳ����������꯼��̊�jiang����������������������������ǿ������������jiao�̽Ͻ��нǽŽ��������Ƚ��ɽ����˽ƽͽν��ý��ʽ��ӽ�Уٮ��������Խ�������������ܴ���������jie�ӽ���ڽ׽��ֽ�ؽ�ٽҽ�ݽ�Խ߽ܽ��ս�ڵ���������ڦ�����ܽ��ɼ���������ڼ�ߢ�����ҿ���jin����������������ﾢ����������������������������������桽�ݣjing���������������������������������������������徨�ݼ���Ӿ�����캾��������ɸ�����������jiong���ľ������jiu�;��þȾƾžɾ��˾¾��ξ̾�����౾��������������־���ju�ݾ�߾־Ӿپ�޾�۾ܾ��ؾ峵�оѾվϾ����پԽ۾�����ƾ�����������������������������ڪ������������������袟hjuan�������Ȧ�������۲����������jue���������Ⱦ����ʾ���Ȿ�����������������ާ��ܥ����������������Ȳjun�����������������������޿�����ަ���ܾ���ka�������ǹ��Ŀ�����kai��������������������������kan��������٩������������Ƕ��kang��������������������kao����������������ke�ɿƿ˿Ϳ̿οſǿʿ��ÿĿȿ�������������������¿�봺���������������ken�Ͽҿѿ�����keng�ӿ��kong�տؿֿ�������kou�ڿۿܿ�ߵޢ������ku����޿�ݿ�����ڿ�ܥ�kua������٨kuai������ڿ����ۦ���������kuan�����kuang������������ڿڲ����������kui���������������ѿ�����������ظ��������������������kun���������������������ͱ���kuo��������������la��������������������������lai���������������������lan��������������������������������������lang����������������������lao���������������������������������������le��������������������߷lei��������������������������������������ڳ��leng���������ܨli�����������������������������������������������������������������������ٵ�������ٳ����ݰ���������޼�����������������������߿۪����ت�����������Ylia��lian�������������������������������������������ݲ��liang������������������������������ܮ���liao�������������������������������ޤ���������lie�������������������������lin�������������������������������������������������ling������������������������������������������������۹��������liu�����������������������������½í����������µ���long��¡¢��£����¤�����������������Ūlou¥©ª§��¨�¦��������������¶lu·½¼³¶¹¯¬²«��µ®¾¸­���»����±´°���������º���������ӽ���ߣ������ޤ������luan��������������������lue������lun����������������luo��������������������������������������������ݿ����������������lv��������������¿�������������������¦����ma�������������������Ĩ������Ħ�ô��mai��������������ݤ۽��man����������������á������������ܬ����mangæäåãâç������maoëìóðòèñéï��êî��í�������������������meô��meiû��ÿöý��úùü÷������õݮ����ø���þ�������men�������������meng������������������������������åޫ��mi��������������������������������������������������������mian�����������������������������温miao������������������������������mie����������ؿ�min������������������������������Fming����������ڤ�����������miu����moģĪĩĬĥ��ħĦīûĭĮĨİįĤĢ����ġ���������ɺ������������ô���������ð��mouĳıĲ������ٰ��ĵ����muĿĸľĻĽ����ģĹķļĶĺĵĴ����������������߼Ĳna����������������������ګnai��������ܵ������ؾ٦����nan������������������nang��������߭nao����������������������ث��ne����ګ����nei��������nen���neng��Ţ��ni������������������������������������٣���芅nian�������������������ճշإ������niang����niao��������������nie������������������������ؿ��nin���ning��������Ţ��š�����niuţŦŤ�ť������nongũŪŨŧ��ٯ��nou����nuŬūŭ����������nuanůnueŰű��nuoŵŲŴų��������nvŮ�������oŶ���ouŷżŸŹŻź��ک���Ž������pa��������ſž�ð�����������pai������������ٽ����ž��pan��������������������շ��������Ȱ������ᘄpang����������ݰ�����������pao���������������������������hpei�������������������λ����������������pen������peng�������������������������������ܡ��pi��Ƥƨƥƣ��Ƣơ��ƩƦƧ��������������������ا��ۯ��������ܱ������������뻵��ߨ����������������pianƬƪƫ��ƭ������ݱ�����piaoƱƯƮ������ư�����ݳ������pieƲƳ���دpinƷƵƶƴƸ�������ձ�pingƽ����ƾƻƿƹƼƺ���ٷ����po�������������ò�������۶��������鲨���������pou�������pu�������������������������Ѹ�����������������Ǳ���������qi�����������������������������������������������������������������������������������������ٹ����������������ؽ���ܻ��������֦����ֻޭ��Ϫ��ݽ����쥳��vqiaǡ����Ǣ����qianǰǮǧǱǩǸǨǣǳǷǲǫǴǬǭ�ǶǦ��ǯǵ���ٻ��ǥ������Ǥ���������Ǫ��������ܷ���ݡ�qiangǿǹ��ǽǻǺ��Ǽ�����Ǿ�������������޽�qiao�������������������ο�����������������������ȵ������ȸڽqie��������������������ۧ�������٤qin���������������������������������������������qing������������������������������������������������qiong���������ܺ������qiu������������������������������ܴ���������ٴ�К�quȥ��ȡȤ������������Ȣ���������������ȣޡ���۾޾ڰ��������������quanȫȨȯȦȭȪȰȮڹȬ��ȩȧ����������ھ���queȷȴȱȸȶȳȵ��Ȳ��㡿����qunȺȹ����ranȻȼȾȽ������rang��������ȿ���rao�������������re��������ren��������������������������������ض����reng����ri��rong�������������������������������Frou������������ru�������������������������Ů����������ruan��������rui���������ި���run����ruo����ټ��sa�������ئ������sai��������˼ɫ��san��ɢɡ��ˮ����������sangɥɣɤ�����saoɨɧɩ��ɦ��������ܣseɫ��ɪɬ�����senɭsengɮshaɱɳɶɵɲɴ��ɷ��ɯɰ��������ɼ������shaiɹɸɫɱ����shanɽ��ɾ����ɿ��������ɼ��ɺڨ�����������������դ��۷���������������ɻ���shang���������������������������shao��������������������������ۿ���������she���������������������������������ʰ�Ҷ���������ʲshei˭shenʲ�����������������������������������������������ݷ��������ڷ���ӫ|sheng������ʤʡʥʣʢ��������������������shi��ʱʵ����ʮ��ʼʹʧʷʽ��ʦʿʶ��ʯ��ʾʳ������ʩ��ʫʰʻʬʲ��ʨ����ʪ�ϳ�����ʴ��ʺʸ����������ʭ������������ֳݪ��˶��������������߱������������shou�����������������������������shu������������������������������������������ˡ����������������������ٿ���������������ح������������shuaˢˣ�shuai˥˧��ˤ˦�shuan��˨˩��shuang˫ˬ˪����shuiˮ˭˰˯˵��shun˳˲˴˱��shuo˵˶��˸˷������˧�����������si˼˾����˹��˽˿������˺����˻������������ٹ��������ʳ�����������榴ͶTsong�����������������������ڡ���ݿsou�������������޴��������su���������������������������������������ޣ��suan�������sui������������������������ݴ����������sun����������ݥ��suo�����������������������ɯ������ta��������̤��̣����̢̡���������������taį̧̫̬̩̥̭��̦����ۢ����̪޷��߾�_tan̸̹̳̽��̶̷̰̯̲̼̺̱̮̻̾̿��̵�̴۰���������������tang��������������������������������������������tao���������������������������߶���te�����߯�tei߯teng����������ti��������������������������������������������ӵ���tian����������������������������tiao�������������٬�������������踩tie����������ting��ͣͥͧͦ��ͤ͢����������͡�����tongͬͨͳʹͯͭͲͰͩͱ��ͮͫͪ����������������ڶ�������١touͷͶ͵͸����tu��ͻͼ;ͽͿ������ͺ͹ݱ�������Mtuan���������tui��������������߯tun������⽶��ζ��մ�������tuo������������������������٢������������������ر��������wa���������������������wai����Ҩ��wan����������������������������������ݸ���������������ܹ������wang�����������������������������weiΪλδίΣΧνάζ����΢ΨΥΰβαοθηΤξκήޱ�ΩιγΡ�μ�έε�Φ������Ϋ��������������������������������������wen��������������������������������weng��������޳wo�������������������������ݫ����wu�����������������������������������������������������أ������������������������������������������������������xi��ϵϲϢϣϰϸ��Ϸϧϯ��ϴϤ��Ϯϡ����ϱϦ����϶ϥϪ����Ϩ��ϩϬ�����������ϭ����ϫ�����������ϳ��������������ۭ���������������Я�������������������������xia������Ͽ��ϹϺ��Ͻ��Ͼϼ�ϻ������������Ю��Ǣ���б��xian�������������������������������������������������������������޺���������ϳϴ������Ѣݲ�޼����������xiang�������������������������꽵�����������������������ܼ�������xiaoСЧ��ЦУ��������Т������Х����Ф������������������غ��ս���ѧxieЩлдЭвегаЬйЯбжзЪм��иЮ��кЫ����Ш������ߢ��������Ѫ��ޯ⳺�������Ҷ����xin����������но��ܰѰݷп��������ضxing��������������������ʡ�������������ߩʤ������ܰ�xiong��������������ܺxiu�����������������������������������xu��������������������������������ڼ���������ޣ�������������������������xuanѡ����������������Ѥѣ�����Ѣ����ȯ����ů�����ػ���������qxueѧѪѩ��Ѩ��ѥ��Ѧ�����xunѵѸѰѭѶѲѯѷѫѳѬѮѱ��Ѵ���޹�߻�ݡ�����������㿣�ަۨ���ya��ѹ������ѽѼѺѻѾ����ѿ������������������߹����������yai����yan������������������������������������������������������ٲ����������������������ܾ��������������Ǧ۱۳�������������������������������������ڥ��yang������������������������������������������������yaoҪҩҡң��ҥҫ��ҧ��ҤҦߺز����Ңس���������ԿҨ��ű�������ôԼ����Ӵ����׽���yeҲҵүҹҰҳҶҺҮұҬҷ��Ҹ��ҭҴ������ק����аը��yiһ��������������ҽ������������������������������������������������������������������������ҿ�������ٰ�����������߮Ҿ����߽�����������������������޲�����������������ܲ����٫ҷҺβʳ����������ڱҼ�������Ҵ������������������Ҹ����ڶ��yin��ӡ����������������������������ط������۴����������������ܵ��ܧ�����yingӦӢӰӪӲӭӯӳӮӤӥӬӣӱӫ����Ө��ӧ��ݺө������۫������������������yoӴ���yong����ӵ��ӹӾӿӶӺӽٸӻ��Ӽӷ�����Ӹ��ܭ޳������you��������������������������������������������ݬ��������ݯ��������ݵ��������٧���������[yu����Ԥ������������������������������������ԥ��ԣ����������ԡԢ������ξ������Ԧ�����������������������۹�خ���������������������������������ع������ٶ���������������������������ε��������yuanԭԱԪԶԴԺԸ԰ԮԵԹԲԩԨԬԯԧԳԫԷ������������ܫ�����ܾ������yue��ԽԼ��Ծ������Կ˵Ի��ҫ�����ҩ���������yun��������������Ա������ܿ�������۩������������za����զ��������������zai��������������������zan���������������������zang�����������zao������������������������������ze������������զ��������Ӳ�������խ��zei��zen����zeng����������������zhaը��թ��եբէգ��դ����զ߸������ա���������������zhaiծժկլխի������������zhanսչվռմնջհճ��շ��ոտղձպյ�����������땁�zhang�������������������������������������۵����zhao�����������Գ�����������گ��������צ��������zhe��������������������������������ժ����լ���ߡ����ر����zhei��zhen����������������������������������������������������������֡����Gzheng����֤������֢��֣�������ݶ�������֡ں������zhiֻ֪֮��ֱ��ָ��ֵ֧����־ֹ��ְִ֯��ֲֳַֽ��ּ֥֬��֦����ֶ֭֫֨����ֺֿ֩ʶ�����������������������������������������������ش������������������������ۤ�zhong����������������������ڣ���������zhou��������������������������������������ݧ�����Lzhu��סע������������ףפ��������������������������������������٪���������������������Ţۥ�������������Bzhuaץצ��zhuaiקת��zhuanתר׬ש��׫׭�������zhuangװ״׳ׯײױ׮����������Pzhui׷׹׶׸׺׵��������zhun׼׻������zhuo������׽׿׾��������������ߪ����½�پ��������zi������������������������������������������������������������������֨����������zong�����������������������zou��������������۸��������zu������������������������zuan������׬��߬��zui�������������Ѿ�ީ��zun��������ߤ�ڿ�zuo���������������������������������������д�";
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
