<?php

trait MachineTrait
{
    private $starting = 'starting...Run';

    public function run(){
        print $this->starting;

    }

}