<!DOCTYPE html>
<html>
  <head>
    <title>Contactanos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="header.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/4f66548f72.js" crossorigin="anonymous"></script>
    <link href="contactes.css" rel="stylesheet">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  </head>
  <body>
    <!-- HEADER -->
    	<header class="header-basic">
			  <div class="header-limiter">
				  <h1><a href="index.php">PC<span>trinitat</span></a></h1>
          <nav>
            <a href="index.php">Inicio</a>
            <a href="productes.php">Productos</a>
            <a href="servicios.php">Servicios</a>
            <a href="contacte.php">Contactos</a>
	    <a href="aboutus.php" >About us</a>
          </nav>
        </div>
      </header>
      <!-- BLOQUE DE LA IZQUIERDA -->
    <div class="main-block">
      <div class="left-part">
        <i class="fa-solid fa-headset"></i>
        <h2>Revisa nuestros productos y servicios</h2>
        <p>En PCtrinitat ofrecemos una variedad ancha y amplia de productos informáticos tal como periféricos o servicios como mantenimiento de equipos</p>
        <div class="btn-group">
          <a class="btn-item" href="productes.php">Enterate de nuestros productos</a>
          <a class="btn-item" href="servicios.php">Contrata nuestros servicios</a>
        </div>
      </div>
      <!-- FORMULARIO -->
      <form action="https://formspree.io/f/mbjwqgpp" method="POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Contactanos</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" required="required"  name="Nombre" placeholder="Nombre completo">
          <input type="emai" name="Email" required="required" placeholder="Email">
          <input type="number" name="Teléfono" required="required"  placeholder="Número de teléfono">
          <select name="Ayuda" required="required" >
            <option hidden selected>Motivo de la consulta</option>
            <option value="asis-tec">Asistencia técnica*</option>
            <option value="product" >Información sobre productos</option>
            <option value="trabajo" >Trabaja con nosotros</option>
            <option value="pedidos" >Mis pedidos</option>
            <option value="ofertas" >Quiero que me notifiquen las ofertas</option>
          </select>
          <textarea name="Mensaje" placeholder="Mensaje..."></textarea>
        </div>
        <!-- BOTON DE PRIVACIDAD -->
        <div class="checkbox">
          <input type="checkbox" name="checkbox" required="required"><span>Acepto las <a href="privacidad.php">Politicas de Privacidad de PCtrinitat.</a></span>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </body>
  <!-- FOOTER -->
  <div class="footer-basic">
    <footer>
        <div class="social"><a href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a><a href="https://accounts.snapchat.com/"><i class="icon ion-social-snapchat"></i></a><a href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a><a href="https://facebook.com"><i class="icon ion-social-facebook"></i></a></div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="index.php">Inicio</a></li>
            <li class="list-inline-item"><a href="productes.php">Productos</a></li>
            <li class="list-inline-item"><a href="servicios.php">Servicios</a></li>
            <li class="list-inline-item"><a href="contacte.php">Contactanos</a></li>
            <li class="list-inline-item"><a href="avislegal.php">Aviso legal</a></li>
        </ul>
        <p class="copyright">PCtrinitat © 2022</p>
    </footer>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</html>
