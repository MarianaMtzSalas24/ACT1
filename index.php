<!DOCTYPE html>
<html lang="es"> 

<head>
    <meta charset="UTF-8">
    <title> Captura de datos </title>
    <scrip src="https://kit.sontawesome.com/a-1-07a89a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css"/>
</head>
<body>
    <div class="dive">
    <h1>Captura de datos</h1>
    <br>
    <h2>Ingresa los datos</h2>
    <br>
    <p>Mi primer encuesta</p>
    <hr> 

    <form action="resultados.php" method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre"/><hr>
        
        <label for="edad">Edad</label>
        <input type="number" id="edad" name="edad"/><hr>
        
        <label for="ciudad">Ciudad donde vives</label>
            <input type="text" id="ciudad" name="ciudad" placeholder="Ingresa tu ciudad donde vives"/><hr>

            <label for="fecha">Fecha de Nacimiento</label>
            <input type="date" id="fecha" name="fecha"/><hr>

            <label for="pasatiempo">Pasatiempo favorito</label>
            <input type="text" id="pasatiempo" name="pasatiempo" placeholder="Ingresa tu pasatiempo favorito"/><hr>

            <button type="submit">¡Ingresamos Datos!</button>

</form>
</div>     
</body>
</html>