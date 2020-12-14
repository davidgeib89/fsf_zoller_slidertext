<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FREESIXTYFIVE.FsfZollerSlidertext',
            'Zollerslidertext',
            [
                'SliderText' => 'list'
            ],
            // non-cacheable actions
            [
                'SliderText' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        zollerslidertext {
                            iconIdentifier = fsf_zoller_slidertext-plugin-zollerslidertext
                            title = LLL:EXT:fsf_zoller_slidertext/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_slidertext_zollerslidertext.name
                            description = LLL:EXT:fsf_zoller_slidertext/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_slidertext_zollerslidertext.description
                            tt_content_defValues {
                                CType = list
                                list_type = fsfzollerslidertext_zollerslidertext
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fsf_zoller_slidertext-plugin-zollerslidertext',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fsf_zoller_slidertext/Resources/Public/Icons/user_plugin_zollerslidertext.svg']
			);
		
    }
);
