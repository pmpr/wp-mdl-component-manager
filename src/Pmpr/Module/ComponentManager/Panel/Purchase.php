<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624022c9531c8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\x63\x6f\155\x70\157\x6e\145\156\164\55\155\141\x6e\141\x67\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\145\x74\55\160\x75\x72\143\x68\x61\163\x65\x73", ["\141\162\147\x73" => [], "\x6d\145\x74\150\157\x64\x73" => self::uigoseacoukemwqc, "\143\x61\154\154\142\x61\143\x6b" => [$this, "\153\x73\x79\153\165\141\171\153\171\x79\165\161\147\x73\x77\147"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto cmqucgoewuyieoyk; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto gimmuoqwckiseaik; } foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = ManipulateArray::get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); iqcogmsguwoikame: } quwcqmyokicssyew: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [self::ciyoccqkiamemcmm => $wqogggcaamgeiwew, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); gimmuoqwckiseaik: cmqucgoewuyieoyk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }