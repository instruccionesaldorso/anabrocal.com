<?php

$TYPO3_CONF_VARS['EXTCONF']['realurl'] = array(
    '_DEFAULT' => array(
        'init' => array(
            'enableCHashCache' => 'true',
            'appendMissingSlash' => 'ifNotFile',
            'enableUrlDecodeCache' => 'true',
            'enableUrlEncodeCache' => 'true',
            'emptyUrlReturnValue' => '/',
        ),
        'redirects' => array(
        ),
        'preVars' => array(
            array(
                'GETvar' => 'no_cache',
                'valueMap' => array(
                    'nc' => 1,
                ),
                'noMatch' => 'bypass',
            ),
            array(
                'GETvar' => 'L',
                'valueMap' => array(
                    'es' => '0',
                ),
                'noMatch' => 'bypass',
            ),
        ),
        'pagePath' => array(
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
            'expireDays' => 7,
            'rootpage_id' => 1,
            'disablePathCache' => '1',
        ),
        'fixedPostVars' => array(
            '_DEFAULT' => array(
                array(
                    'GETvar' => 'tx_ttnews[tt_news]',
                    'lookUpTable' => array(
                        'table' => 'tt_news',
                        'id_field' => 'uid',
                        'alias_field' => 'title',
                        'addWhereClause' => ' AND NOT deleted',
                        'useUniqueCache' => 1,
                        'useUniqueCache_conf' => array(
                            'strtolower' => 1,
                            'spaceCharacter' => '-',
                        ),
                    ),
                ),
            ),
        ),
        'postVarSets' => array(
            '_DEFAULT' => array(
                'cat' => array(
                    'GETvar' => 'tx_ttnews[backPid]',
                ),
            ),
        ),
        'fileName' => array(
            //'defaultToHTMLsuffixOnPrev'=>1,
            'index' => array(
                'rss.xml' => array(
                    'keyValues' => array(
                        'type' => 100,
                    ),
                ),
            ),
        ),
    ),
);

