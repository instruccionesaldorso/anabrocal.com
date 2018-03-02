<?php

/**
 * Extension Manager/Repository config file for ext "tmpl_foundation".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Ana Brocal',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'fluid_styled_content' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Instrucciones\\TmplBootstrap\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Sergio Catalá',
    'author_email' => 'instruccionesaldorso@gmail.com',
    'author_company' => 'Instrucciones',
    'version' => '1.0.0',
];
