<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericicio PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">EXAMEN PHP</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio1.php">Ejercicio 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio3.php">Ejercicio 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio4.php">Ejercicio 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio5.php">Ejercicio 5</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <form action="ejercicio1.php" method="POST">
            <div class="form-group row mt-3 justify-content-center">
                <label for="number1">Número 1</label>
                <div class="col-2">
                    <input type="number" class="form-control" id="number1" placeholder="Numero 1">
                </div>
                <label for="number2" class="">Número 2</label>
                <div class="col-2">
                    <input type="number" class="form-control" id="number2" placeholder="Numero 2">
                </div>
            </div>
            <div class="form-group row mt-3 justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operator" id="add" value="add" checked>
                    <label class="form-check-label col" for="add">Suma</label>

                    <input class="form-check-input" type="radio" name="operator" id="rest" value="rest">
                    <label class="form-check-label col" for="rest">Resta</label>

                    <input class="form-check-input" type="radio" name="operator" id="multiplication" value="multiplication">
                    <label class="form-check-label col" for="multiplication">Multiplicación</label>

                    <input class="form-check-input" type="radio" name="operator" id="divide" value="divide">
                    <label class="form-check-label col" for="divide">División</label>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-1">
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
            </div>
        </form>

        <?php 
        
        ?>

        <?php 
        
        ?>

        <?php 
        
        ?>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>