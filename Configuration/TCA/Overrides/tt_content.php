<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    // Add the FlexForm
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['fsfzollerslidertext_zollerslidertext'] = 'recursive,select_key,pages';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fsfzollerslidertext_zollerslidertext'] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'fsfzollerslidertext_zollerslidertext',
        'FILE:EXT:fsf_zoller_slidertext/Configuration/FlexForms/flexform.xml'
    );
});
