<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir archivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\styles.css">

</head>
<body>

    <form action="#" method="post">
        <h1 class="title">Abrir archivos y carpetas</h1>
        <br>
    <label for="exampleFormControlInput1" class="form-label">Ingrese nombre de la carpeta</label>
            <input type="text" class="form-control" name= "carpe" id="exampleFormControlInput1" placeholder="Ingrese titulo">
        <br>
        
        <label for="exampleFormControlInput1" class="form-label">Ingrese nombre del archivo</label>
            <input type="text" class="form-control" name= "arch" id="exampleFormControlInput1" placeholder="Ingrese titulo">

        <br>
        <input class="btn btn-primary" name= "btn_crear" type="submit" value="Buscar">
        <a class="btn btn-primary" href="index.php" role="button">Volver</a>
    </form>

    <?php
    
    if (isset($_REQUEST['carpe'])) {
        $carpeta = "../guardado/" . $_REQUEST['carpe'];
        if (is_dir($carpeta)) {
            $name = $carpeta . "/" . $_REQUEST['arch'] . '.txt';
            if (is_file($name)) {
                $leerarch = fopen($name,"r") or die ("Error");
                while (!feof($leerarch)) {
                    $getarch = fgets($leerarch);
                    $cont = nl2br($getarch);
                    echo "<textarea readonly cols='50' rows='10'>$cont</textarea>";
                }
                fclose($leerarch);
            }else{
                echo "Archivo no existe";
            }
        }else {
            Echo "Carpeta no existe";
        }
    }
    ?>
</body>
</html>