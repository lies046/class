<?php
require_once 'Triangle.php';
require_once 'Square.php';

$tri = new Triangle(5,10);
$squ = new Square(5,10);

print '三角'.$tri->getArea();
print '四角'. $squ->getArea();
