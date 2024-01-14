<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Facebook SDK'nın yüklenmesi
@session_start();
$fb = new \Facebook\Facebook([
    'app_id' => '889640079095752', // Uygulama ID'nizi girin
    'app_secret' => '6ffa42367b925c7a7ba3ecaed111d78b', // Uygulama Gizli Anahtarınızı girin
    'default_graph_version' => 'v2.10',
    //'default_access_token' => '{access-token}', // isteğe bağlı
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // İstenen izinler
$loginUrl = $helper->getLoginUrl('http://localhost/ifsa/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Facebook ile Giriş Yap!</a>';