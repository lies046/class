<?php

require_once 'BusinessPerson.php';

class EliteBusinessPerson extends BusinessPerson
{
    public function work()
    {
        print $this->firstName . $this->lastName . 'はバリバリ働いています。';
    }
}