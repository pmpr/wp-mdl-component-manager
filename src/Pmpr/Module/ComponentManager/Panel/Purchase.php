<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b70b3c49b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as PurchaseModel; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\x63\157\x6d\x70\157\x6e\145\156\x74\55\155\x61\x6e\141\x67\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\57\147\145\164\x2d\160\165\x72\143\150\141\x73\x65\x73", [Constants::okeuagwgwkmiokac => [], Constants::oaggieeykyaoiiyw => self::uigoseacoukemwqc, Constants::wwgusigoaksqmwsm => [$this, "\x6b\x73\x79\153\x75\x61\x79\x6b\x79\171\165\161\x67\x73\x77\147"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (!is_wp_error($keccaugmemegoimu)) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if ($wqogggcaamgeiwew) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = $gkyciwoiiisgywcs->get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); } $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, PurchaseModel::symcgieuakksimmu(), [$eqwoegegiamegqsm->megqywqeuquawkim(PurchaseModel::qkmqmaeuyokqgemg, $wqogggcaamgeiwew)]); } } return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }
