<?php
/**
 * Modul: pt_developertools
 * Web: https://www.programmier-tipps.de
 * Mail: kontakt@programmier-tipps.de
 * (c) 2019 by programmier-tipps.de
 */

namespace \ProTipps\PtDevelopertools\Application\Controller\Admin;

class pt_LogViewer extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController {

    public function render()
    {
        parent::render();
        return 'pt_logviewer.tpl';
    }

    public function pt_showExceptionlog()
    {
        $sLogfile = \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('sShopDir').'log/oxideshop.log';
        if (filesize($sLogfile) > 0) {
            $fOpenFile = fopen($sLogfile, 'r');
            $fReadFile = fread($fOpenFile, filesize($sLogfile));
        } else {
            $fReadFile = false;
        }
        return $fReadFile;
    }

    public function pt_showLastModify()
    {
        $sLogfile = \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('sShopDir').'log/oxideshop.log';
        $fFileTime = date ("d.m.Y - H:i:s", filemtime($sLogfile));
        return $fFileTime;
    }

    public function pt_showFileSize()
    {
        $sLogfile = \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('sShopDir').'log/oxideshop.log';
        $fSize = round(filesize($sLogfile)/1024, 2);
        return $fSize;
    }

    public function pt_getShopName()
    {
        $oConfig = $this->getConfig();
        return $oConfig->getActiveShop()->oxshops__oxname->value;
    }

    public function pt_clearExeptionlog()
    {
        $sLogfile = \OxidEsales\Eshop\Core\Registry::getConfig()->getConfigParam('sShopDir').'log/oxideshop.log';
        $fOpenFile = fopen($sLogfile, 'w');
        @file_put_contents($fOpenFile, '');
        return parent::render();
    }

}
