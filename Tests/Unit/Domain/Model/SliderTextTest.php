<?php
namespace FREESIXTYFIVE\FsfZollerSlidertext\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class SliderTextTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerSlidertext\Domain\Model\SliderText
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \FREESIXTYFIVE\FsfZollerSlidertext\Domain\Model\SliderText();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
