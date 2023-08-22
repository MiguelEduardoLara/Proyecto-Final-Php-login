<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">   

    <title>Users CRUD</title>
</head>

<body id="bodyindex1">
<img src="./Imagenes/Logo.PNG"id="img-logo" width="30px" height="30px" alt="" srcset=""></a>

        <form action="insert_user.php" method="POST">

        <h2 style="color: white">Bienvenido a Cereales Maya</h2>
        <h3 style="color: yellow">Inicia tu Registro</h3>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
        </div>

        <div class="input-wrapper">
            <input type="text" name="lastname" placeholder="Apellidos">
        </div>

        <div class="input-wrapper">
            <input type="text" name="username" placeholder="Username">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Password">
        </div>

        <div class="input-wrapper">
            <input type="text" name="email" placeholder="Email">
        </div>

        

           <div class="input-wrapper"> 
            <input class="btn" type="submit" name=""value="Enviar">
            </div> 
            
            <br>
            <br>
                <div class="input-wrapper"> 
                <button class="btn"><a href="register.php">Usuarios Registrados</button>
                </div>
                <div class="input-wrapper">
                <button class="btn"> <a href="index.php">Menú</a></button>
                </div>
                
        </form>
    </div>

</body>

</html>