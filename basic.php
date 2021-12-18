<?php

require_once 'Person.php';
require_once 'Area.php';
require_once 'TriangleFigure.php';

$p = new Person('山田','太郎');
$tri = new TriangleFigure();

$tri->setBase(10);
$tri->setHeight(10);
print $tri->getArea();
echo '<br>';
$p->show();
echo '<br>';
print Area::PI;
echo '<br>';
print '円の面積:'.Area::circle(10).'cm^2';
echo '<br>';
