<?php
namespace Instrucciones\Base\Distribution;

use \TYPO3\CMS\Core\Utility\GeneralUtility;

$currentApplicationContext = GeneralUtility::getApplicationContext();
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' [' . strtoupper((string)$currentApplicationContext) . ']';

if (!function_exists('Instrucciones\\Base\\Distribution\\includeIfExists')) {
	function includeIfExists($file) {
		file_exists($file) && include $file;
	}
}

includeIfExists(__DIR__ . '/../../Configuration/' . $currentApplicationContext . '/Settings.php');
