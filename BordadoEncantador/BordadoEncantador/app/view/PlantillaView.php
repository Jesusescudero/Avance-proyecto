<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bordado Encantador</title>
    <link rel="stylesheet" href="app/view/style.css">
</head>
<body>
    <header class="header">
        <h1>Bordado Encantador</h1>
        <nav class="navbar">
            <ul>
                <li><a href="http://localhost/BordadoEncantador/">Inicio</a></li>
                <li><a href="http://localhost/BordadoEncantador?C=ProductsController&M=index">Prendas</a></li>
                <li><a href="http://localhost/BordadoEncantador?C=UserController&M=index">Usuarios</a></li>
                <li><a href="http://localhost/BordadoEncantador?C=VarietalsController&M=index">Contactos</a></li>
                <li><a href="http://localhost/BordadoEncantador?C=PresentsController&M=index">Presentacion</a></li>
                <li><a href="http://localhost/BordadoEncantador?C=PresentsController&M=index">Consultar informacion</a></li>
                <li><a href="http://localhost/BordadoEncantador?C=UserController&M=CallFormLogin">Login</a></li>
            </ul>
    </header>
    <section class="container">
        <!-- aqui vamos a llamar a los elementos que vamos a mostrar posteriormente-->
        <?php include_once($vista); ?>
    </section>
    <footer class="footer">
        <h3>Derechos reservados</h3>
    </footer>
    
</body>
</html>