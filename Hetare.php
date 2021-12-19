<?php

require_once 'BusinessPerson.php';
class Hetare extends BusinessPerson
{
    public function work()
    {
        parent::work();
        print 'ただしボチボチと・・・・';
    }
}