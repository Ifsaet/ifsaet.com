<?php
require_once __DIR__ . "/core.php";
class kullanimsartlari
{
    var $config;
    var $data = array();
    function __construct()
    {
        $this->config = new BASE();
    }
    public function pageSeo()
    {
        $request = array();
        $request["title"] = "Kullanım Şartları";
        $request["description"] = "İfşa et ile sosyal medya hesaplarınızı güvenli bir şekilde paylaşabilirsiniz.";
        $request["keywords"] = "ifşa et, ifşa, ifşa et";
        $request["canonical"] = "https://ifsaet.com/";
        $request["robots"] = "index, follow";
        $request["image"] = "https://ifsaet.com/assets/images/logo.png";
        $request["icon"] = "https://ifsaet.com/assets/images/logo.png";
        return $request;
    }
    public function push()
    {
        $this->data["config"] = $this->config->push()["config"];
        $this->data["seo"] = $this->pageSeo();
        return $this->data;
    }
    function __destruct()
    {
    }
}
$kullanimsartlari = new kullanimsartlari();
