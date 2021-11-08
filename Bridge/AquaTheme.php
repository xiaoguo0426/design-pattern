<?php


namespace DesignPattern\Bridge;


class AquaTheme implements Theme
{

    public function getColor()
    {
        return 'Light blue';
    }
}