<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cb9169e6bab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Packagist; use Pmpr\Common\Foundation\API\API as BaseClass; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class API extends BaseClass { public function gqaesauawkicekmw($wksoawcgagcgoask) : array { $aiieyweysaukqemc = $this->oyeiaogoouiwuoso($wksoawcgagcgoask); $quowyokcwswmuois = $this->sikkwymcwiscsokq($aiieyweysaukqemc); $koyiaasmkaiqokac = []; if (!(is_array($quowyokcwswmuois) && $quowyokcwswmuois)) { goto qwemkcoaseywkuuc; } $koyiaasmkaiqokac = reset($quowyokcwswmuois); qwemkcoaseywkuuc: $qwcmueausqgiwigy = $this->ysqksgcoyccgsuam($aiieyweysaukqemc); return ["\x75\x70\x64\x61\164\x65" => ManipulateArray::get($koyiaasmkaiqokac, "\164\151\155\145"), "\166\x65\162\163\x69\157\x6e" => ManipulateArray::get($koyiaasmkaiqokac, "\x76\145\162\x73\151\157\x6e"), "\x64\x6f\167\156\x6c\x6f\x61\x64\163" => ManipulateArray::get($qwcmueausqgiwigy, "\144\x6f\x77\156\x6c\x6f\x61\x64\163", 0)]; } private function ysqksgcoyccgsuam($aiieyweysaukqemc) : array { $ksiyqouuaoymsycg = []; $this->ksiyskmggywgsayu("\x71", "\133{$aiieyweysaukqemc}\x5d", true); $keccaugmemegoimu = $this->get("\150\x74\x74\x70\x73\72\57\x2f\160\141\143\153\x61\x67\x69\163\164\56\x6f\x72\147\x2f\163\145\141\162\143\150\x2e\x6a\163\157\156"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto kwyimqumkuuyaiku; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuwmqqqiwksuaise = ManipulateArray::get($sogksuscggsicmac, "\164\157\164\141\x6c", 0); if (!($uuwmqqqiwksuaise == 1)) { goto mqimkwickkgqqeoi; } $ykmaagygyauiamou = ManipulateArray::get($sogksuscggsicmac, "\162\145\x73\165\x6c\x74\x73", []); $ksiyqouuaoymsycg = ManipulateArray::get($ykmaagygyauiamou, 0, []); mqimkwickkgqqeoi: kwyimqumkuuyaiku: return $ksiyqouuaoymsycg; } private function sikkwymcwiscsokq($aiieyweysaukqemc) : array { $quowyokcwswmuois = []; $keccaugmemegoimu = $this->get("\150\x74\x74\x70\163\72\57\x2f\162\x65\160\157\56\160\x61\x63\153\x61\x67\x69\x73\x74\56\x6f\162\x67\x2f\x70\62\57{$aiieyweysaukqemc}\56\152\x73\157\x6e"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $iswcokucwmiosiaq)) { goto mceucsaeouuwyumm; } $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); $uuskcymsqowqgkyo = ManipulateArray::get($sogksuscggsicmac, "\x70\x61\x63\x6b\x61\147\145\x73", []); if (!($uuskcymsqowqgkyo && isset($uuskcymsqowqgkyo[$aiieyweysaukqemc]))) { goto gkqiqaqecmoogmaa; } $quowyokcwswmuois = $uuskcymsqowqgkyo[$aiieyweysaukqemc]; gkqiqaqecmoogmaa: mceucsaeouuwyumm: return $quowyokcwswmuois; } private function oyeiaogoouiwuoso($wksoawcgagcgoask) : string { $uomewyckeuqoqocu = explode("\x2d", $wksoawcgagcgoask); $sqeykgyoooqysmca = strtolower(ManipulateArray::get($uomewyckeuqoqocu, 1)); return "\160\x6d\x70\x72\55{$sqeykgyoooqysmca}\57{$wksoawcgagcgoask}"; } }
