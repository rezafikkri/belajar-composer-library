<?php

namespace RezaFikkri\BelajarComposerLibrary;

class Customer
{
    public function __construct(
        private string $address,
        private string $name = 'RezaFikkri',
    ) {
        
    }

    public function sayHello(string $name = 'Guest'): string
    {
        return "Hello $name, my name is $this->name";
    }

    public function getAddress(): string
    {
        return $this->address;
    }
}
