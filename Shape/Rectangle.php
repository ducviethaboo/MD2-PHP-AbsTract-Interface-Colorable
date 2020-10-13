<?php


class Rectangle
{
    public $width;
    public $height;
    public $name;
    public function __construct($width,$height,$name)
    {
        $this->width = $width;
        $this->height = $height;
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
}