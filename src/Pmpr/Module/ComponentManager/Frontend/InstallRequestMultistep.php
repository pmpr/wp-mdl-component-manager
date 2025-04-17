<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801061aa223e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Frontend; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Ajax; use Pmpr\Module\ComponentManager\ComponentManager; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Installation; use Pmpr\Module\ComponentManager\Model\Request; use Pmpr\Module\ComponentManager\Setting; abstract class InstallRequestMultistep extends Multistep { const kucekgcakwigcqiy = self::oksogsuoasasycco . 'serial_check'; const oaiiyoewkkgqawaa = self::oksogsuoasasycco . 'requirements'; const qgmeqwomcqikmcas = self::oksogsuoasasycco . 'setup_information'; public function rsysgcucogueguuk($qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = parent::rsysgcucogueguuk($qqscaoyqikuyeoaw); $gusoaiguqeaommcc = $this->caokeucsksukesyo()->kugiyqykwaskawsc(); $emssaqsyeiqeeiqa = 'component_manager_install_request_%s_fields'; switch ($qqscaoyqikuyeoaw) { case self::kucekgcakwigcqiy: $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->cwiuiiakukcsaakw(Constants::ocwsuwyiiasigqaa)->iygyugseyaqwywyg($this->iaueessccuucgisw()), $gusoaiguqeaommcc->ymuegqgyuagyucws(Installation::sukyayoieioyymka)->kyiucygqsgequoys(__('Setup Serial', PR__MDL__COMPONENT_MANAGER))->qigsyyqgewgskemg('text-center')->jyumyyugiwwiqomk(0)->kqqqugemmqagucuq()->lgwgcswaocouiuik(7, 7), $gusoaiguqeaommcc->qoeiescseggagsqs('check_serial')->gswweykyogmsyawy(__('Check Serial', PR__MDL__COMPONENT_MANAGER))->qigsyyqgewgskemg('main-action btn-block')->qiqckusosoksgaua()->jyumyyugiwwiqomk(999)]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(sprintf($emssaqsyeiqeeiqa, 'check_serial'), $ikgwqyuyckaewsow); $qookweymeqawmcwo[Constants::ymckmcsiymwqucoq] = $gusoaiguqeaommcc->ywoasuyoaicwqqsu($ikgwqyuyckaewsow); break; case self::oaiiyoewkkgqawaa: $qookweymeqawmcwo[Constants::qwumqqyuasyskkkc] = Component::symcgieuakksimmu()->usesgqgqsgskkesi($this->iaueessccuucgisw()); $qookweymeqawmcwo['guide_text'] = __('Guide', PR__MDL__COMPONENT_MANAGER); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->wcwmusaouiqaqeww('confirmation')->gswweykyogmsyawy(__('All the above items are available and I am ready for the installation', PR__MDL__COMPONENT_MANAGER))]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(sprintf($emssaqsyeiqeeiqa, 'requirements'), $ikgwqyuyckaewsow); $qookweymeqawmcwo[Constants::ymckmcsiymwqucoq] = $gusoaiguqeaommcc->ywoasuyoaicwqqsu($ikgwqyuyckaewsow); break; case self::qgmeqwomcqikmcas: $kueeocmceokoouqa = Request::symcgieuakksimmu(); $ikgwqyuyckaewsow = [$gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__('Site Technical Assistant', PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Request::moyywwqyaokwoagk)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Full Name', PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->ymuegqgyuagyucws(Request::samkssymmeowamew)->smigkcmumwkgamkk()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__('Mobile', PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea(), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Request::scawmcmqeimiwoqw)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Answering Method', PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($kueeocmceokoouqa->uqeoyqiwywwmsiew(Request::scawmcmqeimiwoqw)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Request::yayssowawieuycme)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Answering Days', PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($kueeocmceokoouqa->uqeoyqiwywwmsiew(Request::yayssowawieuycme)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)), $gusoaiguqeaommcc->yyuwuqsiucweeoue(Request::sauuqekecqkcamwg)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Answering Hours', PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($kueeocmceokoouqa->uqeoyqiwywwmsiew(Request::sauuqekecqkcamwg)->gkwkqmwweiawigae(Constants::eoaiagsgqsmskugs)), $gusoaiguqeaommcc->wowyaacgaccyeici()->gswweykyogmsyawy(__('Login to Wordpress Admin Panel', PR__MDL__COMPONENT_MANAGER))->cuomeiwckekemywm(__('Our experts need to log in to the WordPress management panel of your site to install and adjust the speed increase module. For this purpose, create a temporary user with the access level of the general manager and enter its information in the form below. After completing the installation and setup process, you can delete the mentioned user or reduce its access level to subscriber.', PR__MDL__COMPONENT_MANAGER), Constants::smkwuwawwaqyimcq, false, ['classes' => 'text-justify']), $gusoaiguqeaommcc->ymuegqgyuagyucws(Request::ayeakwcweywoyqyc)->eyygsasuqmommkua('wp-admin')->kqqqugemmqagucuq()->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Admin Endpoint', PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::csiaccacwgeeqwwo)->kqqqugemmqagucuq()->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Username', PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->ymuegqgyuagyucws(Constants::akywgoyaseymiyka)->kqqqugemmqagucuq()->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Password', PR__MDL__COMPONENT_MANAGER)), $gusoaiguqeaommcc->uouyygwcgsmygaee(Constants::eqkeooqcsscoggia)->gswweykyogmsyawy(__('Necessary Explanations', PR__MDL__COMPONENT_MANAGER))->cuomeiwckekemywm(__('For example, the activation of 2FA or the need to enter with an Iranian IP or any type of information and requirements for successful entry.', PR__MDL__COMPONENT_MANAGER), Constants::smkwuwawwaqyimcq, false, ['classes' => 'text-justify'])]; $ikgwqyuyckaewsow = $this->ocksiywmkyaqseou(sprintf($emssaqsyeiqeeiqa, 'setup_information'), $ikgwqyuyckaewsow); $qookweymeqawmcwo[Constants::ymckmcsiymwqucoq] = $gusoaiguqeaommcc->ywoasuyoaicwqqsu($ikgwqyuyckaewsow); break; case self::kgmkeaoiugsyyeys: $qookweymeqawmcwo[Constants::eoskkkieowogacws] = sprintf('%s<br><br>%s<br><br>%s', __('We have received the request to install the speed increase module for your WordPress site.', PR__MDL__COMPONENT_MANAGER), __('Our experts will start the process of installing and adjusting the module in the next few hours and will be in contact with your technical expert if needed.', PR__MDL__COMPONENT_MANAGER), Setting::symcgieuakksimmu()->iwgmiyoaskssmosa()); break; } return $qookweymeqawmcwo; } public function enqueue() { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qgkgieacuwasgiuy($this, [Constants::eoskkkieowogacws => ['empty_serial' => __('The serial number field cannot be empty.', PR__MDL__COMPONENT_MANAGER), 'serial_not_valid' => __('The serial number entered is not valid. Please enter a valid serial number.', PR__MDL__COMPONENT_MANAGER), 'check_confirmation' => __('Check requirements confirmation.', PR__MDL__COMPONENT_MANAGER), 'check_serial_first' => __('Please insert serial to check your request.', PR__MDL__COMPONENT_MANAGER), 'fill_required_fields' => __('Please fill required fields.', PR__MDL__COMPONENT_MANAGER), 'accept_terms_of_use_first' => __('Please accept terms of use first.', PR__MDL__COMPONENT_MANAGER)], Constants::gueokgaoyascgeqe => [Constants::ckumcckgkuuygwkg => [Constants::ceykmaywyicawmau => __('field can not be empty.', PR__MDL__COMPONENT_MANAGER)]], Constants::wyucqaeuuqkesque => Ajax::ugaesemqyyeiqaki]); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis($this, 'install_request_multistep', 'install_request_multistep.js')->okawmmwsiuauwsiu(Constants::iickqyckyaqcaokm)); parent::enqueue(); } public function oqcaaiewkewqgoww() : array { $asuggasaseaacmqu = parent::oqcaaiewkewqgoww(); return array_merge([self::kucekgcakwigcqiy => ['class' => self::class, Constants::qgqyauaqwqmqseim => IconInterface::qyceyememkgewwgc, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __('Check Setup Serial', PR__MDL__COMPONENT_MANAGER), Constants::eqkeooqcsscoggia => __('User should insert his/her setup serial.', PR__MDL__COMPONENT_MANAGER)], Constants::kekcgssiyagioocg => 10], self::oaiiyoewkkgqawaa => ['class' => self::class, Constants::qgqyauaqwqmqseim => IconInterface::imoykkmkkkaqgouo, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __('Show Requirements', PR__MDL__COMPONENT_MANAGER), Constants::eqkeooqcsscoggia => __('Show setup requirements to user.', PR__MDL__COMPONENT_MANAGER)], Constants::kekcgssiyagioocg => 20], self::qgmeqwomcqikmcas => ['class' => self::class, Constants::qgqyauaqwqmqseim => IconInterface::mgkgqisegywmguem, Constants::okuwysqsegmimaie => [Constants::qescuiwgsyuikume => __('Setup Required information', PR__MDL__COMPONENT_MANAGER), Constants::eqkeooqcsscoggia => __('User should give his/her sites requirements.', PR__MDL__COMPONENT_MANAGER)], Constants::kekcgssiyagioocg => 30]], $asuggasaseaacmqu); } }
