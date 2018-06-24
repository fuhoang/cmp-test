<?php

require_once __DIR__.'/vendor/autoload.php';

use App\Glorf;
use App\Flub;


$Glorf = new Glorf();
$Flub = new Flub();

print_r($Glorf->getDocument());
print_r($Flub->getDocument());


?>