<!DOCTYPE html>
<html lang="es">
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Juego de palabras</title>
        <link rel="icon" type="image/jpg" href="Imagenes/Game Zone.jpg">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /*Imagen*/
        body {
            background: url('Imagenes/Game Zone.jpg')no-repeat center center fixed;
            background-size:cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        /*Difuminado*/
        .background-blur{
            position: absolute;
            top:0;
            left:0;
            right:0;
            bottom:0;
            background: inherit;
            filter: blur(3px);
            z-index: 1;

        }
        /*Diseño del Formulario de palabras*/
        .form-container {
            background-color: rgba(255,255,255,0.4);
            position: relative;
            z-index: 2;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    </head>
<body>
    <div class="background-blur"></div>
    <div class="form-container">

<?php
//Arreglo de 6 palabras
$palabras = array('sol', 'luna', 'cielo', 'estrellas', 'coche');
//$palabrasDesordenadas = array();

//
$form = "<form action ='Analisis.php' method = 'GET' class='form-group'>";

//Estructura for
foreach ($palabras as $index => $palabra) {
    $form .= "<div class='form-group'>";
    $form .= "<label>La palabra: " . str_shuffle($palabra) . "</label>";
    $form .= "<input type='text' name='palabra$index' class='form-control'><br>";
    $form .= "</div>";
}

$form .= "<button type='submit' class='btn btn-primary'>Enviar</button>";
$form .= "</form>";

echo $form;
?>
  </div>
 </body>
</html>

