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

$dosya_isimleri = array("kayit1","kayit2","kayit3","kayit4","kayit5");
for($i=0;$i<count($dosya_isimleri);$i++){
    touch("dosyalarim/".$dosya_isimleri[$i].".txt");
}

?>
    
</body>
</html>