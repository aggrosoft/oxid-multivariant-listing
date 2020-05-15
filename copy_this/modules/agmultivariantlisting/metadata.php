<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
/**
 * Module information
 */
$aModule = array(
    'id'           => 'agmultivariantlisting',
    'title'        => 'Multi Variant Listing',
    'description'  => 'Allows to choose and quick buy multivariants from article listing',
    'version'      => '1.0.0',
    'author'       => 'Aggrosoft GmbH',
    'extend' => [
        // Controller
        'alist' => 'agmultivariantlisting/extensions/controllers/agmultivariantlisting_alist'
    ],
    'blocks' => [
        /*[
            'template' => 'widget/minibasket/minibasket.tpl',
            'block'=>'widget_minibasket_total',
            'file'=> '/views/blocks/widget/minibasket/oepaypalexpresscheckoutminibasket.tpl',
        ]*/
    ]
);