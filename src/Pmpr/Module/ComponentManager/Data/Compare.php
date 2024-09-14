<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ec4816940             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Data; use Pmpr\Common\Foundation\Data\Data; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Traits\ToArrayTrait; class Compare extends Data { use ToArrayTrait; protected array $columns = []; protected string $name = ''; protected array $rows = []; public function __construct(?string $ymqmyyeuycgmigyo) { $this->usuqmwksoeaayaig($ymqmyyeuycgmigyo); } public function usuqmwksoeaayaig(string $ymqmyyeuycgmigyo) : self { $this->name = $ymqmyyeuycgmigyo; return $this; } public function aakmagwggmkoiiyu() : string { return $this->name; } public function kywqieosgkokaiue(?string $meqocwsecsywiiqs, array $icwicymcioeyeyek = []) : self { $this->rows[] = [Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::uiwqcumqkgikqyue => $icwicymcioeyeyek]; return $this; } public function cqqyaosqycscowyw() : array { return $this->rows; } public function ckskqqqwakugsmoc(?string $uusmaiomayssaecw, ?string $meqocwsecsywiiqs) : self { $this->columns[$uusmaiomayssaecw] = $meqocwsecsywiiqs; return $this; } public function isqsicqgwyyasyke() : array { return $this->columns; } }
