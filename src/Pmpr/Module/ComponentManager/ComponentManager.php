<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             630b0a7be6039             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Woocommerce\MultiStepSingleProduct; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Model; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Packagist\Packagist; use Pmpr\Module\ComponentManager\Panel\Panel; use Pmpr\Module\ComponentManager\PushUpdate\PushUpdate; use Pmpr\Module\ComponentManager\REST\REST; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Common\Foundation\Manipulate\ManipulateFile; use WC_Order_Item_Product; use WC_Product_Variation; class ComponentManager extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x43\x6f\155\160\x6f\156\145\x6e\164\40\x4d\x61\156\x61\x67\x65\x72", PR__MDL__COMPONENT_MANAGER); }]); if (!$this->gmiyqqaekqcsoime()) { goto sgiwoiscywusgmmm; } parent::__construct(); $this->iemaakgqgqosiecm(); sgiwoiscywusgmmm: } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x77\157\157\143\x6f\155\155\145\162\x63\145\137\x76\x61\162\x69\141\164\151\x6f\156\x5f\151\x6e\144\151\x63\141\x74\157\x72\137\146\x69\145\x6c\x64\x5f\157\x70\x74\151\157\x6e\x73"), [$this, "\x79\155\x6f\x67\x6b\x6d\x63\167\143\155\147\x61\x75\x63\x61\x79"])->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x70\x6c\x75\147\151\156\x5f\144\x6f\167\156\154\x6f\141\x64\137\142\165\164\x74\x6f\x6e"), [$this, "\x65\163\x65\161\157\x6f\x75\x79\167\x69\x65\147\x6d\x6f\165\141"], 10, 2); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\156\x5f\x69\x6e\151\x74", [$this, "\x79\145\x79\151\x67\165\171\145\147\155\x6d\x79\165\x73\145\141"])->qcsmikeggeemccuu("\160\154\x75\147\151\156\x73\137\154\157\x61\x64\145\x64", [$this, "\x71\155\155\165\x6f\x65\x6b\x71\145\153\x71\161\x75\143\x6d\x6d"])->qcsmikeggeemccuu("\x77\157\x6f\143\157\x6d\x6d\145\162\x63\145\x5f\x61\x66\x74\x65\162\x5f\157\x72\x64\145\x72\x5f\144\145\x74\141\151\x6c\163\137\x69\164\145\155", [$this, "\145\x6f\x75\x71\153\171\167\167\x73\161\x75\171\x61\147\x67\x6d"], 10, 3); } public function yeyiguyegmmyusea() { if (!ManipulateQuery::euqowsuwmgokuqqo()) { goto skuqigsokaguscas; } $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x61\144\x6d\x69\x6e", $eygsasmqycagyayw->get("\141\x64\x6d\151\156\56\152\x73"))->simswskycwagoeqy()); skuqigsokaguscas: } public function iemaakgqgqosiecm() { if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto quyogmwugsyoaaiu; } Ajax::symcgieuakksimmu(); quyogmwugsyoaaiu: REST::symcgieuakksimmu(); Packagist::symcgieuakksimmu(); PushUpdate::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\x64\x6f\x6d\141\x69\156\x2d\155\141\156\141\x67\x65\x72")) { goto mmgmqogugasaqkgg; } Model::symcgieuakksimmu(); mmgmqogugasaqkgg: if (!$this->omseesogaocascyo("\x70\x61\x6e\x65\x6c")) { goto wmumywgyyeagqoeq; } Panel::symcgieuakksimmu(); wmumywgyyeagqoeq: } public function ymogkmcwcmgaucay($qiouiwasaauyaaue) { $qiouiwasaauyaaue[Product::keiqoyskgcaaiyuw] = __("\x52\x65\x71\165\x69\x72\x65\40\x66\157\162\40\142\x75\171", PR__MDL__COMPONENT_MANAGER); $qiouiwasaauyaaue[Product::smsioacowoikwikc] = __("\x4e\157\x74\40\x61\144\x64\x61\x62\x6c\145\40\142\x79\x20\x75\163\x65\162", PR__MDL__COMPONENT_MANAGER); return $qiouiwasaauyaaue; } public function eouqkywwsquyaggm($product, $umwqusowiqmyseom, $cawesmkieccckaae) { if ($product instanceof WC_Product_Variation) { goto smcguieygyqcaqgs; } $eoioyuyammuoecgs = ManipulateWoocommerce::omwkqcuwceweymcc($product); goto mgcuiguaomoqwwwm; smcguieygyqcaqgs: $eoioyuyammuoecgs = $product->get_parent_id(); $product = ManipulateWoocommerce::aqasygcsqysmmyke($eoioyuyammuoecgs); mgcuiguaomoqwwwm: $icwicymcioeyeyek = []; if (!($gukqamyquokaeeai = Product::symcgieuakksimmu())) { goto ooqksueucyagyuoe; } if (!$cawesmkieccckaae instanceof WC_Order_Item_Product) { goto eoyiumycaigawmmc; } $icwicymcioeyeyek = $cawesmkieccckaae->get_meta($gukqamyquokaeeai::gyeeyigiiewaqyyo); eoyiumycaigawmmc: $wiiucqsygckgwcia = $gukqamyquokaeeai->gugmsucsyeywucoe(ManipulateArray::get($icwicymcioeyeyek, self::weayyoewessosyko)); $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!($eoioyuyammuoecgs && $wiiucqsygckgwcia && $gcswwqwyaccgyoee && $yakcyegsoqusmiak)) { goto yssqmyoaokkksukc; } $wksoawcgagcgoask = $gcswwqwyaccgyoee->akkkoiiymmamsauc($eoioyuyammuoecgs, $gcswwqwyaccgyoee::oguseymmyyoyaako); if (!$wksoawcgagcgoask) { goto sckioayasmkcoeoo; } $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::qkmqmaeuyokqgemg => ManipulateArray::get($wiiucqsygckgwcia, self::gouqcwikiiygyasc), $yakcyegsoqusmiak::ogqcgemayqiaucag => $gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask)]); $mokawwccycoiqeka = $yakcyegsoqusmiak->iscemaoqqckmkago($yakcyegsoqusmiak::qkmqmaeuyokqgemg, $gmywaegkmeaueiyo); $mkysicwccoeicumg = $this->eseqoouywiegmoua('', ["\x61\x73\x2d\142\165\164\x74\157\x6e" => false]); $esuksqieigiqcaie = ManipulateArray::get($mokawwccycoiqeka, self::igswcauwsgmeougs); $caicqiiuwsyaeeko = ManipulateArray::get($gmywaegkmeaueiyo, Purchase::okkqqmwseqscceye); $smqkocasociqsgai = ManipulateHTML::ciuuiyckmsygceis($product->get_title(), ["\143\154\x61\x73\x73" => "\x70\170\x2d\x31"]); $oammesyieqmwuwyi = [sprintf(__("\104\157\x77\156\154\x6f\141\x64\x20\x61\156\x64\40\x49\156\x73\x74\x61\154\x6c\40\x25\163\x20\x6f\156\x20\45\x73", PR__MDL__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($mkysicwccoeicumg), ManipulateHTML::ciuuiyckmsygceis(ManipulateArray::get($mokawwccycoiqeka, self::ciyoccqkiamemcmm, ''))), sprintf(__("\101\x50\111\x20\x4b\145\x79\x20\45\163\40\x69\x6e\x20\x70\x6c\x75\x67\x69\x6e\x20\163\145\x74\164\151\x6e\x67", PR__MDL__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($esuksqieigiqcaie, ["\x63\154\141\x73\x73" => "\x70\x78\55\61"])), sprintf(__("\111\156\163\164\141\154\154\40\x25\163\x20\146\x72\157\x6d\x20\x70\154\x75\147\x69\156", PR__MDL__COMPONENT_MANAGER), $smqkocasociqsgai), sprintf(__("\114\151\x63\x65\156\163\x65\40\113\145\x79\x20\45\163\x20\x69\x6e\40\163\x65\164\x74\151\x6e\147\x20\157\x66\40\x25\163", PR__MDL__COMPONENT_MANAGER), ManipulateHTML::ciuuiyckmsygceis($caicqiiuwsyaeeko, ["\x63\x6c\x61\163\163" => "\x70\170\55\x31"]), $smqkocasociqsgai)]; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $oammesyieqmwuwyi[$momcykaoccoymeig] = ManipulateHTML::uuccukgasskgimsq("\x6c\x69", ["\x63\154\141\x73\163" => "\x6c\151\163\164\x2d\147\x72\x6f\165\x70\55\151\164\145\x6d\x20\x62\147\x2d\164\x72\141\156\163\160\141\x72\x65\156\164\40\160\170\x2d\60"], "{$this->msywmyaoqmaegsuy($momcykaoccoymeig + 1)}\x2e\x20{$igqsaukqcqscimok}"); eyiwqgqcsqakwqss: } yuoeumyiuqkuouey: echo ManipulateBootstrap::oockkqiqsssakuug(ManipulateHTML::uuccukgasskgimsq("\x6f\154", ["\143\154\x61\163\163" => "\x6c\151\x73\164\55\147\x72\x6f\x75\160\x20\x6c\151\163\164\x2d\x67\162\157\x75\x70\x2d\146\154\x75\163\x68"], $oammesyieqmwuwyi), self::ecioqysekgaasegg, ["\x63\154\141\163\163" => "\155\164\55\x33\x20\x6d\142\x2d\x30\x20\x70\x79\x2d\x30"], false); sckioayasmkcoeoo: yssqmyoaokkksukc: ooqksueucyagyuoe: } public function qmmuoekqekqqucmm() { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!$gcswwqwyaccgyoee) { goto aukucaieceiwesmm; } $mqkkuqaimswumeww = $gcswwqwyaccgyoee->kasiqqyyaswsgics(); if (!is_array($mqkkuqaimswumeww)) { goto iauwuugggmegwisk; } foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { $this->uygsiyawaaswimwa($wksoawcgagcgoask); wgiygcmqaokywuqa: } osmmoyqkqoucsgow: iauwuugggmegwisk: aukucaieceiwesmm: } public function uygsiyawaaswimwa($wksoawcgagcgoask) : ?Product { $aokagokqyuysuksm = ManipulateArray::get($wksoawcgagcgoask, Component::symcgieuakksimmu()->kumuygiiqswoyasy()); $product = ManipulateArray::get($wksoawcgagcgoask, self::oguseymmyyoyaako); $qmoucmaugmeokuww = null; if (!$product) { goto micceocwuwkyusic; } $qmoucmaugmeokuww = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\x6d\x70\x6f\x6e\145\x6e\x74\x5f\155\x75\x6c\x74\x69\x5f\x73\x74\145\x70\137\x70\162\x6f\x64\165\143\x74\x5f\x6f\x62\x6a\x65\143\x74"), null, $aokagokqyuysuksm, $product); if ($qmoucmaugmeokuww instanceof MultiStepSingleProduct) { goto kqyoakickmseyyeq; } $qmoucmaugmeokuww = Product::ocmycskcuiawkecq($product, $aokagokqyuysuksm, $product); kqyoakickmseyyeq: micceocwuwkyusic: return $qmoucmaugmeokuww; } public function qmkewgscegioqkuc() { $iwywmkygwewiamwm = null; $mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::iwseqweooieakqwk); if (!$mkysicwccoeicumg) { goto iwueukqcywkiyqge; } $iwywmkygwewiamwm = ManipulateFile::yucssysgmisaquki($mkysicwccoeicumg); iwueukqcywkiyqge: return $iwywmkygwewiamwm; } public function eseqoouywiegmoua($iwywmkygwewiamwm = '', $ywmkwiwkosakssii = []) : ?string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\143\x6c\x61\163\x73" => "\x74\x65\170\164\x2d\x64\145\x63\157\162\x61\x74\151\157\156\x2d\x6e\157\x6e\145", "\x61\163\55\142\165\x74\164\157\x6e" => true, self::TEXT => '', self::waguuiqqgsysuukq => "\x73\155", self::qgqyauaqwqmqseim => IconBrandInterface::eiiymsemgagwygeg, self::igssuqwuicwawgam => "\x69\156\146\157"]); $mkysicwccoeicumg = $this->weysguygiseoukqw(Setting::iwseqweooieakqwk . self::mswocgcucqoaesaa); if (!$mkysicwccoeicumg) { goto egaymskkosukqeao; } $egkyssmuqcwaciya = ManipulateArray::get($ywmkwiwkosakssii, "\143\x6c\141\x73\163"); $ewgwqamkygiqaawc = []; $iyiskikeoeeysmiw = false; if (!ManipulateArray::get($ywmkwiwkosakssii, "\141\x73\x2d\142\x75\x74\164\x6f\156")) { goto acggikioyeueeowg; } $oiegiwogmwmawkeo = ManipulateArray::get($ywmkwiwkosakssii, self::waguuiqqgsysuukq); $qoiwmokisgikggia = ManipulateArray::get($ywmkwiwkosakssii, self::igssuqwuicwawgam); $egkyssmuqcwaciya .= "\x20\142\x74\156\x20\142\x74\x6e\55{$qoiwmokisgikggia}\40\x62\x74\156\x2d{$oiegiwogmwmawkeo}"; $wkaqekwwgqsqwcoi = ManipulateArray::get($ywmkwiwkosakssii, self::qgqyauaqwqmqseim); if (!$wkaqekwwgqsqwcoi) { goto ykwasaaoeeiuomim; } $iyiskikeoeeysmiw = true; $ewgwqamkygiqaawc[] = ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\x63\154\141\163\x73" => "\151\143\x6f\x6e\55\167\x68\x69\164\x65\40\151\x63\x6f\x6e\x2d{$oiegiwogmwmawkeo}"], ["\155\x61\162\153\165\x70" => true]); ykwasaaoeeiuomim: acggikioyeueeowg: $cmwygeyygwqaemaq = ManipulateArray::get($ywmkwiwkosakssii, self::TEXT); if ($cmwygeyygwqaemaq) { goto cwikoaeqmmoimmso; } $cmwygeyygwqaemaq = $this->weysguygiseoukqw(Setting::wumiomcykccwmgei, __("\120\115\120\122\x20\x50\x6c\x75\147\x69\x6e", PR__MDL__COMPONENT_MANAGER)); cwikoaeqmmoimmso: $ewgwqamkygiqaawc[] = ManipulateHTML::gmqyuaqwgiayskei($cmwygeyygwqaemaq, ["\143\x6c\x61\163\163" => $iyiskikeoeeysmiw ? "\160\x6c\55\62" : '']); $siquossayskcwkea = ManipulateAttachment::wggscwmuogkkkmgq($mkysicwccoeicumg, true, ["\143\154\x61\x73\163" => $egkyssmuqcwaciya]); $iwywmkygwewiamwm = ManipulateHTML::uuccukgasskgimsq("\x61", $siquossayskcwkea, $ewgwqamkygiqaawc); egaymskkosukqeao: return $iwywmkygwewiamwm; } }
