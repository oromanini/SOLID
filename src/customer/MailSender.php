<?php

namespace Curso\Solid\customer;

class MailSender implements Sender
{
    public function send(string $message): string
    {
        return $message;
    }
}