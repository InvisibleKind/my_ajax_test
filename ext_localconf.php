<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'My.MyAjaxTest',
    'Test',
    [
        'Test' => 'init, ajax'
    ],
    [
        'Test' => 'init'
    ]
);
