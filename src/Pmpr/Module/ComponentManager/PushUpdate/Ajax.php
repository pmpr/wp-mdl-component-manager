<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6554a9d845551             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\PushUpdate; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Module\DomainManager\Model\Domain; class Ajax extends Common { const iegmcgiiweuqsaes = "\x63\x6f\155\160\157\x6e\145\x6e\164\137\155\x61\x6e\x61\x67\145\162\137\x70\165\163\150\137\x75\x70\144\x61\x74\x65\x5f\x61\143\164\x69\x6f\x6e"; const myikkigscysoykgy = ["\x70\x75\163\150\x5f\x75\x70\144\141\164\145" => self::iegmcgiiweuqsaes]; public function wigskegsqequoeks() { $this->koaegcswmcqsiykq(self::iegmcgiiweuqsaes, [$this, "\x63\151\157\x75\141\x63\x75\x71\161\x67\x63\151\x69\x71\161\x79"]); } public function ciouacuqqgciiqqy() { $occymigcemkqucuw = false; if (!$this->miueaekaaugaccmg($keccaugmemegoimu)) { goto isewysikysqewkis; } if ($this->omseesogaocascyo("\144\x6f\x6d\141\x69\156\x2d\155\141\x6e\x61\x67\x65\162") && ($swgwkyqkakceqeia = Domain::symcgieuakksimmu()) && ($acoioasmiqcwagsa = Process::symcgieuakksimmu())) { goto gsymkkskwsgggoic; } $keccaugmemegoimu = __("\x44\x6f\x6d\141\151\x6e\x20\x6d\x61\156\x61\147\x65\x72\x20\x63\157\x6d\160\157\156\145\156\164\x20\151\163\x20\156\x6f\164\40\x72\165\156\156\x69\156\x67\x2e", PR__MDL__COMPONENT_MANAGER); goto ugykmcouiwiscoqu; gsymkkskwsgggoic: if (!$acoioasmiqcwagsa->yyqyaigucmaueykw() && !DecoratorOption::igqksmmwesguiaae($acoioasmiqcwagsa::wmwkguoocmgweocs)) { goto mceucsaeouuwyumm; } $keccaugmemegoimu = __("\x41\156\x6f\164\x68\x65\162\x20\160\162\x6f\x63\x65\x73\x73\40\141\x6c\162\145\141\144\x79\40\x72\x75\156\156\x69\156\147\54\40\x70\x6c\x65\141\163\145\x20\167\141\x69\x74\40\141\x6e\x64\x20\164\162\171\40\x61\x67\141\151\x6e\x20\146\145\x77\x20\155\151\x6e\165\164\x65\x73\40\x6c\141\164\x65\x72\56", PR__MDL__COMPONENT_MANAGER); goto ceiuqsiqgiuiekem; mceucsaeouuwyumm: $wksoawcgagcgoask = ManipulateServer::yyqgamuwwakgciey(self::ocwsuwyiiasigqaa); if ($wksoawcgagcgoask) { goto kwyimqumkuuyaiku; } $keccaugmemegoimu = $this->gcsweumukyckmgik($this->gygamsmycwkqqwcc(__("\103\x6f\x6d\x70\157\156\145\x6e\x74", PR__MDL__COMPONENT_MANAGER))); goto gkqiqaqecmoogmaa; kwyimqumkuuyaiku: if ($wqogggcaamgeiwew = ManipulateServer::yyqgamuwwakgciey(self::waukmygusyyymgmy, [])) { goto owuuuiekkaeoeacq; } $oysoyeaucuawyaky = $swgwkyqkakceqeia->ssiyoimagsskwsoi([$swgwkyqkakceqeia::ciywsqoeiymemsys => $swgwkyqkakceqeia::eqewsqmqmsiocaeg, $swgwkyqkakceqeia::aemeeukyaaokioui => $swgwkyqkakceqeia::wyeieyscswyiskcw], $swgwkyqkakceqeia->kumuygiiqswoyasy()); goto saauykgakaeiyoua; owuuuiekkaeoeacq: $oysoyeaucuawyaky = $wqogggcaamgeiwew; saauykgakaeiyoua: if ($oysoyeaucuawyaky) { goto qwemkcoaseywkuuc; } $keccaugmemegoimu = __("\x4e\157\40\x64\157\155\x61\151\x6e\40\x66\157\x75\x6e\144\145\144\x2e", PR__MDL__COMPONENT_MANAGER); goto mqimkwickkgqqeoi; qwemkcoaseywkuuc: DecoratorOption::update($acoioasmiqcwagsa::msequgmyegcoeouo, $wksoawcgagcgoask); DecoratorOption::gawcqwcqgwgucgya($acoioasmiqcwagsa::wmwkguoocmgweocs, 1, MINUTE_IN_SECONDS * 2); $acoioasmiqcwagsa->mgoekicaagiaeuki($oysoyeaucuawyaky)->save()->ieyosyaaisyquesq(); $keccaugmemegoimu = __("\125\160\x64\x61\x74\145\x20\160\165\x73\x68\145\144\x20\x73\x75\x63\x63\145\x73\x73\x66\x75\x6c\154\171\x2e", PR__MDL__COMPONENT_MANAGER); $occymigcemkqucuw = true; mqimkwickkgqqeoi: gkqiqaqecmoogmaa: ceiuqsiqgiuiekem: ugykmcouiwiscoqu: isewysikysqewkis: $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } }
