<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id' => 'marm/categoryorder',
    'title' => 'marmalade :: Drag&Drop Artikelsortierung',
    'description' => [
        'de' => 'Sortieren Sie die Artikel einer Kategorie per Drag & Drop.',
        'en' => 'Sort the products of a category in backend via drag & drop.',
    ],
    'thumbnail' => 'marmalade.jpg',
    'version' => '2.0.0',
    'author' => 'Konstantin Kuznetsov, ProudCommerce',
    'url' => 'http://www.marmalade.de',
    'email' => 'support@marmalade.de',
    'controllers' => [
        'marm_category_order' => \Marmalade\CategoryOrder\Application\Controllers\Admin\CategoryOrderController::class,
    ],

    'extend' => [
    ],

    'templates' => [
        'marm/categoryorder/categoryorder.tpl' => 'marm/categoryorder/Application/views/admin/tpl/marm_category_order.tpl',
        'marm/categoryorder/categoryorder_popup.tpl' => 'marm/categoryorder/Application/views/admin/tpl/popups/marm_category_order_popup.tpl',
    ],

    'blocks' => [
        [
            'template' => 'headitem.tpl',
            'block' => 'admin_headitem_inccss',
            'file' => 'Application/views/admin/tpl/headitem/inccss.block.tpl',
        ],

        [
            'template' => 'headitem.tpl',
            'block' => 'admin_headitem_incjs',
            'file' => 'Application/views/admin/tpl/headitem/incjs.block.tpl',
        ],
    ],

    'settings' => [
    ],

    'events' => [
    ],
);
