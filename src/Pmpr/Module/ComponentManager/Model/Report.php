<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6623b6b7c45dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Report extends Common { const qkmqmaeuyokqgemg = self::weayyoewessosyko . self::mswocgcucqoaesaa; const ogqcgemayqiaucag = self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa; const ckumcckgkuuygwkg = "\x69\x6e\x76\x61\x6c\151\144"; const mkgimueycqsggewa = "\x77\x72\157\x6e\x67\137\x76\x61\154\165\145"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::geeqaackcgawagqg)->ckaeqgiaiqwsccke(30)->guiaswksukmgageq(__("\x52\x65\x70\x6f\x72\x74", PR__MDL__COMPONENT_MANAGER))->muuwuqssqkaieqge(__("\122\x65\x70\157\162\x74\163", PR__MDL__COMPONENT_MANAGER))->aseucqksocwomwos()->qemeyueyiwgsokuc(); $this->esoauokkgywesoku([self::ckiaowgkqoewoseo => __("\110\157\x73\x74", PR__MDL__COMPONENT_MANAGER), self::uqgcmmosieyimiku => __("\x41\x63\x74\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER), self::qkmqmaeuyokqgemg => __("\104\157\155\x61\151\156", PR__MDL__COMPONENT_MANAGER), self::eqkeooqcsscoggia => __("\104\145\x73\x63\x72\151\160\164\x69\157\x6e", PR__MDL__COMPONENT_MANAGER)]); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->wuuqgaekqeymecag(Component::class)->gswweykyogmsyawy(__("\x43\x6f\x6d\160\x6f\x6e\145\156\x74", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::squoamkioomemiyi)->kesomeowemmyygey(1, self::okkqqmwseqscceye, __("\x4c\151\x63\x65\x6e\163\145\40\x4b\x65\171", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, self::qqmqgwwqaqyaiqkc, __("\x45\x78\x63\x65\x70\x74\151\157\156", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\x54\x79\160\145", PR__MDL__COMPONENT_MANAGER))); parent::ewaqwooqoqmcoomi(); } public function icyeokqcmiyigkic(?string $mosgqccgckcwsoom, $wksoawcgagcgoask, string $sqeykgyoooqysmca = self::qqmqgwwqaqyaiqkc, string $aiamqeawckcsuaou = '') { if (is_numeric($wksoawcgagcgoask)) { goto kwagwqyusyiyoaqs; } $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->keeuqgyooycqoygw($gcswwqwyaccgyoee->akkkoiiymmamsauc($wksoawcgagcgoask, self::NAME)); kwagwqyusyiyoaqs: if (is_numeric($wksoawcgagcgoask) && $mosgqccgckcwsoom) { goto uukumskkeggaowck; } $sogksuscggsicmac = $this->gygamsmycwkqqwcc(); goto cggowoquuiwqkyew; uukumskkeggaowck: $kuguwoaesuqsqysu = []; if (!$aiamqeawckcsuaou) { goto yowsmsiyimmimemc; } $kuguwoaesuqsqysu[self::uqgcmmosieyimiku] = $aiamqeawckcsuaou; yowsmsiyimmimemc: if (is_numeric($mosgqccgckcwsoom)) { goto sqiciiuwmykocycc; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($swgwkyqkakceqeia->akkkoiiymmamsauc($mosgqccgckcwsoom, self::ciyoccqkiamemcmm)); if ($wqykqusigegasqeg) { goto kiqogmwcgcamwiig; } $kuguwoaesuqsqysu[self::ckiaowgkqoewoseo] = $mosgqccgckcwsoom; goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $wqykqusigegasqeg; iomcaiwewsawiamu: goto eequksumcoogyoem; sqiciiuwmykocycc: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $mosgqccgckcwsoom; eequksumcoogyoem: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, self::ogqcgemayqiaucag => $wksoawcgagcgoask]); cggowoquuiwqkyew: return $sogksuscggsicmac; } }
