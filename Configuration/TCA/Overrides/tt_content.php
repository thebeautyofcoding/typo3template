<?php
defined('TYPO3_MODE') || die();

if (!isset($GLOBALS['TCA']['tt_content']['ctrl']['type'])) {
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['tt_content']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_t3heiner_tt_content = [];
    $tempColumnstx_t3heiner_tt_content[$GLOBALS['TCA']['tt_content']['ctrl']['type']] = [
        'exclude' => true,
        'label'   => 'LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['',''],
                ['BxSlider','Tx_T3heiner_BxSlider']
            ],
            'default' => 'Tx_T3heiner_BxSlider',
            'size' => 1,
            'maxitems' => 1,
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumnstx_t3heiner_tt_content);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    $GLOBALS['TCA']['tt_content']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['tt_content']['ctrl']['label']
);

$tmp_t3heiner_columns = [

    'bx_enable' => [
        'exclude' => false,
        'label' => 'LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner_domain_model_bxslider.bx_enable',
        'config' => [
            'type' => 'check',
            'items' => [
                '1' => [
                    '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                ]
            ],
            'default' => 0,
        ]
    ],
    'bx_image_count' => [
        'exclude' => false,
        'label' => 'LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner_domain_model_bxslider.bx_image_count',
        'config' => [
            'type' => 'input',
            'size' => 4,
            'eval' => 'int,required'
        ]
    ],
    'bx_display_time' => [
        'exclude' => false,
        'label' => 'LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner_domain_model_bxslider.bx_display_time',
        'config' => [
            'type' => 'input',
            'size' => 4,
            'eval' => 'int'
        ]
    ],

];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$tmp_t3heiner_columns);

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['tt_content']['types']['1']['showitem'])) {
    $GLOBALS['TCA']['tt_content']['types']['Tx_T3heiner_BxSlider']['showitem'] = $GLOBALS['TCA']['tt_content']['types']['1']['showitem'];
} elseif(is_array($GLOBALS['TCA']['tt_content']['types'])) {
    // use first entry in types array
    $tt_content_type_definition = reset($GLOBALS['TCA']['tt_content']['types']);
    $GLOBALS['TCA']['tt_content']['types']['Tx_T3heiner_BxSlider']['showitem'] = $tt_content_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['tt_content']['types']['Tx_T3heiner_BxSlider']['showitem'] = '';
}
$GLOBALS['TCA']['tt_content']['types']['Tx_T3heiner_BxSlider']['showitem'] .= ',--div--;LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tx_t3heiner_domain_model_bxslider,';
$GLOBALS['TCA']['tt_content']['types']['Tx_T3heiner_BxSlider']['showitem'] .= 'bx_enable, bx_image_count, bx_display_time';

$GLOBALS['TCA']['tt_content']['columns'][$GLOBALS['TCA']['tt_content']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:t3heiner/Resources/Private/Language/locallang_db.xlf:tt_content.tx_extbase_type.Tx_T3heiner_BxSlider','Tx_T3heiner_BxSlider'];
