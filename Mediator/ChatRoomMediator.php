<?php

namespace DesignPattern\Mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}