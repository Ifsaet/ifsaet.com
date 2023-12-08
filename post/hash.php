<?php
@session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once __DIR__."/../config/function.php";
$hash = $_GET["hash"];
switch ($hash)
{
    case 'login':
            $token = verifyToken('logintoken',@$_POST["logintoken"]);
            if($token!=false)
            {
                require_once __DIR__."/../model/user.php";
                $user = new USER();
                $user->login();
            }
            else
            {
                echo json_encode(array("title"=>"Başarısız","text"=>"Güvenliğiniz için verilen token'in süresi doldu!","statu"=>"error"));
            }

        break;
    case 'register':
                $token = verifyToken('kayitol',@$_POST["kayitol"]);
                if($token!=false)
                {
                    require_once __DIR__."/../model/user.php";
                    $user = new USER();
                    $user->register();
                }
                else
                {
                    echo json_encode(array("title"=>"Başarısız","text"=>"Güvenliğiniz için verilen token'in süresi doldu!","statu"=>"error"));
                }
            break;
}