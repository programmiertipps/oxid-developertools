<?php
/**
 * Modul: pt_developertools
 * Version: 2.0.0
 * Web: https://www.programmier-tipps.de
 * Mail: kontakt@programmier-tipps.de
 * (c) 2019 by programmier-tipps.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'pt_developertools',
    'title'       => [
        'de' => '.ProTipps | Entwicklerwerkzeuge',
        'en' => '.ProTipps | Developertools'
    ],
    'description' => [
        'de' => 'Der perfekte Helfer für alle OXID eShop Entwickler. Häufig benötigte Aktionen mit nur einem Klick ausführen.',
        'en' => 'The perfect helper for all OXID eShop developers. Perform common actions with just one click.'
    ],
    'thumbnail'     => 'out/admin/src/img/pt-logo.svg',
    'version'       => '2.0.0',
    'author'        => 'Programmier Tipps',
    'url'           => 'https://www.programmier-tipps.de/',
    'email'         => 'kontakt@programmiertipps.de',
    'extend'        => array(),
    'controllers'	=> array(
        'ptdevelopertoolslogviewer'		=> \ProTipps\PtDevelopertools\Application\Controller\Admin\pt_LogViewer::class,
        'ptdevelopertoolscleartmp'		=> \ProTipps\PtDevelopertools\Application\Controller\Admin\pt_ClearTmp::class,
        'ptdevelopertoolsupdateview'	=> \ProTipps\PtDevelopertools\Application\Controller\Admin\pt_UpdateView::class,
        'ptdevelopertoolscredits'		=> \ProTipps\PtDevelopertools\Application\Controller\Admin\pt_Credits::class
    ),
    'blocks'        => array(
        array('template' => 'headitem.tpl',		'block' => 'admin_headitem_inccss',		'file' => 'Application/views/admin/blocks/pt_headitem.tpl'),
    ),
    'templates'     => array(
        'pt_logviewer.tpl'		=> 'protipps/pt_developertools/Application/views/admin/tpl/pt_logviewer.tpl',
        'pt_cleartmp.tpl'		=> 'protipps/pt_developertools/Application/views/admin/tpl/pt_cleartmp.tpl',
        'pt_updateviews.tpl'	=> 'protipps/pt_developertools/Application/views/admin/tpl/pt_updateviews.tpl',
        'pt_credits.tpl'		=> 'protipps/pt_developertools/Application/views/admin/tpl/pt_credits.tpl'
    ),
    'events'        => array(),
    'settings'      => array(),
];