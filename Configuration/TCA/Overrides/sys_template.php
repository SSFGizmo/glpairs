<?php
defined('TYPO3') || die();

// register static template with the name Pairs
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('glpairs', 'Configuration/TypoScript', 'Pairs');
