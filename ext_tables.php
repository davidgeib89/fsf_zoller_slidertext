<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FREESIXTYFIVE.FsfZollerSlidertext',
            'Zollerslidertext',
            'Zoller Slider Text'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fsf_zoller_slidertext', 'Configuration/TypoScript', 'Zoller Slider Text');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fsfzollerslidertext_domain_model_slidertext', 'EXT:fsf_zoller_slidertext/Resources/Private/Language/locallang_csh_tx_fsfzollerslidertext_domain_model_slidertext.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fsfzollerslidertext_domain_model_slidertext');

    }
);
