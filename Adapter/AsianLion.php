<?php


namespace DesignPattern\Adapter;


class AsianLion implements Lion
{

    public function roar()
    {
        echo '亚洲狮子咆哮' . PHP_EOL;
    }
}