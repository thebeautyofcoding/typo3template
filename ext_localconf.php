<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Heiner.T3heiner',
            'Grid',
            [
                'Grid' => 'index'
            ],
            // non-cacheable actions
            [
                
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Heiner.T3heiner',
            'Accordion',
            [
                'Accordion' => 'show'
            ],
            // non-cacheable actions
            [
                
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Heiner.T3heiner',
            'Tabs',
            [
                'Tabs' => 'show'
            ],
            // non-cacheable actions
            [
                
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        grid {
                            iconIdentifier = t3heiner-plugin-grid
                            title = LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner_grid.name
                            description = LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner_grid.description
                            tt_content_defValues {
                                CType = list
                                list_type = t3heiner_grid
                            }
                        }
                        accordion {
                            iconIdentifier = t3heiner-plugin-accordion
                            title = LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner_accordion.name
                            description = LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner_accordion.description
                            tt_content_defValues {
                                CType = list
                                list_type = t3heiner_accordion
                            }
                        }
                        tabs {
                            iconIdentifier = t3heiner-plugin-tabs
                            title = LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner_tabs.name
                            description = LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner_tabs.description
                            tt_content_defValues {
                                CType = list
                                list_type = t3heiner_tabs
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				't3heiner-plugin-grid',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:t3heiner/Resources/Public/Icons/user_plugin_grid.svg']
			);
		
			$iconRegistry->registerIcon(
				't3heiner-plugin-accordion',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:t3heiner/Resources/Public/Icons/user_plugin_accordion.svg']
			);
		
			$iconRegistry->registerIcon(
				't3heiner-plugin-tabs',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:t3heiner/Resources/Public/Icons/user_plugin_tabs.svg']
			);
		
    }
);
