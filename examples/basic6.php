<?php

require_once 'bootstrap.php';

//random data as X=>array of Y
$data = array();

//$data['uno']=array(1,2,3,4,5,6,7,8,9,10,11,12);
//$data['dos']=array(1,2,3,4,5,6,7,8,9,10,11,12);
$data['tres']=array(13,1,12,12,12,12,12,12,12,12,13,12);

$legend=array('total','icmp','udp','tcp','mail','dns','vpn','ftp','web','proxy','quic','sip');

$colorOverrides = array(
	1 => array('r' => 240, 'g' => 0, 'b' => 0),
	2 => array('r' => 140, 'g' => 0, 'b' => 0),
	3 => array('r' => 0, 'g' => 220, 'b' => 0),
	5 => array('r' => 252, 'g' => 93, 'b' => 0),
	6 => array('r' => 240, 'g' => 240, 'b' => 0),
	7 => array('r' => 174, 'g' => 174, 'b' => 174),
	8 => array('r' => 0, 'g' => 0, 'b' => 245),
	11 => array('r' => 54, 'g' => 49, 'b' => 22),
);


$chartMancer->setDrawFirstColumn(true);

$chartMancer->setPalette('OphanimFlow');
$chartMancer->setOverrideColors($colorOverrides);
$chartMancer->setDebug(true);
$chartMancer->setChartLegend($legend);
$chartMancer->setChartYaxisName('Mbit/s');
$chartMancer->setDisplayPeakValue(true);

$chartMancer->renderChart($data);
