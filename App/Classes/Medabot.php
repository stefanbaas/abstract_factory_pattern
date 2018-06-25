<?php

namespace App\Classes;

abstract class Medabot
{
    protected $colour;
    protected $head;
    protected $leftArm;
    protected $rightArm;
    protected $leftLeg;
    protected $rightLeg;
    protected $medal;

    /**
     * @return mixed
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param mixed $colour
     */
    public function setColour($colour): void
    {
        $this->colour = $colour;
    }

    /**
     * @return mixed
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @param mixed $head
     */
    public function setHead($head): void
    {
        $this->head = $head;
    }

    /**
     * @return mixed
     */
    public function getLeftArm()
    {
        return $this->leftArm;
    }

    /**
     * @param mixed $leftArm
     */
    public function setLeftArm($leftArm): void
    {
        $this->leftArm = $leftArm;
    }

    /**
     * @return mixed
     */
    public function getRightArm()
    {
        return $this->rightArm;
    }

    /**
     * @param mixed $rightArm
     */
    public function setRightArm($rightArm): void
    {
        $this->rightArm = $rightArm;
    }

    /**
     * @return mixed
     */
    public function getLeftLeg()
    {
        return $this->leftLeg;
    }

    /**
     * @param mixed $leftLeg
     */
    public function setLeftLeg($leftLeg): void
    {
        $this->leftLeg = $leftLeg;
    }

    /**
     * @return mixed
     */
    public function getRightLeg()
    {
        return $this->rightLeg;
    }

    /**
     * @param mixed $rightLeg
     */
    public function setRightLeg($rightLeg): void
    {
        $this->rightLeg = $rightLeg;
    }

    /**
     * @return mixed
     */
    public function getMedal()
    {
        return $this->medal;
    }

    /**
     * @param mixed $medal
     */
    public function setMedal($medal): void
    {
        $this->medal = $medal;
    }
}