<!DOCTYPE html>
<html>
<link rel="stylesheet" href="producto2.css" type="text/css">
<head>
	<title>MoonGaming Titan Ratón Gaming RGB | PCtrinitat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="header.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
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

<body>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script
	<center>
	<div id="title">
		<h1>MoonGaming Titan Ratón Gaming RGB </h1>
	</div>
	</center>
	<a class="button" href="productes.php">Volver a la tienda</a>
	<a class="button1" id="click">
			Añadir al carrito
		</a>



	<div id="zone_products">
		<div id="zone_product1">
			<div id="border_product1">
				<div id="content_product1">
						<div id="zone_img_product1">
						<img id="img_product1" src="https://moongaming.es/114-medium_default/raton-titan-rgb.jpg">
						</div>
						<div id="name_product1" style="font-family: 'Courier New', Courier, monospace"><b>NGIX RGB</b></div>
				</div>
			</div>
		</div>

		<div id="zone_product2">
			<div id="border_product2">
				<div id="content_product2">
						<div id="zone_img_product2">
						<img id="img_product2" src="https://moongaming.es/115-medium_default/raton-titan-rgb.jpg">
						</div>
						<div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>DISEÑO ERGONOMICO</b></div>
						</div>
			</div>
		</div>

		<div id="zone_product3">
			<div id="border_product3">
				<div id="content_product3">
					<div id="zone_img_product3">
					<img id="img_product3" src="https://moongaming.es/img/cms/WebP/Descripciones/RatonTitan/TITAN_FRONTAL75X50.webp"></div>
					<div id="name_product3" style="font-family: 'Courier New', Courier, monospace"><b>PERSONALIZA A TU MANERA</b></div>
				</div>
			</div>
		</div>

		<div id="zone_product4">
			<div id="border_product4">
				<div id="content_product4">
					<div id="zone_img_product4">
					<img id="img_product4" src="https://moongaming.es/img/cms/WebP/Descripciones/RatonTitan/TITAN_COLORS75x50_1.webp">
					</div>
					<div id="name_product4" style="font-family: 'Courier New', Courier, monospace"><b>CONTROL POR MACROS</b></div>
				</div>
			</div>
		</div>
</body>
<div id="footer_zone">
	 <div id="footer_text">
		<a href="http://138.2.183.208/privacidad.php"></a>
			<div id="all_text_footer">
			<p> - Nuestro ratón Gaming RGB cuenta con diseño ergonómico, siente como se adapta a tu mano para no perder en ningún momento el control gracias a su silicona antideslizante.</p>
			<p> - Siente el poder de 16,8 millones de colores, 12 modos de iluminación RGB con 16,8 millones de colores. Elige entre uno de sus modos de iluminación predeterminados</p>
			<p> - El sensor óptico profesional PixArt PMW3360 tiene una impresionante suavidad y precisión, hasta 12000 DPI que podrás configurar para cada ocasión.</p>
			<p> - Gracias a su inteligente diseño ergonómico TITAN se adapta a tu mano perfectamente asegurando horas de juego o trabajo sin ningún cansancio.</p>
			<p> - Con el software de control profesional MG TITAN puedes configurar cualquier detalle de tu ratón incluyendo iluminación y creación de macros.</p>
			<p> - Sensor gaming profesional PMW3360.</p>
			<p> - 7 botones programables.</p>
			<p> - Resolución máxima: 12000DPI </p>
			<p> - Velocidad máxima: 250IPS.</p>
			<p> - Polling rate 125/500/1000 Hz seleccionables</p>
			<p> - NIX RGB con 16.8 millones de colores y 12 modos de luz.</p>
			</div>
	</div>

</div>

</body>
        <script>
        $('#click').on('click',function(){
                Swal.fire({
                        title: 'Quieres añadir al carrito el producto?',
                        text: "Se añadira al carrito inmediatamente",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
			cancelButtonText: 'Cancelar',
                        confirmButtonText: 'Si, añadelo!'
                }).then((result) => {
                        if (result.isConfirmed) {
                                Swal.fire(
                                        'Añadido',
                                        'Tu producto se ha añadido al carrito',
                                        'success'
                                )
                        }
                })

        })
        </script>
</html>
