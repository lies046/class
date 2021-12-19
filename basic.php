<?php

require_once 'Person.php';
require_once 'Area.php';
require_once 'TriangleFigure.php';
require_once 'BusinessPerson.php';
require_once 'EliteBusinessPerson.php';
require_once 'Hetare.php';
require_once 'Foreign.php';

$p = new Person('山田','太郎');
$tri = new TriangleFigure();
$bp = new BusinessPerson('山田','一郎');
$ebp = new EliteBusinessPerson('山田', '次郎');
$h = new Hetare('山田', '三郎');
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
print $bp->work();
echo '<br>';
print $ebp->work();
echo '<br>';
print $h->work();
$f = new Foreign('山田','アレン','史郎');
$f->show();