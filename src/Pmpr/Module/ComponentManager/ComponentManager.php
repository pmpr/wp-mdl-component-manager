<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b6184c6e3eb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Module\ComponentManager\Frontend\Frontend; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Model; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; class ComponentManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\103\x6f\155\160\x6f\156\145\x6e\x74\x20\x4d\x61\156\141\x67\x65\x72", PR__MDL__COMPONENT_MANAGER); }]); } public function mameiwsayuyquoeq() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq()) { goto ceiwqkyquikcemmo; } Ajax::symcgieuakksimmu(); ceiwqkyquikcemmo: REST::symcgieuakksimmu(); Setting::symcgieuakksimmu(); Frontend::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\155\151\156\x5f\x69\x6e\x69\164", [$this, "\x79\145\x79\151\147\165\x79\x65\147\155\155\x79\165\x73\x65\141"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x6c\157\147\x69\x6e\x5f\162\x65\144\x69\x72\x65\x63\164", "\x75\x72\x6c\144\x65\x63\157\x64\145"); $this->aqaqisyssqeomwom("\160\x6c\x75\147\151\156\x5f\x64\x6f\167\x6e\x6c\x6f\x61\144\x5f\142\165\164\164\x6f\x6e", [$this, "\x65\163\x65\161\x6f\x6f\x75\x79\167\x69\x65\x67\155\x6f\165\141"], 10, 2)->aqaqisyssqeomwom("\147\x65\x74\137\x63\157\x6d\x70\x6f\x6e\x65\x6e\164\x73\137\x62\x79\x5f\x68\157\x73\164", [$this, "\141\143\161\165\143\x6b\161\x65\x75\151\145\x67\x63\x71\155\163"], 10, 2)->aqaqisyssqeomwom("\x67\145\164\x5f\143\157\x6d\x70\x6f\156\x65\156\164\137\151\x6e\163\x74\141\154\154\x61\x74\151\157\x6e\137\147\165\x69\144\x65", [$this, "\x6b\161\167\157\155\153\x77\151\163\x61\x6d\147\147\141\167\167"], 10, 2)->aqaqisyssqeomwom("\147\145\x74\x5f\143\157\x6d\x70\x6f\x6e\x65\156\x74\137\x69\156\163\x74\x61\154\x6c\x61\x74\151\x6f\156\x5f\x67\x75\x69\144\145\137\155\x6f\144\141\154", [$this, "\141\161\163\165\x67\163\x6d\x73\153\x63\145\x69\x6b\x61\145\x65"], 10, 2); } public function acquckqeuiegcqms(array $mqkkuqaimswumeww, array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::squoamkioomemiyi => self::aqikuweekkucgqoy, self::ckiaowgkqoewoseo => '', self::aisguagukaewucii => self::ckmqoekmugkggeym]); $ksaameoqigiaoigg = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!($siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($ywmkwiwkosakssii[self::ckiaowgkqoewoseo], $uamcoiueqaamsqma, $ywmkwiwkosakssii[self::squoamkioomemiyi]))) { goto siecswkggyikqkga; } $mqkkuqaimswumeww = $gcswwqwyaccgyoee->iiqauwkoiguyeawu($siykeiywomwwuoiw); switch ($ywmkwiwkosakssii[self::aisguagukaewucii]) { case self::uissasisiuymwsmu: case self::eoaiagsgqsmskugs: foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $ksaameoqigiaoigg[$gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask)] = $gcswwqwyaccgyoee->qogaqkcsogcqiaic($wksoawcgagcgoask, $gcswwqwyaccgyoee::wucysakokksokumi); goqmywuiicciasyk: } oyiuyywyeoskckuw: goto ukomuiwukymcoaso; case self::kgmecoswscqqsymg: case self::ckmqoekmugkggeym: $ksaameoqigiaoigg = $mqkkuqaimswumeww; goto ukomuiwukymcoaso; } wkgskiuiukiuyque: ukomuiwukymcoaso: siecswkggyikqkga: return $ksaameoqigiaoigg; } public function yeyiguyegmmyusea() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->euqowsuwmgokuqqo()) { goto qkuiwoqksgayqqmg; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\x6d\x69\x6e", $eygsasmqycagyayw->get("\x61\144\155\151\x6e\56\152\163"))->okawmmwsiuauwsiu())->ikqyiskqaaymscgw("\141\x6a\x61\170", Ajax::mucicoimkyqqioke); qkuiwoqksgayqqmg: } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x64\x6f\155\141\x69\x6e\55\155\x61\156\141\x67\145\x72")) { goto easqmyamcmeesgya; } Model::symcgieuakksimmu(); easqmyamcmeesgya: if (!$this->omseesogaocascyo("\x70\x61\x6e\145\154")) { goto yuqgwwmqwqiuwmaw; } Panel::symcgieuakksimmu(); yuqgwwmqwqiuwmaw: if (!$this->omseesogaocascyo("\x73\x65\143\x75\162\x69\164\171")) { goto quaqmuusokiyqgqe; } Security::symcgieuakksimmu(); quaqmuusokiyqgqe: } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; if (!($mkysicwccoeicumg = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk))) { goto smiemmcqqukyguuu; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->yucssysgmisaquki($mkysicwccoeicumg); smiemmcqqukyguuu: return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ["\143\x6c\141\163\163" => "\x74\x65\x78\164\55\144\145\143\x6f\162\141\164\x69\x6f\156\55\156\157\x6e\x65", "\x61\163\x2d\142\165\x74\x74\x6f\x6e" => true, self::TEXT => '', self::waguuiqqgsysuukq => "\x73\x6d", self::qgqyauaqwqmqseim => IconBrandInterface::cowoiyummsokycaq, self::igssuqwuicwawgam => "\151\x6e\146\157"]); $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if (!($mkysicwccoeicumg = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::iwseqweooieakqwk))) { goto eckcqesiokgwkkiw; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $egkyssmuqcwaciya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\143\154\x61\x73\163"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if (!$gkyciwoiiisgywcs->get($ywmkwiwkosakssii, "\141\163\x2d\x62\x75\x74\164\x6f\156")) { goto yamyagayiooyeekg; } $oiegiwogmwmawkeo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::waguuiqqgsysuukq); $qoiwmokisgikggia = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\40\x62\x74\x6e\40\142\164\156\x2d{$qoiwmokisgikggia}\40\142\x74\156\x2d{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::qgqyauaqwqmqseim); if (!$wkaqekwwgqsqwcoi) { goto iksewmsaugayqaqq; } $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\141\x73\163" => "\x69\x63\157\156\x2d\167\150\151\x74\145\x20\x69\x63\157\156\x2d{$oiegiwogmwmawkeo}"], [self::kicoscymgmgqeqgy => true]); iksewmsaugayqaqq: yamyagayiooyeekg: $cmwygeyygwqaemaq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, self::TEXT); if ($cmwygeyygwqaemaq) { goto yoagcooekomeokwg; } $cmwygeyygwqaemaq = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::wumiomcykccwmgei, __("\x50\115\120\122\40\x50\154\165\147\x69\156", PR__MDL__COMPONENT_MANAGER)); yoagcooekomeokwg: $ewgwqamkygiqaawc[] = $swqimwqeweekeusq->gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\154\141\x73\163" => $iyiskikeoeeysmiw ? "\160\154\x2d\62" : '']); $siquossayskcwkea = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\x63\154\141\163\x73" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($ewgwqamkygiqaawc, $siquossayskcwkea); eckcqesiokgwkkiw: return $iwywmkygwewiamwm; } public function kqwomkwisamggaww($iwamiguusayooguq, $wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return sprintf(__("\131\157\x75\40\x63\x61\156\x20\147\x65\164\40\x68\x65\154\160\x20\146\x72\x6f\x6d\40\x74\150\x65\x20\45\163\40\164\x6f\x20\151\156\163\164\141\154\154\x20\x74\150\145\x20\x25\x73\x2e", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($quisksguegkuygus), Setting::symcgieuakksimmu()->aqsugsmskceikaee($wksoawcgagcgoask)); } }
