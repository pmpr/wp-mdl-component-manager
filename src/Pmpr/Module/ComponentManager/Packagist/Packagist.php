<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6300fe125a7a7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Packagist; use Pmpr\Common\Foundation\Decorator\DecoratorCron; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; use Pmpr\Module\ComponentManager\Setting; class Packagist extends Common { const eiaccaqoswmsoigy = "\x63\x68\x65\x63\x6b\x5f\x70\x61\143\153\x61\x67\151\163\164\137\165\x70\x64\x61\164\145\137\x63\162\157\x6e\x5f\x68\157\157\x6b"; public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\x69\x6e\151\x74"])->qcsmikeggeemccuu(self::eiaccaqoswmsoigy, [$this, "\141\x6f\x75\147\x67\x79\x69\155\x61\x6d\x65\147\165\x65\153\157"]); } public function iemaakgqgqosiecm() { if (!ManipulateAjax::mcgoysmkqsqooceq()) { goto osuscoaaomwcqkew; } Ajax::symcgieuakksimmu(); osuscoaaomwcqkew: } public function init() { $this->miocmcoykayoyyau()->ikqyiskqaaymscgw("\x61\x6a\x61\x78", Ajax::myikkigscysoykgy); if (DecoratorCron::sceqickmyoseqcue(self::eiaccaqoswmsoigy)) { goto cgmgqucewwssmicq; } $cukawkgykqoskaca = $this->weysguygiseoukqw(Setting::gomeigayyekgimuo); if (!(!$cukawkgykqoskaca || !in_array($cukawkgykqoskaca, array_keys(DecoratorCron::mggeycowqkwsieew()), true))) { goto ciucewqgyoiouesq; } $cukawkgykqoskaca = self::wmasmcgmyeoaisoa; ciucewqgyoiouesq: $yiuogaeewyockeak = $this->weysguygiseoukqw(Setting::qkcusmuuciksieoy, "\x31\x37\x3a\x34\63\72\64\x30"); $yiuogaeewyockeak = strtotime(date("\x59\x2d\155\55\144") . "\40{$yiuogaeewyockeak}"); DecoratorCron::uwugaiqywmseksqm($cukawkgykqoskaca, self::eiaccaqoswmsoigy, [], $yiuogaeewyockeak); cgmgqucewwssmicq: $uusmaiomayssaecw = "\x63\150\145\143\x6b\x5f\143\x6f\x6d\x70\x6f\x6e\145\x6e\x74\163\137\144\x61\164\x61"; if (DecoratorOption::get($uusmaiomayssaecw)) { goto mkomygccqkmkumsi; } $this->aouggyimamegueko(true); DecoratorOption::update($uusmaiomayssaecw, 1); mkomygccqkmkumsi: } }
