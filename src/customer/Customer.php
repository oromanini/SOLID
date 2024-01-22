<?php

namespace Curso\Solid\customer;

class Customer
{
    private MailSender $emailSender;

    public function __construct() {
        $this->emailSender = new MailSender();
    }

    public function executePurchase(): string
    {
        // Lógica para realizar a compra.

        return $this->emailSender->sendMail("Compra realizada com sucesso!");
    }
}