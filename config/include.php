<?php
require_once __DIR__."/../controller/engine.php";
require_once __DIR__."/../controller/pages/home.php";
$ROUTE = new engine([
    'views' => __DIR__ . '/../view/finview',
    'cache' => __DIR__ . '/../storage/cache/finview',
    'suffix' => "blade"
]);