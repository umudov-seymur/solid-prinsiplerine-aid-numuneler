<?php

// Refactored
interface Shape
{
    public function area();
}

class Square implements Shape
{
    protected $size;

    public function area()
    {
        return $this->size ** 2;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
}

class Rectangle implements Shape
{
    protected $width;
    protected $height;

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

$square = new Square();
$square->setSize(5);

echo $square->area();
