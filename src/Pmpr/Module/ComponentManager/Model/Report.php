<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67235726863c6             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; class Report extends Model { const qkmqmaeuyokqgemg = Constants::weayyoewessosyko . Constants::mswocgcucqoaesaa; const ogqcgemayqiaucag = Constants::ocwsuwyiiasigqaa . Constants::mswocgcucqoaesaa; const mkgimueycqsggewa = "\x77\x72\157\x6e\x67\137\x76\x61\x6c\165\x65"; public function register() { $this->muuwuqssqkaieqge(__("\122\x65\160\157\x72\x74\163", PR__MDL__COMPONENT_MANAGER))->guiaswksukmgageq(__("\122\x65\160\157\x72\x74", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::geeqaackcgawagqg)->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 15]); $this->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->esoauokkgywesoku(Constants::ckiaowgkqoewoseo, __("\x48\157\163\x74", PR__MDL__COMPONENT_MANAGER))->esoauokkgywesoku(self::qkmqmaeuyokqgemg, __("\104\157\155\141\151\x6e", PR__MDL__COMPONENT_MANAGER))->esoauokkgywesoku(Constants::uqgcmmosieyimiku, __("\101\143\164\x69\157\x6e", PR__MDL__COMPONENT_MANAGER))->esoauokkgywesoku(Constants::eqkeooqcsscoggia, __("\x44\x65\163\143\162\151\x70\164\151\157\156", PR__MDL__COMPONENT_MANAGER)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ogqcgemayqiaucag)->wuuqgaekqeymecag(Component::class)->gswweykyogmsyawy(__("\103\x6f\x6d\160\x6f\156\145\156\x74", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->kesomeowemmyygey(1, Constants::okkqqmwseqscceye, __("\x4c\x69\x63\x65\x6e\x73\145\x20\113\145\171", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, Constants::qqmqgwwqaqyaiqkc, __("\105\x78\x63\145\160\164\151\157\156", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\124\x79\160\x65", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->qcqeqimisiisswky()->gswweykyogmsyawy(__("\103\162\145\x61\x74\145\144\40\101\x74", PR__MDL__COMPONENT_MANAGER))); parent::uwmqacgewuauagai(); } public function icyeokqcmiyigkic(?string $mosgqccgckcwsoom, $wksoawcgagcgoask, string $sqeykgyoooqysmca = Constants::qqmqgwwqaqyaiqkc, string $aiamqeawckcsuaou = '') { if (!is_numeric($wksoawcgagcgoask)) { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->mwyqswsaeeewsosm($gcswwqwyaccgyoee->iekyeyicoyyawomk()->akkkoiiymmamsauc($wksoawcgagcgoask, Constants::NAME)); } if (is_numeric($wksoawcgagcgoask) && $mosgqccgckcwsoom) { $kuguwoaesuqsqysu = []; if ($aiamqeawckcsuaou) { $kuguwoaesuqsqysu[Constants::uqgcmmosieyimiku] = $aiamqeawckcsuaou; } if (is_numeric($mosgqccgckcwsoom)) { $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $mosgqccgckcwsoom; } else { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->mwyqswsaeeewsosm($swgwkyqkakceqeia->iekyeyicoyyawomk()->akkkoiiymmamsauc($mosgqccgckcwsoom, Constants::ciyoccqkiamemcmm)); if ($wqykqusigegasqeg) { $kuguwoaesuqsqysu[self::qkmqmaeuyokqgemg] = $wqykqusigegasqeg; } else { $kuguwoaesuqsqysu[Constants::ckiaowgkqoewoseo] = $mosgqccgckcwsoom; } } $sogksuscggsicmac = $this->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::ckcuiukmyisueqeo => $kuguwoaesuqsqysu, self::ogqcgemayqiaucag => $wksoawcgagcgoask]); } else { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(); } return $sogksuscggsicmac; } }
