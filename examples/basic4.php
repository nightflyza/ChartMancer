<?php

require_once 'bootstrap.php';

//random data as X=>array of Y
$data = array();
for ($i = 0; $i <= 3; $i++) {
	$data[$i] = array(rand(10, 100),rand(0, 30));
}

$data[$i+1] = array(100,200);


$chartMancer->setChartTitle('Thats title');
$chartMancer->setChartLegend(array('One','Two'));
$chartMancer->renderChart($data);
