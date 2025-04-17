<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801061aa223e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\Panel\AbstractPanel; class Panel extends AbstractPanel { public function __construct() { $this->name = 'component'; $this->parent = 'store'; parent::__construct(); } public function gigwcakmiyayoigw() { $this->ogyceaekywowkqsc(Purchase::symcgieuakksimmu()); } public function sqwgomwcqysewuks($mkucggyaiaukqoce) : array { return [$this->oeuiuocwuggewqmk('purchase')->saemoowcasogykak(IconInterface::csoyqymugwqiggki)->gswweykyogmsyawy(__('My Components', PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__('Your domain\'s components', PR__MDL__COMPONENT_MANAGER))]; } public function yaegyqkcqwowauga() : array { return [Constants::ocwsuwyiiasigqaa => [Constants::meisqwykgaymauka => [Constants::weayyoewessosyko => __('Domain', PR__MDL__COMPONENT_MANAGER), Constants::ocwsuwyiiasigqaa => __('Component', PR__MDL__COMPONENT_MANAGER), 'component_type' => __('Type', PR__MDL__COMPONENT_MANAGER), 'license_key' => __('License Key', PR__MDL__COMPONENT_MANAGER), 'created_at' => __('Purchase Date', PR__MDL__COMPONENT_MANAGER)]]]; } }
