<!DOCTYPE html>
<html>
<head>
    <title>Consulta</title>
</head>
<body>
    <h1>Gasto del cliente</h1>
    
    <form method="POST" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese un nombre">
        <br><br>
        <label for="apellidoP">Apellido paterno:</label>
        <input type="text" id="paterno" name="paterno" placeholder="Ingrese su Apellido">
        <br><br>
        <label for="apellidoM">Apellido materno:</label>
        <input type="text" id="materno" name="materno" placeholder="Ingrese su Apellido">
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