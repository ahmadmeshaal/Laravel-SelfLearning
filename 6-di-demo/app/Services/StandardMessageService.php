<?php

namespace App\Services;

use App\Services\MessageServicInterface;

class StandardMessageService implements MessageServicInterface
 {
    public function getMessage(): string
    {
        return "This is a standard message.".now();
    }
 }
