<?php
$nombre = $_POST['nombre'] ?? '';
$edad = $_POST['edad'] ?? '';
$ciudad = $_POST['ciudad'] ?? '';
$fecha = $_POST['fecha'] ?? '';
$pasatiempo = $_POST['pasatiempo'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Resultados de datos!</title>
    <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css"/>
</head>
<body>
    <div class="dive2">
        <h1>RESULTADOS</h1>
        <img src="pusheen.gif" alt="Resultados">
        <h2>¡BIEN HECHO!</h2>

        <?php
        echo "<p><b>Nombre: </b>" . $nombre . "</p>";
        echo "<p><b>Edad: </b>" . $edad . "</p>";
        echo "<p><b>Ciudad: </b>" . $ciudad . "</p>";
        echo "<p><b>Fecha de Nacimiento: </b>" . $fecha . "</p>";
        echo "<p><b>Pasatiempo: </b>" . $pasatiempo . "</p>";
        ?>

        <!-- Estructura del Pop-Up Modal -->
        <div id="popUpOverlay"></div>
        <div id="popUpBox" style="display:none;">
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1>¿VOLVER A INGRESAR DATOS?</h1>
                <div id="closeModal"></div>
            </div>
        </div>

        <br>
        <button type="button" class="btn" onclick="Alert.render()">¡Volver a Ingresar!</button>
    </div>

    <script src="./app.js"></script>
</body>
</html>

