<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title>Bienvenido a mi sitio Web</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    
 <style>
    @import url(style.css);
 </style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body style="margin: 0 auto">
    
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <h2 id="Conf">Te registraste con el usuario <?= $user['email']; ?></h2>


     <br> 

     <br>

       <button class="botones"> <a href="logout.php">Cerrar sesión</a></button>
       <button class="botones"> <a href="./Index1.php">Dejanos tus datos</a></button>
       <button class="botones"> <a href="Frutos Secos.html">Frutos Secos</a></button>
       
                
       <br>
       
       <br>

                <!-- Seccion 1 -->

            
            

            <h1 id="Conf1">Ven y Conoce Nuestro Punto Físico</h1>

            <br>

            <img class="centerindex" src="./Imagenes/Fondo2.PNG" alt=""width="700px"height="500px">

            <br>
            <br>
        
        <!-- Seccion 2 -->
    </header>
    <section class="section1">
        <h4>Esta es una sencilla receta para elaborar barras de cereal, las cuales te brindan
            energía para cualquier momento del dia. Aquí puedes encontrar los ingredientes para
             las mejores recetas saludables!</h4>

             <br>
             <br>

        <iframe class="centerindex" width="560" height="310" src="https://www.youtube.com/embed/RMLNgVgLGqA"
            title="BARRITAS de AVENA - Sólo 3 INGREDIENTES 😍 SIN HORNO, Vegano, Fácil y Saludable" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

            <br>
            <br>

    </section>
    <article class="article1">
        <h4 class="titulos">Porque es importante incluir almendras en nuestrea dieta?</h4>
        <p>
            Las almendras se consideran una buena opción con muchos planes populares de pérdida de peso porque
            proporcionan proteínas vegetales energizantes, fibra y grasas saludables, para ayudar a mantenerte
            satisfecho entre comidas.</p>

    </article>
    <!-- Seccion 3 -->
    <section class="section2">

        <figure>
            <img class="centerindex" src="./Imagenes/almendras1.PNG" alt=""width="300"height="200">
        </figure>

        <div>


        </div>
    </section>
    <!-- Seccion 4 -->
    <section class="section3">

        <figure class="figure3">
        <br>
        
            <h4 class="titulos">La combinacion de los mejores frutos en un desayuno!</h4>
            <br>
            <img class="centerindex" src="./Imagenes/Granola.PNG" alt="">
        </figure>

        <div>

            <h4>Principales beneficios de la granola:</h4>
            <ul>
                <li>Mejora la digestión</li>
                <li>Aporta mayor saciedad</li>
                <li>Contiene vitaminas y minerales necesarias en el organismo</li>
                <li>Excelente fuente de grasas saludables</li>


            </ul>


        </div>
    </section>
    <!--  Pie de pagina de mi sitio web -->
    <footer class="footer1">

        <hr>

        <address id="copyright">@2023 Derechos Reservados Miguel Eduardo Lara</address>
        <p style="color: white">Proyecto Final Diplomado Desarrollo Web Opción de Grado</p>

        <div id="div2">
            <a href="https://www.facebook.com/p/Cereales-MAYA-100079499201051/" target="_blank">Facebook</a>-
            <a href="https://www.instagram.com/cereales_maya/?hl=es" target="_blank">instagram</a>
        </div>    

        

            
           

    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>

    <?php else: ?>
      <h1 id="inicio">Inicia sesión o Crea una Cuenta</h1>
      <body id="body1">

    </body>
      
      <a id="btn1"href="login.php">inicia sesión</a>  
      <a id="btn2"href="signup.php">Regístrate</a>
      
    <?php endif; ?>
  
</html>




