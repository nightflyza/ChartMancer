<?php

require_once 'bootstrap.php';

//random data as X=>array of Y
$data = array();
for ($i = 0; $i <= 4; $i++) {
	$data[$i] = array(rand(10, 100),rand(0, 30));
}




$chartMancer->setChartTitle('Thats chart title');
$chartMancer->setChartLegend(array('One','Two'));

$chartMancer->renderChart($data);
