<?php
namespace Heiner\T3heiner\Domain\Model;


/***
 *
 * This file is part of the "Typo3 Responsive Template" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Heiner Giehl <heiner.giehl@yahoo.com>, Typo3Project
 *
 ***/
/**
 * BxSlider
 */
class BxSlider extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * bxEnable
     * 
     * @var bool
     */
    protected $bxEnable = false;

    /**
     * bxImageCount
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $bxImageCount = 0;

    /**
     * time in ms
     * 
     * @var int
     */
    protected $bxDisplayTime = 0;

    /**
     * Returns the bxEnable
     * 
     * @return bool $bxEnable
     */
    public function getBxEnable()
    {
        return $this->bxEnable;
    }

    /**
     * Sets the bxEnable
     * 
     * @param bool $bxEnable
     * @return void
     */
    public function setBxEnable($bxEnable)
    {
        $this->bxEnable = $bxEnable;
    }

    /**
     * Returns the boolean state of bxEnable
     * 
     * @return bool
     */
    public function isBxEnable()
    {
        return $this->bxEnable;
    }

    /**
     * Returns the bxImageCount
     * 
     * @return int $bxImageCount
     */
    public function getBxImageCount()
    {
        return $this->bxImageCount;
    }

    /**
     * Sets the bxImageCount
     * 
     * @param int $bxImageCount
     * @return void
     */
    public function setBxImageCount($bxImageCount)
    {
        $this->bxImageCount = $bxImageCount;
    }

    /**
     * Returns the bxDisplayTime
     * 
     * @return int $bxDisplayTime
     */
    public function getBxDisplayTime()
    {
        return $this->bxDisplayTime;
    }

    /**
     * Sets the bxDisplayTime
     * 
     * @param int $bxDisplayTime
     * @return void
     */
    public function setBxDisplayTime($bxDisplayTime)
    {
        $this->bxDisplayTime = $bxDisplayTime;
    }
}
