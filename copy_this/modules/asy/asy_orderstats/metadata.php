<?php
/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>   
 * @copyright   (C) Alpha-Sys 2008-2016
 * @version     13.12.2016  1.0
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'asy_orderstats',
    'title'        => '<img src="../modules/asy/module_logo.png" alt="Alpha-Sys" title="Alpha-Sys"> Bestell-Statistik deaktivieren',
    'description'  => 'Mit diesem Modul können Sie im Admin die Statistik bei den Bestellungen deaktivieren. Dadurch erhöht sich die Performance bei der Bestellanzeige.',
    'thumbnail'    => 'module_logo.png',
    'version'      => '1.0',
    'author'       => 'Alpha-Sys',
    'email'        => 'fabian.kunkler@alpha-sys.de',
    'url'          => 'http://www.alpha-sys.de',
    'extend'       => array(
        'oxorder' => 'asy/asy_orderstats/models/asy_orderstats__oxorder'
    ),
    'files'        => array(
    ),
    'templates' => array(
    ),
    'blocks' => array(
        array('template' => 'order_overview.tpl', 'block'=>'admin_order_overview_general', 'file'=>'/views/blocks/admin_order_overview_general.tpl'),
    )
    
);