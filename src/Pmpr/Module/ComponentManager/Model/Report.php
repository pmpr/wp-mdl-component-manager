<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             669c4445875de             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Report extends Common { const qkmqmaeuyokqgemg = self::weayyoewessosyko . self::mswocgcucqoaesaa; const ogqcgemayqiaucag = self::ocwsuwyiiasigqaa . self::mswocgcucqoaesaa; const ckumcckgkuuygwkg = "\x69\156\x76\141\154\x69\144"; const mkgimueycqsggewa = "\167\162\x6f\x6e\147\137\x76\x61\154\165\145"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::geeqaackcgawagqg)->ckaeqgiaiqwsccke(30)->guiaswksukmgageq(__("\x52\145\x70\x6f\162\x74", PR__MDL__COMPONENT_MANAGER))->muuwuqssqkaieqge(__("\x52\145\x70\x6f\162\164\163", PR__MDL__COMPONENT_MANAGER))->aseucqksocwomwos()->qemeyueyiwgsokuc(); $this->esoauokkgywesoku([self::ckiaowgkqoewoseo => __("\110\157\163\164", PR__MDL__COMPONENT_MANAGER), self::uqgcmmosieyimiku => __("\x41\x63\x74\151\157\x6e", PR__MDL__COMPONENT_MANAGER), self::qkmqmaeuyokqgemg => __("\104\157\155\x61\151\x6e", PR__MDL__COMPONENT_MANAGER), self::eqkeooqcsscoggia => __("\x44\x65\x73\x63\162\151\160\x74\x69\157\156", PR__MDL__COMPONENT_MANAGER)]); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->wuuqgaekqeymecag(Component::class)->gswweykyogmsyawy(__("\x43\x6f\155\160\157\x6e\145\x6e\x74", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($this->yyuiuwgokmwioomq(self::squoamkioomemiyi)->kesomeowemmyygey(1, self::okkqqmwseqscceye, __("\x4c\x69\143\145\156\x73\145\40\113\145\171", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, self::qqmqgwwqaqyaiqkc, __("\x45\x78\143\145\160\164\x69\157\156", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\x54\171\160\145", PR__MDL__COMPONENT_MANAGER))); parent::ewaqwooqoqmcoomi(); } public function icyeokqcmiyigkic(?string $mosgqccgckcwsoom, $wksoawcgagcgoask, string $sqeykgyoooqysmca = self::qqmqgwwqaqyaiqkc, string $aiamqeawckcsuaou = '') { if (is_numeric($wksoawcgagcgoask)) { goto aomysykcgikegiau; } $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->keeuqgyooycqoygw($gcswwqwyaccgyoee->akkkoiiymmamsauc($wksoawcgagcgoask, self::NAME)); aomysykcgikegiau: if (is_numeric($wksoawcgagcgoask) && $mosgqccgckcwsoom) { goto kosaqwikueyksqmw; } $sogksuscggsicmac = $this->gygamsmycwkqqwcc(); goto gicyayswqyuoekcq; kosaqwikueyksqmw: $kuguwoaesuqsqysu = []; if (!$aiamqeawckcsuaou) { goto cwwmimggaaecmucw; } $kuguwoaesuqsqysu[self::uqgcmmosieyimiku] = $aiamqeawckcsuaou; cwwmimggaaecmucw: if (is_numeric($mosgqccgckcwsoom)) { goto ykomgumacooyomsk; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($swgwkyqkakceqeia->akkkoiiymmamsauc($mosgqccgckcwsoom, self::ciyoccqkiamemcmm)); if ($wqykqusigegasqeg) { goto awoaooyoeoyeeqee; } $kuguwoaesuqsqysu[self::ckiaowgkqoewoseo] = $mosgqccgckcwsoom; goto ogqmesokykywseys; awoaooyoeoyeeqee: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $wqykqusigegasqeg; ogqmesokykywseys: goto mqkmcysgoiaouiwm; ykomgumacooyomsk: $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $mosgqccgckcwsoom; mqkmcysgoiaouiwm: $sogksuscggsicmac = $this->gscuuyuyauokoyuo([self::squoamkioomemiyi => $sqeykgyoooqysmca, self::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, self::ogqcgemayqiaucag => $wksoawcgagcgoask]); gicyayswqyuoekcq: return $sogksuscggsicmac; } }
