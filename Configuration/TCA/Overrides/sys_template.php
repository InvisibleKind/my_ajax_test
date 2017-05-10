<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'my_ajax_test',
    'Configuration/TypoScript',
    'Extension setup'
);
