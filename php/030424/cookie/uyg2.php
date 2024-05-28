<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="text-aling:canter; background-color:tomato">
    <h3 style="margin:0px">kategoriler</h3>
    
    <a href="uyg2nin2si.php?kategori=r">
        <img src="resimler/r.jpg" style="height: 100px;">
    </a>

    <a href="uyg2nin2si.php?kategori=rr">
        <img src="resimler/rr.jpg" style="height: 100px;">
    </a>

    <a href="uyg2nin2si.php?kategori=rrr">
        <img src="resimler/rrr.jpg" style="height: 100px;">
    </a>

    <?php
    
    $kullanici_ip=$_SERVER["REMOTE_ADDR"];
    $kategori=$_GET['kategori'];
    $cookie_adi = "ip_".$kullanici_ip;
    $cookie_deger = $kategori;
    setcookie($cookie_adi, $cookie_deger,time() +(60*60*24));

    ?>

</body>
</html>