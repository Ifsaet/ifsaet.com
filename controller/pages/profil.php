<?php
require_once __DIR__ . "/core.php";
class profil
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
        $request["title"] = "Profil";
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
        $this->data["profil"] = $this->profillist();
        return $this->data;
    }
    public function profillist()
    {
        $page = !empty($page) ? $page : "";
        @$profil = $this->config->core->VeriGetir("user", "id=?", array($_GET['page']));
        if ($profil != false) {
            return json_decode($profil[0]['config'], true);
        } else {
            return array();
        }
    }
}
$profil = new profil();
