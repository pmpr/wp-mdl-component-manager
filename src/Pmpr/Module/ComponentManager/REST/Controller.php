<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284da0c4ec23             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\REST; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\ComponentManager\API\IPDetector; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Setting; use Pmpr\Module\DomainManager\Model\Domain; use WC_Product; use WC_Product_Variable; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = self::ocwsuwyiiasigqaa; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\x65\164\55\x6b\x65\x79", [self::okeuagwgwkmiokac => [self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\x73\x74\162\151\x6e\147", self::eqkeooqcsscoggia => __("\103\x6f\x6d\x70\157\x6e\x65\156\164", PR__MDL__COMPONENT_MANAGER)]], self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x73\x67\143\167\x67\x6d\157\x61\x79\151\x6b\153\x79\163\141\161"]]); $this->register("\x2f\x67\x65\x74\55\160\x6c\x75\x67\151\x6e\55\164\x61\142", [self::wwgusigoaksqmwsm => [$this, "\x61\x6d\x65\x69\167\157\x65\x6d\x75\153\x6d\153\167\x75\x6f\x69"]]); $this->register("\57\x67\145\x74\x2d\151\164\x65\155", [self::okeuagwgwkmiokac => [self::NAME => [self::squoamkioomemiyi => "\163\x74\x72\x69\x6e\147", self::eqkeooqcsscoggia => __("\x4e\141\x6d\145\x20\x6f\146\40\x63\x6f\155\x70\157\156\x65\x6e\x74", PR__MDL__COMPONENT_MANAGER)]], self::wwgusigoaksqmwsm => [$this, "\x73\x71\157\x69\165\171\153\143\x6f\x75\x65\151\165\x63\147\143"]]); $this->register("\57\147\x65\164\x2d\151\164\145\155\x73", [self::okeuagwgwkmiokac => [self::squoamkioomemiyi => [self::squoamkioomemiyi => "\x73\x74\x72\x69\156\147", self::eqkeooqcsscoggia => __("\x54\x79\160\x65\40\x6f\146\40\143\157\x6d\160\x6f\156\145\156\164", PR__MDL__COMPONENT_MANAGER)], self::imywcsggckkcywgk => [self::squoamkioomemiyi => "\151\156\x74\145\x67\145\162"], self::yayciqueeakqwese => [self::squoamkioomemiyi => "\x73\x74\x72\151\x6e\x67"], self::soesaeyoucgacqga => [self::squoamkioomemiyi => "\x62\157\x6f\x6c\x65\x61\x6e"], self::ausqeuugegoygouq => [self::squoamkioomemiyi => "\151\x6e\x74\x65\x67\x65\x72"]], self::wwgusigoaksqmwsm => [$this, "\167\x61\x73\x67\167\163\157\x67\155\x75\161\x75\161\x65\x61\141"]]); $this->register("\x2f\143\150\145\143\x6b\55\x6b\x65\x79", [self::okeuagwgwkmiokac => [self::ascagqcquwgmygkm => [self::squoamkioomemiyi => "\x73\x74\162\151\x6e\x67", self::eqkeooqcsscoggia => __("\x4c\x69\143\145\156\163\x65\x20\x6f\x66\40\143\157\x6d\160\157\x6e\145\156\x74", PR__MDL__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\x73\164\162\151\x6e\x67", self::eqkeooqcsscoggia => __("\x4e\141\155\x65\40\157\x66\x20\143\x6f\x6d\x70\157\156\x65\156\164", PR__MDL__COMPONENT_MANAGER)]], self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\157\x6b\151\x63\141\x61\165\147\161\x6b\155\x79\x77\x71\x79\x6d"]]); } public function sgcwgmoayikkysaq(WP_REST_Request $aqmwamyiwgeeymqa) { if ($wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa)) { goto sgiwoiscywusgmmm; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\x43\157\155\x70\x6f\156\145\156\164", PR__MDL__COMPONENT_MANAGER)); goto skuqigsokaguscas; sgiwoiscywusgmmm: $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($gcswwqwyaccgyoee && $yakcyegsoqusmiak) { goto mqiiqkuaoekeuswo; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto qmoocweoekqueuyy; mqiiqkuaoekeuswo: if ($wksoawcgagcgoask = $gcswwqwyaccgyoee->akkkoiiymmamsauc($wksoawcgagcgoask, is_numeric($wksoawcgagcgoask) ? $gcswwqwyaccgyoee->kumuygiiqswoyasy() : self::NAME)) { goto eckcqesiokgwkkiw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\x75\x65\163\164\145\144\x20\x63\x6f\x6d\x70\x6f\156\145\156\x74\40\156\157\164\40\x66\157\165\x6e\x64\x2e", PR__MDL__COMPONENT_MANAGER)); goto ecouwqosmoyyqmkw; eckcqesiokgwkkiw: if (!($keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc))) { goto yoagcooekomeokwg; } $uqigicauqkogsuuc = $gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::ogqcgemayqiaucag => $uqigicauqkogsuuc, $yakcyegsoqusmiak::qkmqmaeuyokqgemg => $keccaugmemegoimu]); if ($gmywaegkmeaueiyo) { goto iksewmsaugayqaqq; } $sogksuscggsicmac = $yakcyegsoqusmiak->gscuuyuyauokoyuo([$yakcyegsoqusmiak::qkmqmaeuyokqgemg => $keccaugmemegoimu, $yakcyegsoqusmiak::ogqcgemayqiaucag => $uqigicauqkogsuuc], true, 0); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto quaqmuusokiyqgqe; } $keccaugmemegoimu = $this->oemauiimmycumcsk($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]), 500); goto smiemmcqqukyguuu; quaqmuusokiyqgqe: $gmywaegkmeaueiyo = $sogksuscggsicmac[self::ckmqoekmugkggeym]; smiemmcqqukyguuu: iksewmsaugayqaqq: if (is_wp_error($keccaugmemegoimu)) { goto yamyagayiooyeekg; } $keccaugmemegoimu = [self::ascagqcquwgmygkm => $yakcyegsoqusmiak->qogaqkcsogcqiaic($gmywaegkmeaueiyo, $yakcyegsoqusmiak::okkqqmwseqscceye)]; yamyagayiooyeekg: yoagcooekomeokwg: ecouwqosmoyyqmkw: qmoocweoekqueuyy: skuqigsokaguscas: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ameiwoemukmkwuoi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto wmumywgyyeagqoeq; } if ($ykquycoiqesuckco = Setting::symcgieuakksimmu()) { goto quyogmwugsyoaaiu; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto mmgmqogugasaqkgg; quyogmwugsyoaaiu: $keccaugmemegoimu = [self::qescuiwgsyuikume => $ykquycoiqesuckco->eiwcuqigayigimak($ykquycoiqesuckco::agskamgmowaiywus), self::qwumqqyuasyskkkc => $ykquycoiqesuckco->ksgygymiyeiukqoy(), self::eqkeooqcsscoggia => $ykquycoiqesuckco->eiwcuqigayigimak($ykquycoiqesuckco::uckmggyuwgmmskyc, '')]; $keccaugmemegoimu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\154\165\147\151\156\137\x72\x65\155\157\x74\145\137\164\x61\142\x5f\x72\145\x73\x70\157\156\x73\145"), $keccaugmemegoimu, $ykquycoiqesuckco); mmgmqogugasaqkgg: wmumywgyyeagqoeq: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto ooqksueucyagyuoe; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\161\165\151\162\x65\40\x70\141\162\141\x6d\x65\x74\145\x72\163\40\x6e\x6f\164\40\160\141\163\163\145\144\x2e", PR__MDL__COMPONENT_MANAGER), 400); goto osmmoyqkqoucsgow; ooqksueucyagyuoe: $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto yssqmyoaokkksukc; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($swgwkyqkakceqeia && $gcswwqwyaccgyoee && $yakcyegsoqusmiak) { goto eyiwqgqcsqakwqss; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto sckioayasmkcoeoo; eyiwqgqcsqakwqss: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $akyiigeggqowmqqq]); if ($gmywaegkmeaueiyo) { goto eoyiumycaigawmmc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\x72\162\x79\x2c\x20\131\157\165\x20\156\157\164\40\x62\165\x79\40\164\150\151\163\40\143\157\x6d\x70\157\156\x65\x6e\x74\x2e", PR__MDL__COMPONENT_MANAGER)); goto yuoeumyiuqkuouey; eoyiumycaigawmmc: $uqigicauqkogsuuc = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($uqigicauqkogsuuc); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) == $wksoawcgagcgoask) { goto smcguieygyqcaqgs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\162\x72\171\54\x20\x59\157\165\40\156\157\x74\40\x62\x75\x79\40\x74\150\x69\163\40\143\157\x6d\x70\157\156\x65\x6e\164\x2c\40\x61\162\x65\40\x79\157\x75\x20\164\x72\x79\x69\x6e\147\x20\150\141\x63\153\77", PR__MDL__COMPONENT_MANAGER)); goto mgcuiguaomoqwwwm; smcguieygyqcaqgs: $icwicymcioeyeyek = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\154\x69\x63\x65\156\163\x65\x5f\x63\x68\145\x63\153\x5f\166\x61\154\x69\x64\141\x74\x69\x6f\x6e\137\162\x65\x73\x70\x6f\156\x73\x65\137\x64\141\x74\x61"), [], $akyiigeggqowmqqq, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x4c\151\143\145\x6e\x73\145\x20\113\145\x79\40\151\x73\40\166\141\154\x69\x64\56", PR__MDL__COMPONENT_MANAGER), $icwicymcioeyeyek); mgcuiguaomoqwwwm: yuoeumyiuqkuouey: sckioayasmkcoeoo: yssqmyoaokkksukc: osmmoyqkqoucsgow: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto cwswueuqoamqasya; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto kgmeiwiakwicgkkk; cwswueuqoamqasya: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::gouqcwikiiygyasc, $gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::ciywsqoeiymemsys, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::auugqowqueaocgsu, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::CREATED_AT, $gcswwqwyaccgyoee::yegaaaygeimasokq, $gcswwqwyaccgyoee::bsqkociucacssuum, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi, $gcswwqwyaccgyoee::keqoqmmgsiegwskg, $gcswwqwyaccgyoee::ieagekqsqmcsqqeo, $gcswwqwyaccgyoee::caecscgwwciyemog]); if ($wksoawcgagcgoask) { goto kaiesowkgwogqseg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\162\x65\x71\165\145\x73\x74\145\144\40\143\x6f\155\x70\157\156\145\x6e\x74\x20\x77\x69\x74\150\x20\x6e\141\x6d\x65\x20\45\163\40\156\157\x74\40\x66\x6f\165\156\144\x2e", PR__MDL__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 404); goto kicwiowcogmauwiy; kaiesowkgwogqseg: $akyiigeggqowmqqq = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if ($akyiigeggqowmqqq && !is_wp_error($akyiigeggqowmqqq)) { goto cwikoaeqmmoimmso; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\167\x65\x20\x68\141\166\145\40\163\x6f\x6d\145\x20\160\x72\157\142\x6c\145\155\40\167\151\x74\x68\40\144\x65\164\x65\143\164\x69\156\147\40\171\157\x75\x72\40\144\157\x6d\x61\x69\x6e\56\40\155\141\x79\142\145\40\171\157\165\x72\40\x64\157\155\x61\151\x6e\x20\x6e\157\x74\x20\x72\145\147\x69\163\164\x65\162\x65\x64\56", PR__MDL__COMPONENT_MANAGER), 404); goto egaymskkosukqeao; cwikoaeqmmoimmso: $myqeggyewswyoowe = true; $wqogggcaamgeiwew = $gcswwqwyaccgyoee->iscemaoqqckmkago($gcswwqwyaccgyoee::qkmqmaeuyokqgemg, $wksoawcgagcgoask); if (!$wqogggcaamgeiwew) { goto micceocwuwkyusic; } $myqeggyewswyoowe = false; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); foreach ($wqogggcaamgeiwew as $mokawwccycoiqeka) { if (!($akyiigeggqowmqqq == $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka))) { goto kqyoakickmseyyeq; } $myqeggyewswyoowe = true; goto iauwuugggmegwisk; kqyoakickmseyyeq: aukucaieceiwesmm: } iauwuugggmegwisk: goto iwueukqcywkiyqge; micceocwuwkyusic: if (!(self::kqeokggqcsesmqco === ManipulateArray::get($wksoawcgagcgoask, self::squoamkioomemiyi))) { goto wgiygcmqaokywuqa; } $myqeggyewswyoowe = false; wgiygcmqaokywuqa: iwueukqcywkiyqge: if ($myqeggyewswyoowe) { goto ykwasaaoeeiuomim; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\162\162\x79\40\x79\157\x75\x20\150\x61\x76\145\x20\156\157\x20\x70\x65\x72\155\151\x73\x73\151\157\156\40\x74\x6f\40\x67\x65\x74\40\164\x68\151\x73\40\x63\x6f\155\160\x6f\x6e\x65\x6e\164\40\x64\141\164\x61\x2e", PR__MDL__COMPONENT_MANAGER)); goto acggikioyeueeowg; ykwasaaoeeiuomim: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); $keccaugmemegoimu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\155\x70\157\x6e\x65\x6e\x74\137\x72\x65\163\164\137\147\145\164\137\x69\164\x65\155\x5f\162\145\x73\x70\157\156\163\x65"), $keccaugmemegoimu, $akyiigeggqowmqqq, $wksoawcgagcgoask); acggikioyeueeowg: egaymskkosukqeao: kicwiowcogmauwiy: kgmeiwiakwicgkkk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { if ($gcswwqwyaccgyoee = Component::symcgieuakksimmu()) { goto owuuuiekkaeoeacq; } $keccaugmemegoimu = $this->aqgegcykekmuggsu(); goto saauykgakaeiyoua; owuuuiekkaeoeacq: if ($gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa)) { goto suuskagowwgsouqw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\162\162\171\x20\142\165\164\40\171\x6f\x75\162\x20\162\145\x71\x75\x65\163\x74\40\151\163\40\156\x6f\164\40\x76\141\x6c\151\144\54\x20\143\157\x6e\x74\141\143\164\40\x75\163\56", PR__MDL__COMPONENT_MANAGER)); goto omykokikgocoikec; suuskagowwgsouqw: $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($gwgucoaaqcwwciqq, $kaoqokqgkamekoes, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, self::aqikuweekkucgqoy), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::soesaeyoucgacqga, false), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, '')); omykokikgocoikec: if (isset($keccaugmemegoimu)) { goto koiscokkkaimiecq; } if (isset($siykeiywomwwuoiw) && $siykeiywomwwuoiw) { goto agemwookwseyycqo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x65\x72\166\151\x63\x65\40\x69\x73\40\165\x6e\141\x76\141\x69\x6c\141\x62\x6c\x65\40\162\x69\147\x68\164\x20\156\x6f\x77\56", PR__MDL__COMPONENT_MANAGER), 503); goto cquecqekuucwoumw; agemwookwseyycqo: $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, array_merge($ywmkwiwkosakssii, [self::wosqwewmqmyweqea => false])); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; $qsqwqsymmqeoqwcu = []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = ManipulateArray::get($igqsaukqcqscimok, $gcswwqwyaccgyoee::ciywsqoeiymemsys); if (!in_array($iueymcwwscwqkiyq, [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg], true)) { goto mykiyqcqiegkiqys; } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); mykiyqcqiegkiqys: aquqkiggamaoegoo: } csieaismmmocyacu: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $qsqwqsymmqeoqwcu; cquecqekuucwoumw: koiscokkkaimiecq: saauykgakaeiyoua: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof Model) { goto qwemkcoaseywkuuc; } $igqsaukqcqscimok = $igqsaukqcqscimok->ccekeuwwqqoiwuwy(); qwemkcoaseywkuuc: $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $iueymcwwscwqkiyq = ManipulateArray::unset($igqsaukqcqscimok, self::ciywsqoeiymemsys); $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\163\x74\141\x74\x65" => $iueymcwwscwqkiyq ?: Component::iuisqwiqesgyqsyg]); $product = ManipulateArray::unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!$product) { goto gkqiqaqecmoogmaa; } if (!($product = ManipulateWoocommerce::aqasygcsqysmmyke($product))) { goto kwyimqumkuuyaiku; } if (!(self::wmmucsiyiyusmssm === $iueymcwwscwqkiyq)) { goto mqimkwickkgqqeoi; } $aumscagymwyyicag = ManipulateWoocommerce::oemowqiewwkuiecu($product); $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\x70\162\151\143\145" => ManipulateWoocommerce::mcgaskyiamgqmqgu($aumscagymwyyicag), "\162\x61\x74\151\x6e\147" => $product->get_average_rating(), "\162\x61\x74\x69\x6e\x67\137\x63\x6f\x75\x6e\x74" => $product->get_rating_count(), "\146\162\145\x65\x5f\166\x65\x72\x73\x69\157\x6e" => $aumscagymwyyicag <= 0]); mqimkwickkgqqeoi: $igqsaukqcqscimok[self::sauwwsocmukoaayu] = $product->get_permalink(); kwyimqumkuuyaiku: gkqiqaqecmoogmaa: if (!($mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws))) { goto mceucsaeouuwyumm; } $igqsaukqcqscimok[self::mkousmkiawwousws] = ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm); $igqsaukqcqscimok["\x69\155\x61\x67\145\x5f\144\141\x74\145"] = ManipulateAttachment::squyiyimquqicqke("\x59\55\x6d\x2d\144\40\x48\x3a\x69\72\163", $mcqieaigyeeyaksm, false); mceucsaeouuwyumm: if (!($rgswmioeqyomacmc = ManipulateArray::get($igqsaukqcqscimok, Component::wsymueygaeiiwsiw))) { goto ceiuqsiqgiuiekem; } $igqsaukqcqscimok[Component::wsymueygaeiiwsiw] = Setting::icioieqkoswsyouk([self::ascagqcquwgmygkm => $rgswmioeqyomacmc, self::aisguagukaewucii => self::ckmqoekmugkggeym]); ceiuqsiqgiuiekem: $uoyamuqmwmemuiko = (int) ManipulateArray::unset($igqsaukqcqscimok, Component::ieagekqsqmcsqqeo); $gyycewisqacsckaw = (int) ManipulateArray::unset($igqsaukqcqscimok, Component::caecscgwwciyemog); $ocmwaasmoekuweaa = (int) ManipulateArray::unset($igqsaukqcqscimok, Component::keqoqmmgsiegwskg); if ($iueymcwwscwqkiyq === self::wmmucsiyiyusmssm) { goto isewysikysqewkis; } $ieqwogkgyywicygk = 0; goto wiwoiyoakywqyaiy; isewysikysqewkis: $ieqwogkgyywicygk = $uoyamuqmwmemuiko + $ocmwaasmoekuweaa; if (!($gyycewisqacsckaw > 0)) { goto ugykmcouiwiscoqu; } $keaccasqgkaqawwm = time(); $kwkmegesqkqwyska = strtotime(ManipulateArray::unset($igqsaukqcqscimok, Model::CREATED_AT)); $immmocykksywgkqu = round(($keaccasqgkaqawwm - $kwkmegesqkqwyska) / DAY_IN_SECONDS); if (!($immmocykksywgkqu > 0)) { goto gsymkkskwsgggoic; } $ieqwogkgyywicygk += $gyycewisqacsckaw * $immmocykksywgkqu; gsymkkskwsgggoic: ugykmcouiwiscoqu: wiwoiyoakywqyaiy: return ManipulateArray::set($igqsaukqcqscimok, [Component::mawokyacsmmqmsoo => $ieqwogkgyywicygk]); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, string $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) { if ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) { goto sqwuqegeiisoiiuq; } $mokawwccycoiqeka = $this->aqgegcykekmuggsu(); goto uscokkmquayiukag; sqwuqegeiisoiiuq: $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(self::gouqcwikiiygyasc === $aqykuigiuwmmcieu)) { goto igmmqwyawcuuckkq; } $mokawwccycoiqeka = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); igmmqwyawcuuckkq: if ($mokawwccycoiqeka) { goto eouwacqiommmeaqc; } $mokawwccycoiqeka = $this->oemauiimmycumcsk(__("\116\x6f\x20\144\157\x6d\x61\151\x6e\40\x66\x6f\165\156\144\40\x66\x6f\x72\40\171\x6f\x75\56", PR__MDL__COMPONENT_MANAGER), 401); eouwacqiommmeaqc: uscokkmquayiukag: return $mokawwccycoiqeka; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $yywgiquyoymymqwk = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x69\160\x73"); $cuakwceieagskoaa = false; $mokawwccycoiqeka = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka))) { goto aoaqwygkaagiuuws; } if (!($swgwkyqkakceqeia = Domain::symcgieuakksimmu())) { goto gqimwsyemoewagcy; } $qoowakyqgwcscuss = $swgwkyqkakceqeia->qogaqkcsogcqiaic($mokawwccycoiqeka, $swgwkyqkakceqeia::aemeeukyaaokioui, $swgwkyqkakceqeia::NOT_SPECIFIED); if ($swgwkyqkakceqeia::wyeieyscswyiskcw === $qoowakyqgwcscuss) { goto kyiwsiakwgiwouyi; } if (!($swgwkyqkakceqeia::NOT_SPECIFIED === $qoowakyqgwcscuss)) { goto owgsameoayaogsma; } $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $qoowakyqgwcscuss = $swgwkyqkakceqeia::qyywsyikosmsacgu; if (strtolower(pathinfo($iakkeikwceeomgyq, PATHINFO_EXTENSION)) === "\151\x72") { goto eweaaismksecwagy; } if (!($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk))) { goto mcqucouuiuoagqwc; } $seswwgkqsacoswcc = IPDetector::symcgieuakksimmu(); if (!$seswwgkqsacoswcc) { goto syusgosewwkoagoq; } foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { if (!($kucumcusyyckayas && strtolower($seswwgkqsacoswcc->mcyaoicyesuysggi($kucumcusyyckayas)) === "\151\x72")) { goto egesuwkqkmaigaoe; } $cuakwceieagskoaa = true; goto ykqsuiyyosyeyscc; egesuwkqkmaigaoe: ugogoekeckgcmuaw: } ykqsuiyyosyeyscc: syusgosewwkoagoq: mcqucouuiuoagqwc: goto icumkkykaoqycqqu; eweaaismksecwagy: $cuakwceieagskoaa = true; icumkkykaoqycqqu: if (!$cuakwceieagskoaa) { goto oeamoqweiueaueay; } $qoowakyqgwcscuss = $swgwkyqkakceqeia::wyeieyscswyiskcw; oeamoqweiueaueay: $mokawwccycoiqeka = ManipulateArray::set($mokawwccycoiqeka, [$swgwkyqkakceqeia::aemeeukyaaokioui => $qoowakyqgwcscuss]); $swgwkyqkakceqeia->gscuuyuyauokoyuo((array) $mokawwccycoiqeka, true); owgsameoayaogsma: goto awgmegueeqeyqamu; kyiwsiakwgiwouyi: $cuakwceieagskoaa = true; awgmegueeqeyqamu: gqimwsyemoewagcy: aoaqwygkaagiuuws: return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && $cuakwceieagskoaa; } }
