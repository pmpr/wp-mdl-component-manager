<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65ae3aaba5651             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Report extends Common { const qkmqmaeuyokqgemg = self::weayyoewessosyko . self::mswocgcucqoaesaa; const ogqcgemayqiaucag = self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa; const ckumcckgkuuygwkg = "\151\156\166\141\x6c\x69\144"; const mkgimueycqsggewa = "\x77\162\157\x6e\147\137\x76\141\x6c\165\x65"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::geeqaackcgawagqg)->ckaeqgiaiqwsccke(30)->guiaswksukmgageq(__("\x52\145\160\157\x72\164", PR__MDL__COMPONENT_MANAGER))->muuwuqssqkaieqge(__("\x52\145\x70\x6f\162\164\x73", PR__MDL__COMPONENT_MANAGER))->aseucqksocwomwos()->qemeyueyiwgsokuc(); $this->esoauokkgywesoku([self::ckiaowgkqoewoseo => __("\x48\x6f\163\x74", PR__MDL__COMPONENT_MANAGER), self::uqgcmmosieyimiku => __("\x41\x63\x74\151\157\156", PR__MDL__COMPONENT_MANAGER), self::qkmqmaeuyokqgemg => __("\104\157\155\141\151\156", PR__MDL__COMPONENT_MANAGER), self::eqkeooqcsscoggia => __("\x44\145\x73\143\x72\x69\160\164\151\157\x6e", PR__MDL__COMPONENT_MANAGER)]); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->wuuqgaekqeymecag(Component::class)->gswweykyogmsyawy(__("\x43\x6f\x6d\160\157\156\x65\156\x74", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::squoamkioomemiyi)->kesomeowemmyygey(1, self::okkqqmwseqscceye, __("\x4c\x69\x63\145\156\x73\145\40\x4b\145\171", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, self::qqmqgwwqaqyaiqkc, __("\105\170\143\145\160\164\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\x54\x79\x70\145", PR__MDL__COMPONENT_MANAGER))); parent::ewaqwooqoqmcoomi(); } public function icyeokqcmiyigkic(?string $mosgqccgckcwsoom, $wksoawcgagcgoask, string $sqeykgyoooqysmca = self::qqmqgwwqaqyaiqkc, string $aiamqeawckcsuaou = '') { if (is_numeric($wksoawcgagcgoask)) { goto wcugqegqsuuuwqao; } $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->keeuqgyooycqoygw($gcswwqwyaccgyoee->akkkoiiymmamsauc($wksoawcgagcgoask, self::NAME)); wcugqegqsuuuwqao: if (is_numeric($wksoawcgagcgoask) && $mosgqccgckcwsoom) { goto ouamogymawucwswu; } $sogksuscggsicmac = $this->gygamsmycwkqqwcc(); goto mugqyyeayeyggqqk; ouamogymawucwswu: $kuguwoaesuqsqysu = []; if (!$aiamqeawckcsuaou) { goto asiqwuoswmigcaki; } $kuguwoaesuqsqysu[self::uqgcmmosieyimiku] = $aiamqeawckcsuaou; asiqwuoswmigcaki: if (is_numeric($mosgqccgckcwsoom)) { goto qgeugwymkkiacwoc; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($swgwkyqkakceqeia->akkkoiiymmamsauc($mosgqccgckcwsoom, self::ciyoccqkiamemcmm)); if ($wqykqusigegasqeg) { goto ciykoyeioqgyaeqo; } $kuguwoaesuqsqysu[self::ckiaowgkqoewoseo] = $mosgqccgckcwsoom; goto mqicocmqegwukkwg; ciykoyeioqgyaeqo: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $wqykqusigegasqeg; mqicocmqegwukkwg: goto emmsycooskoqmgeg; qgeugwymkkiacwoc: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $mosgqccgckcwsoom; emmsycooskoqmgeg: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, self::ogqcgemayqiaucag => $wksoawcgagcgoask]); mugqyyeayeyggqqk: return $sogksuscggsicmac; } }
