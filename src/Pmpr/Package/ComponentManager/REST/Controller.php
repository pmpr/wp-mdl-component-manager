<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62212ebf6fe16             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\REST; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\ComponentManager\API\IPDetector; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { use LogTrait; const ocwsuwyiiasigqaa = "\143\157\x6d\x70\157\156\x65\156\164"; public function __construct() { $this->rest_base = "\x63\x6f\155\x70\157\x6e\x65\156\x74"; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\x65\x74\55\x69\164\x65\x6d", ["\x61\x72\x67\x73" => ["\156\x61\155\145" => ["\x74\x79\x70\145" => "\163\x74\x72\x69\156\x67", "\144\145\x73\143\162\151\x70\164\x69\x6f\156" => __("\116\141\155\x65\40\x6f\146\x20\143\x6f\155\160\x6f\156\145\156\x74", PR__PKG__COMPONENT_MANAGER)]], "\143\141\x6c\x6c\x62\141\x63\x6b" => [$this, "\163\x71\x6f\151\x75\171\153\x63\157\x75\x65\151\x75\x63\x67\x63"]]); $this->register("\x2f\x67\145\x74\x2d\x69\x74\x65\x6d\163", ["\x61\x72\x67\163" => [self::squoamkioomemiyi => ["\164\x79\x70\145" => "\x73\x74\x72\151\156\x67", "\x64\145\163\x63\x72\151\x70\x74\x69\157\156" => __("\x54\171\x70\x65\x20\157\146\x20\x63\x6f\155\x70\157\156\x65\156\164", PR__PKG__COMPONENT_MANAGER)], self::imywcsggckkcywgk => ["\164\171\x70\145" => "\151\156\x74\145\x67\145\162"], self::yayciqueeakqwese => ["\164\171\160\x65" => "\163\x74\162\151\x6e\x67"], self::kqeokggqcsesmqco => ["\164\x79\160\x65" => "\x62\x6f\157\154\145\x61\x6e"], self::ausqeuugegoygouq => ["\x74\171\x70\145" => "\151\x6e\164\x65\x67\145\162"]], "\x63\141\x6c\154\142\141\x63\x6b" => [$this, "\167\x61\163\147\167\x73\x6f\x67\155\x75\x71\x75\x71\145\x61\141"]]); $this->register("\x2f\x63\x68\145\143\x6b\x2d\x6b\145\x79", ["\x61\162\x67\163" => [self::ascagqcquwgmygkm => [self::squoamkioomemiyi => "\x73\x74\162\x69\x6e\147", self::eqkeooqcsscoggia => __("\x4c\151\x63\145\156\x73\145\x20\x6b\145\171\x20\x6f\146\x20\143\x6f\x6d\x70\x6f\156\145\x6e\x74", PR__PKG__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\x73\164\x72\151\x6e\147", self::eqkeooqcsscoggia => __("\116\x61\155\145\40\153\145\171\40\157\146\x20\143\157\155\x70\157\x6e\145\156\164", PR__PKG__COMPONENT_MANAGER)]], "\x6d\145\x74\x68\157\x64\x73" => self::qucyckeykeuuaquw, "\x63\141\154\x6c\x62\141\143\153" => [$this, "\x6f\x6b\x69\x63\x61\x61\x75\x67\161\153\x6d\171\x77\161\171\x6d"]]); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto csscmcacoikwsecs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\161\165\x69\162\145\x20\160\141\162\141\155\145\164\x65\162\x73\40\156\157\x74\40\x70\141\163\163\145\144\56", PR__PKG__COMPONENT_MANAGER), 400); goto cuykwgmswkskqkyi; csscmcacoikwsecs: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $keccaugmemegoimu = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if ($keccaugmemegoimu) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\x6f\x20\x64\x6f\155\x61\x69\156\x20\146\x6f\165\x6e\x64\40\146\157\x72\x20\x79\157\165\x2e", PR__PKG__COMPONENT_MANAGER), 401); goto asmecuqiyyswueqe; myoicgcuugciueis: if (is_wp_error($keccaugmemegoimu)) { goto qwigomakwmyiwkgo; } $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = Purchase::symcgieuakksimmu()->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $akyiigeggqowmqqq]); if ($gmywaegkmeaueiyo) { goto qogqewiwmwiwskgm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\162\162\171\54\x20\131\157\x75\x20\x6e\x6f\164\40\x62\165\171\x20\164\150\151\x73\x20\143\x6f\x6d\160\x6f\156\x65\156\164\x2e", PR__PKG__COMPONENT_MANAGER)); goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $uqigicauqkogsuuc = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($uqigicauqkogsuuc); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) == $wksoawcgagcgoask) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\162\x72\x79\54\x20\x59\157\165\x20\156\x6f\164\x20\142\165\x79\40\164\x68\151\x73\x20\143\x6f\155\x70\157\156\145\156\164\54\x20\141\x72\145\40\x79\157\x75\40\x74\x72\171\x69\156\x67\x20\x68\141\x63\153\77", PR__PKG__COMPONENT_MANAGER)); goto qiaqsassksqiuyae; cecuyayqoioasumi: $icwicymcioeyeyek = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\154\151\x63\x65\156\x73\145\137\x63\150\x65\x63\x6b\x5f\x76\141\x6c\151\x64\141\164\151\157\156\137\x72\x65\163\x70\x6f\x6e\163\x65\x5f\144\141\x74\141"), [], $akyiigeggqowmqqq, $uqigicauqkogsuuc, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\x69\143\145\156\163\145\40\x4b\x65\171\x20\x69\x73\x20\166\141\154\x69\144\x2e", PR__PKG__COMPONENT_MANAGER), $icwicymcioeyeyek); qiaqsassksqiuyae: qgoiooayqmqqsiok: qwigomakwmyiwkgo: asmecuqiyyswueqe: cuykwgmswkskqkyi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto sciwggaeogcoesiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\x75\x69\162\145\40\160\141\162\141\x6d\145\164\x65\x72\163\40\156\x6f\x74\x20\x70\x61\163\163\x65\144\56", PR__PKG__COMPONENT_MANAGER), 400); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::ciywsqoeiymemsys, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::auugqowqueaocgsu, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::CREATED_AT, $gcswwqwyaccgyoee::yegaaaygeimasokq, $gcswwqwyaccgyoee::bsqkociucacssuum, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi, $gcswwqwyaccgyoee::keqoqmmgsiegwskg, $gcswwqwyaccgyoee::ieagekqsqmcsqqeo, $gcswwqwyaccgyoee::caecscgwwciyemog]); if ($wksoawcgagcgoask) { goto kuicqywysciceggs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\162\145\x71\x75\145\x73\x74\x65\144\40\x63\x6f\155\160\x6f\x6e\x65\156\164\40\167\x69\164\x68\x20\x6e\141\x6d\145\x20\45\x73\40\x6e\x6f\164\x20\146\x6f\x75\x6e\x64\x2e", PR__PKG__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 400); goto mkwskuycuyguqqok; kuicqywysciceggs: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); mkwskuycuyguqqok: eqkauqciwewmgeoi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $qwcmueausqgiwigy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, ''); $uoomaookgsyciacm = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!$qwcmueausqgiwigy) { goto kwagwqyusyiyoaqs; } $uiewakwqscemywuo = [self::ciyoccqkiamemcmm => "\x25{$qwcmueausqgiwigy}\x25", self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::eugyciakiowwcuwm => self::augocsiaqqukkuui]; $uoomaookgsyciacm = [$gcswwqwyaccgyoee::NAME => $uiewakwqscemywuo, $gcswwqwyaccgyoee::wucysakokksokumi => $uiewakwqscemywuo, $gcswwqwyaccgyoee::ouwcgiuiymgwouec => $uiewakwqscemywuo]; kwagwqyusyiyoaqs: $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, "\160\141\143\x6b\141\x67\x65"); $uoomaookgsyciacm[$gcswwqwyaccgyoee::squoamkioomemiyi] = $sqeykgyoooqysmca; $uoomaookgsyciacm[$gcswwqwyaccgyoee::ciywsqoeiymemsys] = [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg]; if ($sqeykgyoooqysmca == $gcswwqwyaccgyoee::kqeokggqcsesmqco) { goto sqiciiuwmykocycc; } $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kqewyqqqiyiouaou($uoomaookgsyciacm); goto eequksumcoogyoem; sqiciiuwmykocycc: $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if (!$gwgucoaaqcwwciqq) { goto iomcaiwewsawiamu; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->gwkkkwyoomgsiaou($gwgucoaaqcwwciqq); if ($mokawwccycoiqeka) { goto yowsmsiyimmimemc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\x72\162\171\x20\x62\x75\x74\x20\151\164\47\x73\x20\x73\x61\155\145\163\40\x79\157\x75\162\x20\x64\x6f\x6d\141\151\x6e\40\x6e\x6f\164\40\x72\x65\x67\x69\163\x74\145\162\145\x64\56\x20\x70\x6c\145\x61\x73\x65\40\x72\145\147\151\x73\164\x65\x72\40\144\157\x6d\x61\151\x6e\x20\141\x6e\144\x20\x74\150\x65\x6e\x20\x74\162\171\x20\141\x67\x61\x69\x6e", PR__PKG__COMPONENT_MANAGER)); goto kiqogmwcgcamwiig; yowsmsiyimmimemc: $siykeiywomwwuoiw = $swgwkyqkakceqeia->mgacegaoeamymmya($swgwkyqkakceqeia::ogqcgemayqiaucag, $mokawwccycoiqeka); kiqogmwcgcamwiig: iomcaiwewsawiamu: eequksumcoogyoem: if (isset($keccaugmemegoimu)) { goto meawswgwagoqgkye; } if (isset($siykeiywomwwuoiw) && $siykeiywomwwuoiw) { goto yiwiqaqmwiogawym; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x65\x72\x76\151\x63\145\x20\151\163\40\165\x6e\141\x76\x61\151\154\x61\x62\x6c\145\40\162\x69\x67\150\164\x20\156\157\x77\56", PR__PKG__COMPONENT_MANAGER), 503); goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, array_merge($ywmkwiwkosakssii, [self::wosqwewmqmyweqea => false])); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; $qsqwqsymmqeoqwcu = []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = ManipulateArray::get($igqsaukqcqscimok, $gcswwqwyaccgyoee::ciywsqoeiymemsys); if (!in_array($iueymcwwscwqkiyq, [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg])) { goto ocokwuuquaokmasc; } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); ocokwuuquaokmasc: cggowoquuiwqkyew: } uukumskkeggaowck: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $qsqwqsymmqeoqwcu; goacqqsgaaigyuaw: meawswgwagoqgkye: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof Model) { goto wcesymwqykqoyuqk; } $igqsaukqcqscimok = $igqsaukqcqscimok->ccekeuwwqqoiwuwy(); wcesymwqykqoyuqk: $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $iueymcwwscwqkiyq = ManipulateArray::unset($igqsaukqcqscimok, Component::ciywsqoeiymemsys); $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\163\x74\141\164\145" => $iueymcwwscwqkiyq ?: Component::iuisqwiqesgyqsyg]); $product = ManipulateArray::unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!$product) { goto egasokooagakisiy; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto mswsoaimesegiiic; } if (!($iueymcwwscwqkiyq == Component::wmmucsiyiyusmssm)) { goto usqgaogkqgemuima; } $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\x72\141\164\x69\x6e\147" => $product->get_average_rating(), "\x72\x61\x74\x69\156\147\137\143\x6f\x75\x6e\x74" => $product->get_rating_count()]); usqgaogkqgemuima: $igqsaukqcqscimok[self::sauwwsocmukoaayu] = $product->get_permalink(); mswsoaimesegiiic: egasokooagakisiy: $mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws); if (!$mcqieaigyeeyaksm) { goto kecwuwwcwokuksyq; } $igqsaukqcqscimok[self::mkousmkiawwousws] = ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm); kecwuwwcwokuksyq: $uoyamuqmwmemuiko = intval(ManipulateArray::unset($igqsaukqcqscimok, Component::ieagekqsqmcsqqeo)); $gyycewisqacsckaw = intval(ManipulateArray::unset($igqsaukqcqscimok, Component::caecscgwwciyemog)); $ocmwaasmoekuweaa = intval(ManipulateArray::unset($igqsaukqcqscimok, Component::keqoqmmgsiegwskg)); if ($iueymcwwscwqkiyq == Component::wmmucsiyiyusmssm) { goto goeoymmqqqeeoime; } $ieqwogkgyywicygk = 0; goto eiawsoasmscmqswa; goeoymmqqqeeoime: $ieqwogkgyywicygk = $uoyamuqmwmemuiko + $ocmwaasmoekuweaa; if (!($gyycewisqacsckaw > 0)) { goto qmiwsequckckoaei; } $keaccasqgkaqawwm = time(); $kwkmegesqkqwyska = strtotime(ManipulateArray::unset($igqsaukqcqscimok, Component::CREATED_AT)); $immmocykksywgkqu = round(($keaccasqgkaqawwm - $kwkmegesqkqwyska) / DAY_IN_SECONDS); if (!($immmocykksywgkqu > 0)) { goto qgegkeomwscwwiuw; } $ieqwogkgyywicygk += $gyycewisqacsckaw * $immmocykksywgkqu; qgegkeomwscwwiuw: qmiwsequckckoaei: eiawsoasmscmqswa: return ManipulateArray::set($igqsaukqcqscimok, [Component::mawokyacsmmqmsoo => $ieqwogkgyywicygk]); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $yywgiquyoymymqwk = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\151\x70\163"); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $cuakwceieagskoaa = false; $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka))) { goto kooskuwkuayiuose; } $qoowakyqgwcscuss = $swgwkyqkakceqeia->qogaqkcsogcqiaic($mokawwccycoiqeka, $swgwkyqkakceqeia::aemeeukyaaokioui, $swgwkyqkakceqeia::NOT_SPECIFIED); if ($qoowakyqgwcscuss == $swgwkyqkakceqeia::wyeieyscswyiskcw) { goto eyiamcekkgkiawqy; } if (!($qoowakyqgwcscuss == $swgwkyqkakceqeia::NOT_SPECIFIED)) { goto mqccmesakuemceqi; } $qoowakyqgwcscuss = $swgwkyqkakceqeia::qyywsyikosmsacgu; if (in_array(strtolower(pathinfo($iakkeikwceeomgyq, PATHINFO_EXTENSION)), ["\x69\x72"])) { goto cgewcsueoyaeikgm; } if (!($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk))) { goto cuoqqgaygogsmmic; } $seswwgkqsacoswcc = IPDetector::symcgieuakksimmu(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { if (!($kucumcusyyckayas && in_array(strtolower($seswwgkqsacoswcc->mcyaoicyesuysggi($kucumcusyyckayas)), ["\x69\162"]))) { goto ygkcacsyyckescqs; } $cuakwceieagskoaa = true; goto ickcmqoiosquugwe; ygkcacsyyckescqs: qmeoaqmsuseueqiy: } ickcmqoiosquugwe: cuoqqgaygogsmmic: goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $cuakwceieagskoaa = true; sukskmcwsoysiuqu: if (!$cuakwceieagskoaa) { goto igymseewwyiocoug; } $qoowakyqgwcscuss = $swgwkyqkakceqeia::wyeieyscswyiskcw; igymseewwyiocoug: $mokawwccycoiqeka = ManipulateArray::set($mokawwccycoiqeka, [$swgwkyqkakceqeia::aemeeukyaaokioui => $qoowakyqgwcscuss]); $swgwkyqkakceqeia->gscuuyuyauokoyuo((array) $mokawwccycoiqeka, true); mqccmesakuemceqi: goto twkmiuomimomscew; eyiamcekkgkiawqy: $cuakwceieagskoaa = true; twkmiuomimomscew: kooskuwkuayiuose: return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && $cuakwceieagskoaa; } }
