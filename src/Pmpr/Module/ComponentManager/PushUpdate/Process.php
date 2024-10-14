<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d89e69c831             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\PushUpdate; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Process\Queue; class Process extends Queue { const oyouaagycauaqgkc = "\143\x6f\x6d\160\x6f\x6e\145\x6e\x74\x5f\155\x61\x6e\141\147\x65\162\x5f\152\x6f\142\x5f\x70\x75\163\x68\x5f\165\160\x64\141\164\x65"; public function eamuuiioigiouimg($wksoawcgagcgoask, $wqogggcaamgeiwew) : int { $ksaameoqigiaoigg = 0; if (!$this->yyuksmqogammigqm($wksoawcgagcgoask)) { $this->ksicwcssyugsigka(time(), self::oyouaagycauaqgkc, [Constants::ocwsuwyiiasigqaa => $wksoawcgagcgoask, Constants::oyaoekcogwkcekcc => $wqogggcaamgeiwew]); } return $ksaameoqigiaoigg; } public function yyuksmqogammigqm($wksoawcgagcgoask) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::oyouaagycauaqgkc, Constants::okeuagwgwkmiokac => [Constants::ocwsuwyiiasigqaa => $wksoawcgagcgoask]]); } }
