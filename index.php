<?php
  /*seleccionando pagina a mostrar*/

  if(isset($_GET['pg'])){
        $pg=$_GET['pg']; /*indica la pag a abrir ejem.: index.php?pg=login */
  }
  else{
    $pg=''; /*valor por default*/
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Levent Finess</title>
    <!--para el carrucel-->
    <link rel="stylesheet" href="css/style.css"  type="text/css" >
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">



  </head>

  <body>
    <header>
      <div class="menu-bar">
        <span class="gatilho-menu" data-js="gatilhoMenu">
            <i id="men-res" class="fa fa-bars" aria-hidden="true"></i>
  		  </span>
  		  <div class="logo"><img src="img/logo.png" alt="" /></div>
  		  <nav class="nav desktop">
    			<ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="conocenos.html">Conocenos</a></li>
    				<li><a href="clases.html">Clases</a></li>
    				<li><a href="galeria.html">Galeria</a></li>
    				<li><a href="contacto.html">Contato</a></li>
    			</ul>
    		</nav>
    	</div>
    	<div data-js="menuResponsive" class="responsive">
    		<nav class="nav">
    			<ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="conocenos.html">Conocenos</a></li>
    				<li><a href="clases.html">Clases</a></li>
    				<li><a href="galeria.html">Galeria</a></li>
    				<li><a href="contacto.html">Contato</a></li>
    			</ul>
    		</nav>
    	</div>
    </header>
    <section id="contenido">

        <!--aqui va todo nuestro contenido dinamico-->
        <?php
          if($pg=='inicio')include('inicio.html');
          if($pg=='conocenos')include('conocenos.html');
          if($pg=='clases')include('clases.html');
          if($pg=='galeria')include('galeria.html');
          if($pg=='contacto')include('contacto.html');

          if($pg=='')include('inicio.html'); /*pag por default privada*/
        ?>

    </section>

    <footer>

    </footer>


    <script src="js/index.js"></script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>


  </body>
</html>
