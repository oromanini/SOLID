<?php

namespace Curso\Solid\customer;

class Customer
{
    private Sender $emailSender;

    public function __construct() {
        $this->emailSender = $this->emailSender;
    }

    public function executePurchase(): string
    {
        // Lógica para realizar a compra.

        return $this->emailSender->send("Compra realizada com sucesso!");
    }
}