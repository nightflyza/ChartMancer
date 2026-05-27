<?php

require_once 'bootstrap.php';

// "infographic" style: no grid lines, no axis labels, only title / legend / peak
$data = array(
    'January' => array(420 + 240 + 180,  420, 240, 180),
    'February' => array(510 + 290 + 220,  510, 290, 220),
    'March' => array(640 + 380 + 260,  640, 380, 260),
    'April' => array(720 + 410 + 310,  720, 410, 310),
    'May' => array(800 + 460 + 340,  800, 460, 340),
    'June' => array(880 + 510 + 370,  880, 510, 370),
    'July' => array(960 + 555 + 405,  960, 555, 405),
    'August' => array(1100 + 640 + 460, 1100, 640, 460),  
);

$bg = array('r' => 250, 'g' => 250, 'b' => 252);

$chartMancer->setImageWidth(1100);
$chartMancer->setImageHeight(420);

$chartMancer->setBackGroundColor($bg);

// gridColor == background hides the grid
$chartMancer->setGridColor($bg);
$chartMancer->setAxisColor($bg);

$chartMancer->setTextColor(array('r' => 40, 'g' => 44,  'b' => 60));
$chartMancer->setBaseColor(array('r' => 56, 'g' => 122, 'b' => 234));

$chartMancer->setOverrideColors(array(
    1 => array('r' => 234, 'g' => 88,  'b' => 12),  
    2 => array('r' => 22,  'g' => 163, 'b' => 74), 
    3 => array('r' => 168, 'g' => 85,  'b' => 247),
));


$chartMancer->setXLabelRender(false);
$chartMancer->setYLabelRender(false);

$chartMancer->setChartTitle('Monthly revenue');
$chartMancer->setChartLegend(array('Total', 'Software', 'Services', 'Hardware'));
$chartMancer->setChartYaxisName('USD');
$chartMancer->setDisplayPeakValue(true);
$chartMancer->setDrawFirstColumn(true);

$chartMancer->setYMaxValueRatio(0.2);

$chartMancer->renderChart($data);
