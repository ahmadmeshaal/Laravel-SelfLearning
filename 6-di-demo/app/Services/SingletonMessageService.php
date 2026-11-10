<?php

namespace App\Services;

use App\Services\MessageServicInterface;
use Override;

class SingletonMessageService implements MessageServicInterface
{
    public string $timestamp;

    public function __construct()
    {
        $this->timestamp = now();
    }
    #[Override]
    public function getMessage(): string
    {
        return "This is a singleton message. {$this->timestamp}";
    }
}
