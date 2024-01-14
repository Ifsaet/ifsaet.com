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
        } else if ($page == "blog") {
            echo $ROUTE->view("blog", $blog->push());
        } else if ($page == "blog-details") {
            echo $ROUTE->view("blog-details", $blogdetails->push());
        } else if ($page == "kategori") {
            echo $ROUTE->view("kategori", $kategori->push());
        } else if ($page == "giris") {
            echo $ROUTE->view("login", $login->push());
        } else if ($page == "marka") {
            echo $ROUTE->view("marka", $marka->push());
        } else if ($page == "maildogrulama") {
            echo $ROUTE->view("maildogrulama", $maildogrulama->push());
        } else if ($page == "ifsaet") {
            echo $ROUTE->view("ifsaet", $ifsaet->push());
        } else if ($page == "profil") {
            echo $ROUTE->view("profil", $profil->push());
        } else if ($page == "ifsalarim") {
            echo $ROUTE->view("ifsalarim", $ifsalarim->push());
        } else if ($page == "kurumsal-uyelik") {
            echo $ROUTE->view("kurumsal-uyelik", $kurumsaluyelik->push());
        } else if ($page == "reklam-cozumleri") {
            echo $ROUTE->view("reklam-cozumleri", $reklamcozumleri->push());
        } else if ($page == "kurumsal-uye-kayit") {
            echo $ROUTE->view("kurumsal-uye-kayit", $kurumsaluyekayit->push());
        } else if ($page == "bireysel-iletisim") {
            echo $ROUTE->view("bireysel-iletisim", $bireyseliletisim->push());
        } else if ($page == "kurumsal-iletisim") {
            echo $ROUTE->view("kurumsal-iletisim", $kurumsaliletisim->push());
        } else if ($page == "kariyer-formu") {
            echo $ROUTE->view("kariyer-formu", $kariyerformu->push());
        } else if ($page == "bildirimlerim") {
            echo $ROUTE->view("bildirimlerim", $bildirimlerim->push());
        } else if ($page == "bildirim-tercihlerim") {
            echo $ROUTE->view("bildirim-tercihlerim", $bildirimtercihlerim->push());
        } else if ($page == "kaydedilenler") {
            echo $ROUTE->view("kaydedilenler", $kaydedilenler->push());
        } else {
            echo $ROUTE->view("404", $notfound->push());
        }
    }
}
$ROUTE->cacheClear();
