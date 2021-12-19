<?php

require_once 'Person.php';

class BusinessPerson extends Person
{
    public function work()
  {
      print $this->firstName. $this->lastName. 'は働いています';
  }
}