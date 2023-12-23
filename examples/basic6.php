<?php

require_once 'bootstrap.php';

//random data as X=>array of Y
$data = array();

$data[] = array(11,1,2,3,4,5,6,7,8,9,10);


$legend=array('total','icmp','udp','tcp','mail','dns','vpn','ftp','http','rtsp','quic');

//bandwidthd-like palette
$colorOverrides=array(
	1=>array('r'=>240,'g'=>0,'b'=>0),
	2=>array('r'=>140,'g'=>0,'b'=>0),
	3=>array('r'=>0,'g'=>220,'b'=>0),
	5=>array('r'=>252,'g'=>93,'b'=>0),
	6=>array('r'=>240,'g'=>240,'b'=>0),
	7=>array('r'=>174,'g'=>174,'b'=>174),
	8=>array('r'=>0,'g'=>0,'b'=>245),
);

$chartMancer->setPalette('OphanimFlow');
$chartMancer->setOverrideColors($colorOverrides);
$chartMancer->setDebug(true);
$chartMancer->setChartLegend($legend);
$chartMancer->setChartYaxisName('Mbit/s');
$chartMancer->setDisplayPeakValue(true);
$chartMancer->renderChart($data);
