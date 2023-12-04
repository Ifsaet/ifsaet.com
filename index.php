<?php
error_reporting(E_ALL);
ini_set("display_errors",true);
require_once __DIR__."/config/include.php";
echo $ROUTE->view("index",$HOME->push());