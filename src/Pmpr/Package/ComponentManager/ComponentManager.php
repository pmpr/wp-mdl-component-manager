<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b5dd8e3b1f             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateMenu; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\Woocommerce\MultiStepSingleProduct; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Model; use Pmpr\Package\ComponentManager\REST\REST; class ComponentManager extends Container { public function __construct() { goto gcqssckowmywoesw; cuayqmasemsqsume: $this->iemaakgqgqosiecm(); goto igmawmwssyskqqag; eekkcooqswqouoei: parent::__construct(); goto cuayqmasemsqsume; gcqssckowmywoesw: $this->gkieogwukagigisy(__DIR__); goto eekkcooqswqouoei; igmawmwssyskqqag: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\155\x69\x6e\x5f\x6d\145\x6e\165", [$this, "\145\x75\x71\147\167\151\x73\143\x77\x67\161\153\x71\x6b\145\143"])->qcsmikeggeemccuu("\160\x6c\x75\x67\151\156\x73\137\x6c\x6f\141\x64\145\x64", [$this, "\161\x6d\x6d\x75\157\x65\x6b\x71\145\153\161\x71\165\143\x6d\155"]); } public function iemaakgqgqosiecm() { goto eussqkkimciywios; eussqkkimciywios: if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto iomwkkieqcswkkaw; } goto ewsigoeswimiueqe; gqaqamewqeaqwcia: REST::symcgieuakksimmu(); goto okuqsqaiwwiigmyu; ewsigoeswimiueqe: Ajax::symcgieuakksimmu(); goto gaskcgoeywuyukke; okuqsqaiwwiigmyu: Model::symcgieuakksimmu(); goto ksiwgckusukisueg; gaskcgoeywuyukke: iomwkkieqcswkkaw: goto gqaqamewqeaqwcia; ksiwgckusukisueg: } public function qmmuoekqekqqucmm() { goto ymucaguacemwsgsi; wqwmuuicoqigqwyc: sgkqgucguyccaaki: goto oqgymyiwckkwueuw; qiikwossequwiuom: $mqkkuqaimswumeww = $gcswwqwyaccgyoee->kasiqqyyaswsgics(); goto gaouaiemokqqgssw; ymucaguacemwsgsi: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); goto qiikwossequwiuom; gaouaiemokqqgssw: foreach ($mqkkuqaimswumeww as $wksoawcgagcgoask) { goto qmqmskywcgiqgygm; igyesgemqesackws: cmsiuimsiycomyay: goto wiaymoucakyaikii; ccgsycueagwegqeu: $product = ManipulateArray::get($wksoawcgagcgoask, Component::oguseymmyyoyaako); goto gmeiuoeewucukque; gmeiuoeewucukque: if (!$product) { goto cmsiuimsiycomyay; } goto sayqggaieocmskko; wiaymoucakyaikii: omuemegmkesqgwys: goto ociesuicgmkekcue; qmqmskywcgiqgygm: $aokagokqyuysuksm = ManipulateArray::get($wksoawcgagcgoask, $gcswwqwyaccgyoee->mwikyscisascoeea()); goto ccgsycueagwegqeu; ceaamccscgcmqgka: Product::ocmycskcuiawkecq($product, $aokagokqyuysuksm, $product, $smwiiesyqsgyisos); goto omumkeywqqogwwue; sayqggaieocmskko: $smwiiesyqsgyisos = ManipulateArray::get($wksoawcgagcgoask, Component::wqewegwyaeueiyae); goto qmguoqeawegcoeoa; omumkeywqqogwwue: geyiosucqswaeasw: goto igyesgemqesackws; ycecaauekkiqacuu: if ($qmoucmaugmeokuww instanceof MultiStepSingleProduct) { goto geyiosucqswaeasw; } goto ceaamccscgcmqgka; qmguoqeawegcoeoa: $qmoucmaugmeokuww = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\x6d\x70\157\156\145\156\164\x5f\x6d\165\x6c\164\x69\137\163\164\x65\160\x5f\x70\162\157\144\165\143\x74\x5f\x6f\142\x6a\x65\143\x74"), null, $aokagokqyuysuksm, $product, $smwiiesyqsgyisos); goto ycecaauekkiqacuu; ociesuicgmkekcue: } goto wqwmuuicoqigqwyc; oqgymyiwckkwueuw: } public function euqgwiscwgqkqkec() { ManipulateMenu::aemwscceysomkuea(["\x70\141\147\145\x5f\164\x69\164\x6c\145" => __("\x43\157\x6d\x70\157\x6e\145\156\x74\x20\115\141\156\141\147\145\x72", PR__PKG__COMPONENT_MANAGER), "\155\145\x6e\165\137\x73\x6c\x75\147" => $this->akuociswqmoigkas(), "\151\x63\x6f\x6e\x5f\x75\x72\x6c" => $this->miocmcoykayoyyau()->eyamqkqiykagecsw(IconFontawesomeInterface::eoiaoegmeyqksuec), "\x70\157\163\x69\164\x69\x6f\x6e" => 21]); } }
