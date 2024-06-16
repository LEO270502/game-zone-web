<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del juego de palabras</title>
    <link rel="icon" type="image/jpg" href="Imagenes/Game Zone.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 100;
        }
       
        .result-container {
            background-color: #ffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .correct {
            color: green;
        }
        .incorrect {
            color: red;
        }
    </style>
</head>
<body>
<div class="background-blur"></div>    
<div class="result-container"></div>

<?php
//Formulario que se encarga de dar una retroalimentacion a nuestro usuario.



$palabras = array('sol', 'luna', 'cielo', 'estrellas', 'coche');

echo "<h3>Resultados del juego de palabras</h3>";
echo "<ul class=list-group'>";


//Comparacion de que las palabras que introdujo el usuario son las mismas que aparecen aqui.

foreach ($palabras as $index => $palabra) {
    $inputName = 'palabra' . $index;
    if (isset($_GET[$inputName])) {
        $respuesta = $_GET[$inputName];
        if ($respuesta == $palabra) {
            echo "<li class='list-group-item correct'>La palabra que ingresaste ($respuesta) es correcta.</li>";
        } else {
            echo "<li class='list-group-item incorrect'>La palabra que ingresaste ($respuesta) es incorrecta, la palabra correcta es: $palabra.</li>";
        }
    } else {
        echo "<li class='list-group-item incorrect'>No ingresaste una respuesta para la palabra: $palabra.</li>";
    }
}

echo "</ul>";
?>