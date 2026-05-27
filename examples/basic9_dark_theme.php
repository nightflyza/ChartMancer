<?php

require_once 'bootstrap.php';

$traffic = array(
    '00h' => array(90, 60, 30),    '01h' => array(70, 45, 25),
    '02h' => array(60, 40, 20),    '03h' => array(55, 35, 20),
    '04h' => array(50, 30, 20),    '05h' => array(65, 40, 25),
    '06h' => array(110, 70, 40),   '07h' => array(180, 110, 70),
    '08h' => array(290, 180, 110), '09h' => array(360, 220, 140),
    '10h' => array(410, 250, 160), '11h' => array(430, 260, 170),
    '12h' => array(390, 240, 150), '13h' => array(420, 260, 160),
    '14h' => array(470, 290, 180), '15h' => array(510, 310, 200),
    '16h' => array(540, 330, 210), '17h' => array(520, 320, 200),
    '18h' => array(490, 300, 190), '19h' => array(450, 280, 170),
    '20h' => array(420, 260, 160), '21h' => array(350, 220, 130),
    '22h' => array(240, 150, 90),  '23h' => array(140, 90, 50),
);

$data = array();
foreach ($traffic as $h => $parts) {
    list($web, $db, $vpn) = $parts;
    $data[$h] = array($web + $db + $vpn, $web, $db, $vpn);
}

// dark canvas
$chartMancer->setBackGroundColor(array('r' => 22,  'g' => 24,  'b' => 32));
$chartMancer->setGridColor      (array('r' => 45,  'g' => 50,  'b' => 64));
$chartMancer->setAxisColor      (array('r' => 130, 'g' => 140, 'b' => 160));
$chartMancer->setTextColor      (array('r' => 220, 'g' => 224, 'b' => 232));

$chartMancer->setBaseColor(array('r' => 90, 'g' => 230, 'b' => 200));

$chartMancer->setOverrideColors(array(
    1 => array('r' => 255, 'g' => 99,  'b' => 132), 
    2 => array('r' => 255, 'g' => 205, 'b' => 86),  
    3 => array('r' => 153, 'g' => 102, 'b' => 255), 
));

$chartMancer->setChartTitle('Network throughput per hour');
$chartMancer->setChartLegend(array('Total', 'Web', 'DB', 'VPN'));
$chartMancer->setChartYaxisName('Mbit/s');
$chartMancer->setDisplayPeakValue(true);
$chartMancer->setDrawFirstColumn(true);
$chartMancer->setDebug(true);

$chartMancer->renderChart($data);
