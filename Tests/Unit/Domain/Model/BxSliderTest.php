<?php
namespace Heiner\T3heiner\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Heiner Giehl <heiner.giehl@yahoo.com>
 */
class BxSliderTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Heiner\T3heiner\Domain\Model\BxSlider
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Heiner\T3heiner\Domain\Model\BxSlider();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getBxEnableReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getBxEnable()
        );
    }

    /**
     * @test
     */
    public function setBxEnableForBoolSetsBxEnable()
    {
        $this->subject->setBxEnable(true);

        self::assertAttributeEquals(
            true,
            'bxEnable',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBxImageCountReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getBxImageCount()
        );
    }

    /**
     * @test
     */
    public function setBxImageCountForIntSetsBxImageCount()
    {
        $this->subject->setBxImageCount(12);

        self::assertAttributeEquals(
            12,
            'bxImageCount',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBxDisplayTimeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getBxDisplayTime()
        );
    }

    /**
     * @test
     */
    public function setBxDisplayTimeForIntSetsBxDisplayTime()
    {
        $this->subject->setBxDisplayTime(12);

        self::assertAttributeEquals(
            12,
            'bxDisplayTime',
            $this->subject
        );
    }
}
