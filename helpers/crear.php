<?php

$carpeta = "../guardado/".$_REQUEST['carp'];

if (isset($_REQUEST['carp'])) {
    #mkdir($carpeta);
    if(is_dir($carpeta)){
        $name = $carpeta."/".$_REQUEST['name'].'.txt';
        $escrito = $_REQUEST['content'];
        $omega = fopen($name,'w+') or die('Error');
        fwrite($omega,$escrito);
        fclose($omega);
    }
    else {
        mkdir($carpeta);
        $name = $carpeta."/".$_REQUEST['name'].'.txt';
        $escrito = $_REQUEST['content'];
        $omega = fopen($name,'w+') or die('Error');
        fwrite($omega,$escrito);
        fclose($omega);
    }
}

echo "Archivo Creado exitosamente";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><br>
    <a class="btn btn-primary" href="../index.php" role="button">Volver</a>
</body>
</html>