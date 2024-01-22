<?php

namespace Curso\Solid\customer;

interface Sender
{
    public function send(string $message): string;
}