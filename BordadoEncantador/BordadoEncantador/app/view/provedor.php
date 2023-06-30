<!DOCTYPE html>
<html>
<head>
    <title>Consulta de los provedores del producto</title>
</head>
<body>
    <h1>Ingresa los datos</h1>
    
    <form method="POST" action="">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" id="producto" name="producto" placeholder="Ingrese un nombre">
        <br><br>
        <input type="submit" value="Consultar">
    </form>
    <hr>

    <!-- Resultados de la consulta -->
    <h2>Resultados:</h2>
    <div id="resultados">
        <?php echo isset($resultados) ? $resultados : ""; ?>
    </div>
</body>
</html>