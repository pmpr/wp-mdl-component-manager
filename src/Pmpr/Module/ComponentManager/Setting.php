<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284da0c4ec23             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateCron; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\ComponentManager\Data\Compare; class Setting extends BaseClass { const qwqkccuwkqeoucqu = "\147\157\164\157\x5f\141\x66\x74\145\x72\x5f\141\x64\144\x5f\164\157\137\143\141\x72\164"; const qsciwuokgmaaqcuq = "\x75\160\144\x61\x74\145\x5f\143\x6f\x6d\160\157\x6e\x65\x6e\x74\163\137"; const kokgyiugagmkcyay = self::qsciwuokgmaaqcuq . "\163\154\x65\145\160"; const gyicmcewygamwoog = self::qsciwuokgmaaqcuq . self::iccwcygaeqmomooo; const qkcusmuuciksieoy = self::qsciwuokgmaaqcuq . "\x74\x69\155\x65\x73\x74\141\155\x70"; const gomeigayyekgimuo = self::qsciwuokgmaaqcuq . "\x72\145\143\x75\x72\162\x65\156\x63\145"; const yicqiccsyqwigaqa = "\142\141\x63\153\154\x69\156\153\x5f"; const oycqkmeykiouqcqo = self::yicqiccsyqwigaqa . self::qescuiwgsyuikume; const aaasmysammcocwcu = self::yicqiccsyqwigaqa . self::mkousmkiawwousws; const awqewimmscsokykc = self::yicqiccsyqwigaqa . self::muocgwgqigscmqow; const aakugisgkoscaeys = self::yicqiccsyqwigaqa . self::eqkeooqcsscoggia; const kqykggkcgquswkea = "\x70\154\x75\x67\151\x6e\137\x67\165\151\x64\145\x5f"; const iwseqweooieakqwk = self::kqykggkcgquswkea . "\x66\x69\154\x65"; const aqusgmmakasqamgq = self::kqykggkcgquswkea . self::qescuiwgsyuikume; const wumiomcykccwmgei = self::kqykggkcgquswkea . self::gqmuoaykeqeuoukm; const ggswmwomsiccuqwg = self::kqykggkcgquswkea . self::eqkeooqcsscoggia; const eyiukesukwwsmyya = "\x70\154\165\147\x69\156\137\164\x61\x62\137"; const agskamgmowaiywus = self::eyiukesukwwsmyya . self::qescuiwgsyuikume; const ywgmisckaekgmagi = self::eyiukesukwwsmyya . "\143\x6f\155\x70\x61\162\145\163"; const uckmggyuwgmmskyc = self::eyiukesukwwsmyya . self::eqkeooqcsscoggia; const umoycqkiaiqoqaau = "\x70\154\x75\x67\x69\x6e\x5f\x62\x61\x63\153\154\x69\x6e\x6b\x5f\x6d\x6f\144\x61\154"; const ayygmosqcwyeaagw = "\160\155\160\x72\137\166\141\x6c\165\x65"; const eisiyawomcsouiwe = "\x77\157\162\x64\160\162\145\163\163\137\166\141\154\165\145"; const gmquuqmomuaqueyi = "\143\x61\x72\164"; const cwswygwykwgsqiwu = "\163\x69\x6e\x67\x6c\x65"; const qseekcawwuumgacy = "\x63\x68\x65\x63\153\x6f\x75\164"; public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->name = $wksoawcgagcgoask; $this->parentMenu = $wksoawcgagcgoask; $this->hasLicense = false; parent::__construct(); } public function gogaagekwoisaqgu() { $this->pageTitle = __("\x43\x6f\x6d\160\x6f\156\145\x6e\x74\x20\x4d\141\x6e\x61\x67\145\162\40\123\x65\164\164\x69\156\147", PR__MDL__COMPONENT_MANAGER); $this->menuTitle = __("\123\x65\164\164\151\156\147", PR__MDL__COMPONENT_MANAGER); parent::gogaagekwoisaqgu(); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa(self::ioomakeyqiqowgmk, __("\107\x65\156\x65\x72\141\x6c", PR__MDL__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\165\x70\144\141\x74\x65\137\x63\157\155\160\157\x6e\145\x6e\164\163", __("\125\160\144\141\164\145\40\103\157\155\x70\157\156\x65\x6e\x74\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gyicmcewygamwoog, __("\105\x6e\x61\142\x6c\x65\40\101\x75\164\157\x6d\141\x74\151\143\40\x55\x70\144\141\x74\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::gomeigayyekgimuo, __("\123\143\x68\x65\x64\165\154\145\40\x52\145\x63\165\162\162\x65\x6e\x63\145", PR__MDL__COMPONENT_MANAGER), ManipulateCron::ecwaeokygwoiqmkk()))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qkcusmuuciksieoy, __("\123\x63\x68\x65\x64\x75\154\145\40\x54\x69\155\145\x73\164\141\155\x70", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua("\61\67\x3a\x32\65\72\x32\x30")->sousgskgsoaaukcs("\x23\x23\72\43\x23\72\43\43")->yskkmqiusguummwa())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::kokgyiugagmkcyay, __("\105\141\x63\x68\40\x49\164\145\x6d\x20\x53\x6c\x65\145\160\40\124\x69\x6d\145", PR__MDL__COMPONENT_MANAGER))->escqqisecooswqgo()->eyygsasuqmommkua(10))->saemoowcasogykak(IconFontawesomeInterface::akugimuociyaaamq))->uwymwiymwwekwuwe(self::cgygmuguceeosoey("\x61\x63\x74\x69\x6f\156\163", __("\x41\x63\164\151\157\x6e\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::qoeiescseggagsqs("\x75\x70\x64\141\164\x65\x5f\x64\141\164\141", __("\125\x70\x64\x61\x74\x65\40\103\157\x6d\160\x6f\x6e\x65\x6e\164\x73", PR__MDL__COMPONENT_MANAGER), __("\x59\x6f\165\x20\x63\x61\x6e\40\x75\160\x64\141\x74\145\40\143\x6f\x6d\160\157\x6e\x65\156\x74\x73\40\144\141\x74\x61\40\x28\166\x65\x72\x73\x69\x6f\156\54\40\x6c\141\163\164\40\x75\160\144\141\164\145\54\x20\144\x6f\167\156\154\157\x61\144\40\x63\x6f\165\x6e\164\51\40\155\141\x6e\x75\141\x6c\154\x79\40\142\171\x20\x70\162\x65\163\163\x20\164\x68\151\x73\x20\142\x75\x74\x74\157\156", PR__MDL__COMPONENT_MANAGER))->ygagwkucacyassau()->gmscmskmuissgywk()->qigsyyqgewgskemg("\165\x70\144\141\x74\x65\x2d\143\157\x6d\160\157\x6e\145\x6e\164\x73\x2d\141\x63\164\x69\157\156"))->saemoowcasogykak(IconFontawesomeInterface::okyygokscquoccea))->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\x70\155\x70\x72\x5f\160\154\x75\x67\x69\156", __("\120\115\x50\x52\x20\120\154\x75\x67\151\156", PR__MDL__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\x70\x6c\x75\147\x69\x6e" . self::iusoecsswgekecks, __("\x47\145\x6e\145\162\x61\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::iseogkiymousogom(self::umoycqkiaiqoqaau, __("\102\x61\x63\x6b\154\151\156\x6b\x20\115\x6f\x64\141\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\151\x74\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::TEXT, __("\x54\145\170\x74", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(5)->gsomueooycksswcy())->mkksewyosgeumwsa(self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->omsoosuoikgueyke())->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\160\x6c\165\147\x69\156\137\164\141\142\137\x6d\x61\151\x6e", __("\x54\x61\142\x27\163\40\x4d\x61\x69\x6e\x20\103\157\x6e\x74\145\156\164", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::agskamgmowaiywus, __("\124\x61\x62\x20\x54\x69\164\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::uckmggyuwgmmskyc, __("\115\x61\x69\x6e\40\104\x65\163\143\x72\151\160\x74\151\157\x6e", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(4)->gsomueooycksswcy())->mkksewyosgeumwsa(self::iseogkiymousogom(self::ywgmisckaekgmagi, __("\x43\157\x6d\x70\141\162\x65\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\x69\164\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::squoamkioomemiyi, __("\x54\171\160\145", PR__MDL__COMPONENT_MANAGER), [self::ykywsqyeckcgqyik => __("\103\x6f\166\145\162", PR__MDL__COMPONENT_MANAGER), self::aqikuweekkucgqoy => __("\x4d\157\144\x75\154\145", PR__MDL__COMPONENT_MANAGER)]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::eisiyawomcsouiwe, __("\127\x6f\162\144\160\x72\x65\x73\163", PR__MDL__COMPONENT_MANAGER))->gwmyoiemwyqeceqg()->yoimakcqmoqokkcu())->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ayygmosqcwyeaagw, __("\x50\115\120\122", PR__MDL__COMPONENT_MANAGER))->gwmyoiemwyqeceqg()->yoimakcqmoqokkcu())->wygoskowywcuyaiq())->saemoowcasogykak(IconFontawesomeInterface::iycigawcosoqqcqq))->saemoowcasogykak(IconFontawesomeInterface::agwimeowekgosiyg))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\155\165\x6c\x74\x69\x5f\163\164\x65\x70", __("\115\165\x6c\164\151\x20\123\x74\145\160", PR__MDL__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::ioomakeyqiqowgmk, __("\107\145\x6e\x65\x72\141\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::qwqkccuwkqeoucqu, __("\107\x6f\40\164\x6f\x20\101\x66\164\x65\162\40\x41\x64\144\x20\164\157\40\x43\x61\162\x74", PR__MDL__COMPONENT_MANAGER), [self::cwswygwykwgsqiwu => __("\x50\162\x6f\144\x75\x63\164\40\x53\x69\156\147\154\x65", PR__MDL__COMPONENT_MANAGER), self::gmquuqmomuaqueyi => __("\x43\x61\x72\x74", PR__MDL__COMPONENT_MANAGER), self::qseekcawwuumgacy => __("\103\150\145\143\153\157\x75\x74", PR__MDL__COMPONENT_MANAGER)])->eumecwmqmukqgyea()->eyygsasuqmommkua(self::cwswygwykwgsqiwu))->saemoowcasogykak(IconFontawesomeInterface::aqaocgsqseeqmoii))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\163\164\x65\x70\163", __("\123\x74\x65\x70\163\40\144\x61\x74\141", PR__MDL__COMPONENT_MANAGER))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\x6f\x72\144\x65\x72\137\x74\171\x70\145", sprintf(__("\x25\x73\40\x53\164\145\160", PR__MDL__COMPONENT_MANAGER), __("\117\x72\144\145\x72\40\x54\171\160\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::aqusgmmakasqamgq, __("\120\154\165\147\x69\156\40\x47\165\x69\144\x65\40\124\x69\x74\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::iwseqweooieakqwk, __("\x50\x6c\165\147\x69\156\40\107\165\151\144\x65\40\x46\151\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::wumiomcykccwmgei, __("\x50\x6c\165\147\x69\156\x20\x47\165\151\144\x65\x20\102\x75\164\164\x6f\156\x20\124\145\x78\x74", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::ggswmwomsiccuqwg, __("\120\x6c\165\x67\151\156\40\x47\165\x69\x64\x65\40\x44\x65\163\x63\x72\x69\160\164\x69\157\x6e", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3))->saemoowcasogykak(IconFontawesomeInterface::myegkwmwssamaouc))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\x62\x61\143\153\154\151\x6e\x6b", __("\102\141\x63\153\x6c\x69\156\x6b", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::oycqkmeykiouqcqo, __("\102\141\x63\153\x6c\x69\156\153\x20\124\151\164\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::aakugisgkoscaeys, __("\102\141\x63\153\154\x69\x6e\x6b\40\104\145\163\143\162\151\x70\164\x69\157\x6e", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::aaasmysammcocwcu, __("\x42\141\x63\153\x6c\x69\156\153\40\111\155\141\147\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::awqewimmscsokykc, __("\x42\141\x63\x6b\x6c\151\156\x6b\x20\x41\x6c\145\x72\x74", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(__("\151\146\40\162\145\x6d\157\x76\x65\40\x69\164\40\x66\x72\x6f\155\40\171\157\165\x72\x20\x70\141\147\x65\x2c\x20\171\157\x75\162\40\141\143\143\x6f\165\156\164\40\x69\163\40\x62\141\x6e\156\145\144\56", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3))->saemoowcasogykak(IconFontawesomeInterface::yakumqwueukksgcm))->saemoowcasogykak(IconFontawesomeInterface::wkyemymeyamqoiym))->saemoowcasogykak(IconFontawesomeInterface::wyoeksgmkucuigyg)); parent::ecwgiiuacoaokqkw(); } public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak) { $eqgoocgaqwqcimie = self::wcoqgwyekgsmiueo($eqgoocgaqwqcimie, self::umoycqkiaiqoqaau, 1, "\x69\x6e\144\145\x78"); return parent::iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak); } public static function gkiyamgwqciqwqwo() : ?string { return self::eiwcuqigayigimak(self::aaasmysammcocwcu . self::mswocgcucqoaesaa, 0); } public static function icioieqkoswsyouk(array $ywmkwiwkosakssii = []) : array { return self::qkckuwowccaqygke(self::umoycqkiaiqoqaau, $ywmkwiwkosakssii); } public function ksgygymiyeiukqoy() : array { $egsqwmeeeowomomi = (new Compare(self::ykywsqyeckcgqyik))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\x57\157\x72\144\160\162\x65\163\x73\x20\124\150\145\x6d\x65", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\127\157\x72\x64\160\x72\145\x73\163\40\103\157\166\x65\162", PR__MDL__COMPONENT_MANAGER)); $smqkocasociqsgai = (new Compare(self::aqikuweekkucgqoy))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\x57\x6f\x72\144\160\x72\145\x73\163\40\x50\154\x75\147\x69\156", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\127\157\x72\144\x70\x72\145\x73\163\x20\x4d\157\x64\165\x6c\145", PR__MDL__COMPONENT_MANAGER)); $oammesyieqmwuwyi = self::eiwcuqigayigimak(self::ywgmisckaekgmagi, []); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::qescuiwgsyuikume, self::squoamkioomemiyi])) { goto qqewoyookaskiuek; } $sqeykgyoooqysmca = ManipulateArray::get($igqsaukqcqscimok, self::squoamkioomemiyi); $ccamueccusigaaio = $smqkocasociqsgai; if (!($sqeykgyoooqysmca === self::ykywsqyeckcgqyik)) { goto iggyqogweyosuikc; } $ccamueccusigaaio = $egsqwmeeeowomomi; iggyqogweyosuikc: $meqocwsecsywiiqs = ManipulateArray::get($igqsaukqcqscimok, self::qescuiwgsyuikume); $ccamueccusigaaio->kywqieosgkokaiue($meqocwsecsywiiqs, [self::ayygmosqcwyeaagw => ManipulateArray::get($igqsaukqcqscimok, self::ayygmosqcwyeaagw, true), self::eisiyawomcsouiwe => ManipulateArray::get($igqsaukqcqscimok, self::eisiyawomcsouiwe, false)]); qqewoyookaskiuek: kqksuugcgsyeoayy: } ygcsmkuycoagwyou: return [self::ykywsqyeckcgqyik => $egsqwmeeeowomomi->sacmkccceuywoqsq(), self::aqikuweekkucgqoy => $smqkocasociqsgai->sacmkccceuywoqsq()]; } }
