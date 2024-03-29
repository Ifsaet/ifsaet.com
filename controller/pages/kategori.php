<?php
require_once __DIR__ . "/core.php";
require_once __DIR__."/../pagenation.php";
class kategori
{
    var $config,$pgnation;
    var $data = array();
    function __construct()
    {
        $this->config = new BASE();
    }
    public function pageSeo()
    {
        $request = array();
        $request["title"] = "Kategoriler - İfşa et";
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
        $this->data["kategori"] = new Pagination($this->kategoriList(),10);

        return $this->data;
    }
    public function kategoriList()
    {
        $location = "tr";
        $kategori = $this->config->core->VeriGetir("category", "durum=? AND location=?", array("1", $location));
        if ($kategori != false) {
            return $kategori;
        } else {
            return array();
        }
    }
}
$kategori = new kategori();
