<?php

namespace App\Payment;

use App\Contracts\PaymentProvider;

class PaymentManager
{
    public function resolve(string $name): PaymentProvider
    {
        $providerMethod = 'create'.ucfirst($name).'Provider';

        if (! method_exists($this, $providerMethod)) {
            throw new InvalidArgumentException("The provider '".$name."' is not supported");
        }

        return $this->{$providerMethod}();
    }

    public function createSisowProvider(): PaymentProvider
    {
        return new SisowProvider();
    }

    public function createMollieProvider(): PaymentProvider
    {
        throw new BadMethodCallException('To do: Implement Mollie provider');
    }
}
