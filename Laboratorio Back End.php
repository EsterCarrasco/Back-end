<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Guaderia</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
   
</head>
<body>
    <div>

    <div>
    <h1>Bienvenidos a la Guaderia</h1>
       
        <h2>Registrate</h2>
        <form action="Guaderia.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" require>
    <input type="text" name="apellido1" placeholder="Primer Apellido" require >
    <input type="text" name="apellido2" placeholder="Segundo Apellido" require >
    <input type="email" name="email" placeholder="Correo Electrónico" require_once>
    <input type="text" name="login" placeholder="Login" require_once>
    <input type="password" name="password" placeholder="Contraseña" require>
    <input type="submit" value="enviar">
</div>
            

        </form>
    </div>

   

</body>
</html>

