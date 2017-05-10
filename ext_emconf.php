<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "fb_sales_partner".
 *
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title'            => 'AJAX test',
    'description'      => 'Test AJAX action cached and uncached',
    'category'         => 'plugin',
    'author'           => 'Victor Livakivskyi',
    'state'            => 'stable',
    'uploadfolder'     => '',
    'createDirs'       => '',
    'clearCacheOnLoad' => 1,
    'version'          => '1.0.0',
    'constraints'      => [
        'depends'   => [
            'typo3'        => '8.7.0-8.7.99'
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];