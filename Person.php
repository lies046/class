<?php

class person
{
    public $firstName;
    public $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }



    public function show()
    {
        print $this->firstName . $this->lastName;
    }
}