<?php


namespace DesignPattern\Bridge;


class LightTheme implements Theme
{

    public function getColor()
    {
        return 'Off white';
    }
}