<?php

namespace Curso\Solid\payment;

interface PaymentOperations
{
    public function confirmPayment(): void;
    public function cancelPayment(): void;
}