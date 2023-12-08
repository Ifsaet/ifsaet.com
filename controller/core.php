<?php

// * ekleme sorgu örneği

//?  $modulekle =  $this->SorguCalistir("INSERT INTO moduller", " SET baslik=?, tablo=?,durum=?,tarih=?", array($baslik, $tablo, $durum, date("Y-m-d")));

//* güncelleme işlemi  sorgu örneği

//? $guncelle = $this->uSorguCalistir("UPDATE urunler","SET fiyat=? WHERE stok_kod=?",array($fiyat,$urun_kod));

include_once "database.php";

class core extends db
{
    var $stmt ="";
    public function transaction()
    {
        if (!$this->transactionInProgress()) {
            $this->baglanti->beginTransaction();
        }
    }
    public function MyCommit()
    {
        if ($this->transactionInProgress()) {
            $this->baglanti->commit();
        }
    }
    public function MyRollback()
    {
        if ($this->transactionInProgress()) {
            $this->baglanti->rollBack();
        }
    }
    public function transactionInProgress()
    {
        return $this->baglanti->inTransaction();
    }
    public function VeriGetir($tablo, $whereAlanlar = "", $wherearraydeger = "", $orderby = "", $limit = "", $yildiz = "*", $gurup = "", $devMode = 1)
    {
        try {
            if (strpos($tablo, "SELECT") !== false || strpos($tablo, "INSERT") !== false) {
                $sql = $tablo;
                if(!empty($wherearraydeger))
                {
                    @$this->stmt = $this->baglanti->prepare($sql);
                    $sonuc = $this->stmt->execute($wherearraydeger);
                    $veri = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
                }
                else
                {
                    @$this->stmt = $this->baglanti->prepare($sql);
                    $sonuc = $this->stmt->execute();
                    $veri = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
                }
            } else {
                $sql = "SELECT " . $yildiz . " FROM " . $tablo;
            }
            if (!empty($whereAlanlar) && !empty($wherearraydeger)) {
                $sql .= " WHERE " . $whereAlanlar;
                if (!empty($orderby)) {
                    $sql .= " " . $orderby;
                }
                if (!empty($limit)) {
                    $sql .= " LIMIT " . $limit;
                }
                @$this->stmt = $this->baglanti->prepare($sql);
                $sonuc = $this->stmt->execute($wherearraydeger);
                $veri = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            else {
                if (!empty($gurup)) {
                    $sql .= " GROUP BY " . $gurup;
                }
                if (!empty($orderby)) {
                    $sql .= " " . $orderby;
                }
                if (!empty($limit)) {
                    $sql .= " LIMIT " . $limit;
                }
                $this->stmt = $this->baglanti->prepare($sql);
                $sonuc = $this->stmt->execute();
                $veri = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            if ($veri != false && !empty($veri)) {
                $datalar = array();
                foreach ($veri as $bilgiler) {
                    $datalar[] = $bilgiler;
                }
                return $datalar;
            } else {
                return false;
            }
        } catch (\PDOException $error) {
            if ($devMode == 1) {
                echo $error->getMessage();
                self::developerNatification($error->getMessage());
            } else {
                self::alert("Verdiğimiz Rahatsızlıktan Dolayı Çok Özür Dileriz. Elimizden Geleni Sizin İçin Yapıyoruz.", "Hata Oluştu", "basarisiz", "basic", "", "0");
            }
        }
    }
    public function SorguCalistir($tablo, $alanlar = "", $degerlerarray = "", $limit = "", $devMode = "1", $alert = "0")
    {
        try {
            if (!empty($alanlar) && !empty($degerlerarray)) {
                $sql = $tablo . " " . $alanlar;
                if (!empty($limit)) {
                    $sql .= " LIMIT " . $limit;
                }
                @$this->stmt = $this->baglanti->prepare($sql);
                @$sonuc = $this->stmt->execute($degerlerarray);
            } else {
                $sql = $tablo . " " . $alanlar;
                if (!empty($limit)) {
                    $sql .= " LIMIT " . $limit;
                }
                $sonuc = $this->baglanti->query($sql);
            }
            if ($sonuc != false) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $error) {
            if ($devMode == 1) {
                echo $error->getMessage();
                if ($alert == 0)
                    self::developerNatification($error->getMessage());
                else
                    $error->getMessage();
            } else {
                echo "Hata Oluştu.";
            }
        }
    }
    public function tl($total, $carpan = true, $birim = null)
    {
        if ($carpan != false) {
            $ayar = $this->VeriGetir("ayarlar", "", "", "ORDER BY site_id ASC");
            $carpan = $ayar[0]['fiyat_carpani'];
        }
        // ! : (150 / 100) * 25
        if (!empty($total)) {
            if ($carpan != false) {
                $total = $total * $carpan;
            }
            if ($birim == "tl" || empty($birim)) {
                $total = number_format($total, 2, ',', '') . " ₺";
                return $total;
            } else {
                return "0.00 ₺";
            }
        }
    }
    public function guvenlik($post)
    {
        $post = strip_tags($post);
        $post = htmlspecialchars($post);
        return $post;
    }
    public function seo($s)
    {
        $tr = array('ş', 'Ş', 'ı', 'I', 'İ', 'ğ', 'Ğ', 'ü', 'Ü', 'ö', 'Ö', 'Ç', 'ç', '(', ')', '/', ' ', ',', '?', '®', '%');
        $eng = array('s', 's', 'i', 'i', 'i', 'g', 'g', 'u', 'u', 'o', 'o', 'c', 'c', '', '', '-', '-', '', '', '', '-yuzde-');
        $s = str_replace($tr, $eng, $s);
        $s = strtolower($s);
        $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
        $s = preg_replace('/\s+/', '-', $s);
        $s = preg_replace('|-+|', '-', $s);
        $s = preg_replace('/#/', '', $s);
        $s = str_replace('.', '', $s);
        $s = trim($s, '-');
        return $s;
    }
    public function log($baslik, $metin, $statu, $tip, $bildirim = FALSE)
    {
        @$kid = $_SESSION["kid"];
        $ip = $_SERVER["REMOTE_ADDR"];
        $tarih = date("Y-m-d H:i:s");
        $sonlogID = $this->VeriGetir("logs", "", "", "ORDER BY logs_id DESC")[0]["logs_id"];
        $loglara_ekle = $this->SorguCalistir("INSERT INTO logs", " SET tip=?,kid=?,islem_metni=?,ip=?,tarih=?,statu=?", array($tip, $kid, $baslik . " <<--/-->> " . $metin, $ip, $tarih, $statu));
        // $bildirimlere_ekle = $this->SorguCalistir("INSERT INTO bildirimler", " SET bildirim_sorumlu=?,bildirim_baslik=?,bildirim_aciklama=?,bildirim_logid=?", array("1", $baslik, $metin, $sonlogID));
        //and $bildirimlere_ekle == TRUE
        if ($loglara_ekle == TRUE) {
            $dosya = fopen("logs.txt", 'a');
            fwrite($dosya, "{{" . $sonlogID . "}}\n" . $baslik . " <<--/-->> " . $metin . "\n");
            fclose($dosya);
            return true;
        } else {
            return false;
        }
    }
    public function print($data, $die=false)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        if ($die==true) {
            die();
        }
    }
    public function tarih_fark($baslangic, $bitis, $metin = "önce")
    {
        // Zamanı Türkiye'ye göre ayarladık.
        date_default_timezone_set('Europe/Istanbul');

        $baslangic = strtotime($baslangic);
        //baslangicTarihi => o zamana kadar geçen saniyesini buluyoruz.

        $bitis = strtotime($bitis);
        //bitisTarihi => o zamana kadar geçen saniyesini buluyoruz.

        $fark = ($bitis - $baslangic) / 86400;
        /*
            86400 e bölmemizin sebebi 1 günde 86400 saniye vardır.
            Zaten $fark değerine sonucu saniye olarak döndüğü için günü bulmak adına bölüyoruz.
            */

        echo $fark . " gün " . $metin;
        //Çıktı : 4
    }
    public function random($onEk = null)
    {
        $date = date("d");
        $fark = mb_substr(mt_rand(), 0, 13);
        $kod = $onEk . $date . $fark;
        return $kod;
    }
    public function cacheClear()
    {
        $klasor_yolu = __DIR__. '/../storage/cache/finview';
        if (is_dir($klasor_yolu)) {
            $dosyalar = scandir($klasor_yolu);
            foreach ($dosyalar as $dosya) {
                if ($dosya != '.' && $dosya != '..') {
                    $dosya_yolu = $klasor_yolu . $dosya;
                    if (is_file($dosya_yolu)) {
                        unlink($dosya_yolu);
                    }
                }
            }
            echo '<!--- Cache Temiz Bir Başlangıç Yaptı --->';
        } else {
            echo '<!----- Geçmişten Gelen Bir Hatıraya Bakıyorsunuz --->';
        }
    }
}