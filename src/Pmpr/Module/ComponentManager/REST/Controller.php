<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668400c19633a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\REST; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\ComponentManager\API\IPDetector; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Model\Report; use Pmpr\Module\ComponentManager\Setting; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = self::ocwsuwyiiasigqaa; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\x65\x74\55\153\x65\171", [self::okeuagwgwkmiokac => [self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\163\x74\x72\x69\x6e\147", self::eqkeooqcsscoggia => __("\103\157\155\160\x6f\156\145\156\164", PR__MDL__COMPONENT_MANAGER)]], self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\163\147\x63\x77\147\x6d\157\141\171\151\x6b\x6b\x79\163\x61\x71"]]); $this->register("\57\147\x65\x74\55\160\x6c\x75\x67\151\156\55\164\x61\x62", [self::wwgusigoaksqmwsm => [$this, "\141\155\x65\151\x77\157\145\155\x75\153\155\x6b\x77\x75\x6f\x69"]]); $this->register("\x2f\147\x65\164\x2d\151\x74\145\x6d", [self::okeuagwgwkmiokac => [self::NAME => [self::squoamkioomemiyi => "\x73\x74\162\x69\x6e\147", self::eqkeooqcsscoggia => __("\x4e\141\155\145\x20\157\146\40\x63\x6f\x6d\160\157\156\x65\156\x74", PR__MDL__COMPONENT_MANAGER)]], self::wwgusigoaksqmwsm => [$this, "\x73\161\x6f\151\165\x79\153\143\x6f\x75\145\x69\x75\x63\147\143"]]); $this->register("\57\147\x65\164\55\x69\x74\145\x6d\163", [self::okeuagwgwkmiokac => [self::squoamkioomemiyi => [self::squoamkioomemiyi => "\x73\164\x72\151\156\x67", self::eqkeooqcsscoggia => __("\124\171\160\145\40\x6f\x66\x20\143\157\x6d\x70\x6f\x6e\x65\156\164", PR__MDL__COMPONENT_MANAGER)], self::imywcsggckkcywgk => [self::squoamkioomemiyi => "\151\x6e\164\x65\x67\x65\162"], self::yayciqueeakqwese => [self::squoamkioomemiyi => "\x73\164\162\x69\x6e\147"], self::soesaeyoucgacqga => [self::squoamkioomemiyi => "\142\157\x6f\x6c\145\x61\156"], self::ausqeuugegoygouq => [self::squoamkioomemiyi => "\x69\156\x74\x65\x67\x65\x72"]], self::wwgusigoaksqmwsm => [$this, "\x77\x61\163\x67\x77\163\157\x67\155\x75\x71\165\161\145\141\x61"]]); $this->register("\x2f\143\150\145\x63\153\55\153\145\171", [self::okeuagwgwkmiokac => [self::ascagqcquwgmygkm => [self::squoamkioomemiyi => "\163\164\x72\x69\156\x67", self::eqkeooqcsscoggia => __("\114\151\143\145\156\163\145\x20\x6f\x66\x20\x63\x6f\155\x70\x6f\156\145\156\x74", PR__MDL__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\163\164\162\151\156\x67", self::eqkeooqcsscoggia => __("\x4e\x61\155\145\40\x6f\x66\40\143\x6f\x6d\x70\157\156\x65\x6e\164", PR__MDL__COMPONENT_MANAGER)], self::vsykweaucigiekae => [self::squoamkioomemiyi => "\142\x6f\157\154\x65\141\x6e", self::eqkeooqcsscoggia => __("\x52\145\161\165\145\x73\x74\40\163\145\x6e\144\x20\141\x75\x74\157\155\141\x74\x69\x63\141\x6c\x6c\x79\x20\x62\x79\40\143\162\x6f\x6e\x20\x6f\162\40\156\x6f\x74", PR__MDL__COMPONENT_MANAGER)]], self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\157\153\x69\143\141\141\165\x67\161\x6b\155\x79\167\x71\171\x6d"]]); } public function sgcwgmoayikkysaq(WP_REST_Request $aqmwamyiwgeeymqa) { if ($wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa)) { goto wiysogeqqwgioyka; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\x43\157\x6d\x70\157\156\x65\156\x74", PR__MDL__COMPONENT_MANAGER)); goto skkamseieeusycye; wiysogeqqwgioyka: $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($wksoawcgagcgoask = $gcswwqwyaccgyoee->akkkoiiymmamsauc($wksoawcgagcgoask, is_numeric($wksoawcgagcgoask) ? $gcswwqwyaccgyoee->kumuygiiqswoyasy() : self::NAME)) { goto suqkuqygkkgwyaie; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\x75\145\x73\164\145\x64\40\x63\157\x6d\160\157\156\145\x6e\164\40\x6e\157\x74\40\x66\157\165\156\144\56", PR__MDL__COMPONENT_MANAGER)); goto soaccwqimeksgwiw; suqkuqygkkgwyaie: if (!($keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc))) { goto aegysmeecgcgayyw; } $syqougokmmgaoaee = $gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::ogqcgemayqiaucag => $syqougokmmgaoaee, $yakcyegsoqusmiak::qkmqmaeuyokqgemg => $keccaugmemegoimu]); $wqykqusigegasqeg = $keccaugmemegoimu; if ($gmywaegkmeaueiyo) { goto esuiysskoweawsue; } $sogksuscggsicmac = $yakcyegsoqusmiak->gscuuyuyauokoyuo([$yakcyegsoqusmiak::qkmqmaeuyokqgemg => $wqykqusigegasqeg, $yakcyegsoqusmiak::ogqcgemayqiaucag => $syqougokmmgaoaee], true, 0); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto uguigkcmukuouway; } $keccaugmemegoimu = $this->oemauiimmycumcsk($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]), 500); goto uqqaiagaeqgqgaiy; uguigkcmukuouway: $gmywaegkmeaueiyo = $sogksuscggsicmac[self::ckmqoekmugkggeym]; uqqaiagaeqgqgaiy: esuiysskoweawsue: if (is_wp_error($keccaugmemegoimu)) { goto gaomwagkcciesyqy; } $qmwoykgeiicumeiw = $gcswwqwyaccgyoee->qogaqkcsogcqiaic($wksoawcgagcgoask, self::NAME); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("\143\x6f\155\160\157\156\145\156\x74\137\x67\145\164\137\154\151\x63\x65\156\163\x65\137\x6b\145\171\137\x72\145\163\160\157\156\163\x65\137\144\x61\164\141", [], $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$syqougokmmgaoaee}\x5f\147\145\164\x5f\x6c\x69\143\145\x6e\163\145\x5f\x6b\x65\171\137\x72\145\x73\x70\x6f\156\x73\x65\x5f\144\141\x74\x61", $icwicymcioeyeyek, $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$qmwoykgeiicumeiw}\137\x67\145\164\x5f\x6c\x69\143\145\x6e\x73\145\x5f\x6b\x65\171\x5f\162\145\163\160\157\156\x73\x65\137\144\141\164\141", $icwicymcioeyeyek, $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek[self::ascagqcquwgmygkm] = $yakcyegsoqusmiak->qogaqkcsogcqiaic($gmywaegkmeaueiyo, $yakcyegsoqusmiak::okkqqmwseqscceye); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\151\x63\x65\x6e\x73\145\40\x6b\145\171\40\x70\162\157\x76\x69\x64\145\x64\x20\x73\x75\143\x63\x65\x73\x73\146\165\x6c\x6c\171\x2e", PR__MDL__COMPONENT_MANAGER), $icwicymcioeyeyek); gaomwagkcciesyqy: aegysmeecgcgayyw: soaccwqimeksgwiw: skkamseieeusycye: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto wmywuusgukmmaams; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto gkyawqqcmigqgaiq; wmywuusgukmmaams: $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto cmegwsegsosyqcai; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $wqykqusigegasqeg]); if ($gmywaegkmeaueiyo) { goto giaacoqqqsekcayy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\162\x72\171\54\40\131\157\x75\40\156\157\164\40\142\165\171\40\164\150\x69\163\40\143\x6f\x6d\x70\157\156\x65\156\164\x2e", PR__MDL__COMPONENT_MANAGER)); $this->icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, Report::ckumcckgkuuygwkg); goto ewymsmkkiksgwysk; giaacoqqqsekcayy: $syqougokmmgaoaee = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($syqougokmmgaoaee); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) === $wksoawcgagcgoask) { goto cgiscsqwwgqqaeqi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\162\x72\x79\x2c\x20\131\x6f\165\40\x6e\x6f\x74\x20\x62\x75\x79\x20\x74\x68\151\163\40\143\x6f\155\x70\157\x6e\x65\156\164\54\x20\x61\162\x65\x20\x79\x6f\165\40\164\x72\x79\x69\156\147\x20\150\x61\x63\x6b\77", PR__MDL__COMPONENT_MANAGER)); $this->icyeokqcmiyigkic($wqykqusigegasqeg, $syqougokmmgaoaee, Report::mkgimueycqsggewa); goto syiqkaasoueowwui; cgiscsqwwgqqaeqi: $qmwoykgeiicumeiw = $gcswwqwyaccgyoee->qogaqkcsogcqiaic($wksoawcgagcgoask, self::NAME); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("\143\x6f\155\x70\x6f\156\x65\156\x74\137\143\150\x65\143\153\137\154\151\143\x65\156\163\145\x5f\153\145\x79\x5f\x72\145\x73\x70\157\156\163\x65\x5f\144\141\164\x61", [], $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$syqougokmmgaoaee}\x5f\143\x68\x65\143\x6b\137\154\x69\x63\x65\156\x73\145\137\x6b\145\x79\137\162\145\163\160\157\156\163\145\137\144\141\x74\x61", $icwicymcioeyeyek, $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$qmwoykgeiicumeiw}\x5f\x63\x68\x65\x63\x6b\x5f\x6c\151\x63\x65\x6e\x73\145\137\x6b\145\x79\x5f\162\x65\163\x70\157\x6e\163\145\137\144\141\x74\x61", $icwicymcioeyeyek, $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x4c\151\x63\145\x6e\163\x65\40\113\145\x79\x20\x69\163\x20\x76\x61\x6c\x69\144\x2e", PR__MDL__COMPONENT_MANAGER), $icwicymcioeyeyek); syiqkaasoueowwui: ewymsmkkiksgwysk: cmegwsegsosyqcai: gkyawqqcmigqgaiq: if (is_wp_error($keccaugmemegoimu)) { goto ooeausyowguqicuo; } $this->uiagwusgwcassqua("\114\x69\x63\x65\x6e\x73\145\x20\x6b\x65\171\x20\151\163\x20\166\x61\154\x69\x64\40\141\x6e\144\40\x63\x68\145\143\153\x20\151\163\x20\x73\165\x63\x63\145\163\163\x66\165\154\56"); goto egyyiccaeeiooaua; ooeausyowguqicuo: $this->saqqeqmcyyoeqici($this->gcsweumukyckmgik($keccaugmemegoimu)); egyyiccaeeiooaua: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ameiwoemukmkwuoi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto scisgsyemmsekgos; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $keccaugmemegoimu = [self::qescuiwgsyuikume => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::agskamgmowaiywus), self::qwumqqyuasyskkkc => $ykquycoiqesuckco->ksgygymiyeiukqoy(), self::eqkeooqcsscoggia => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uckmggyuwgmmskyc, '')]; $keccaugmemegoimu = $this->ocksiywmkyaqseou("\x70\154\165\147\151\x6e\137\x72\x65\155\x6f\164\x65\137\164\x61\142\137\162\145\163\160\x6f\156\163\x65", $keccaugmemegoimu, $ykquycoiqesuckco); scisgsyemmsekgos: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, string $aiamqeawckcsuaou = '') { return Report::symcgieuakksimmu()->icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, self::okkqqmwseqscceye, $aiamqeawckcsuaou); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto mwsmsguqqkcwiiuk; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\x4e\x61\155\145", PR__MDL__COMPONENT_MANAGER)); goto eeauyscekuckoues; mwsmsguqqkcwiiuk: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::gouqcwikiiygyasc, $gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::ciywsqoeiymemsys, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::auugqowqueaocgsu, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::CREATED_AT, $gcswwqwyaccgyoee::yegaaaygeimasokq, $gcswwqwyaccgyoee::bsqkociucacssuum, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi, $gcswwqwyaccgyoee::keqoqmmgsiegwskg, $gcswwqwyaccgyoee::ieagekqsqmcsqqeo, $gcswwqwyaccgyoee::caecscgwwciyemog]); if ($wksoawcgagcgoask) { goto qmuwoecuacmkwgem; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\162\145\161\165\145\x73\164\145\144\40\143\157\x6d\x70\x6f\156\145\156\164\40\x77\x69\x74\x68\40\156\x61\155\145\40\x25\x73\40\156\x6f\164\40\146\157\x75\x6e\144\x2e", PR__MDL__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 404); goto owmuceyswmgueasi; qmuwoecuacmkwgem: $wqykqusigegasqeg = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if ($wqykqusigegasqeg && !is_wp_error($wqykqusigegasqeg)) { goto wkeuuycukmuqiaom; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x77\145\x20\150\141\166\x65\40\x73\x6f\155\145\x20\160\162\x6f\x62\154\x65\155\40\x77\151\x74\x68\40\144\x65\x74\x65\143\x74\x69\156\x67\x20\x79\x6f\x75\162\x20\144\157\155\x61\151\156\56\40\155\141\x79\x62\x65\40\x79\157\165\x72\40\144\157\x6d\141\x69\156\40\x6e\x6f\164\40\x72\145\147\x69\x73\164\145\x72\x65\144\56", PR__MDL__COMPONENT_MANAGER), 404); goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $myqeggyewswyoowe = true; $wqogggcaamgeiwew = $gcswwqwyaccgyoee->iscemaoqqckmkago($gcswwqwyaccgyoee::qkmqmaeuyokqgemg, $wksoawcgagcgoask); if (!$wqogggcaamgeiwew) { goto wgewmqieuamsoayy; } $myqeggyewswyoowe = false; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); foreach ($wqogggcaamgeiwew as $mokawwccycoiqeka) { if (!($wqykqusigegasqeg == $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka))) { goto ugqaaewwmkocwwgy; } $myqeggyewswyoowe = true; goto igooksugieceoege; ugqaaewwmkocwwgy: omqiayeucoioqoao: } igooksugieceoege: goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: if (!(self::kqeokggqcsesmqco === $gcswwqwyaccgyoee->ogegcqqcukiaqscy(self::squoamkioomemiyi, $wksoawcgagcgoask))) { goto cewmoqyysgsmuiya; } $myqeggyewswyoowe = false; cewmoqyysgsmuiya: kqgcyoscsusgoaqi: if ($myqeggyewswyoowe) { goto ueigkucgaucgeimc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x72\162\171\x20\x79\x6f\x75\x20\150\141\x76\x65\40\156\157\x20\x70\x65\x72\155\151\163\x73\151\x6f\156\x20\164\x6f\x20\x67\145\x74\40\164\x68\x69\x73\40\x63\157\155\x70\x6f\156\x65\x6e\164\x20\x64\141\x74\141\x2e", PR__MDL__COMPONENT_MANAGER)); goto sggawugoykqcmsug; ueigkucgaucgeimc: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); $keccaugmemegoimu = $this->ocksiywmkyaqseou("\x63\157\x6d\160\x6f\x6e\145\x6e\x74\137\162\x65\163\164\x5f\147\x65\164\137\x69\164\145\x6d\137\162\145\x73\160\x6f\156\x73\x65", $keccaugmemegoimu, $wqykqusigegasqeg, $wksoawcgagcgoask); sggawugoykqcmsug: wakmayaoqoskekqy: owmuceyswmgueasi: eeauyscekuckoues: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa)) { goto eogwckcymuugikuy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\162\x72\171\x20\x62\165\164\x20\171\157\165\x72\40\162\x65\x71\165\x65\163\x74\40\151\x73\40\x6e\x6f\x74\x20\x76\x61\x6c\151\144\54\x20\143\157\x6e\164\x61\143\164\40\x75\x73\x2e", PR__MDL__COMPONENT_MANAGER)); goto msemumccgceyugmg; eogwckcymuugikuy: $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($gwgucoaaqcwwciqq, $kaoqokqgkamekoes, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, self::aqikuweekkucgqoy), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::soesaeyoucgacqga, false), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, '')); msemumccgceyugmg: if (isset($keccaugmemegoimu)) { goto ciykoyeioqgyaeqo; } if (isset($siykeiywomwwuoiw) && $siykeiywomwwuoiw) { goto wcugqegqsuuuwqao; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\145\x72\x76\151\x63\x65\x20\151\x73\x20\x75\156\141\x76\x61\151\x6c\141\x62\x6c\x65\x20\x72\151\147\x68\164\40\156\157\167\x2e", PR__MDL__COMPONENT_MANAGER), 503); goto asiqwuoswmigcaki; wcugqegqsuuuwqao: $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, array_merge($ywmkwiwkosakssii, [self::wosqwewmqmyweqea => false])); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; $qsqwqsymmqeoqwcu = []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = $gcswwqwyaccgyoee->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $igqsaukqcqscimok); if (!in_array($iueymcwwscwqkiyq, [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg], true)) { goto iwsuawwqomaowuii; } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); iwsuawwqomaowuii: qoqskyuuwueqkquk: } wagqgeqymeqoeuyi: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $qsqwqsymmqeoqwcu; asiqwuoswmigcaki: ciykoyeioqgyaeqo: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { if (!($jwsqucqyaoaasykk = Component::symcgieuakksimmu())) { goto guykyqecgswcsmws; } if (!$igqsaukqcqscimok instanceof Model) { goto mqicocmqegwukkwg; } $igqsaukqcqscimok = $igqsaukqcqscimok->ccekeuwwqqoiwuwy(); mqicocmqegwukkwg: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $iueymcwwscwqkiyq = $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, self::ciywsqoeiymemsys); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [self::squoamkioomemiyi => $jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::squoamkioomemiyi, $igqsaukqcqscimok, $jwsqucqyaoaasykk::aqikuweekkucgqoy), self::eikgweiqgomeisyo => $jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $jwsqucqyaoaasykk::iuisqwiqesgyqsyg)]); $product = $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!($product = $usmsssmiougymckk->get($product))) { goto emmsycooskoqmgeg; } if (!(self::wmmucsiyiyusmssm === $iueymcwwscwqkiyq)) { goto qgeugwymkkiacwoc; } $aumscagymwyyicag = $usmsssmiougymckk->oemowqiewwkuiecu($product); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, ["\160\162\x69\x63\145" => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($aumscagymwyyicag), "\162\x61\x74\151\x6e\147" => $product->get_average_rating(), "\162\x61\164\x69\x6e\x67\x5f\x63\157\165\x6e\164" => $product->get_rating_count(), "\x66\x72\145\145\137\166\x65\162\163\151\x6f\x6e" => $aumscagymwyyicag <= 0]); qgeugwymkkiacwoc: $igqsaukqcqscimok[self::sauwwsocmukoaayu] = $product->get_permalink(); emmsycooskoqmgeg: if (!($mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::mkousmkiawwousws))) { goto ouamogymawucwswu; } $igqsaukqcqscimok[self::mkousmkiawwousws] = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($mcqieaigyeeyaksm); $igqsaukqcqscimok["\x69\x6d\141\147\145\x5f\144\141\x74\x65"] = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke("\x59\x2d\155\55\144\40\x48\x3a\151\72\163", $mcqieaigyeeyaksm, false); ouamogymawucwswu: if (!($rgswmioeqyomacmc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Component::wsymueygaeiiwsiw))) { goto mugqyyeayeyggqqk; } $igqsaukqcqscimok[Component::wsymueygaeiiwsiw] = Setting::symcgieuakksimmu()->icioieqkoswsyouk([self::ascagqcquwgmygkm => $rgswmioeqyomacmc, self::aisguagukaewucii => self::ckmqoekmugkggeym]); mugqyyeayeyggqqk: $uoyamuqmwmemuiko = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::ieagekqsqmcsqqeo); $gyycewisqacsckaw = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::caecscgwwciyemog); $ocmwaasmoekuweaa = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::keqoqmmgsiegwskg); if ($iueymcwwscwqkiyq === self::wmmucsiyiyusmssm) { goto samwkqgwouggsguc; } $ieqwogkgyywicygk = 0; goto wyuemgggaqogsmsq; samwkqgwouggsguc: $ieqwogkgyywicygk = $uoyamuqmwmemuiko + $ocmwaasmoekuweaa; if (!($gyycewisqacsckaw > 0)) { goto oomguqikqokqwgku; } $keaccasqgkaqawwm = time(); $kwkmegesqkqwyska = strtotime($gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Model::CREATED_AT)); $immmocykksywgkqu = round(($keaccasqgkaqawwm - $kwkmegesqkqwyska) / DAY_IN_SECONDS); if (!($immmocykksywgkqu > 0)) { goto acsqgiuageaasiyy; } $ieqwogkgyywicygk += $gyycewisqacsckaw * $immmocykksywgkqu; acsqgiuageaasiyy: oomguqikqokqwgku: wyuemgggaqogsmsq: $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [Component::mawokyacsmmqmsoo => $ieqwogkgyywicygk]); $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, [self::gouqcwikiiygyasc, "\144\157\155\141\151\156\x5f\151\x64", "\x63\x6f\155\x70\x6f\x6e\x65\x6e\x74\137\151\144"]); guykyqecgswcsmws: return $igqsaukqcqscimok; } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, string $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(self::gouqcwikiiygyasc === $aqykuigiuwmmcieu)) { goto kkumywowcoycymeo; } $mokawwccycoiqeka = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); kkumywowcoycymeo: if ($mokawwccycoiqeka) { goto miweggwqeiaeweia; } $mokawwccycoiqeka = $this->oemauiimmycumcsk(__("\116\157\x20\144\x6f\x6d\x61\151\x6e\x20\x66\x6f\x75\156\144\x20\x66\157\162\40\171\157\x75\x2e", PR__MDL__COMPONENT_MANAGER), 401); miweggwqeiaeweia: return $mokawwccycoiqeka; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $iqauecoycmqkimak = Domain::symcgieuakksimmu()->aokkqqekiykiikki($aqmwamyiwgeeymqa); return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && $iqauecoycmqkimak; } }
