<?php
/**
 * Modul: pt_developertools
 * Web: https://www.programmier-tipps.de
 * Mail: kontakt@programmier-tipps.de
 * (c) 2019 by programmier-tipps.de
 */

namespace \ProTipps\PtDevelopertools\Application\Controller\Admin;

class pt_Credits extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController {

    public function render()
    {
        parent::render();
        return 'pt_credits.tpl';
    }

    public function pt_getShopName()
    {
        $sConfig = $this->getConfig();
        return $sConfig->getActiveShop()->oxshops__oxname->value;
    }

}
