 <?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

switch($operacion){

    case "sumar":
        $resultado = $num1 + $num2;
        break;

    case "restar":
        $resultado = $num1 - $num2;
        break;

    case "multiplicar":
        $resultado = $num1 * $num2;
        break;

    case "dividir":

        if($num2 != 0){
            $resultado = $num1 / $num2;
        }else{
            $resultado = "No se puede dividir para cero";
        }

        break;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <div class="resultado">

        <h1>Resultado de la Operación</h1>

        <p>
            <?php echo $resultado; ?>
        </p>

        <a href="index.html">
            <button>Volver a la página principal</button>
        </a>

    </div>

</body>

</html>