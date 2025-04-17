<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801061aa223e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\API; use Pmpr\Common\Foundation\API\API; class Capture extends API { public function __construct() { $this->domain = 'https://api.thumbnail.ws/api/abf2856a7c80d01eb30dbd50b7472ce5f3d18090840b'; parent::__construct(); } public function qikaamumksmwoeqi($eeamcawaiqocomwy, $qeswwaqqsyymqawg = 800) { $eeamcawaiqocomwy = esc_url($eeamcawaiqocomwy); $aqykuigiuwmmcieu = false; $keccaugmemegoimu = $this->get("/thumbnail/get?url={$eeamcawaiqocomwy}&width={$qeswwaqqsyymqawg}"); if ($this->occymigcemkqucuw($keccaugmemegoimu, $uamcoiueqaamsqma)) { $aqykuigiuwmmcieu = $this->caokeucsksukesyo()->owgcciayoweymuws()->uiyouwwuscecumsg($this->saegmcouuukeykgi($keccaugmemegoimu), 'image/jpg'); } return $aqykuigiuwmmcieu; } }
