<?php
sleep(2);
$kadi = $_POST["kadi"];
$sifre = $_POST["sifre"];
$tip = $_POST["tip"];

if (!$kadi || !$sifre) {
    $array["hata"] = 'Boş alan bırakmayın!';
} else {
    if ($tip=="tipitip") {
        $array["veri"] = 'Kullanıcı Adı:' . $kadi . '<br/>Şifre:' . $sifre;   # code...
    }
    else{
        $array["veri"] = 'tipiniz o mesajı almaya uygun değil. ';
    }
 }

echo json_encode($array);
