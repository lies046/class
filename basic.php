<?php

require_once 'Person.php';
require_once 'Area.php';

$p = new Person('山田','太郎');

$p->show();
echo '<br>';
print Area::PI;
echo '<br>';
print '円の面積:'.Area::circle(10).'cm^2';