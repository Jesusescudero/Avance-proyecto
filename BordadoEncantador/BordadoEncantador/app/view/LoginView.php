<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <header>
        <h2>LOGIN</h2>
    </header>
    <section>
        <form action="../controller/loginController.php" method="post"></form>
        <div class="fcontainer"></div>
        <label for="user">Usuario: </label>
        <input type="text" name="user" id="user" placeholder="Usuario">
        <div class="fcontainer">
        <label for="password">Password</label>
        <input type="text" name="password" id="password" placeholder="Password">
        </div>
        <div class="fcontainer">
            <input type="submit" value="Login">
        </div>
        <div class="fcontainer">
            <input type="submit" value="Registrar">
    </section>
</body>
</html>