<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6623b6b7c45dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Setting; use Pmpr\Module\DomainManager\Backlink\Model as Backlink; use Pmpr\Module\DomainManager\Model\Domain; class Component extends Common { const ouwcgiuiymgwouec = "\x65\x6e\x5f\164\x69\164\x6c\145"; const wucysakokksokumi = "\146\141\137\x74\x69\x74\x6c\x65"; const ksakwsycwcqisgiu = "\x72\145\x70\157\162\164" . self::mswocgcucqoaesaa; const qkmqmaeuyokqgemg = self::weayyoewessosyko . self::mswocgcucqoaesaa; const wygegsqueakqiccy = "\x62\x61\143\153\x6c\x69\x6e\x6b" . self::mswocgcucqoaesaa; const yegaaaygeimasokq = "\x6c\x61\x73\164\x5f\x75\x70\x64\141\164\145"; const bsqkociucacssuum = "\160\x75\x62\x6c\151\163\150\137\x64\x75\145"; const wsymueygaeiiwsiw = "\142\x61\143\153\x6c\x69\156\x6b\137\x6d\x6f\144\x61\154"; const qscgeqoccoiyaeoi = "\x65\x6e\137\144\x65\x73\143\162\x69\x70\x74\x69\157\x6e"; const zgcmquuuyyakwqqm = "\146\x61\137\144\145\163\143\x72\x69\x70\164\151\x6f\x6e"; const mkamewwosmwuwwqe = "\x64\x6f\167\x6e\154\157\141\x64\137"; const ieagekqsqmcsqqeo = self::mkamewwosmwuwwqe . "\x73\164\141\162\164\137\143\x6f\x75\156\x74"; const caecscgwwciyemog = self::mkamewwosmwuwwqe . "\144\x61\x69\x6c\171\x5f\143\157\165\x6e\x74"; const keqoqmmgsiegwskg = self::mkamewwosmwuwwqe . "\x72\x65\141\154\x5f\143\157\165\156\164"; const mawokyacsmmqmsoo = "\x61\x63\x74\x69\x76\x65\137\151\x6e\x73\x74\x61\154\154"; const iuisqwiqesgyqsyg = "\143\x6f\155\151\x6e\147\137\163\157\157\x6e"; public $timestamps = [self::CREATED_AT]; public function ckgmycmaukqgkosk() { $this->labelKey = $this->caokeucsksukesyo()->eiwcuqigayigimak()->miqkyauycmkywoka() ? self::wucysakokksokumi : self::ouwcgiuiymgwouec; $this->showTimestamp = false; parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->ckaeqgiaiqwsccke(0)->guiaswksukmgageq(__("\x43\x6f\155\160\x6f\156\145\x6e\164", PR__MDL__COMPONENT_MANAGER))->muuwuqssqkaieqge(__("\x43\x6f\x6d\160\x6f\156\x65\156\164\x73", PR__MDL__COMPONENT_MANAGER))->yioesawwewqaigow(IconInterface::oweoqccsyyusoqei)->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(); } public function mcaggmuyamgsomaa($ccowyogiqwikkkie = [], $aokagokqyuysuksm = null, $tsuauommsquiesmk = null, $igqsaukqcqscimok = null) : array { $ccowyogiqwikkkie["\165\x70\x64\x61\164\x65\x5f\144\141\164\141"] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__("\125\160\x64\141\164\x65\x20\104\141\164\141", PR__MDL__COMPONENT_MANAGER), "\x23", ["\143\154\141\x73\163" => "\165\x70\144\x61\164\145\55\x63\x6f\x6d\x70\x6f\156\145\x6e\x74\55\x61\143\164\151\157\x6e", "\144\x61\164\x61\55\151\144" => $aokagokqyuysuksm, "\x61\x72\151\141\55\154\141\x62\x65\x6c" => __("\x55\x70\x64\141\164\145\x20\104\x61\164\x61", PR__MDL__COMPONENT_MANAGER)]); return parent::mcaggmuyamgsomaa($ccowyogiqwikkkie, $aokagokqyuysuksm, $tsuauommsquiesmk, $igqsaukqcqscimok); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->gysoeyaguiyewoes(self::NAME)->eccqsggkcosmqumc()->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\103\x6f\x6d\x70\x6f\x6e\x65\156\164\x20\x4e\141\155\x65", PR__MDL__COMPONENT_MANAGER)), $this->gysoeyaguiyewoes(self::wucysakokksokumi)->gswweykyogmsyawy(__("\x50\145\x72\x73\x69\x61\x6e\x20\124\151\164\154\145", PR__MDL__COMPONENT_MANAGER)), $this->gysoeyaguiyewoes(self::ouwcgiuiymgwouec)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\105\156\x67\x6c\x69\163\x68\x20\124\151\x74\154\145", PR__MDL__COMPONENT_MANAGER)), $this->yyuiuwgokmwioomq(self::squoamkioomemiyi)->kesomeowemmyygey(1, self::aqikuweekkucgqoy, __("\115\157\x64\165\154\145", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, self::ykywsqyeckcgqyik, __("\103\x6f\x76\x65\x72", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(3, self::kqeokggqcsesmqco, __("\103\x75\163\164\157\155", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(4, self::cwacquagagwkcisc, __("\103\157\x6d\155\157\156", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\124\171\x70\145", PR__MDL__COMPONENT_MANAGER)), $this->yyuiuwgokmwioomq(self::ciywsqoeiymemsys)->kesomeowemmyygey(1, self::iuisqwiqesgyqsyg, __("\x43\157\x6d\151\156\147\40\123\x6f\x6f\156", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, self::wmmucsiyiyusmssm, __("\120\x75\142\x6c\151\163\x68", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(3, self::yokmsocosssowgke, __("\x52\x65\166\151\145\x77", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(4, self::ywskismomwmcsqam, __("\104\162\x61\146\164", PR__MDL__COMPONENT_MANAGER))->gswweykyogmsyawy(__("\123\x74\x61\x74\x75\163", PR__MDL__COMPONENT_MANAGER)), $this->qoemykoeuecmsmwe(self::ieagekqsqmcsqqeo)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\123\x74\141\x72\x74\x20\x43\x6f\x75\156\x74", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(0), $this->qoemykoeuecmsmwe(self::iuqumwggccmcuyem)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x50\162\x69\x6f\162\151\x74\171", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(1), $this->qoemykoeuecmsmwe(self::caecscgwwciyemog)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x44\141\x69\x6c\x79\40\103\157\165\156\164", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(0), $this->qoemykoeuecmsmwe(self::keqoqmmgsiegwskg)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\122\145\x61\154\x20\103\157\x75\156\x74", PR__MDL__COMPONENT_MANAGER)), $this->usqseiuaeauwuwus(self::bsqkociucacssuum)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x50\165\142\x6c\x69\163\x68\40\x44\165\145", PR__MDL__COMPONENT_MANAGER)), $this->qoemykoeuecmsmwe(self::oguseymmyyoyaako)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\120\x72\x6f\144\x75\x63\x74", PR__MDL__COMPONENT_MANAGER)), $this->usqseiuaeauwuwus(self::wsymueygaeiiwsiw)->acokiqqgsmoqaeyu()->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\x42\141\x63\153\x6c\x69\x6e\153\x20\x4d\157\144\x61\x6c", PR__MDL__COMPONENT_MANAGER)), $this->eoaomaokwkwqyqiq(self::qkmqmaeuyokqgemg)->ckmqkgwcusyaegmm(Domain::class)->wakqsiacyacmumuw()->gswweykyogmsyawy(__("\x41\163\x73\151\x67\156\145\144\x20\104\157\x6d\141\x69\x6e\x73", PR__MDL__COMPONENT_MANAGER)), $this->ksiucgwggkwuimue(self::mkousmkiawwousws)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\111\x6d\141\147\x65", PR__MDL__COMPONENT_MANAGER))->jyumyyugiwwiqomk(0), $this->gysoeyaguiyewoes(self::zgcmquuuyyakwqqm)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\120\145\162\x73\x69\141\x6e\40\104\145\163\143\162\151\160\164\x69\157\x6e", PR__MDL__COMPONENT_MANAGER)), $this->gysoeyaguiyewoes(self::qscgeqoccoiyaeoi)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x45\156\x67\154\x69\x73\150\x20\104\x65\163\143\162\x69\x70\x74\151\157\x6e", PR__MDL__COMPONENT_MANAGER)), $this->eoaomaokwkwqyqiq(self::wygegsqueakqiccy)->ckgquisaimmgwuyu(Backlink::class)->gswweykyogmsyawy(__("\102\x61\x63\x6b\x6c\151\x6e\x6b\x73", PR__MDL__COMPONENT_MANAGER)), $this->eoaomaokwkwqyqiq(self::ksakwsycwcqisgiu)->ckgquisaimmgwuyu(Report::class)->gswweykyogmsyawy(__("\122\x65\160\x6f\x72\x74\x73", PR__MDL__COMPONENT_MANAGER)), $this->usqseiuaeauwuwus(self::auugqowqueaocgsu)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\x56\x65\x72\x73\x69\x6f\x6e", PR__MDL__COMPONENT_MANAGER)), $this->qwwuoqeeiyuoyogs(self::yegaaaygeimasokq)->gswweykyogmsyawy(__("\x4c\141\163\x74\40\125\x70\144\141\x74\145", PR__MDL__COMPONENT_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function aoqwywcqmoqaukkq() { $this->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::NAME)->kqqqugemmqagucuq())->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::wucysakokksokumi))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::ouwcgiuiymgwouec)->kqqqugemmqagucuq())->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::squoamkioomemiyi)->mkmssscwmeekwgqo()->qyucewwiggkyeaso([self::kqeokggqcsesmqco, self::aqikuweekkucgqoy, self::ykywsqyeckcgqyik], self::qkmqmaeuyokqgemg)->qyucewwiggkyeaso([self::aqikuweekkucgqoy, self::ykywsqyeckcgqyik], [self::oguseymmyyoyaako, self::ieagekqsqmcsqqeo, self::caecscgwwciyemog]))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::ciywsqoeiymemsys)->mkmssscwmeekwgqo()->qyucewwiggkyeaso(self::iuisqwiqesgyqsyg, self::bsqkociucacssuum))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::ieagekqsqmcsqqeo)->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::caecscgwwciyemog)->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::bsqkociucacssuum)->iccqusgqmsqaiqow())->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::oguseymmyyoyaako)->ukqywcsoogkyoaoa(self::oguseymmyyoyaako))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::wsymueygaeiiwsiw)->acauweqyyugwisqc(Setting::symcgieuakksimmu()->icioieqkoswsyouk([self::aisguagukaewucii => self::eoaiagsgqsmskugs])))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::qkmqmaeuyokqgemg)->ugquamoakekwyiqg(Domain::class))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::iuqumwggccmcuyem)->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::zgcmquuuyyakwqqm)->gsomueooycksswcy()->qsecygiycssgacqs(3))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::qscgeqoccoiyaeoi)->gsomueooycksswcy()->qsecygiycssgacqs(3))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::mkousmkiawwousws)->mkmssscwmeekwgqo()); parent::aoqwywcqmoqaukkq(); } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::wsymueygaeiiwsiw: if (!$eqgoocgaqwqcimie) { goto wcesymwqykqoyuqk; } $omkysikckkcieckq = Setting::symcgieuakksimmu()->icioieqkoswsyouk([self::ascagqcquwgmygkm => $eqgoocgaqwqcimie, self::aisguagukaewucii => self::ckmqoekmugkggeym]); if ($this->wkcuasmkgoscaiay()) { goto goacqqsgaaigyuaw; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, self::TEXT, ''); goto meawswgwagoqgkye; goacqqsgaaigyuaw: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($omkysikckkcieckq, self::qescuiwgsyuikume) ?: $eqgoocgaqwqcimie; meawswgwagoqgkye: wcesymwqykqoyuqk: goto ocokwuuquaokmasc; case self::wucysakokksokumi: case self::ouwcgiuiymgwouec: if (!$this->wmwguecgowcscues()) { goto usqgaogkqgemuima; } $eqgoocgaqwqcimie = sprintf("\x25\163\74\x2f\x62\162\x3e\x28\45\x73\x29", $eqgoocgaqwqcimie, $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mksyucucyswaukig, self::NAME)); usqgaogkqgemuima: goto ocokwuuquaokmasc; case self::mkousmkiawwousws: if (!$eqgoocgaqwqcimie) { goto mswsoaimesegiiic; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($eqgoocgaqwqcimie); mswsoaimesegiiic: goto ocokwuuquaokmasc; case self::oguseymmyyoyaako: if (!$eqgoocgaqwqcimie) { goto egasokooagakisiy; } $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak($eqgoocgaqwqcimie); egasokooagakisiy: goto ocokwuuquaokmasc; } yiwiqaqmwiogawym: ocokwuuquaokmasc: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function kosiqqekkquoseki($gwgucoaaqcwwciqq, ?string &$uamcoiueqaamsqma = null, ?string $sqeykgyoooqysmca = self::aqikuweekkucgqoy, bool $ogkqsyskamkuscqc = false, ?string $qwcmueausqgiwigy = null) { if (!$qwcmueausqgiwigy) { goto kecwuwwcwokuksyq; } $uiewakwqscemywuo = [self::ciyoccqkiamemcmm => "\x25{$qwcmueausqgiwigy}\45", self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::eugyciakiowwcuwm => self::augocsiaqqukkuui]; $uoomaookgsyciacm = [[self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::iowgsqgiaamyuswi => [self::NAME => $uiewakwqscemywuo, self::wucysakokksokumi => $uiewakwqscemywuo, self::ouwcgiuiymgwouec => $uiewakwqscemywuo]]]; kecwuwwcwokuksyq: $uoomaookgsyciacm[self::ciywsqoeiymemsys] = [self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::ciyoccqkiamemcmm => [self::wmmucsiyiyusmssm, self::iuisqwiqesgyqsyg]]; $uoomaookgsyciacm[] = [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::ciywsqoeiymemsys, self::ciyoccqkiamemcmm => [self::wmmucsiyiyusmssm, self::iuisqwiqesgyqsyg]]; $uoomaookgsyciacm[] = [self::ciyoccqkiamemcmm => self::eeccqomoaqsawouy, self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::iuqumwggccmcuyem]; $siykeiywomwwuoiw = null; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); if ($mokawwccycoiqeka = $swgwkyqkakceqeia->gwkkkwyoomgsiaou($gwgucoaaqcwwciqq)) { goto goeoymmqqqeeoime; } $uamcoiueqaamsqma = __("\x53\x6f\x72\162\x79\x20\142\165\x74\40\x69\x74\47\163\40\x73\141\155\x65\163\x20\x79\157\x75\162\40\144\x6f\x6d\141\151\156\40\156\x6f\164\40\162\145\x67\151\163\164\x65\162\x65\x64\x2e\40\160\x6c\x65\141\x73\145\x20\162\x65\x67\151\163\x74\145\x72\x20\144\157\155\141\151\156\x20\141\156\x64\x20\164\150\145\x6e\40\164\x72\171\x20\x61\x67\x61\151\x6e", PR__MDL__COMPONENT_MANAGER); goto eiawsoasmscmqswa; goeoymmqqqeeoime: $uoomaookgsyciacm[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $siykeiywomwwuoiw = false; if (self::kqeokggqcsesmqco === $sqeykgyoooqysmca || $ogkqsyskamkuscqc) { goto qgegkeomwscwwiuw; } [$syeseoiyagmgumcy] = $this->acamgaegcsioysiw(self::qkmqmaeuyokqgemg, true); $uoomaookgsyciacm[self::qkmqmaeuyokqgemg] = [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc, self::ugsuecoyuqcamsac => $syeseoiyagmgumcy]; $uoomaookgsyciacm[] = [self::ciyoccqkiamemcmm => $swgwkyqkakceqeia::ogqcgemayqiaucag, self::meisqwykgaymauka => self::qkmqmaeuyokqgemg, self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew]; goto qmiwsequckckoaei; qgegkeomwscwwiuw: $siykeiywomwwuoiw = $swgwkyqkakceqeia->mgacegaoeamymmya($swgwkyqkakceqeia::ogqcgemayqiaucag, $mokawwccycoiqeka); qmiwsequckckoaei: $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); eiawsoasmscmqswa: return $siykeiywomwwuoiw; } public function ukcqkkgyogwoiccm() : array { return [self::squoamkioomemiyi]; } }
