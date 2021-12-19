<?php

require_once 'Person.php';

class Foreign extends Person
{
    public $middleName;

    public function __construct(string $firstName, string $middleName, string $lastName)
    {
        parent::__construct($firstName, $lastName);
        $this->middleName = $middleName;
    }

    public function show()
    {
        print $this->firstName.$this->middleName.$this->lastName;
    }


}