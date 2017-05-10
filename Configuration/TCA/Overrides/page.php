<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'my_ajax_test',
    'Configuration/TsConfig/ModWizards.ts',
    '"New CE" Wizard'
);