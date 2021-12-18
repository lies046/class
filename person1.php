<?php

class person
{
    public $firstName;
    public $lastName;

    public function show()
    {
        print $this->firstName . $this->lastName;
    }
}