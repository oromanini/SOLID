<?php

namespace Curso\Solid\payment;

interface Payment
{
    public function processPayment(): void;
    public function confirmPayment(): void;
    public function cancelPayment(): void;
}