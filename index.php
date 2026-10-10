<?php
    require_once 'private_point.php';
    $str = "test";
    $point = new PrivatePoint;
    $point->x=10;
    $var = 10;
    //$point->y=1.1;
    echo $point->x;
    echo "\n";
    //echo $point->y;
    echo PHP_VERSION;


?>