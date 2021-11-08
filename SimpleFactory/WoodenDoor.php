<?php


namespace DesignPattern\SimpleFactory;


class WoodenDoor implements Door
{
    protected $height;
    protected $width;

    public function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getHeight()
    {
        return 'Wooden Door height:' . $this->height;
    }

    public function getWidth()
    {
        return 'Wooden Door width:' . $this->width;
    }
}