<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284da0c4ec23             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\143\157\155\x70\x6f\156\145\156\x74\55\155\x61\x6e\141\147\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\x65\x74\55\160\165\162\x63\x68\x61\163\145\x73", ["\141\x72\x67\x73" => [], "\155\145\164\150\157\x64\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\154\142\141\x63\x6b" => [$this, "\153\x73\171\153\165\x61\x79\153\x79\x79\165\x71\147\163\x77\147"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto omugkkesagcyagmk; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto mosqsmqimqgqoase; } foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = ManipulateArray::get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); ayyweymyuuiauamo: } yqykqysmiquwoasu: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [self::ciyoccqkiamemcmm => $wqogggcaamgeiwew, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); mosqsmqimqgqoase: omugkkesagcyagmk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
