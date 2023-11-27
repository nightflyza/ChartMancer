<?php

require_once 'bootstrap.php';


//random data as X=>array of nested Y
$data = array();
for ($i = 0; $i <= 542; $i++) {
    $data[$i] = array(rand(0, 129), rand(0, 79), rand(0, 54), rand(0, 41), rand(0, 4));
}

//Custom dimensions
$chartMancer->setImageWidth(1220);
$chartMancer->setImageHeight(450);
$chartMancer->setBarWidth(2);

//Custom coloring
$chartMancer->setBaseColor(array('r'=>32,'g'=>220,'b'=>40));
$chartMancer->setBackGroundColor(array('r'=>0,'g'=>0,'b'=>0));
$chartMancer->setGridColor(array('r'=>200,'g'=>220,'b'=>200));
$chartMancer->setAxisColor(array('r'=>255,'g'=>255,'b'=>255));
//Custom palette, more LSD expirence!
$chartMancer->setPalette('ACID POWERED COLORS!');

//Obviously title
$chartMancer->setChartTitle('Custom chart title');

//Appending data peak value to the chart
$chartMancer->setDisplayPeakValue(true);

//debug dataset and performance stats
$chartMancer->setDebug(true);

//getting our awesome chat
$chartMancer->renderChart($data);
