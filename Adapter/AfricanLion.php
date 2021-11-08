<?php


namespace DesignPattern\Adapter;


class AfricanLion implements Lion
{

    public function roar()
    {
        echo '非洲狮子咆哮' . PHP_EOL;
    }
}