<?php
require_once __DIR__."/../controller/core.php";
require_once __DIR__."/../controller/mail.php";
class USER
{
    var $core,$mail;
    function __construct()
    {
        $this->core = new core();
    }
    public function login()
    {
        @session_start();
        extract($_POST);
        if(!empty($user)&&!empty($pass))
        {
            $_SESSION["user"]=array();
            @$userCheck = $this->core->VeriGetir("user","user=? OR mail=? AND pass=?",array($this->core->guvenlik($user),$this->core->guvenlik($user),$this->core->guvenlik($pass)))[0];
            if($userCheck!=false)
            {
                extract($userCheck);
                $_SESSION["user"]["statu"] = true;
                $_SESSION["user"]["id"] = $id;
                $_SESSION["user"]["user"] = $user;
                $_SESSION["user"]["pass"] = $pass;
                $_SESSION["user"]["mail"] = $mail;
                $_SESSION["user"]["phone"] = $phone;
                echo json_encode(array("title"=>"Başarılı","text"=>"Giriş Yapılıyor...","statu"=>"success"));
            }
            else
            {
                echo json_encode(array("title"=>"Başarısız","text"=>"Kullanıcı Adı veya Şifre Hatalı !","statu"=>"error"));
            }
        }
    }
    public function register()
    {
        extract($_POST);
        if(!empty($user)&&!empty($pass)&&!empty($mail)||!empty($phone))
        {
            $this->mail = new MAIL($mail,"KAYIT ONAYI","Kayıt Onayı İçin Tıklayınız : Kodu buraya yazın");
            @$userCheck = $this->core->VeriGetir("user","user=? OR mail=? OR phone=?",array($this->core->guvenlik($user),$this->core->guvenlik($mail),$this->core->guvenlik($phone)),"ORDER BY id DESC",1)[0];
            if($userCheck==false)
            {
                $insert = $this->core->SorguCalistir("INSERT INTO user"," SET name=?,user=?,pass=?,mail=?,phone=?,statu=?",array($this->core->guvenlik($name),$this->core->guvenlik($user),$this->core->guvenlik($pass),$this->core->guvenlik($mail),$this->core->guvenlik($phone),2));
                if($insert!=false)
                {
                    $this->mail->sendMail();
                    echo json_encode(array("title"=>"Başarılı","text"=>"Kayıt Başarılı !","statu"=>"success"));
                }
                else
                {
                    echo json_encode(array("title"=>"Başarısız","text"=>"Kayıt Başarısız !","statu"=>"error"));
                }
            }
            else
            {
                echo json_encode(array("title"=>"Başarısız","text"=>"Kullanıcı Adı veya Şifre Kullanılıyor !","statu"=>"error"));
            }
        }
        else
        {
            echo json_encode(array("title"=>"Başarısız","text"=>"Boş Alan Bırakmayınız !","statu"=>"error"));
        }
    }
}