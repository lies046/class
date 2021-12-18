<?php

require_once 'person1.php';
require_once 'Area.php';

$p = new Person('山田','太郎');

$p->show();

print '円の面積:'.Area::circle(10).'cm^2';