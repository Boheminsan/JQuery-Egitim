<?php

require "baglan.php";
if ($_POST) {
    $kadi = $_POST["kullaniciAdi"];
    $sifre = $_POST["sifre"];
    $mail = $_POST["email"];
    $hak = $_POST["uyeHakkinda"];

    // $insert = "INSERT INTO uyeler (uyeID, kullaniciAdi, sifre, email, uyeHakkinda,  uyeTarih)
    //     VALUES ('', '" . $kadi . "', '" . $sifre . "', '" . $mail . "','" . $hak . "','' )";
    //     $array["veri"] = $insert;
    if (!$kadi || !$sifre || !$mail || !$hak) {
        $array["hata"] = '<h3 style="color:red;">Eksik alanlar var.</h3>';
    } else {
        $insert = "INSERT INTO uyeler (uyeID, kullaniciAdi, sifre, email, uyeHakkinda,  uyeTarih)
        VALUES ('', '" . $kadi . "', '" . $sifre . "', '" . $mail . "','" . $hak . "','' )";
        $array["veri"] = $insert;
        if (mysqli_query($baglan, $insert)) {
            $array["veri"] = '<h3 style="color:green;">İşlem tamamlandı.</h3>';
        } else {
            $array["hata"] = '<h3 style="color:red;">Hata:' . $insert . mysqli_error($baglan);
        }
        $baglan->close();
    }
    echo json_encode($array);
}
