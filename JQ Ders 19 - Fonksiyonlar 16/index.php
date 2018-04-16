<?php
require "baglan.php";
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8" />
<title>Ajax Fonksiyonları</title>
<script type="text/javascript" src="jquery-3.3.1.js"></script>
<script type="text/javascript">
        $(function () {
            $.ajax({
                url: "baglan.php",
                type: "POST",
                dataType: "json",
                data: {"deger":"hedehödö"},
                success: function (cevap) {
                    if (cevap.hata) {
                        $("div#sonuc").html(cevap.hata).show();                    }
                    else {
                        $("div#sonuc").html(cevap.tamam).show();
                    }
                }
            });
        $.kayitOl = function () {
            var deger = $("form#formID").serialize();
            // alert(deger);

            $.ajax({
                url: "ajax2.php",
                type: "POST",
                dataType: "json",
                data: deger,
                success: function (cevap) {
                    alert(deger);
                    if (cevap.hata) {
                        $("div#sonuc").html(cevap.hata).show();                    }
                    else {
                        $("div#sonuc").html(cevap.veri).show();
                    }
                }
            });
        }
    });
</script>
<style>
    *{
        margin:0;
        padding:0;
        list-style:none;
        font-size:14px;
        font-family:Arial;
    }
    #form ul li {
        overflow: hidden;
        padding:10px;
    }

    #form ul li span {
        float: left;
    }
    #form ul li span input {
        float: left;
    }
</style>
</head>

<body>
<div id="form">
        <form id="formID" action="" method="POST" onsubmit="return false;">
            <ul>
                <li>
                    <span>Kullanıcı Adı:</span>
                    <span>
                        <input type="text" name="kullaniciAdi" value="bohemian">
                    </span>
                </li>
                <li>
                    <span>Şifre:</span>
                    <span>
                        <input type="password" name="sifre" value="bohemian">
                    </span>
                </li>
                <li>
                    <span>Email:</span>
                    <span>
                        <input type="text" name="email" value="aktas.batu@hotmail.com">
                    </span>
                </li>
                <li>
                    <span>Hakkında:</span>
                    <span>
                        <textarea name="uyeHakkinda" id="hak" cols="25" rows="10">fgfffdtgsvdfdgddfgfgertgthyetjddrvtsdfsvr</textarea> </span>
                </li>
                <li><button onclick="$.kayitOl()">Kayıt Ol</button></li>
            </ul>
        </form>
    </div>
    <div id="sonuc">dsfghjk</div>
</body>

</html>
