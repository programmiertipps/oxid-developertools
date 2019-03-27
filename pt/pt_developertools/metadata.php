<?php
/**
 * Modul: pt_developertools
 * Version: 1.0.0
 * Web: https://www.programmier-tipps.de
 * Mail: kontakt@programmier-tipps.de
 * (c) 2019 by programmier-tipps.de
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'pt_developertools',
    'title'       => [
        'de' => '.PT | Entwicklerwerkzeuge',
        'en' => '.PT | Developertools'
    ],
    'description' => [
        'de' => 'Der perfekte Helfer für alle OXID eShop Entwickler. Häufig benötigte Aktionen mit nur einem Klick ausführen.',
        'en' => 'The perfect helper for all OXID eShop developers. Perform common actions with just one click.'
    ],
    'thumbnail'     => 'out/admin/src/img/pt-logo.svg',
    'version'       => '1.0.0',
    'author'        => 'Programmier Tipps',
    'url'           => 'https://www.programmier-tipps.de/',
    'email'         => 'kontakt@programmiertipps.de',
    'extend'        => array(),
    'files'         => array(
        'pt_LogViewer'                      => 'pt/pt_developertools/Application/Controller/Admin/pt_LogViewer.php',
        'pt_ClearTmp'                       => 'pt/pt_developertools/Application/Controller/Admin/pt_ClearTmp.php',
        'pt_UpdateView'                     => 'pt/pt_developertools/Application/Controller/Admin/pt_UpdateView.php',
        'pt_Credits'                        => 'pt/pt_developertools/Application/Controller/Admin/pt_Credits.php'
    ),
    'blocks'        => array(
        array(
            'template'                      => 'headitem.tpl',
            'block'                         => 'admin_headitem_inccss',
            'file'                          => 'Application/views/admin/blocks/pt_headitem.tpl'
        ),
    ),
    'templates'     => array(
        'pt_logviewer.tpl'                  => 'pt/pt_developertools/Application/views/admin/tpl/pt_logviewer.tpl',
        'pt_cleartmp.tpl'                   => 'pt/pt_developertools/Application/views/admin/tpl/pt_cleartmp.tpl',
        'pt_updateviews.tpl'                => 'pt/pt_developertools/Application/views/admin/tpl/pt_updateviews.tpl',
        'pt_credits.tpl'                    => 'pt/pt_developertools/Application/views/admin/tpl/pt_credits.tpl'
    ),
    'events'        => array(),
    'settings'      => array(),
];