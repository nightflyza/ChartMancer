<?php

require_once 'bootstrap.php';


// Plain data as X=>Y
$data=array('Mon'=>8,'Tue'=>4,'Wed'=>7,'Thu'=>3,'Fri'=>6,'Sat'=>4,'Sun'=>0);

$chartMancer->renderChart($data);
