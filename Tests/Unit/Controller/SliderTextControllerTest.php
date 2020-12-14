<?php
namespace FREESIXTYFIVE\FsfZollerSlidertext\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class SliderTextControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerSlidertext\Controller\SliderTextController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerSlidertext\Controller\SliderTextController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllSliderTextsFromRepositoryAndAssignsThemToView()
    {

        $allSliderTexts = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sliderTextRepository = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerSlidertext\Domain\Repository\SliderTextRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $sliderTextRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSliderTexts));
        $this->inject($this->subject, 'sliderTextRepository', $sliderTextRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('sliderTexts', $allSliderTexts);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
