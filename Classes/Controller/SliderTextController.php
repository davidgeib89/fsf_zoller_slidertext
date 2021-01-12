<?php
namespace FREESIXTYFIVE\FsfZollerSlidertext\Controller;


/***
 *
 * This file is part of the "Zoller Slider Text" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 David Geib <d.geib@freesixtyfive.de>, FREESIXTYFIVE
 *
 ***/
/**
 * SliderTextController
 */
class SliderTextController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * sliderTextRepository
     * 
     * @var \FREESIXTYFIVE\FsfZollerSlidertext\Domain\Repository\SliderTextRepository
     */
    protected $sliderTextRepository = null;

    /**
     * @param \FREESIXTYFIVE\FsfZollerSlidertext\Domain\Repository\SliderTextRepository $sliderTextRepository
     */
    public function injectSliderTextRepository(\FREESIXTYFIVE\FsfZollerSlidertext\Domain\Repository\SliderTextRepository $sliderTextRepository)
    {
        $this->sliderTextRepository = $sliderTextRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $sliderTexts = $this->sliderTextRepository->findAll();
        $this->view->assign('sliderTexts', $sliderTexts);
        $this->view->assign('rand', md5(rand() + rand()));
        $this->view->assign('randd', md5(rand() + rand()));
    }
}
