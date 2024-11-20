<?php

require_once 'bootstrap.php';

//random data as X=>array of Y
$data = array();

$raw = '1731071160;99551800;0;60806200;38745600;0;0;0;0;38745600;0;60806200;0
1731072180;1354934200;0;1347067200;7867000;0;0;0;0;7819500;0;1347067200;0
1731072780;1388776000;0;1384318000;4458000;0;0;0;0;3836800;0;1384318000;0
1731073680;95403500;0;60518100;34885400;0;0;0;0;34875800;0;60518100;0
1731073780;95403500;0;60518100;34885400;0;0;0;0;80518100;0;0;0';

$raw = explode(PHP_EOL, $raw);
foreach ($raw as $io => $each) {
	$each = explode(';', $each);
	if (!empty($each)) {
		$ts = date("H:i", $each[0]);
		unset($each[0]);
		$data[$ts] = $each;
	}
}


$legend = array('total', 'icmp', 'udp', 'tcp', 'mail', 'dns', 'vpn', 'ftp', 'web', 'proxy', 'quic', 'sip');

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
