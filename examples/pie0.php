<?php
require_once 'bootstrap.php';

//debug dataset and performance stats
$chartMancer->setDebug(true);

//sets pie chart dimensions
$chartMancer->setImageWidth(600);
$chartMancer->setImageHeight(600);
//sets maximum pie chart label length
$chartMancer->setPieLabelLen(20);
//renders custom title
$chartMancer->setChartTitle('Sales 2024');
//renders custom legend
$chartMancer->setChartLegend(array('Nissan', 'Toyota', 'Jeep'));
//shows percentage values instead of exact values in pie labels
$chartMancer->setPiePercent(true); 

//brand sales data in millions
$data = array(
    'Toyota' => 10.8,
    'Nissan' => 3.35,
    'Jeep' => 1.01,
);

$chartMancer->renderPie($data);