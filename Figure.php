<?php

class Figure
{
    protected $width;
    protected $height;

    /**
     * @param $width
     * @param $height
     */
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return 0;
    }
}