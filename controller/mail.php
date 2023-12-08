<?php
require_once __DIR__."/../controller/core.php";
require_once __DIR__."/../vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
class MAIL
{
    var $core;
    var $mail,$konu,$content;
    function __construct($mail,$konu,$content)
    {
        $this->core = new core();
        $this->mailler = new PHPMailer(true);
        $this->mail = $mail;
        $this->konu = $konu;
        $this->content = $content;
    }
    private function config($type="default")
    {
        $check = $this->core->VeriGetir("mail","type=?",array($type),"ORDER BY id ASC",1)[0];
        if($check!=false)
        {
            return $check;
        }
        else {
            return false;
        }
    }
    protected function mailstarter()
    {
        $config = $this->config();
        $this->mailler->isSMTP();
        $this->mailler->Host       = $config["host"];
        $this->mailler->SetLanguage("tr", "phpmailer/language");
        $this->mailler->SMTPAuth   = intval($config["auth"])==1?true:false;
        $this->mailler->Username   =  $config["user"];
        $this->mailler->Password   = $config["password"];
        $this->mailler->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailler->Port       = $config["port"];
        @$this->mailler->setFrom($config["user"], $config["name"]);
        $this->mailler->addAddress($this->mail);
        $this->mailler->Subject = $this->konu;
        $this->mailler->Body    = $this->content;
    }
    public function sendMail()
    {
        try {
            $this->mailstarter();
            $this->mailler->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}