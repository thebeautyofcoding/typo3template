<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Heiner.T3heiner',
            'Grid',
            'Grid'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Heiner.T3heiner',
            'Accordion',
            'Accordion '
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Heiner.T3heiner',
            'Tabs',
            'Tabs'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3heiner', 'Configuration/TypoScript', 'Typo3 Responsive Template');

    }
);
