<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Editar usuarios</title>
        
    </head>

    

    <body id="bodyupdate">
    

        <h2 id="tituloupdate">Actualiza tu Registro</h2>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input class="form"type="hidden" name="id" value="<?= $row['id']?>">
                <input class="form"type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input class="form"type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname']?>">
                <input class="form"type="text" name="username" placeholder="Username" value="<?= $row['username']?>">
                <input class="form"type="text" name="password" placeholder="Password" value="<?= $row['password']?>">
                <input class="form"type="text" name="email" placeholder="Email" value="<?= $row['email']?>">

               
                <input class="btn" type="submit" value="Actualizar">

                
                
                
            </form>
        </div>
    </body>
</html>
