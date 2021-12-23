<?php
interface Runnable{
    function run();
}

class MyClass
{
    public function excute(Runnable $rc)
    {
        print 'start...';

        $rc->run();

        print 'end...';
    }
}

$cls = new MyClass();
$cls->excute(new class implements Runnable{
    public function run()
    {
      print 'process...';
    }
});