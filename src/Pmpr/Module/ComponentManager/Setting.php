<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63920ffd34b73             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Manipulate\ManipulateCron; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Data\Compare; class Setting extends BaseClass { const qwqkccuwkqeoucqu = "\147\157\x74\157\137\141\146\164\145\162\137\141\144\x64\137\x74\157\x5f\143\x61\162\164"; const qsciwuokgmaaqcuq = "\165\160\x64\x61\164\145\137\143\157\x6d\x70\157\156\145\x6e\x74\163\x5f"; const kokgyiugagmkcyay = self::qsciwuokgmaaqcuq . "\x73\x6c\x65\145\x70"; const gyicmcewygamwoog = self::qsciwuokgmaaqcuq . self::iccwcygaeqmomooo; const qkcusmuuciksieoy = self::qsciwuokgmaaqcuq . "\x74\x69\155\145\163\x74\x61\x6d\160"; const gomeigayyekgimuo = self::qsciwuokgmaaqcuq . "\x72\x65\143\x75\162\x72\145\156\x63\x65"; const yicqiccsyqwigaqa = "\x62\141\143\153\x6c\151\156\x6b\x5f"; const oycqkmeykiouqcqo = self::yicqiccsyqwigaqa . self::qescuiwgsyuikume; const aaasmysammcocwcu = self::yicqiccsyqwigaqa . self::mkousmkiawwousws; const awqewimmscsokykc = self::yicqiccsyqwigaqa . self::muocgwgqigscmqow; const aakugisgkoscaeys = self::yicqiccsyqwigaqa . self::eqkeooqcsscoggia; const kqykggkcgquswkea = "\160\154\x75\147\x69\156\137\x67\x75\x69\144\x65\x5f"; const iwseqweooieakqwk = self::kqykggkcgquswkea . "\x66\x69\x6c\x65"; const aqusgmmakasqamgq = self::kqykggkcgquswkea . self::qescuiwgsyuikume; const wumiomcykccwmgei = self::kqykggkcgquswkea . self::gqmuoaykeqeuoukm; const ggswmwomsiccuqwg = self::kqykggkcgquswkea . self::eqkeooqcsscoggia; const eyiukesukwwsmyya = "\x70\154\x75\x67\151\156\137\164\x61\142\x5f"; const agskamgmowaiywus = self::eyiukesukwwsmyya . self::qescuiwgsyuikume; const ywgmisckaekgmagi = self::eyiukesukwwsmyya . "\x63\x6f\x6d\160\x61\x72\145\x73"; const uckmggyuwgmmskyc = self::eyiukesukwwsmyya . self::eqkeooqcsscoggia; const umoycqkiaiqoqaau = "\x70\154\x75\147\151\x6e\x5f\142\x61\x63\x6b\x6c\151\x6e\153\137\x6d\x6f\x64\x61\x6c"; const ayygmosqcwyeaagw = "\x70\155\160\x72\137\x76\x61\x6c\x75\145"; const eisiyawomcsouiwe = "\167\x6f\162\144\160\x72\x65\163\163\x5f\x76\141\x6c\x75\145"; const gmquuqmomuaqueyi = "\143\141\162\164"; const cwswygwykwgsqiwu = "\x73\x69\156\147\154\x65"; const qseekcawwuumgacy = "\143\x68\145\143\153\x6f\x75\x74"; public function __construct() { $wksoawcgagcgoask = self::akuociswqmoigkas(); $this->name = $wksoawcgagcgoask; $this->parentMenu = $wksoawcgagcgoask; $this->hasLicense = false; parent::__construct(); } public function gogaagekwoisaqgu() { $this->pageTitle = __("\x43\157\155\160\157\156\145\x6e\164\40\x4d\x61\156\141\x67\145\162\40\x53\145\x74\x74\x69\x6e\x67", PR__MDL__COMPONENT_MANAGER); $this->menuTitle = __("\x53\145\x74\164\x69\156\147", PR__MDL__COMPONENT_MANAGER); parent::gogaagekwoisaqgu(); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa(self::ioomakeyqiqowgmk, __("\x47\x65\x6e\145\162\141\154", PR__MDL__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\x75\160\x64\141\x74\145\137\x63\157\x6d\x70\157\156\x65\156\x74\163", __("\125\x70\144\141\164\x65\40\x43\157\x6d\x70\157\156\x65\156\x74\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::gyicmcewygamwoog, __("\x45\156\x61\x62\154\145\x20\x41\165\164\x6f\x6d\x61\x74\151\x63\40\125\160\144\x61\164\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::gomeigayyekgimuo, __("\123\143\150\145\x64\x75\154\x65\40\x52\145\x63\165\162\162\x65\156\x63\x65", PR__MDL__COMPONENT_MANAGER), ManipulateCron::ecwaeokygwoiqmkk()))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qkcusmuuciksieoy, __("\x53\x63\x68\145\x64\165\154\x65\40\x54\151\x6d\x65\163\164\141\x6d\160", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua("\61\67\x3a\62\65\72\62\60")->sousgskgsoaaukcs("\43\43\x3a\x23\43\x3a\43\43")->yskkmqiusguummwa())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::kokgyiugagmkcyay, __("\105\x61\143\x68\40\111\164\x65\155\40\x53\x6c\x65\x65\x70\x20\124\x69\x6d\x65", PR__MDL__COMPONENT_MANAGER))->escqqisecooswqgo()->eyygsasuqmommkua(10))->saemoowcasogykak(IconInterface::qywgekagciyucegy))->uwymwiymwwekwuwe(self::cgygmuguceeosoey("\141\143\x74\151\x6f\x6e\163", __("\x41\143\164\151\157\x6e\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::qoeiescseggagsqs("\165\x70\x64\x61\164\x65\137\x64\141\x74\141", __("\125\160\x64\x61\164\x65\40\103\157\155\x70\x6f\156\145\x6e\164\x73", PR__MDL__COMPONENT_MANAGER), __("\x59\x6f\165\x20\x63\x61\x6e\40\x75\160\x64\x61\164\x65\40\x63\157\x6d\160\x6f\156\145\x6e\164\163\40\x64\x61\164\141\40\50\x76\145\x72\x73\151\x6f\x6e\54\x20\154\x61\x73\x74\x20\x75\x70\x64\141\x74\x65\x2c\x20\x64\x6f\x77\156\x6c\157\x61\x64\x20\143\157\165\x6e\164\x29\40\155\x61\x6e\165\141\154\x6c\x79\40\142\171\40\160\x72\x65\163\163\x20\x74\x68\151\163\x20\142\x75\164\x74\x6f\156", PR__MDL__COMPONENT_MANAGER))->ygagwkucacyassau()->gmscmskmuissgywk()->qigsyyqgewgskemg("\x75\x70\x64\x61\164\x65\x2d\143\157\x6d\160\157\156\x65\156\164\x73\55\141\x63\164\x69\157\x6e"))->saemoowcasogykak(IconInterface::imoykkmkkkaqgouo))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\160\x6d\160\162\x5f\160\154\x75\x67\151\156", __("\120\115\x50\x52\x20\x50\x6c\x75\147\151\156", PR__MDL__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\x70\154\165\x67\151\156" . self::iusoecsswgekecks, __("\x47\145\156\145\162\x61\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::iseogkiymousogom(self::umoycqkiaiqoqaau, __("\102\141\143\x6b\x6c\151\x6e\x6b\x20\x4d\x6f\144\x61\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\x54\x69\164\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::TEXT, __("\x54\x65\x78\164", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(5)->gsomueooycksswcy())->mkksewyosgeumwsa(self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm))->omsoosuoikgueyke())->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\x70\154\x75\147\x69\x6e\137\164\x61\142\137\x6d\141\151\x6e", __("\124\141\x62\x27\x73\x20\115\141\151\x6e\40\x43\157\156\x74\145\156\164", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::agskamgmowaiywus, __("\124\x61\142\x20\124\151\164\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::uckmggyuwgmmskyc, __("\115\141\x69\156\x20\x44\145\x73\143\x72\151\x70\x74\151\x6f\156", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(4)->gsomueooycksswcy())->mkksewyosgeumwsa(self::iseogkiymousogom(self::ywgmisckaekgmagi, __("\103\x6f\155\160\x61\162\145\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\151\x74\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::squoamkioomemiyi, __("\124\x79\160\x65", PR__MDL__COMPONENT_MANAGER), [self::ykywsqyeckcgqyik => __("\x43\157\x76\145\162", PR__MDL__COMPONENT_MANAGER), self::aqikuweekkucgqoy => __("\x4d\157\144\165\154\145", PR__MDL__COMPONENT_MANAGER)]))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::eisiyawomcsouiwe, __("\127\x6f\162\144\x70\162\145\163\163", PR__MDL__COMPONENT_MANAGER))->gwmyoiemwyqeceqg()->yoimakcqmoqokkcu())->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::ayygmosqcwyeaagw, __("\120\x4d\120\x52", PR__MDL__COMPONENT_MANAGER))->gwmyoiemwyqeceqg()->yoimakcqmoqokkcu())->wygoskowywcuyaiq())->saemoowcasogykak(IconInterface::moyqoqmkkkaoeses))->saemoowcasogykak(IconInterface::csoyqymugwqiggki))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\155\x75\x6c\164\x69\x5f\x73\164\145\x70", __("\115\165\154\164\151\x20\x53\x74\145\160", PR__MDL__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::ioomakeyqiqowgmk, __("\107\x65\156\145\162\141\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::qwqkccuwkqeoucqu, __("\107\x6f\40\x74\157\40\x41\146\x74\x65\162\x20\101\144\x64\40\x74\157\40\x43\x61\x72\164", PR__MDL__COMPONENT_MANAGER), [self::cwswygwykwgsqiwu => __("\120\x72\157\x64\165\x63\164\x20\123\151\156\147\154\145", PR__MDL__COMPONENT_MANAGER), self::gmquuqmomuaqueyi => __("\103\141\x72\x74", PR__MDL__COMPONENT_MANAGER), self::qseekcawwuumgacy => __("\103\x68\x65\143\153\x6f\x75\x74", PR__MDL__COMPONENT_MANAGER)])->eumecwmqmukqgyea()->eyygsasuqmommkua(self::cwswygwykwgsqiwu))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy))->sikqggwmmykuiymy(self::cgygmuguceeosoey("\163\x74\x65\x70\x73", __("\x53\x74\145\160\x73\40\144\x61\164\141", PR__MDL__COMPONENT_MANAGER))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\x6f\162\x64\145\x72\137\164\171\x70\x65", sprintf(__("\x25\x73\40\x53\164\x65\x70", PR__MDL__COMPONENT_MANAGER), __("\x4f\x72\x64\x65\162\x20\x54\171\160\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::aqusgmmakasqamgq, __("\x50\154\x75\147\x69\156\40\107\165\151\x64\145\40\124\x69\164\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::iwseqweooieakqwk, __("\120\x6c\165\147\151\156\x20\x47\x75\x69\144\x65\x20\106\151\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::wumiomcykccwmgei, __("\x50\154\165\147\151\156\x20\107\165\x69\x64\x65\x20\x42\165\164\x74\x6f\156\40\124\145\170\164", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::ggswmwomsiccuqwg, __("\x50\154\x75\x67\151\x6e\x20\107\165\x69\x64\x65\40\104\x65\163\x63\162\151\x70\x74\x69\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3))->saemoowcasogykak(IconInterface::qkqucweqeuyemamq))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("\142\x61\x63\x6b\154\151\156\x6b", __("\102\141\x63\153\154\x69\x6e\x6b", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::oycqkmeykiouqcqo, __("\102\x61\143\x6b\x6c\x69\156\153\x20\x54\151\x74\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::aakugisgkoscaeys, __("\x42\x61\x63\x6b\x6c\151\x6e\153\40\x44\145\x73\x63\162\151\x70\x74\x69\x6f\x6e", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::aaasmysammcocwcu, __("\x42\x61\x63\x6b\x6c\151\x6e\153\40\111\155\x61\147\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::awqewimmscsokykc, __("\x42\x61\143\x6b\x6c\151\x6e\153\x20\101\154\x65\x72\x74", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(__("\x69\x66\x20\162\145\x6d\x6f\x76\145\40\x69\164\40\x66\162\x6f\x6d\x20\171\x6f\165\x72\x20\160\x61\147\145\54\40\x79\157\165\162\40\141\143\x63\x6f\165\x6e\x74\x20\151\163\40\142\x61\x6e\x6e\x65\x64\x2e", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3))->saemoowcasogykak(IconInterface::emuwacasoaaageiq))->saemoowcasogykak(IconInterface::gwuqaauiiiqquecg))->saemoowcasogykak(IconInterface::miecumwmuocmymoa)); parent::ecwgiiuacoaokqkw(); } public function iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak) { $eqgoocgaqwqcimie = self::wcoqgwyekgsmiueo($eqgoocgaqwqcimie, self::umoycqkiaiqoqaau, 1, "\x69\x6e\x64\145\x78"); return parent::iasywwkguyauiywu($eqgoocgaqwqcimie, $msqkueqksqwmskak); } public static function gkiyamgwqciqwqwo() : ?string { return self::eiwcuqigayigimak(self::aaasmysammcocwcu . self::mswocgcucqoaesaa, 0); } public static function icioieqkoswsyouk(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[self::wkweqssoakmmmguq] = [self::ascagqcquwgmygkm]; return self::qkckuwowccaqygke(self::umoycqkiaiqoqaau, $ywmkwiwkosakssii); } public function ksgygymiyeiukqoy() : array { $egsqwmeeeowomomi = (new Compare(self::ykywsqyeckcgqyik))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\x57\157\x72\144\x70\162\145\x73\163\x20\x54\150\x65\155\145", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\x57\x6f\162\x64\160\162\145\x73\163\40\103\x6f\x76\x65\x72", PR__MDL__COMPONENT_MANAGER)); $smqkocasociqsgai = (new Compare(self::aqikuweekkucgqoy))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\127\157\x72\144\x70\x72\145\x73\163\x20\120\x6c\165\147\x69\156", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\x57\x6f\x72\x64\160\162\x65\163\163\x20\115\157\144\165\x6c\x65", PR__MDL__COMPONENT_MANAGER)); $oammesyieqmwuwyi = self::eiwcuqigayigimak(self::ywgmisckaekgmagi, []); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::qescuiwgsyuikume, self::squoamkioomemiyi])) { goto iwsmmkqaoksmocok; } $sqeykgyoooqysmca = ManipulateArray::get($igqsaukqcqscimok, self::squoamkioomemiyi); $ccamueccusigaaio = $smqkocasociqsgai; if (!($sqeykgyoooqysmca === self::ykywsqyeckcgqyik)) { goto emqswoaawgeyosmi; } $ccamueccusigaaio = $egsqwmeeeowomomi; emqswoaawgeyosmi: $meqocwsecsywiiqs = ManipulateArray::get($igqsaukqcqscimok, self::qescuiwgsyuikume); $ccamueccusigaaio->kywqieosgkokaiue($meqocwsecsywiiqs, [self::ayygmosqcwyeaagw => ManipulateArray::get($igqsaukqcqscimok, self::ayygmosqcwyeaagw, true), self::eisiyawomcsouiwe => ManipulateArray::get($igqsaukqcqscimok, self::eisiyawomcsouiwe, false)]); iwsmmkqaoksmocok: ocywegekakimmwcq: } yuimwyoywaiiqacs: return [self::ykywsqyeckcgqyik => $egsqwmeeeowomomi->sacmkccceuywoqsq(), self::aqikuweekkucgqoy => $smqkocasociqsgai->sacmkccceuywoqsq()]; } }
