<?php
error_reporting(E_ALL);
ini_set("display_errors", true);
$page = @$_GET['page'];
require_once __DIR__ . "/config/include.php";
$categories = $kategori->config->core->VeriGetir("category", "slug=?", array($page));
if ($categories != false) {
    $kategoridetay->page = $page;
    echo $ROUTE->view("marka", $kategoridetay->push());
} else {
    $brand = $markadetay->config->core->VeriGetir("marka", "slug=?", array($page));
    if ($brand != false) {
        $markadetay->page = $page;
        echo $ROUTE->view("marka-detay", $markadetay->push());
    } else {
        if ($page == "index" || empty($page)) {
            echo $ROUTE->view("index", $HOME->push());
        } else if ($page == "kayitol") {
            echo $ROUTE->view("kayitol", $kayitol->push());
        } else if ($page == "hakkimizda") {
            echo $ROUTE->view("hakkimizda", $hakkimizda->push());
        } else if ($page == "gizlilik") {
            echo $ROUTE->view("gizlilik", $gizlilik->push());
        } else if ($page == "kullanim-sartlari") {
            echo $ROUTE->view("kullanim-sartlari", $kullanimsartlari->push());
        } else if ($page == "kkvk") {
            echo $ROUTE->view("kkvk", $kkvk->push());
        } else if ($page == "iletisim") {
            echo $ROUTE->view("iletisim", $iletisim->push());
        } else if ($page == "sss") {
            echo $ROUTE->view("sss", $sss->push());
        } else if ($page == "reklamcozumleri") {
            echo $ROUTE->view("reklamcozumleri", $reklamcozumleri->push());
        } else if ($page == "blog") {
            echo $ROUTE->view("blog", $blog->push());
        } else if ($page == "blog-details") {
            echo $ROUTE->view("blog-details", $blogdetails->push());
        } else if ($page == "kategori") {
            echo $ROUTE->view("kategori", $kategori->push());
        } else if ($page == "marka") {
            echo $ROUTE->view("marka", $marka->push());
        } else if ($page == "girisyap") {
            echo $ROUTE->view("girisyap", $girisyap->push());
        } else if ($page == "maildogrulama") {
            echo $ROUTE->view("maildogrulama", $maildogrulama->push());
        } else {
            echo $ROUTE->view("404", $notfound->push());
        }
    }
}
$ROUTE->cacheClear();
