<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$dosya = fopen('dosyalari/dosya.txt','r+');
$dosya_boyutu = filesize('dosyalari/dosya.txt');
$dosya_icerigi = fread($dosya,$dosya_boyutu);
echo "<b style='font: size 25px; background-color:orange'>
$dosya_icerigi </b>";
fclose($dosya);

?>

    
</body>
</html>