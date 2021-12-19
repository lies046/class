<?php

require_once 'BusinessPerson.php';

class EliteBusinessPerson extends BusinessPerson
{
    public function work(): string
    {
        return $this->firstName . $this->lastName . 'はバリバリ働いています。';
    }
}