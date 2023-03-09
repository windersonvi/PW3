<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Programacion Web 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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