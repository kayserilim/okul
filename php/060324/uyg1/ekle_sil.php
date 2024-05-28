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
    function klasor_ekle($klasor_adi){
        if(!is_dir($klasor_adi)){
        mkdir($klasor_adi);
        echo "Klasor eklendi.<br>";
        }
    }

    function klasor_sil($klasor_adi){
        if(is_dir($klasor_adi)){
        rmdir($klasor_adi);
        echo "Klasor silindi.<br>";
        }
    } 
?>
    
</body>
</html>