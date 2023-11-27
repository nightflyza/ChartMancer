<?php

require_once 'bootstrap.php';


//random data as X=>array of nested Y
$data = array();
for ($i = 0; $i <= 288; $i++) {
    $data[$i] = array(rand(0, 129), rand(0, 79), rand(0, 54), rand(0, 41), rand(0, 4));
}

//Transparent background
$chartMancer->setBackgroundTransparent(true);

//saving chart as file on filesystem
$chartMancer->renderChart($data,'/tmp/somechart.png');