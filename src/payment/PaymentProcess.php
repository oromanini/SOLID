<?php

namespace Curso\Solid\payment;

interface PaymentProcess
{
    public function processPayment(): void;
}