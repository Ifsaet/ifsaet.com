<?php
require_once __DIR__ . "/core.php";
class kategoridetay
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
        $request["title"] = "Kategori Detay";
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
        $this->data["brand"] = $this->kategoriList();
        $this->data["info"] = $this->kategoriInfo();
        return $this->data;
    }
    public function kategoriList()
    {
        $page = !empty($page) ? $page : $_GET["page"];
        $id = $this->config->core->VeriGetir("category", "slug=?", array($page))[0]["id"];
        @$marka = $this->config->core->VeriGetir("marka", "kategori=?", array($id));
        if ($marka != false) {
            return $marka;
        } else {
            return array();
        }
    }
    public function kategoriInfo()
    {
        $page = !empty($page) ? $page : "";
        @$kategori = $this->config->core->VeriGetir("category", "slug=? OR id=?", array($_GET['page'], $_GET['page']));
        if ($kategori != false) {
            return json_decode($kategori[0]['config'], true);
        } else {
            return array();
        }
    }
}
$kategoridetay = new kategoridetay();
