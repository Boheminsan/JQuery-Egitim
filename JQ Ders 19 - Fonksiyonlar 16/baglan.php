<?php
// Bağlatıyı Kuralım.
$server = "localhost";
$username = "root";
$password = "";
$dbname = "ajax";
$baglan = new mysqli($server, $username, $password, $dbname);
if ($baglan->connect_errno) {
    $array["hata"] = '<h3 style="color:red;">Bağlantı hatası.</h3>';
    exit;
} else {
    $array["tamam"] = '<h3 style="color:green;">Bağlantı yapıldı.</h3>';

}
// echo json_encode($array);

// Sorgumuzu Oluşturalım.
// $sql = $baglan->query("SELECT * FROM testtable ORDER BY id ASC");

// Sonuçları Alalım.
// while ($sonuc = $sql->fetch_assoc()) {

//     echo $sonuc["id"] . " " . $sonuc["ad"] . " " . $sonuc["soyad"] . "<br/>";

// }
