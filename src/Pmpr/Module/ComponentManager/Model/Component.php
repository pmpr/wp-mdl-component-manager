<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801061aa223e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\View\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Setting; use Pmpr\Module\DomainManager\Backlink\Model as Backlink; use Pmpr\Module\DomainManager\Model\Domain; class Component extends Model { const ouwcgiuiymgwouec = 'en_title'; const wucysakokksokumi = 'fa_title'; const ksakwsycwcqisgiu = Constants::imiuwqeccyaimyaw . Constants::mswocgcucqoaesaa; const qkmqmaeuyokqgemg = Constants::weayyoewessosyko . Constants::mswocgcucqoaesaa; const wygegsqueakqiccy = 'backlink' . Constants::mswocgcucqoaesaa; const yegaaaygeimasokq = 'last_update'; const bsqkociucacssuum = 'publish_due'; const iamomwwcwayiowye = 'requirement'; const okcgiwmueoyocegm = 'requirements'; const wsymueygaeiiwsiw = 'backlink_modal'; const qscgeqoccoiyaeoi = 'en_description'; const zgcmquuuyyakwqqm = 'fa_description'; const mkamewwosmwuwwqe = 'download_'; const ieagekqsqmcsqqeo = self::mkamewwosmwuwwqe . 'start_count'; const caecscgwwciyemog = self::mkamewwosmwuwwqe . 'daily_count'; const keqoqmmgsiegwskg = self::mkamewwosmwuwwqe . 'real_count'; const mawokyacsmmqmsoo = 'active_install'; const iuisqwiqesgyqsyg = 'coming_soon'; public function register() { $this->muuwuqssqkaieqge(__('Components', PR__MDL__COMPONENT_MANAGER))->guiaswksukmgageq(__('Component', PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::oweoqccsyyusoqei)->igiywquyccyiaucw(Constants::kaeeyemckaaeykuy, self::wucysakokksokumi)->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 5]); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->swsaakqseuaacagq(Constants::xgimwmogukqqcuky, [$this, 'ywgqgaomoekeewyg']); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::NAME)->eccqsggkcosmqumc()->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->gswweykyogmsyawy(__('Component Name', PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::wucysakokksokumi)->gswweykyogmsyawy(__('Persian Title', PR__MDL__COMPONENT_MANAGER))->iwwmociiuayuwssq([$this, 'yuccisygwmogsqia']))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::ouwcgiuiymgwouec)->gswweykyogmsyawy(__('English Title', PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->iwwmociiuayuwssq([$this, 'yuccisygwmogsqia']))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__('Type', PR__MDL__COMPONENT_MANAGER))->qassieeyqwaysucq()->kesomeowemmyygey(1, Constants::aqikuweekkucgqoy, __('Module', PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, Constants::ykywsqyeckcgqyik, __('Cover', PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(3, Constants::kqeokggqcsesmqco, __('Custom', PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(4, Constants::cwacquagagwkcisc, __('Common', PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__('Status', PR__MDL__COMPONENT_MANAGER))->qassieeyqwaysucq()->kesomeowemmyygey(1, self::iuisqwiqesgyqsyg, __('Coming Soon', PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, Constants::wmmucsiyiyusmssm, __('Publish', PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(3, Constants::yokmsocosssowgke, __('Review', PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(4, Constants::ywskismomwmcsqam, __('Draft', PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(self::ieagekqsqmcsqqeo)->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__('Start Count', PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::iuqumwggccmcuyem)->gswweykyogmsyawy(__('Priority', PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(1)->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(self::caecscgwwciyemog)->gswweykyogmsyawy(__('Daily Count', PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(0)->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(self::keqoqmmgsiegwskg)->gswweykyogmsyawy(__('Real Count', PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(0)->qcqeqimisiisswky())->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::bsqkociucacssuum)->gswweykyogmsyawy(__('Publish Due', PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::oguseymmyyoyaako)->gswweykyogmsyawy(__('Product', PR__MDL__COMPONENT_MANAGER))->qcssowoqeqysosca()->eyygsasuqmommkua(0)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak($eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::wsymueygaeiiwsiw)->gswweykyogmsyawy(__('Backlink Modal', PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->acceqyqygswoecwe(8)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $omkysikckkcieckq = Setting::symcgieuakksimmu()->icioieqkoswsyouk([Constants::ascagqcquwgmygkm => $eqgoocgaqwqcimie, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); if ($this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw)) { $eqgoocgaqwqcimie = $omkysikckkcieckq[Constants::qescuiwgsyuikume] ?? $eqgoocgaqwqcimie; } else { $eqgoocgaqwqcimie = $omkysikckkcieckq[Constants::TEXT] ?? ''; } } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->ksiucgwggkwuimue(Constants::mkousmkiawwousws)->gswweykyogmsyawy(__('Image', PR__MDL__COMPONENT_MANAGER))->jyumyyugiwwiqomk(0)->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::zgcmquuuyyakwqqm)->gswweykyogmsyawy(__('Persian Description', PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::qscgeqoccoiyaeoi)->gswweykyogmsyawy(__('English Description', PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::ucoiewcoucauqwko)->gswweykyogmsyawy(__('Terms of Use', PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::qkmqmaeuyokqgemg)->ckmqkgwcusyaegmm(Domain::class)->wakqsiacyacmumuw()->gswweykyogmsyawy(__('Assigned Domains', PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::wygegsqueakqiccy)->ckgquisaimmgwuyu(Backlink::class)->gswweykyogmsyawy(__('Backlinks', PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ksakwsycwcqisgiu)->ckgquisaimmgwuyu(Report::class)->gswweykyogmsyawy(__('Reports', PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::auugqowqueaocgsu)->gswweykyogmsyawy(__('Version', PR__MDL__COMPONENT_MANAGER))->acceqyqygswoecwe(8))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(self::yegaaaygeimasokq)->gswweykyogmsyawy(__('Last Update', PR__MDL__COMPONENT_MANAGER))->qcqeqimisiisswky())->cquokmemekqqywgi($eqwoegegiamegqsm->syamikqcigqukkeo(self::okcgiwmueoyocegm)->gswweykyogmsyawy(__('Requirements', PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__MDL__COMPONENT_MANAGER))->qcqeqimisiisswky()); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $qewoscueycoskooi = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::miucsckaeckegceq, [], [Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $eaisooecemuyqgii = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::okcgiwmueoyocegm, [], [Constants::uissasisiuymwsmu => Constants::NAME, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::NAME)->kqqqugemmqagucuq())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::wucysakokksokumi))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ouwcgiuiymgwouec)->kqqqugemmqagucuq())->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->mkmssscwmeekwgqo()->qyucewwiggkyeaso([Constants::kqeokggqcsesmqco, Constants::aqikuweekkucgqoy, Constants::ykywsqyeckcgqyik], self::qkmqmaeuyokqgemg)->qyucewwiggkyeaso([Constants::aqikuweekkucgqoy, Constants::ykywsqyeckcgqyik], [Constants::oguseymmyyoyaako, self::ieagekqsqmcsqqeo, self::caecscgwwciyemog]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->mkmssscwmeekwgqo()->qyucewwiggkyeaso(self::iuisqwiqesgyqsyg, self::bsqkociucacssuum))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ieagekqsqmcsqqeo)->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::caecscgwwciyemog)->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::bsqkociucacssuum)->iccqusgqmsqaiqow())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::oguseymmyyoyaako)->ukqywcsoogkyoaoa(Constants::oguseymmyyoyaako))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::wsymueygaeiiwsiw)->acauweqyyugwisqc($ykquycoiqesuckco->icioieqkoswsyouk([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs])))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::qkmqmaeuyokqgemg)->ugquamoakekwyiqg(Domain::class))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::iuqumwggccmcuyem)->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::zgcmquuuyyakwqqm)->gsomueooycksswcy()->qsecygiycssgacqs(3))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::qscgeqoccoiyaeoi)->gsomueooycksswcy()->qsecygiycssgacqs(3))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::ucoiewcoucauqwko)->gsomueooycksswcy()->qsecygiycssgacqs(3))->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(Constants::mkousmkiawwousws)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::okcgiwmueoyocegm)->omsoosuoikgueyke()->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Type', PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::wksqmcukwwqwyuuc, __('Setting', PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::ocayisqocqoekqiq, __('New', PR__MDL__COMPONENT_MANAGER))->qyucewwiggkyeaso(Constants::wksqmcukwwqwyuuc, self::iamomwwcwayiowye)->qyucewwiggkyeaso(Constants::ocayisqocqoekqiq, [Constants::NAME, Constants::qgqyauaqwqmqseim, Constants::miucsckaeckegceq]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::iamomwwcwayiowye)->gswweykyogmsyawy(__('Requirement', PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($eaisooecemuyqgii)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::NAME)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Name', PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Icon', PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::miucsckaeckegceq)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Guides', PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($qewoscueycoskooi)->oikgogcweiiaocka())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Value', PR__MDL__COMPONENT_MANAGER)))); parent::aoqwywcqmoqaukkq(); } public function yuccisygwmogsqia($eqgoocgaqwqcimie, $mksyucucyswaukig) { return sprintf("%s</br>(%s)", $eqgoocgaqwqcimie, $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::NAME)); } public function kosiqqekkquoseki($gwgucoaaqcwwciqq, ?string &$uamcoiueqaamsqma = null, ?string $sqeykgyoooqysmca = Constants::aqikuweekkucgqoy, bool $ogkqsyskamkuscqc = false, ?string $qwcmueausqgiwigy = null) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gkioossaaiumqqsq = $this->iekyeyicoyyawomk(); $gqgemcmoicmgaqie = $eqwoegegiamegqsm->kyckwuuiqwmyoqma(); if ($qwcmueausqgiwigy) { $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::NAME, "%{$qwcmueausqgiwigy}%")->maqiysyuqmwcqoig(Constants::augocsiaqqukkuui)->iygikqkegwkaaess())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(self::wucysakokksokumi, "%{$qwcmueausqgiwigy}%")->maqiysyuqmwcqoig(Constants::augocsiaqqukkuui)->iygikqkegwkaaess())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(self::ouwcgiuiymgwouec, "%{$qwcmueausqgiwigy}%")->maqiysyuqmwcqoig(Constants::augocsiaqqukkuui)->iygikqkegwkaaess())); } $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::wmmucsiyiyusmssm, self::iuisqwiqesgyqsyg]))->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owogyemaccuymycq(Constants::ciywsqoeiymemsys, [Constants::wmmucsiyiyusmssm, self::iuisqwiqesgyqsyg]))->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owogyemaccuymycq(Constants::iuqumwggccmcuyem)->mcgisgoaksmyemyq()); $gqgemcmoicmgaqie->qisiksoemmiiyeyk($gkioossaaiumqqsq->suyqucmmoumouiua()); $siykeiywomwwuoiw = null; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); if ($mokawwccycoiqeka = $swgwkyqkakceqeia->gwkkkwyoomgsiaou($gwgucoaaqcwwciqq)) { $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, $sqeykgyoooqysmca)); if (Constants::kqeokggqcsesmqco === $sqeykgyoooqysmca || $ogkqsyskamkuscqc) { $siykeiywomwwuoiw = $swgwkyqkakceqeia->iekyeyicoyyawomk()->oyqumwgacamysiga($swgwkyqkakceqeia::ogqcgemayqiaucag, $mokawwccycoiqeka); } else { [$syeseoiyagmgumcy] = $gkioossaaiumqqsq->acamgaegcsioysiw(self::qkmqmaeuyokqgemg); $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owackeyiuiikegqg()->sokmmiiuyqiuoqia(self::qkmqmaeuyokqgemg)->ggmcoioqwgyccyus()->aqkyoweegqwuwsgw($syeseoiyagmgumcy)); $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(self::qkmqmaeuyokqgemg)->wegeyaguowmkqiac()->aqkyoweegqwuwsgw($syeseoiyagmgumcy)->iygikqkegwkaaess())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(self::qkmqmaeuyokqgemg, 0)->aqkyoweegqwuwsgw($syeseoiyagmgumcy)->iygikqkegwkaaess())); } $siykeiywomwwuoiw = $gkioossaaiumqqsq->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); } else { $uamcoiueqaamsqma = __('Sorry but it\'s sames your domain not registered. please register domain and then try again', PR__MDL__COMPONENT_MANAGER); } return $siykeiywomwwuoiw; } public function ywgqgaomoekeewyg($qqomumygoacsmsie, View $mksyucucyswaukig) { if ($qqomumygoacsmsie === Constants::weiosaewqequuyuq) { $mksyucucyswaukig->rsaiaimkmskoiysk(Constants::mqkiiimeocmcyecq, 'update_date', function ($aokagokqyuysuksm) { return [Constants::qescuiwgsyuikume => __('Update Data', PR__MDL__COMPONENT_MANAGER), Constants::ysskgssgwuwmqwym => ['class' => 'update-component-action', 'data-id' => $aokagokqyuysuksm]]; }); } } public function wmcgcaaucqayoiia($wksoawcgagcgoask) { if (is_numeric($wksoawcgagcgoask)) { $wksoawcgagcgoask = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($wksoawcgagcgoask); } $acceyusyikkmawea = ''; if ($wksoawcgagcgoask) { $acceyusyikkmawea = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::ucoiewcoucauqwko, ''); $acceyusyikkmawea .= $this->waecsyqmwascmqoa($wksoawcgagcgoask, Constants::ucoiewcoucauqwko, ''); } return $acceyusyikkmawea; } public function usesgqgqsgskkesi($wksoawcgagcgoask) : array { if (is_numeric($wksoawcgagcgoask)) { $wksoawcgagcgoask = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($wksoawcgagcgoask); } $qsqwqsymmqeoqwcu = []; if ($wksoawcgagcgoask) { $eaisooecemuyqgii = $this->waecsyqmwascmqoa($wksoawcgagcgoask, self::okcgiwmueoyocegm, []); if ($eaisooecemuyqgii) { $oiogciomoogcocak = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::okcgiwmueoyocegm, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $geuaoiagwicygkww = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::miucsckaeckegceq, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); foreach ($eaisooecemuyqgii as $momcykaoccoymeig => $msywmauqismcyeae) { $gmcgeogogyqsgawk = []; switch ($msywmauqismcyeae[Constants::squoamkioomemiyi] ?? false) { case Constants::wksqmcukwwqwyuuc: $aiewygoosksemiwu = $oiogciomoogcocak[$msywmauqismcyeae[self::iamomwwcwayiowye] ?? ''] ?? ''; if ($aiewygoosksemiwu) { $gmcgeogogyqsgawk = $aiewygoosksemiwu; $gmcgeogogyqsgawk[Constants::ciyoccqkiamemcmm] = !isset($msywmauqismcyeae[Constants::ciyoccqkiamemcmm]) || empty($msywmauqismcyeae[Constants::ciyoccqkiamemcmm]) ? $aiewygoosksemiwu[Constants::wikgqsqysyuoykse] : $aiewygoosksemiwu[Constants::ciyoccqkiamemcmm]; } break; case Constants::ocayisqocqoekqiq: $gmcgeogogyqsgawk = $msywmauqismcyeae; break; } if (isset($gmcgeogogyqsgawk[Constants::miucsckaeckegceq]) && !empty($gmcgeogogyqsgawk[Constants::miucsckaeckegceq]) && is_array($gmcgeogogyqsgawk[Constants::miucsckaeckegceq])) { $gmcgeogogyqsgawk['guide_title'] = sprintf(__('Check %s', PR__MDL__COMPONENT_MANAGER), $gmcgeogogyqsgawk[Constants::NAME]); foreach ($gmcgeogogyqsgawk[Constants::miucsckaeckegceq] as $ciyackuwsqkoqese => $iwamiguusayooguq) { if (isset($geuaoiagwicygkww[$iwamiguusayooguq])) { $gmcgeogogyqsgawk[Constants::miucsckaeckegceq][$ciyackuwsqkoqese] = [Constants::qescuiwgsyuikume => $geuaoiagwicygkww[$iwamiguusayooguq][Constants::qoawsacmmgmimqaw], Constants::eqkeooqcsscoggia => $geuaoiagwicygkww[$iwamiguusayooguq][Constants::eqkeooqcsscoggia]]; } } } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $gmcgeogogyqsgawk; } } } return $qsqwqsymmqeoqwcu; } }
