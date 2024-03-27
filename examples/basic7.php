<?php

require_once 'bootstrap.php';

//random data as X=>array of Y
$data = array();
for ($i = 0; $i <= 20; $i++) {
	$data[$i] = array(rand(0, 129), rand(0, 79), rand(0, 54), rand(0, 4));
}

$chartMancer->setChartTitle('Chart embedded as data URI scheme');
$chartMancer->setImageWidth(1200);
$chartMancer->setImageHeight(400);

$base64Chart = $chartMancer->renderChart($data, 'base64html');

print('<img src="' . $base64Chart . '">');
