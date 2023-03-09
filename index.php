<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion Web 3</title>
    <link rel="stylesheet" href="css\styles.css">

</head>
<body>
    <form action="helpers/crear.php" method ="POST" >
        <h1 class="title">Bloc de Notas</h1>
        <p class="title2">Hecho por Winderson Villarreal</p>
        <br> <br>
        <label for="exampleFormControlInput1" class="form-label">Nombre del archivo</label>
            <input type="text" class="form-control" name= "name" id="exampleFormControlInput1" placeholder="Ingrese titulo">
        <br>
        
        <label for="exampleFormControlInput1" class="form-label">Nombre de la carpeta</label>
            <input type="text" class="form-control" name= "carp" id="exampleFormControlInput1" placeholder="Ingrese titulo">

        <br><br>
        <label for="exampleFormControlInput1" class="form-label">Contenido del archivo</label>
        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5"></textarea>
        <br>
        <input class="btn btn-primary" name= "btn_crear" type="submit" value="Crear">
        <a class="btn btn-primary" href="abrir.php" role="button">Abrir</a>
    </form>
</body>
</html>