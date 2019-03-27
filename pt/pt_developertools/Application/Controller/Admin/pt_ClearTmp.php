<?php
/**
 * Modul: pt_developertools
 * Version: 1.0.0
 * Web: https://www.programmier-tipps.de
 * Mail: kontakt@programmier-tipps.de
 * (c) 2019 by programmier-tipps.de
 */


class pt_ClearTmp extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController {

    protected $_sClearCacheLog;
    protected $_sClearLog;

    public function render()
    {
        parent::render();
        return 'pt_cleartmp.tpl';
    }

    public function pt_getTmpFiles()
    {
        $getDir = glob('../tmp/*');
        foreach ($getDir as $files) {
            echo $files . "<br />";
        };
    }

    public function pt_getShopName()
    {
        $sConfig = $this->getConfig();
        return $sConfig->getActiveShop()->oxshops__oxname->value;
    }

    public function pt_cleartmpfiles()
    {
        $this->_sClearLog = "Temp-Ordner erfolgreich geleert.";
        $clearDir = glob('../tmp/*');
        $clearDir = array_merge( $clearDir, glob('../tmp/smarty/*') );
        foreach($clearDir as $file) {
            if(!@unlink($file) && $file != "../tmp" && $file != "../tmp/smarty") {
                $this->_sClearCacheLog .= "Konnte Datei \"".$file."\" nicht entfernen.<br />";
            }
        }
        $this->_aViewData["clearcachelog"] = $this->_sClearCacheLog;
        $this->_aViewData["clearcachesuccess"] = $this->_sClearLog;
    }

}
