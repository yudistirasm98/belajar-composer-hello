<?php

namespace ProgramerZamanNow;

class customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name):string
    {
        return "Halo.. $name, my name is $this->name";
    }
}




?>