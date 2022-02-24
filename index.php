<?php
    //crear un form con 3 input que se envien los datos, se sumen y en un cuarto input se muestren por POST
    
    if (isset($_POST['valor1']) && isset($_POST['valor2']) && isset($_POST['valor3'])) {
        if (is_numeric($_POST['valor1']) && is_numeric($_POST['valor2']) && is_numeric($_POST['valor3'])) {
        
                $opcion = $_POST['opcion'];    
                $valor1 = $_POST['valor1'];
                $valor2 = $_POST['valor2'];
                $valor3 = $_POST['valor3'];
        switch($opcion){
            case 'suma':
                $resultado = $valor1+$valor2+$valor3;
                break;
            case 'resta':
                $resultado=$valor1-$valor2-$valor3;
                break;
            case 'multi':
                $resultado=$valor1*$valor2*$valor3;
                break;
            case 'division':
                $resultado=$valor1/$valor2/$valor3;
                break; 
        }
        
        }else{
           echo '<script>alert ("Por favor revisa los tipos de Datos permitidos")</script>'; 
        }
    }
    
    
    // echo $suma;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Ejercicio</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 mt-5">
                <h1 class="text-center">Calculadora</h1>
                <form action="index.php" method="POST" class="form-control">
                    <label for="" class="text-center fs-5">Elige una Opción</label>
                    <select name="opcion" id="" class="form-select aling-items-center form-control">
                        <option value="suma">Suma</option>
                        <option value="resta">Resta</option>
                        <option value="multi">Multiplicación</option>
                        <option value="division">División</option>
                    </select>
                    <input class="form-control mt-4" name="valor1" type="text" placeholder="ingresa un numero"
                        required="" autocomplete="off" <?php   ?>>
                    <input class="form-control mt-4" name="valor2" type="text" placeholder="ingresa un numero"
                        required="" autocomplete="off">
                    <input class="form-control mt-4" name="valor3" type="text" placeholder="ingresa un numero"
                        required="" autocomplete="off">
                    <input class="form-control mt-4" type="number" disabled value="<?=$resultado ?>">
                    <button type="submit" class="btn btn-dark container-fluid mt-5">Enviar</button>
                </form>
            </div>

        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>