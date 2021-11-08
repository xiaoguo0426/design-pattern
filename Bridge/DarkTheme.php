<?php


namespace DesignPattern\Bridge;


class DarkTheme implements Theme
{

    public function getColor()
    {
        return 'Dark Black';
    }
}