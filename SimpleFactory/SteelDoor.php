<?php


namespace DesignPattern\SimpleFactory;


class SteelDoor implements Door
{

    private $height;
    private $width;

    public function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;
    }


    function getWidth()
    {
        return 'Steel door width:' . $this->width;
    }

    function getHeight()
    {
        return 'Steel door height:' . $this->height;
    }
}