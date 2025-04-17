<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801061aa223e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\API; use Pmpr\Common\Foundation\API\API; class IPDetector extends API { public function __construct() { $this->domain = 'http://ip-api.com/json'; $this->ksiyskmggywgsayu('fields', '147458'); parent::__construct(); } public function mcyaoicyesuysggi($kucumcusyyckayas) { $keccaugmemegoimu = $this->get("/{$kucumcusyyckayas}"); $quscceoaiwasmkcy = false; if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma)) { $sogksuscggsicmac = $this->qemyqseaomicaacs($keccaugmemegoimu); if ($sogksuscggsicmac) { $quscceoaiwasmkcy = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($sogksuscggsicmac, 'countryCode'); } } return $quscceoaiwasmkcy; } }
