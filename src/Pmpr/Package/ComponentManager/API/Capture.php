<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148f7cdb6fb5             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\API; use Pmpr\Common\Foundation\API\API; class Capture extends API { const API_KEY = "\141\x62\146\62\x38\65\x36\x61\x37\x63\x38\x30\x64\60\x31\145\142\63\x30\x64\x62\144\65\x30\x62\x37\x34\67\x32\143\x65\65\146\63\x64\61\70\60\71\x30\x38\x34\60\142"; public function __construct() { $this->domain = "\150\164\x74\160\163\72\x2f\x2f\x61\x70\x69\x2e\x74\150\165\155\142\x6e\141\x69\x6c\56\x77\163\57\141\x70\151\57" . self::API_KEY; parent::__construct(); } public function qikaamumksmwoeqi(string $eeamcawaiqocomwy, $qeswwaqqsyymqawg = 800) { $eeamcawaiqocomwy = esc_url($eeamcawaiqocomwy); $aqykuigiuwmmcieu = false; $keccaugmemegoimu = $this->get("\57\164\150\165\155\142\156\x61\x69\x6c\57\147\x65\164\77\165\x72\154\75{$eeamcawaiqocomwy}\x26\167\151\144\x74\150\x3d{$qeswwaqqsyymqawg}"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma)) { goto uegouoiuyoqkcscg; } $aqykuigiuwmmcieu = "\144\141\x74\141\72\151\155\141\147\x65\57\152\x70\147\73\x62\141\163\145\66\64\54" . base64_encode($keccaugmemegoimu->wesecsykkuakgyec()); uegouoiuyoqkcscg: return $aqykuigiuwmmcieu; } }
