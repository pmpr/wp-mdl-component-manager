<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6623b6b7c45dc             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\x63\157\155\x70\157\x6e\145\156\164\x2d\x6d\141\156\x61\x67\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\57\147\x65\164\55\160\165\x72\x63\x68\x61\x73\145\x73", ["\141\x72\x67\x73" => [], "\x6d\145\164\x68\157\144\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\x62\x61\x63\153" => [$this, "\153\x73\171\x6b\x75\x61\x79\x6b\x79\171\165\x71\x67\163\167\147"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kyiwsiakwgiwouyi; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto owgsameoayaogsma; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); oeamoqweiueaueay: } icumkkykaoqycqqu: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [self::ciyoccqkiamemcmm => $wqogggcaamgeiwew, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); owgsameoayaogsma: kyiwsiakwgiwouyi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
