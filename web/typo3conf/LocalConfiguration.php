<?php
return [
    'BE' => [
        'compressionLevel' => '0',
        'debug' => '0',
        'installToolPassword' => 'dummyInstallToolPassword',
        'loginSecurityLevel' => 'rsa',
        'versionNumberInFilename' => '0',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:5:{s:9:"loginLogo";s:21:"build/images/logo.svg";s:19:"loginHighlightColor";s:7:"#f51d46";s:20:"loginBackgroundImage";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:0:"";}',
            'filemetadata' => 'a:0:{}',
            'fluid_styled_content' => 'a:1:{s:32:"loadContentElementWizardTsConfig";s:1:"1";}',
            'mask' => 'a:9:{s:4:"json";s:61:"typo3conf/ext/tmpl_bootstrap/Resources/Private/Data/mask.json";s:18:"backendlayout_pids";s:3:"0,1";s:7:"content";s:73:"typo3conf/ext/tmpl_bootstrap/Resources/Private/Templates/Extensions/mask/";s:7:"layouts";s:71:"typo3conf/ext/tmpl_bootstrap/Resources/Private/Layouts/Extensions/mask/";s:8:"partials";s:72:"typo3conf/ext/tmpl_bootstrap/Resources/Private/Partials/Extensions/mask/";s:7:"backend";s:81:"typo3conf/ext/tmpl_bootstrap/Resources/Private/Templates/Extensions/mask/backend/";s:15:"layouts_backend";s:89:"typo3conf/ext/tmpl_bootstrap/Resources/Private/Templates/Extensions/mask/backend/Layouts/";s:16:"partials_backend";s:90:"typo3conf/ext/tmpl_bootstrap/Resources/Private/Templates/Extensions/mask/backend/Partials/";s:7:"preview";s:81:"typo3conf/ext/tmpl_bootstrap/Resources/Private/Templates/Extensions/mask/preview/";}',
            'min' => 'a:0:{}',
            'powermail' => 'a:16:{s:12:"disableIpLog";s:1:"0";s:27:"disableMarketingInformation";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:35:"disablePluginInformationMailPreview";s:1:"0";s:13:"enableCaching";s:1:"0";s:15:"l10n_mode_merge";s:1:"1";s:29:"replaceIrreWithElementBrowser";s:1:"0";s:28:"enableTableGarbageCollection";s:1:"0";s:10:"usePreview";s:1:"1";s:12:"cssSelection";s:1:"1";s:14:"feusersPrefill";s:70:"name, address, telephone, fax, email, zip, city, country, www, company";s:12:"disableIPlog";s:1:"0";s:16:"disableStartStop";s:1:"0";s:7:"useIRRE";s:1:"1";s:12:"fileToolPath";s:9:"/usr/bin/";}',
            'realurl' => 'a:7:{s:10:"configFile";s:34:"typo3conf/RealURLConfiguration.php";s:14:"enableAutoConf";s:1:"0";s:14:"autoConfFormat";s:1:"0";s:17:"segTitleFieldList";s:0:"";s:12:"enableDevLog";s:1:"0";s:10:"moduleIcon";s:1:"2";s:19:"enableChashUrlDebug";s:1:"0";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'rte_ckeditor' => 'a:0:{}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:0;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:3:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";}',
            'tmpl_bootstrap' => 'a:0:{}',
            'topcontent' => 'a:0:{}',
            'vhs' => 'a:1:{s:20:"disableAssetHandling";s:1:"0";}',
            'wv_file_cleanup' => 'a:1:{s:19:"fileNameDenyPattern";s:13:"/index.html/i";}',
        ],
    ],
    'EXTCONF' => [
        'dbal' => [
            'handlerCfg' => [
                '_DEFAULT' => [
                    'config' => [
                        'driver' => '',
                    ],
                    'type' => 'adodb',
                ],
            ],
        ],
        'lang' => [
            'availableLanguages' => [
                'es',
            ],
        ],
    ],
    'FE' => [
        'compressionLevel' => '0',
        'debug' => '0',
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => '0',
        'processor_enabled' => '1',
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'INSTALL' => [],
    'SYS' => [
        'devIPmask' => '127.0.0.1,::1',
        'displayErrors' => '1',
        'enableDeprecationLog' => '',
        'encryptionKey' => 'dummyEncriptionKey',
        'sitename' => 'anabrocal.com',
        'sqlDebug' => '0',
        'systemLogLevel' => '0',
        'trustedHostsPattern' => 'SERVER_NAME',
    ],
];
