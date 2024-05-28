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
    function klasor_listele($konum){
        $klasor = opendir($konum);
        echo "<b>Klasorler Listeleniyor...</b><br>";
        while($dosya = readdir($klasor)){
            if (!is_dir($dosya)){
            echo $dosya.'<br>';
            }
        }
    }
?>
    
</body>
</html>