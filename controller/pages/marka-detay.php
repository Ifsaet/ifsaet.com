<?php
require_once __DIR__ . "/core.php";
class markadetay
{
    var $config;
    var $data = array();
    var $page = "";
    function __construct()
    {
        $this->config = new BASE();
    }
    public function pageSeo()
    {
        $request = array();
        $request["title"] = "Marka Detay";
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
        $this->data["brand"] = $this->markalist()[0];
        $this->data["marka"] = $this->markaConfig();
        return $this->data;
    }
    public function markalist()
    {
        $page = !empty($page) ? $page : "";
        @$marka = $this->config->core->VeriGetir("marka", "slug=? OR id=?", array($_GET['page'], $_GET['page']));
        if ($marka != false) {
            return $marka;
        } else {
            return array();
        }
    }
    public function markaConfig()
    {
        $page = !empty($page) ? $page : "";
        @$marka = $this->config->core->VeriGetir("marka", "slug=? OR id=?", array($_GET['page'], $_GET['page']));
        if ($marka != false) {
            return json_decode($marka[0]['config'], true);
        } else {
            return array();
        }
    }
}
$markadetay = new markadetay();
