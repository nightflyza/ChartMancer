<?php

require_once 'bootstrap.php';


	//random data as X=>array of Y
    $data = array();
    for ($i = 0; $i <= 249; $i++) {
        $data[$i] = array(rand(0, 129), rand(0, 79), rand(0, 54), rand(0, 4));
    }


$chartMancer->renderChart($data);
