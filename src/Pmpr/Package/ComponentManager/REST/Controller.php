<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d54d1c29274             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\REST; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { use LogTrait; const ocwsuwyiiasigqaa = "\143\157\x6d\x70\x6f\x6e\145\x6e\164"; const okkqqmwseqscceye = "\154\151\143\x65\156\163\145\137\153\x65\x79"; public function __construct() { $this->rest_base = "\x63\157\x6d\160\x6f\156\x65\156\164"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\x74\55\151\164\145\155", ["\141\x72\x67\163" => ["\x6e\141\x6d\x65" => ["\x74\x79\x70\145" => "\163\164\162\151\x6e\147", "\x64\x65\163\143\162\x69\160\164\x69\x6f\156" => __("\x4e\141\155\x65\40\157\146\x20\143\157\155\160\157\156\145\x6e\x74", PR__PKG__COMPONENT_MANAGER)]], "\x6d\x65\x74\x68\157\x64\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\x62\x61\143\x6b" => [$this, "\x73\x71\157\151\x75\x79\153\143\x6f\x75\145\x69\165\143\147\x63"]]); $this->register("\57\x67\x65\164\55\x69\164\x65\155\163", ["\141\162\147\x73" => [self::squoamkioomemiyi => ["\x74\x79\x70\145" => "\163\x74\x72\151\156\147", "\x64\145\x73\x63\x72\151\160\x74\x69\x6f\x6e" => __("\x54\x79\160\145\40\x6f\x66\40\143\x6f\x6d\x70\x6f\156\x65\x6e\164", PR__PKG__COMPONENT_MANAGER)], self::imywcsggckkcywgk => ["\x74\x79\160\x65" => "\x69\156\x74\x65\x67\145\x72"], self::yayciqueeakqwese => ["\x74\171\x70\x65" => "\x73\164\x72\x69\156\x67"], self::kqeokggqcsesmqco => ["\x74\171\160\145" => "\142\157\157\x6c\145\141\156"], self::ausqeuugegoygouq => ["\x74\x79\160\145" => "\x69\156\x74\145\x67\145\x72"]], "\x6d\145\164\150\157\x64\x73" => self::uigoseacoukemwqc, "\x63\x61\154\x6c\142\x61\x63\x6b" => [$this, "\x77\x61\x73\x67\167\x73\x6f\x67\x6d\165\x71\165\161\145\x61\x61"]]); $this->register("\57\x63\x68\145\x63\153\x2d\154\151\143\x65\x6e\163\x65\x2d\x6b\x65\171", ["\x61\x72\x67\x73" => [self::okkqqmwseqscceye => [self::squoamkioomemiyi => "\163\164\x72\x69\x6e\x67", self::eqkeooqcsscoggia => __("\x4c\151\143\145\156\x73\145\x20\153\145\x79\40\x6f\x66\x20\x63\157\155\160\157\x6e\145\156\164", PR__PKG__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\163\164\162\151\x6e\147", self::eqkeooqcsscoggia => __("\x4e\x61\x6d\x65\x20\x6b\x65\171\40\157\x66\x20\143\x6f\155\x70\157\156\x65\156\164", PR__PKG__COMPONENT_MANAGER)]], "\155\x65\x74\150\x6f\x64\163" => self::qucyckeykeuuaquw, "\143\x61\154\154\142\x61\x63\x6b" => [$this, "\x6f\153\151\x63\141\x61\165\x67\x71\153\x6d\171\167\161\171\155"]]); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::okkqqmwseqscceye, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto csscmcacoikwsecs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\161\x75\x69\162\145\x20\x70\141\162\x61\x6d\145\x74\x65\162\x73\40\x6e\157\164\40\x70\x61\163\x73\145\144\56", PR__PKG__COMPONENT_MANAGER), 400); goto cuykwgmswkskqkyi; csscmcacoikwsecs: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $keccaugmemegoimu = $swgwkyqkakceqeia->ogkgcwiskmoiweki($esuksqieigiqcaie, $iakkeikwceeomgyq); if ($keccaugmemegoimu) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\157\x20\144\x6f\155\x61\151\x6e\x20\146\x6f\x75\156\x64\x20\146\x6f\x72\x20\x79\x6f\165\56", PR__PKG__COMPONENT_MANAGER), 401); goto asmecuqiyyswueqe; myoicgcuugciueis: if (is_wp_error($keccaugmemegoimu)) { goto qwigomakwmyiwkgo; } $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = Purchase::symcgieuakksimmu()->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $akyiigeggqowmqqq]); if ($gmywaegkmeaueiyo) { goto qogqewiwmwiwskgm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x72\162\x79\x2c\40\131\x6f\165\x20\x6e\x6f\164\40\142\165\171\40\164\x68\x69\163\40\x63\157\x6d\160\x6f\x6e\145\x6e\164\56", PR__PKG__COMPONENT_MANAGER)); goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $uqigicauqkogsuuc = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($uqigicauqkogsuuc); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) == $wksoawcgagcgoask) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\162\162\x79\x2c\x20\131\157\165\40\156\157\x74\40\x62\x75\x79\40\164\x68\151\x73\40\143\x6f\x6d\160\x6f\156\x65\x6e\164\54\40\141\162\145\x20\171\x6f\165\40\164\162\171\151\x6e\x67\40\x68\x61\143\x6b\x3f", PR__PKG__COMPONENT_MANAGER)); goto qiaqsassksqiuyae; cecuyayqoioasumi: $icwicymcioeyeyek = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\154\151\x63\145\156\163\x65\x5f\x63\x68\145\143\153\x5f\x76\141\154\151\144\x61\x74\151\x6f\156\x5f\x72\145\163\x70\157\156\163\145\137\x64\141\x74\x61"), [], $akyiigeggqowmqqq, $uqigicauqkogsuuc, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\151\x63\145\156\163\145\x20\113\145\x79\x20\151\x73\40\x76\141\154\151\x64\56", PR__PKG__COMPONENT_MANAGER), $icwicymcioeyeyek); qiaqsassksqiuyae: qgoiooayqmqqsiok: qwigomakwmyiwkgo: asmecuqiyyswueqe: cuykwgmswkskqkyi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto sciwggaeogcoesiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\161\x75\151\162\145\40\160\141\x72\x61\x6d\x65\x74\145\x72\x73\40\156\157\x74\x20\160\141\163\x73\x65\144\x2e", PR__PKG__COMPONENT_MANAGER), 400); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::mawokyacsmmqmsoo, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi]); if ($wksoawcgagcgoask) { goto kuicqywysciceggs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\162\145\161\165\x65\163\x74\145\x64\x20\143\157\x6d\160\157\156\x65\156\x74\40\x77\151\x74\x68\x20\156\x61\x6d\145\x20\x25\x73\x20\156\x6f\x74\40\146\157\165\156\x64\x2e", PR__PKG__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 400); goto mkwskuycuyguqqok; kuicqywysciceggs: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); mkwskuycuyguqqok: eqkauqciwewmgeoi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $qwcmueausqgiwigy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, ''); $uoomaookgsyciacm = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!$qwcmueausqgiwigy) { goto kwagwqyusyiyoaqs; } $uiewakwqscemywuo = [self::ciyoccqkiamemcmm => "\45{$qwcmueausqgiwigy}\x25", self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::eugyciakiowwcuwm => self::augocsiaqqukkuui]; $uoomaookgsyciacm = [$gcswwqwyaccgyoee::NAME => $uiewakwqscemywuo, $gcswwqwyaccgyoee::wucysakokksokumi => $uiewakwqscemywuo, $gcswwqwyaccgyoee::ouwcgiuiymgwouec => $uiewakwqscemywuo]; kwagwqyusyiyoaqs: $uoomaookgsyciacm[$gcswwqwyaccgyoee::squoamkioomemiyi] = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, "\x70\141\x63\153\x61\x67\145"); if (!$this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::kqeokggqcsesmqco, false)) { goto yowsmsiyimmimemc; } $uoomaookgsyciacm[$gcswwqwyaccgyoee::squoamkioomemiyi] = "\143\165\163\164\157\155"; yowsmsiyimmimemc: $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kqewyqqqiyiouaou($uoomaookgsyciacm); if ($siykeiywomwwuoiw) { goto sqiciiuwmykocycc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x65\162\166\x69\x63\x65\x20\x69\163\x20\165\156\141\166\x61\x69\x6c\141\142\154\145\40\x72\x69\147\x68\x74\x20\156\157\167\56", PR__PKG__COMPONENT_MANAGER), 503); goto eequksumcoogyoem; sqiciiuwmykocycc: $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, [self::imywcsggckkcywgk => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::imywcsggckkcywgk, 1), self::ausqeuugegoygouq => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ausqeuugegoygouq, 10), self::wosqwewmqmyweqea => false]); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $oammesyieqmwuwyi[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); iomcaiwewsawiamu: } kiqogmwcgcamwiig: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; eequksumcoogyoem: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $product = ManipulateArray::unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!$product) { goto cggowoquuiwqkyew; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto uukumskkeggaowck; } $uwomkgseoiegeume = ["\x72\141\x74\x69\156\x67" => $product->get_average_rating(), "\x72\x61\x74\x69\x6e\x67\x5f\143\x6f\x75\x6e\x74" => $product->get_rating_count(), self::sauwwsocmukoaayu => $product->get_permalink()]; $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, $uwomkgseoiegeume); uukumskkeggaowck: cggowoquuiwqkyew: $mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws); if (!$mcqieaigyeeyaksm) { goto ocokwuuquaokmasc; } $igqsaukqcqscimok[self::mkousmkiawwousws] = ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm); ocokwuuquaokmasc: return $igqsaukqcqscimok; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $gioggcykgoikcwiy = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($gioggcykgoikcwiy); } }
