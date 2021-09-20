<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148f82330db2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\API; use Pmpr\Common\Foundation\API\API; class Capture extends API { const API_KEY = "\141\142\146\x32\70\x35\x36\x61\x37\x63\x38\x30\144\x30\x31\145\x62\63\60\x64\142\144\65\60\x62\67\x34\x37\62\x63\145\65\146\63\x64\x31\70\x30\71\60\x38\x34\60\x62"; public function __construct() { $this->domain = "\150\164\x74\x70\163\x3a\57\x2f\x61\160\x69\x2e\164\150\x75\155\x62\x6e\141\151\154\56\167\163\57\141\160\x69\57" . self::API_KEY; parent::__construct(); } public function qikaamumksmwoeqi(string $eeamcawaiqocomwy, $qeswwaqqsyymqawg = 800) { $eeamcawaiqocomwy = esc_url($eeamcawaiqocomwy); $aqykuigiuwmmcieu = false; $keccaugmemegoimu = $this->get("\x2f\x74\x68\x75\155\142\156\x61\151\154\x2f\147\x65\164\77\165\x72\154\x3d{$eeamcawaiqocomwy}\x26\167\151\x64\x74\150\x3d{$qeswwaqqsyymqawg}"); if (!$this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma)) { goto uegouoiuyoqkcscg; } $aqykuigiuwmmcieu = "\144\x61\x74\x61\x3a\151\155\x61\x67\x65\x2f\x6a\x70\x67\73\142\141\x73\x65\x36\x34\x2c" . base64_encode($keccaugmemegoimu->wesecsykkuakgyec()); uegouoiuyoqkcscg: return $aqykuigiuwmmcieu; } }
