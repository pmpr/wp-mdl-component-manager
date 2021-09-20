<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148af675f50e             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\API; use Pmpr\Common\Foundation\API\API; class Capture extends API { const API_KEY = "\141\142\x66\62\x38\65\x36\141\x37\x63\x38\60\x64\60\61\x65\142\63\60\x64\x62\144\x35\60\142\67\64\x37\x32\143\145\65\146\63\144\61\x38\x30\71\x30\x38\x34\60\142"; public function __construct() { $this->domain = "\x68\164\164\x70\x73\72\x2f\x2f\x61\160\151\x2e\164\150\165\155\142\x6e\141\151\x6c\56\167\163\57\141\x70\x69\57" . self::API_KEY; parent::__construct(); } public function qikaamumksmwoeqi(string $eeamcawaiqocomwy, $qeswwaqqsyymqawg = 800) { $eeamcawaiqocomwy = esc_url($eeamcawaiqocomwy); $aqykuigiuwmmcieu = false; $keccaugmemegoimu = $this->get("\57\164\150\x75\x6d\x62\156\x61\x69\154\57\147\x65\x74\77\165\162\x6c\x3d{$eeamcawaiqocomwy}\x26\x77\151\144\164\x68\75{$qeswwaqqsyymqawg}"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma)) { goto uegouoiuyoqkcscg; } $aqykuigiuwmmcieu = "\144\141\x74\x61\x3a\151\155\141\147\145\x2f\152\x70\147\73\x62\141\x73\x65\x36\64\54" . base64_encode($keccaugmemegoimu->wesecsykkuakgyec()); uegouoiuyoqkcscg: return $aqykuigiuwmmcieu; } }
