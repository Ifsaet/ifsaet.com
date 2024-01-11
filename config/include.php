<?php
require_once __DIR__ . "/../controller/engine.php";
require_once __DIR__ . "/../controller/pages/home.php";
require_once __DIR__ . "/../controller/pages/sign-up.php";
require_once __DIR__ . "/../controller/pages/hakkimizda.php";
require_once __DIR__ . "/../controller/pages/gizlilik.php";
require_once __DIR__ . "/../controller/pages/kullanim-sartlari.php";
require_once __DIR__ . "/../controller/pages/kkvk.php";
require_once __DIR__ . "/../controller/pages/iletisim.php";
require_once __DIR__ . "/../controller/pages/sss.php";
require_once __DIR__ . "/../controller/pages/blog.php";
require_once __DIR__ . "/../controller/pages/blog-details.php";
require_once __DIR__ . "/../controller/pages/marka.php";
require_once __DIR__ . "/../controller/pages/marka-detay.php";
require_once __DIR__ . "/../controller/pages/kategori.php";
require_once __DIR__ . "/../controller/pages/kategoridetay.php";
require_once __DIR__ . "/../controller/pages/login.php";
require_once __DIR__ . "/../controller/pages/maildogrulama.php";
require_once __DIR__ . "/../controller/pages/ifsaet.php";
require_once __DIR__ . "/../controller/pages/profil.php";
require_once __DIR__ . "/../controller/pages/ifsalarim.php";
require_once __DIR__ . "/../controller/pages/kurumsal-uyelik.php";
require_once __DIR__ . "/../controller/pages/reklam-cozumleri.php";
require_once __DIR__ . "/../controller/pages/kurumsal-uye-kayit.php";
require_once __DIR__ . "/../controller/pages/bireysel-iletisim.php";
require_once __DIR__ . "/../controller/pages/kurumsal-iletisim.php";
require_once __DIR__ . "/../controller/pages/kariyer-formu.php";
require_once __DIR__ . "/../controller/pages/bildirimlerim.php";
$ROUTE = new engine([
    'views' => __DIR__ . '/../view/finview',
    'cache' => __DIR__ . '/../storage/cache/finview',
    'suffix' => "blade"
]);
