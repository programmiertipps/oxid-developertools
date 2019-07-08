<?php
/**
 * Modul: pt_developertools
 * Web: https://www.programmier-tipps.de
 * Mail: kontakt@programmier-tipps.de
 * (c) 2019 by programmier-tipps.de
 */

namespace \ProTipps\PtDevelopertools\Application\Controller\Admin;

class pt_UpdateView extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController {

    public function render()
    {
        parent::render();
        return 'pt_updateviews.tpl';
    }

    public function pt_getShopName()
    {
        $oConfig = $this->getConfig();
        return $oConfig->getActiveShop()->oxshops__oxname->value;
    }

    public function pt_rebuildViews()
    {
        if (\OxidEsales\Eshop\Core\Registry::getSession()->getVariable("malladmin")) {
            $oMetaData = oxNew(\OxidEsales\Eshop\Core\DbMetaDataHandler::class);
            $this->_aViewData["blViewSuccess"] = $oMetaData->updateViews();
        }
    }

}
