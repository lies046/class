<?php

require_once 'person1.php';

$p = new Person();
$p->firstName = '山田';
$p->lastName = '太郎';

print "$p->firstName$p->lastName";