<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321d94199d2b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Woocommerce\MultiStepSingleProduct; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Model; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Packagist\Packagist; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use WC_Order_Item_Product; use WC_Product_Variation; class ComponentManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\103\x6f\155\x70\x6f\x6e\145\x6e\x74\x20\x4d\141\156\x61\x67\145\162", PR__MDL__COMPONENT_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto sgiwoiscywusgmmm; } parent::__construct(); $this->iemaakgqgqosiecm(); sgiwoiscywusgmmm: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x77\157\x6f\x63\x6f\155\155\145\162\143\x65\137\x76\x61\162\151\141\164\151\x6f\156\x5f\151\156\144\x69\143\x61\x74\157\162\137\x66\151\x65\154\144\x5f\157\x70\164\x69\157\156\163"), [$this, "\171\x6d\x6f\147\x6b\x6d\x63\167\x63\155\x67\x61\x75\x63\x61\x79"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x70\x6c\165\x67\x69\156\x5f\144\x6f\167\156\x6c\157\141\144\137\142\x75\164\164\157\x6e"), [$this, "\145\x73\145\x71\x6f\x6f\165\171\x77\x69\x65\147\x6d\x6f\165\141"], 10, 2); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\151\156\x5f\x69\156\x69\x74", [$this, "\x79\145\x79\x69\147\165\x79\x65\x67\155\x6d\x79\165\x73\x65\x61"])->qcsmikeggeemccuu("\x70\x6c\x75\147\x69\156\x73\x5f\x6c\x6f\141\x64\145\x64", [$this, "\161\x6d\155\x75\157\x65\153\x71\145\153\x71\161\165\x63\x6d\x6d"])->qcsmikeggeemccuu("\167\157\x6f\143\x6f\155\155\x65\162\x63\x65\x5f\x61\146\x74\x65\x72\x5f\157\162\144\x65\162\x5f\x64\x65\164\141\x69\x6c\x73\x5f\x69\164\145\155", [$this, "\145\x6f\165\x71\153\x79\167\x77\x73\161\165\x79\141\x67\x67\155"], 10, 3); } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto skuqigsokaguscas; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\x64\155\151\x6e", $eygsasmqycagyayw->get("\x61\144\x6d\151\x6e\56\x6a\163"))->simswskycwagoeqy()); skuqigsokaguscas: } public function iemaakgqgqosiecm() { if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto quyogmwugsyoaaiu; } Ajax::symcgieuakksimmu(); quyogmwugsyoaaiu: REST::symcgieuakksimmu(); Packagist::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x64\x6f\x6d\x61\151\156\x2d\x6d\141\156\141\x67\x65\162")) { goto mmgmqogugasaqkgg; } Model::symcgieuakksimmu(); mmgmqogugasaqkgg: if (!$this->omseesogaocascyo("\x70\x61\x6e\x65\x6c")) { goto wmumywgyyeagqoeq; } Panel::symcgieuakksimmu(); wmumywgyyeagqoeq: } public function ymogkmcwcmgaucay($qiouiwasaauyaaue) { $qiouiwasaauyaaue[Product::keiqoyskgcaaiyuw] = __("\122\x65\x71\x75\x69\x72\145\40\x66\x6f\162\x20\142\x75\x79", PR__MDL__COMPONENT_MANAGER); $qiouiwasaauyaaue[Product::smsioacowoikwikc] = __("\x4e\157\x74\40\x61\x64\144\x61\142\154\x65\40\142\171\40\165\163\x65\x72", PR__MDL__COMPONENT_MANAGER); return $qiouiwasaauyaaue; } public function eouqkywwsquyaggm($product, $umwqusowiqmyseom, $cawesmkieccckaae) { if ($product instanceof WC_Product_Variation) { goto smcguieygyqcaqgs; } $eoioyuyammuoecgs = ManipulateWoocommerce::omwkqcuwceweymcc($product); goto mgcuiguaomoqwwwm; smcguieygyqcaqgs: $eoioyuyammuoecgs = $product->get_parent_id(); $product = ManipulateWoocommerce::aqasygcsqysmmyke($eoioyuyammuoecgs); mgcuiguaomoqwwwm: $icwicymcioeyeyek = []; if (!($gukqamyquokaeeai = Product::symcgieuakksimmu())) { goto ooqksueucyagyuoe; } if (!$cawesmkieccckaae instanceof WC_Order_Item_Product) { goto eoyiumycaigawmmc; } $icwicymcioeyeyek = $cawesmkieccckaae->get_meta($gukqamyquokaeeai::gyeeyigiiewaqyyo); eoyiumycaigawmmc: $wiiucqsygckgwcia = $gukqamyquokaeeai->gugmsucsyeywucoe(ManipulateArray::get($icwicymcioeyeyek, self::weayyoewessosyko)); $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!($eoioyuyammuoecgs && $wiiucqsygckgwcia && $gcswwqwyaccgyoee && $yakcyegsoqusmiak)) { goto yssqmyoaokkksukc; } $wksoawcgagcgoask = $gcswwqwyaccgyoee->akkkoiiymmamsauc($eoioyuyammuoecgs, $gcswwqwyaccgyoee::oguseymmyyoyaako); if (!$wksoawcgagcgoask) { goto sckioayasmkcoeoo; } $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::qkmqmaeuyokqgemg => ManipulateArray::get($wiiucqsygckgwcia, self::gouqcwikiiygyasc), $yakcyegsoqusmiak::ogqcgemayqiaucag => $gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask)]); $mokawwccycoiqeka = $yakcyegsoqusmiak->iscemaoqqckmkago($yakcyegsoqusmiak::qkmqmaeuyokqgemg, $gmywaegkmeaueiyo); $mkysicwccoeicumg = $this->eseqoouywiegmoua('', ["\141\x73\55\142\x75\164\164\x6f\156" => false]); $esuksqieigiqcaie = ManipulateArray::get($mokawwccycoiqeka, self::igswcauwsgmeougs); $caicqiiuwsyaeeko = ManipulateArray::get($gmywaegkmeaueiyo, Purchase::okkqqmwseqscceye); $smqkocasociqsgai = ManipulateHTML::ciuuiyckmsygceis($product->get_title(), ["\x63\x6c\141\x73\163" => "\x70\170\55\x31"]); $oammesyieqmwuwyi = [sprintf(__("\x44\x6f\167\156\x6c\157\x61\x64\x20\141\x6e\144\40\111\156\163\x74\141\154\x6c\40\45\163\x20\x6f\156\x20\45\x73", PR__MDL__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($mkysicwccoeicumg), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm, ''))), sprintf(__("\x41\x50\x49\x20\x4b\x65\171\x20\45\163\x20\x69\156\40\x70\154\165\x67\151\156\x20\x73\x65\164\x74\x69\x6e\147", PR__MDL__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($esuksqieigiqcaie, ["\143\x6c\x61\x73\163" => "\160\170\55\x31"])), sprintf(__("\111\x6e\163\x74\x61\x6c\x6c\x20\45\x73\40\146\162\x6f\155\x20\x70\x6c\165\x67\x69\156", PR__MDL__COMPONENT_MANAGER), $smqkocasociqsgai), sprintf(__("\114\x69\143\x65\x6e\x73\x65\x20\x4b\145\x79\x20\x25\x73\x20\x69\156\40\x73\x65\164\x74\x69\x6e\147\x20\x6f\x66\x20\45\163", PR__MDL__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($caicqiiuwsyaeeko, ["\x63\x6c\x61\x73\x73" => "\x70\170\x2d\x31"]), $smqkocasociqsgai)]; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $oammesyieqmwuwyi[$momcykaoccoymeig] = ManipulateHTML::uuccukgasskgimsq("\x6c\x69", ["\143\154\x61\163\163" => "\154\x69\163\x74\x2d\147\162\x6f\165\160\x2d\x69\164\x65\x6d\x20\142\147\55\164\x72\141\156\x73\160\x61\x72\145\156\164\40\160\x78\x2d\x30"], "{$this->msywmyaoqmaegsuy($momcykaoccoymeig + 1)}\56\x20{$igqsaukqcqscimok}"); eyiwqgqcsqakwqss: } yuoeumyiuqkuouey: echo ManipulateBootstrap::oockkqiqsssakuug(ManipulateHTML::uuccukgasskgimsq("\157\x6c", ["\143\x6c\141\163\x73" => "\154\151\163\x74\x2d\x67\x72\x6f\x75\x70\40\154\x69\163\164\55\147\162\x6f\x75\x70\55\146\x6c\165\163\x68"], $oammesyieqmwuwyi), self::ecioqysekgaasegg, ["\143\154\141\x73\x73" => "\x6d\x74\55\x33\x20\155\x62\55\x30\x20\x70\x79\x2d\60"], false); sckioayasmkcoeoo: yssqmyoaokkksukc: ooqksueucyagyuoe: } public function qmmuoekqekqqucmm() { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!$gcswwqwyaccgyoee) { goto aukucaieceiwesmm; } $mqkkuqaimswumeww = $gcswwqwyaccgyoee->kasiqqyyaswsgics(); if (!is_array($mqkkuqaimswumeww)) { goto iauwuugggmegwisk; } foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $this->uygsiyawaaswimwa($wksoawcgagcgoask); wgiygcmqaokywuqa: } osmmoyqkqoucsgow: iauwuugggmegwisk: aukucaieceiwesmm: } public function uygsiyawaaswimwa($wksoawcgagcgoask) : ?Product { $aokagokqyuysuksm = ManipulateArray::get($wksoawcgagcgoask, Component::symcgieuakksimmu()->kumuygiiqswoyasy()); $product = ManipulateArray::get($wksoawcgagcgoask, self::oguseymmyyoyaako); $qmoucmaugmeokuww = null; if (!$product) { goto micceocwuwkyusic; } $qmoucmaugmeokuww = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\157\x6d\160\x6f\156\145\x6e\x74\137\155\x75\x6c\x74\151\137\163\x74\145\160\137\160\x72\157\144\165\143\x74\137\x6f\x62\x6a\145\143\164"), null, $aokagokqyuysuksm, $product); if ($qmoucmaugmeokuww instanceof MultiStepSingleProduct) { goto kqyoakickmseyyeq; } $qmoucmaugmeokuww = Product::ocmycskcuiawkecq($product, $aokagokqyuysuksm, $product); kqyoakickmseyyeq: micceocwuwkyusic: return $qmoucmaugmeokuww; } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; $mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::iwseqweooieakqwk); if (!$mkysicwccoeicumg) { goto iwueukqcywkiyqge; } $iwywmkygwewiamwm = ManipulateFile::yucssysgmisaquki($mkysicwccoeicumg); iwueukqcywkiyqge: return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x63\x6c\141\163\163" => "\x74\145\x78\x74\x2d\144\145\143\x6f\x72\x61\164\x69\157\156\x2d\x6e\157\156\x65", "\141\163\55\x62\x75\x74\164\157\x6e" => true, self::TEXT => '', self::waguuiqqgsysuukq => "\163\x6d", self::qgqyauaqwqmqseim => IconBrandInterface::eiiymsemgagwygeg, self::igssuqwuicwawgam => "\151\x6e\146\157"]); $mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::iwseqweooieakqwk . self::mswocgcucqoaesaa); if (!$mkysicwccoeicumg) { goto egaymskkosukqeao; } $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\143\x6c\x61\163\163"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if (!ManipulateArray::get($ywmkwiwkosakssii, "\141\163\x2d\x62\165\164\164\157\x6e")) { goto acggikioyeueeowg; } $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, self::waguuiqqgsysuukq); $qoiwmokisgikggia = ManipulateArray::get($ywmkwiwkosakssii, self::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\40\x62\x74\x6e\40\142\x74\156\x2d{$qoiwmokisgikggia}\40\x62\x74\156\55{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::qgqyauaqwqmqseim); if (!$wkaqekwwgqsqwcoi) { goto ykwasaaoeeiuomim; } $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\141\x73\163" => "\x69\143\x6f\x6e\x2d\x77\150\x69\164\x65\x20\x69\x63\x6f\156\55{$oiegiwogmwmawkeo}"], ["\155\x61\162\153\x75\x70" => true]); ykwasaaoeeiuomim: acggikioyeueeowg: $cmwygeyygwqaemaq = ManipulateArray::get($ywmkwiwkosakssii, self::TEXT); if ($cmwygeyygwqaemaq) { goto cwikoaeqmmoimmso; } $cmwygeyygwqaemaq = $this->weysguygiseoukqw(Setting::wumiomcykccwmgei, __("\120\x4d\x50\122\40\x50\x6c\165\147\x69\156", PR__MDL__COMPONENT_MANAGER)); cwikoaeqmmoimmso: $ewgwqamkygiqaawc[] = ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\x63\154\x61\163\x73" => $iyiskikeoeeysmiw ? "\160\154\55\62" : '']); $siquossayskcwkea = ManipulateAttachment::wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\x63\x6c\141\163\x73" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = ManipulateHTML::uuccukgasskgimsq("\141", $siquossayskcwkea, $ewgwqamkygiqaawc); egaymskkosukqeao: return $iwywmkygwewiamwm; } }
