<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe1209d5db             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateQuery; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateString; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; class Purchase extends Common { const DOMAIN_ID = "\144\x6f\x6d\141\151\x6e" . self::_ID; const LICENSE_KEY = "\x6c\151\143\x65\156\163\145\137\x6b\x65\171"; const COMPONENT_ID = "\x63\x6f\155\160\157\156\145\x6e\164" . self::_ID; const LICENSE_KEY_LENGTH = 16; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconFontawesomeInterface::ICON_CART_SHOPPING)->guiaswksukmgageq(__("\120\165\162\x63\x68\141\x73\145", PR__PKG__COMPONENT_MANAGER))->muuwuqssqkaieqge(__("\x50\165\x72\x63\150\141\x73\x65\163", PR__PKG__COMPONENT_MANAGER))->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ggiieomioscuigco(self::DOMAIN_ID)->uwmyqckcyamwaiww(Domain::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\104\x6f\155\141\151\x6e", PR__PKG__COMPONENT_MANAGER)), $this->ggiieomioscuigco(self::COMPONENT_ID)->uwmyqckcyamwaiww(Component::class)->wuuqgaekqeymecag()->gswweykyogmsyawy(__("\103\157\x6d\160\x6f\x6e\145\156\x74", PR__PKG__COMPONENT_MANAGER)), $this->geqyygqiwiqusekc(self::ORDER)->gswweykyogmsyawy(__("\x4f\162\x64\x65\x72", PR__PKG__COMPONENT_MANAGER)), $this->qcyqgwuuymykkcke(self::LICENSE_KEY)->acceqyqygswoecwe(self::LICENSE_KEY_LENGTH)->gswweykyogmsyawy(__("\x4c\x69\x63\x65\156\163\x65\40\113\x65\171", PR__PKG__COMPONENT_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { goto agyooskogigyayws; egwgyekaiqomyeaa: switch ($qgoqiacsiccwoawi) { case self::DOMAIN_ID: goto cimascmiesomqgqs; cimascmiesomqgqs: $mokawwccycoiqeka = $this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig, self::NAME); goto easuiqiooiwgswmm; easuiqiooiwgswmm: $akyiigeggqowmqqq = Domain::symcgieuakksimmu()->keeuqgyooycqoygw($mokawwccycoiqeka); goto saiuoomgskwgyeya; kuuawiosmkgqsscy: goto mcagemacuqyskogs; goto kwocaqggwcksesce; saiuoomgskwgyeya: $eqgoocgaqwqcimie = ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\162\x65\x66" => ManipulateServer::oiucukewkckkwiqc("\57\x64\x6f\x6d\141\151\x6e\57{$akyiigeggqowmqqq}", "\x70\x61\156\x65\154")], ManipulateArray::get($mokawwccycoiqeka, self::NAME)); goto kuuawiosmkgqsscy; kwocaqggwcksesce: case self::COMPONENT_ID: $eqgoocgaqwqcimie = Component::symcgieuakksimmu()->uikgwcuascgeissw($this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig)); } goto kssuqmsgmaaeqigw; acaeigkmigikeuyu: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); goto kqyeukywmgismyaq; kssuqmsgmaaeqigw: aamgqoqyyooimqkm: goto uwusswwekqcsisus; scockmiqikwwkqse: momuweiasiwskekw: goto okycquokqoamsquy; uwusswwekqcsisus: mcagemacuqyskogs: goto mciumqyyossyiuyk; iiiwsgameuomumgw: switch ($qgoqiacsiccwoawi) { case self::COMPONENT_ID: $eqgoocgaqwqcimie = Component::symcgieuakksimmu()->acouumccocekeswu($this->iscemaoqqckmkago($qgoqiacsiccwoawi, $mksyucucyswaukig)); goto momuweiasiwskekw; case self::ORDER: $eqgoocgaqwqcimie = $this->cqumckukywgkacyo($eqgoocgaqwqcimie); goto momuweiasiwskekw; } goto mcukocaaoyuugoeu; cgwokqwakqcmiieo: bgakaasgwwygosyi: goto egwgyekaiqomyeaa; mciumqyyossyiuyk: aucwccaiqwsmyuaq: goto acaeigkmigikeuyu; agyooskogigyayws: if (ManipulateQuery::aqwquwewocyewasw()) { goto bgakaasgwwygosyi; } goto iiiwsgameuomumgw; okycquokqoamsquy: goto aucwccaiqwsmyuaq; goto cgwokqwakqcmiieo; mcukocaaoyuugoeu: qaewauyekqucciyc: goto scockmiqikwwkqse; kqyeukywmgismyaq: } public function iyeaosmaawmeiigk($wksoawcgagcgoask, $umwqusowiqmyseom, $mokawwccycoiqeka) { goto omgcsmsikaggaooc; ugikgkwuwmgymgus: if (!$this->qumqowkwyaceeqwu($icwicymcioeyeyek)) { goto mukwsuuuqcgesmwc; } goto gsgyayuaekgyoumc; wyqmeyoaggwuioak: $icwicymcioeyeyek[self::LICENSE_KEY] = $this->cewwsggkmycyiuiu(); goto uyksacasqywyessc; sqmqwqeoygcmqcim: cqeoguiqiymkyweo: goto syykqmkiyoekqsek; omgcsmsikaggaooc: $icwicymcioeyeyek = [self::ORDER => $umwqusowiqmyseom, self::DOMAIN_ID => $mokawwccycoiqeka, self::COMPONENT_ID => $wksoawcgagcgoask]; goto wykuosegisygosiq; gsgyayuaekgyoumc: $sogksuscggsicmac = $this->oemauiimmycumcsk(__("\120\x75\x72\143\150\x61\163\x65\40\x61\154\162\x65\x61\144\171\40\145\170\x69\163\x74\163\56", PR__PKG__COMPONENT_MANAGER), 400); goto omemqagskckoeoog; aeuosggumiiwoesm: mukwsuuuqcgesmwc: goto wyqmeyoaggwuioak; omemqagskckoeoog: goto cqeoguiqiymkyweo; goto aeuosggumiiwoesm; uyksacasqywyessc: $this->gscuuyuyauokoyuo($icwicymcioeyeyek); goto sqmqwqeoygcmqcim; syykqmkiyoekqsek: return $sogksuscggsicmac; goto aiqekkyauwswayyq; wykuosegisygosiq: $sogksuscggsicmac = []; goto ugikgkwuwmgymgus; aiqekkyauwswayyq: } private function cewwsggkmycyiuiu() : string { return ManipulateString::uniqid(self::LICENSE_KEY_LENGTH); } }
