<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6321d94199d2b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\143\x6f\155\x70\x6f\156\x65\x6e\x74\55\155\141\x6e\x61\x67\145\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\145\x74\55\160\x75\x72\x63\150\x61\163\x65\x73", ["\141\x72\147\x73" => [], "\155\x65\164\150\157\144\163" => self::uigoseacoukemwqc, "\x63\141\x6c\154\142\141\143\x6b" => [$this, "\153\x73\171\x6b\165\141\x79\153\x79\171\165\161\147\163\x77\147"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kgmeiwiakwicgkkk; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto cwswueuqoamqasya; } foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = ManipulateArray::get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); kicwiowcogmauwiy: } kaiesowkgwogqseg: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [self::ciyoccqkiamemcmm => $wqogggcaamgeiwew, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); cwswueuqoamqasya: kgmeiwiakwicgkkk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
