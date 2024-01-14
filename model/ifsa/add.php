<?php
require_once __DIR__."/../../controller/core.php";
class ADD {
    var $core;
    var $request;
    var $value = array();
    function __construct()
    {
        $this->core = new core();
        $this->value["title"]=$_POST["data"]["baslik"];
        $this->value["content"]=$_POST["data"]["ifsa"];
        $this->value["type"]=$_POST["data"]["tip"];
        $this->value["link"]=$_POST["data"]["youtube"];
        $this->value["brand"]=$_POST["data"]["marka"];
        $this->value["token"]=$_POST["data"]["token"];
        $this->value["uniqCode"]=$this->uniqCode();
    }
    public function add()
    {
        $this->core->transaction();
        $add = $this->core->SorguCalistir("INSERT INTO ifsa SET "," title=?,content=?,type=?,link=?,brand=?,token=?,uniqCode=?",array($this->value["title"],$this->value["content"],$this->value["type"],$this->value["link"],$this->value["brand"],$this->value["token"],$this->value["uniqCode"]));
        if($add!=false)
        {
            $this->request = json_encode(array("statu"=>true,"message"=>"İfşa başarıyla eklendi."));
            $this->core->MyCommit();
        }
        else
        {
            $this->request = json_encode(array("statu"=>false,"message"=>"İfşa eklenirken bir hata oluştu."));
            $this->core->MyRollback();
        }
    }
    protected function uniqCode($length=20,$prefix="")
    {
        $uniq = $prefix.substr(md5(uniqid()),0,$length);
        return $uniq;
    }
    function __destruct()
    {
        return $this->request;
    }
}