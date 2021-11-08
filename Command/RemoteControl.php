<?php


namespace DesignPattern\Command;


class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}