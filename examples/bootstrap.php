<?php

if (file_exists('vendor/autoload.php')) {
  require_once 'vendor/autoload.php';
} else {
  require_once '../vendor/autoload.php';
}


$chartMancer = new ChartMancer();

if (file_exists('assets/OpenSans-Regular.ttf')) {
 $chartMancer->setFont('assets/OpenSans-Regular.ttf');
} else {
 $chartMancer->setFont('../assets/OpenSans-Regular.ttf');
}

