<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622ddeed6e0c4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\REST; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\ComponentManager\API\IPDetector; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { use LogTrait; public function __construct() { $this->rest_base = self::ocwsuwyiiasigqaa; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\x65\164\55\x69\x74\x65\x6d", ["\141\162\147\163" => ["\x6e\141\x6d\145" => ["\x74\x79\x70\145" => "\x73\x74\162\x69\156\x67", "\x64\x65\x73\x63\162\151\x70\164\x69\157\156" => __("\116\141\x6d\145\x20\x6f\146\40\x63\x6f\x6d\x70\157\x6e\x65\x6e\x74", PR__PKG__COMPONENT_MANAGER)]], "\143\141\154\x6c\x62\x61\x63\x6b" => [$this, "\x73\161\x6f\151\165\171\x6b\143\157\x75\x65\x69\x75\143\147\143"]]); $this->register("\57\147\145\164\55\x69\x74\145\x6d\163", ["\141\162\x67\x73" => [self::squoamkioomemiyi => ["\164\x79\160\145" => "\x73\164\x72\151\x6e\147", "\x64\x65\x73\143\162\x69\160\x74\x69\x6f\x6e" => __("\124\171\160\145\x20\x6f\x66\40\x63\x6f\155\160\x6f\156\145\x6e\x74", PR__PKG__COMPONENT_MANAGER)], self::imywcsggckkcywgk => ["\164\171\160\145" => "\151\156\x74\x65\x67\145\162"], self::yayciqueeakqwese => ["\164\171\160\145" => "\x73\164\162\151\156\x67"], self::kqeokggqcsesmqco => ["\164\171\160\x65" => "\142\157\157\154\145\x61\x6e"], self::ausqeuugegoygouq => ["\x74\x79\160\x65" => "\x69\156\164\145\x67\145\162"]], "\143\141\x6c\x6c\x62\141\x63\153" => [$this, "\x77\141\x73\x67\x77\163\157\x67\155\x75\161\165\x71\145\x61\x61"]]); $this->register("\x2f\143\x68\x65\x63\153\x2d\153\x65\x79", ["\x61\162\x67\163" => [self::ascagqcquwgmygkm => [self::squoamkioomemiyi => "\x73\x74\162\x69\x6e\x67", self::eqkeooqcsscoggia => __("\x4c\x69\x63\x65\156\163\145\x20\x6b\145\171\40\157\x66\40\143\157\155\160\x6f\x6e\x65\156\x74", PR__PKG__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\163\164\162\151\156\x67", self::eqkeooqcsscoggia => __("\116\x61\155\x65\40\153\145\x79\x20\157\x66\x20\143\157\155\x70\157\156\145\x6e\164", PR__PKG__COMPONENT_MANAGER)]], "\x6d\145\x74\x68\x6f\144\x73" => self::qucyckeykeuuaquw, "\143\x61\x6c\x6c\x62\141\143\x6b" => [$this, "\x6f\x6b\x69\143\x61\x61\165\x67\x71\153\x6d\171\x77\161\x79\155"]]); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto csscmcacoikwsecs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\161\165\x69\162\x65\40\x70\141\162\x61\x6d\x65\x74\145\x72\x73\x20\156\x6f\x74\40\160\x61\x73\163\145\144\56", PR__PKG__COMPONENT_MANAGER), 400); goto cuykwgmswkskqkyi; csscmcacoikwsecs: $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if ($keccaugmemegoimu) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\157\x20\x64\157\155\x61\151\156\40\146\x6f\x75\156\144\x20\x66\157\162\x20\171\x6f\165\x2e", PR__PKG__COMPONENT_MANAGER), 401); goto asmecuqiyyswueqe; myoicgcuugciueis: if (is_wp_error($keccaugmemegoimu)) { goto qwigomakwmyiwkgo; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = Purchase::symcgieuakksimmu()->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $akyiigeggqowmqqq]); if ($gmywaegkmeaueiyo) { goto qogqewiwmwiwskgm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\162\162\171\54\x20\131\x6f\x75\40\156\x6f\164\40\142\x75\171\x20\x74\x68\x69\163\40\x63\157\155\x70\x6f\x6e\145\x6e\x74\x2e", PR__PKG__COMPONENT_MANAGER)); goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $uqigicauqkogsuuc = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($uqigicauqkogsuuc); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) == $wksoawcgagcgoask) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\162\x72\x79\54\40\131\157\x75\40\156\x6f\164\x20\142\x75\x79\x20\164\x68\151\x73\40\x63\157\155\160\x6f\x6e\145\156\164\54\x20\141\162\145\x20\x79\157\165\40\164\162\171\x69\156\147\x20\x68\141\x63\153\77", PR__PKG__COMPONENT_MANAGER)); goto qiaqsassksqiuyae; cecuyayqoioasumi: $icwicymcioeyeyek = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6c\x69\143\x65\156\163\145\x5f\x63\150\145\143\x6b\137\166\141\x6c\151\x64\141\164\151\x6f\156\x5f\x72\145\x73\x70\x6f\156\x73\145\137\144\141\x74\141"), [], $akyiigeggqowmqqq, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x4c\151\143\145\x6e\163\x65\40\x4b\x65\171\40\151\x73\40\x76\x61\x6c\x69\144\56", PR__PKG__COMPONENT_MANAGER), $icwicymcioeyeyek); qiaqsassksqiuyae: qgoiooayqmqqsiok: qwigomakwmyiwkgo: asmecuqiyyswueqe: cuykwgmswkskqkyi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto eqkauqciwewmgeoi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\x75\151\162\145\40\x70\x61\162\141\155\145\164\x65\x72\163\40\x6e\157\x74\40\x70\141\163\x73\145\144\x2e", PR__PKG__COMPONENT_MANAGER), 400); goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::gouqcwikiiygyasc, $gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::ciywsqoeiymemsys, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::auugqowqueaocgsu, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::CREATED_AT, $gcswwqwyaccgyoee::yegaaaygeimasokq, $gcswwqwyaccgyoee::bsqkociucacssuum, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi, $gcswwqwyaccgyoee::keqoqmmgsiegwskg, $gcswwqwyaccgyoee::ieagekqsqmcsqqeo, $gcswwqwyaccgyoee::caecscgwwciyemog]); if ($wksoawcgagcgoask) { goto mkwskuycuyguqqok; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x72\x65\161\x75\x65\163\164\145\144\40\x63\x6f\155\160\157\156\145\156\164\40\167\151\x74\150\40\156\x61\x6d\x65\40\45\x73\x20\156\x6f\x74\x20\x66\157\165\156\144\x2e", PR__PKG__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 400); goto sciwggaeogcoesiu; mkwskuycuyguqqok: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); if (!($akyiigeggqowmqqq = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc))) { goto kuicqywysciceggs; } $keccaugmemegoimu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\x6d\160\157\x6e\x65\x6e\164\x5f\162\x65\163\x74\x5f\x67\145\x74\137\151\164\x65\x6d\x5f\x72\145\163\160\157\156\x73\x65"), $keccaugmemegoimu, $akyiigeggqowmqqq, $wksoawcgagcgoask); kuicqywysciceggs: sciwggaeogcoesiu: kwagwqyusyiyoaqs: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $qwcmueausqgiwigy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, ''); $uoomaookgsyciacm = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($gcswwqwyaccgyoee) { goto mswsoaimesegiiic; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\x72\162\x79\x20\151\x74\x27\x73\40\x73\x6f\155\145\x74\150\x69\156\x67\x20\x77\162\x6f\156\x67\40\x6f\156\x20\x73\145\162\166\145\x72\x2e\x20\160\154\x65\x61\x73\x65\x20\x63\157\x6e\164\x61\x63\164\x20\x75\x73\56", PR__PKG__COMPONENT_MANAGER)); goto egasokooagakisiy; mswsoaimesegiiic: if (!$qwcmueausqgiwigy) { goto yowsmsiyimmimemc; } $uiewakwqscemywuo = [self::ciyoccqkiamemcmm => "\x25{$qwcmueausqgiwigy}\x25", self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::eugyciakiowwcuwm => self::augocsiaqqukkuui]; $uoomaookgsyciacm = [$gcswwqwyaccgyoee::NAME => $uiewakwqscemywuo, $gcswwqwyaccgyoee::wucysakokksokumi => $uiewakwqscemywuo, $gcswwqwyaccgyoee::ouwcgiuiymgwouec => $uiewakwqscemywuo]; yowsmsiyimmimemc: $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, "\160\x61\x63\x6b\x61\147\145"); $uoomaookgsyciacm[$gcswwqwyaccgyoee::squoamkioomemiyi] = $sqeykgyoooqysmca; $uoomaookgsyciacm[$gcswwqwyaccgyoee::ciywsqoeiymemsys] = [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg]; if ($sqeykgyoooqysmca == $gcswwqwyaccgyoee::kqeokggqcsesmqco) { goto uukumskkeggaowck; } $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kqewyqqqiyiouaou($uoomaookgsyciacm); goto cggowoquuiwqkyew; uukumskkeggaowck: $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if (!$gwgucoaaqcwwciqq) { goto eequksumcoogyoem; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); if (!$swgwkyqkakceqeia) { goto sqiciiuwmykocycc; } $mokawwccycoiqeka = $swgwkyqkakceqeia->gwkkkwyoomgsiaou($gwgucoaaqcwwciqq); if ($mokawwccycoiqeka) { goto kiqogmwcgcamwiig; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x72\162\171\x20\x62\165\x74\40\151\x74\47\x73\x20\163\141\x6d\x65\163\40\171\x6f\x75\162\x20\x64\x6f\155\141\151\x6e\x20\x6e\x6f\164\40\162\145\147\x69\163\164\145\162\145\x64\x2e\40\160\154\x65\x61\x73\145\40\x72\x65\x67\x69\x73\164\145\162\40\x64\157\155\x61\x69\x6e\40\141\156\144\40\164\150\145\156\40\164\162\171\40\141\147\141\151\156", PR__PKG__COMPONENT_MANAGER)); goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $siykeiywomwwuoiw = $swgwkyqkakceqeia->mgacegaoeamymmya($swgwkyqkakceqeia::ogqcgemayqiaucag, $mokawwccycoiqeka); iomcaiwewsawiamu: sqiciiuwmykocycc: eequksumcoogyoem: cggowoquuiwqkyew: if (isset($keccaugmemegoimu)) { goto usqgaogkqgemuima; } if (isset($siykeiywomwwuoiw) && $siykeiywomwwuoiw) { goto meawswgwagoqgkye; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\145\x72\166\x69\143\x65\40\151\x73\x20\165\x6e\141\166\141\151\x6c\141\x62\154\145\40\162\151\147\150\x74\x20\156\157\167\56", PR__PKG__COMPONENT_MANAGER), 503); goto wcesymwqykqoyuqk; meawswgwagoqgkye: $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, array_merge($ywmkwiwkosakssii, [self::wosqwewmqmyweqea => false])); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; $qsqwqsymmqeoqwcu = []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = ManipulateArray::get($igqsaukqcqscimok, $gcswwqwyaccgyoee::ciywsqoeiymemsys); if (!in_array($iueymcwwscwqkiyq, [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg])) { goto goacqqsgaaigyuaw; } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); goacqqsgaaigyuaw: yiwiqaqmwiogawym: } ocokwuuquaokmasc: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $qsqwqsymmqeoqwcu; wcesymwqykqoyuqk: usqgaogkqgemuima: egasokooagakisiy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof Model) { goto kecwuwwcwokuksyq; } $igqsaukqcqscimok = $igqsaukqcqscimok->ccekeuwwqqoiwuwy(); kecwuwwcwokuksyq: $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $iueymcwwscwqkiyq = ManipulateArray::unset($igqsaukqcqscimok, Component::ciywsqoeiymemsys); $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\x73\164\141\164\x65" => $iueymcwwscwqkiyq ?: Component::iuisqwiqesgyqsyg]); $product = ManipulateArray::unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!$product) { goto goeoymmqqqeeoime; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto qmiwsequckckoaei; } if (!($iueymcwwscwqkiyq == Component::wmmucsiyiyusmssm)) { goto qgegkeomwscwwiuw; } $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\162\x61\x74\x69\x6e\x67" => $product->get_average_rating(), "\162\x61\164\x69\x6e\x67\x5f\143\x6f\165\x6e\x74" => $product->get_rating_count()]); qgegkeomwscwwiuw: $igqsaukqcqscimok[self::sauwwsocmukoaayu] = $product->get_permalink(); qmiwsequckckoaei: goeoymmqqqeeoime: $mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws); if (!$mcqieaigyeeyaksm) { goto eiawsoasmscmqswa; } $igqsaukqcqscimok[self::mkousmkiawwousws] = ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm); $igqsaukqcqscimok["\151\155\x61\147\145\137\x64\x61\x74\145"] = ManipulateAttachment::squyiyimquqicqke("\x59\55\155\55\x64\40\x48\72\151\x3a\x73", $mcqieaigyeeyaksm, false); eiawsoasmscmqswa: $uoyamuqmwmemuiko = (int) ManipulateArray::unset($igqsaukqcqscimok, Component::ieagekqsqmcsqqeo); $gyycewisqacsckaw = (int) ManipulateArray::unset($igqsaukqcqscimok, Component::caecscgwwciyemog); $ocmwaasmoekuweaa = (int) ManipulateArray::unset($igqsaukqcqscimok, Component::keqoqmmgsiegwskg); if ($iueymcwwscwqkiyq == self::wmmucsiyiyusmssm) { goto ygkcacsyyckescqs; } $ieqwogkgyywicygk = 0; goto cuoqqgaygogsmmic; ygkcacsyyckescqs: $ieqwogkgyywicygk = $uoyamuqmwmemuiko + $ocmwaasmoekuweaa; if (!($gyycewisqacsckaw > 0)) { goto qmeoaqmsuseueqiy; } $keaccasqgkaqawwm = time(); $kwkmegesqkqwyska = strtotime(ManipulateArray::unset($igqsaukqcqscimok, Model::CREATED_AT)); $immmocykksywgkqu = round(($keaccasqgkaqawwm - $kwkmegesqkqwyska) / DAY_IN_SECONDS); if (!($immmocykksywgkqu > 0)) { goto ickcmqoiosquugwe; } $ieqwogkgyywicygk += $gyycewisqacsckaw * $immmocykksywgkqu; ickcmqoiosquugwe: qmeoaqmsuseueqiy: cuoqqgaygogsmmic: return ManipulateArray::set($igqsaukqcqscimok, [Component::mawokyacsmmqmsoo => $ieqwogkgyywicygk]); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) { $ksaameoqigiaoigg = false; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); if (!$swgwkyqkakceqeia) { goto sukskmcwsoysiuqu; } $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $ksaameoqigiaoigg = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($aqykuigiuwmmcieu === self::gouqcwikiiygyasc)) { goto cgewcsueoyaeikgm; } $ksaameoqigiaoigg = $swgwkyqkakceqeia->keeuqgyooycqoygw($ksaameoqigiaoigg); cgewcsueoyaeikgm: sukskmcwsoysiuqu: return $ksaameoqigiaoigg; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $yywgiquyoymymqwk = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x69\x70\163"); $cuakwceieagskoaa = false; $mokawwccycoiqeka = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka))) { goto oouoqimaaqcmccay; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); if (!$swgwkyqkakceqeia) { goto ycakugokkqkuqyiu; } $qoowakyqgwcscuss = $swgwkyqkakceqeia->qogaqkcsogcqiaic($mokawwccycoiqeka, $swgwkyqkakceqeia::aemeeukyaaokioui, $swgwkyqkakceqeia::NOT_SPECIFIED); if ($qoowakyqgwcscuss == $swgwkyqkakceqeia::wyeieyscswyiskcw) { goto coywmiyqgsweuiic; } if (!($qoowakyqgwcscuss == $swgwkyqkakceqeia::NOT_SPECIFIED)) { goto ieumumsgyguceusy; } $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $qoowakyqgwcscuss = $swgwkyqkakceqeia::qyywsyikosmsacgu; if (strtolower(pathinfo($iakkeikwceeomgyq, PATHINFO_EXTENSION)) === "\151\162") { goto qwcegcuowwgiccos; } if (!($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk))) { goto kooskuwkuayiuose; } $seswwgkqsacoswcc = IPDetector::symcgieuakksimmu(); if (!$seswwgkqsacoswcc) { goto twkmiuomimomscew; } foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { if (!($kucumcusyyckayas && strtolower($seswwgkqsacoswcc->mcyaoicyesuysggi($kucumcusyyckayas)) === "\x69\x72")) { goto eyiamcekkgkiawqy; } $cuakwceieagskoaa = true; goto igymseewwyiocoug; eyiamcekkgkiawqy: mqccmesakuemceqi: } igymseewwyiocoug: twkmiuomimomscew: kooskuwkuayiuose: goto qcessicwuikwqsis; qwcegcuowwgiccos: $cuakwceieagskoaa = true; qcessicwuikwqsis: if (!$cuakwceieagskoaa) { goto yssscwioiyygssec; } $qoowakyqgwcscuss = $swgwkyqkakceqeia::wyeieyscswyiskcw; yssscwioiyygssec: $mokawwccycoiqeka = ManipulateArray::set($mokawwccycoiqeka, [$swgwkyqkakceqeia::aemeeukyaaokioui => $qoowakyqgwcscuss]); $swgwkyqkakceqeia->gscuuyuyauokoyuo((array) $mokawwccycoiqeka, true); ieumumsgyguceusy: goto siqagquguiemuoku; coywmiyqgsweuiic: $cuakwceieagskoaa = true; siqagquguiemuoku: ycakugokkqkuqyiu: oouoqimaaqcmccay: return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && $cuakwceieagskoaa; } }
