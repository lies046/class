<?php

require_once 'Person.php';

class BusinessPerson extends Person
{
    /**
     * @return string
     */
    public function work(): string
  {
      return $this->firstName . $this->lastName . 'は働いています';
  }
}