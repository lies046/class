<?php

require_once 'FigureInterFace.php';

class Triangle implements FigureInterFace
{
    private $width;
    private $height;

    /**
     * @param float $width
     * @param float $height
     */
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->width * $this->height / 2;
    }


}
