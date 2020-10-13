<?php


class Square implements Colorable
{
    public $width;
    public $name;
    public function __construct($width,$name)
    {
        $this->width = $width;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function howToColor()
    {
        return "Color all four sides";
    }
}