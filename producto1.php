<!DOCTYPE html>
<html>
<link rel="stylesheet" href="producto1.css" type="text/css">
<head>
	<title>Corsair K55 RGB PRO XT</title>
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
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<center>
	<div id="title">
		<h1>Corsair K55 RGB PRO XT</h1>
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
						<img id="img_product1" src="https://www.razorman.net/reviewshardware/wp-content/uploads/K55_RGB_PRO_XT_03-Copiar.png">
						</div>
						<div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>ILUMINE SU BATTLESTATION</b></div>
				</div>
			</div>
		</div>

		<div id="zone_product2">
			<div id="border_product2">
				<div id="content_product2">
						<div id="zone_img_product2">
						<img id="img_product2" src="https://cwsmgmt.corsair.com/content/images/developer/howitworks-design-product.png">
						</div>
						<div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>INTEGRACIÓN CON EL JUEGO</b></div>
						</div>
			</div>
		</div>

		<div id="zone_product3">
					<div id="border_product3">
							<div id="content_product3">
					<div id="zone_img_product3">
					<img id="img_product3" src="https://images.evga.com/articles/01507/spill2.png">
					</div>
					<div id="name_product3" style="font-family: 'Courier New', Courier, monospace"><b>RESISTÉNCIA A LOS DERRAMES</b></div>
				</div>
			</div>
		</div>

		<div id="zone_product4">
			<div id="border_product4">
				<div id="content_product4">
					<div id="zone_img_product4">
					<img id="img_product4" src="https://www.corsair.com/corsairmedia/sys_master/productcontent/CH-9000003-NA-K90_D_left_US_LIT.png">
					</div>
					<div id="name_product4" style="font-family: 'Courier New', Courier, monospace"><b>CONTROL POR MACROS</b></div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer_zone">
		<div id="footer_text">
			<a href="http://138.2.183.208/privacidad.php"></a>
			<p> - Retroiluminación RGB dinámica en cada tecla: Ilumine su escritorio con diez efectos de iluminación integrados o programe sus propios efectos de vibrante iluminación con el software CORSAIR iCUE.</p>
			<p> - Seis teclas de macro dedicadas: Active funciones, atajos o pulsaciones de teclas de una sola vez con sus seis teclas de macro exclusivas, de fácil configuración mediante el software CORSAIR iCUE, o bien utilice comandos de streaming al instante mediante el software Elgato Stream Deck.</p>
			<p> - Diseño resistente al polvo y a los derrames: La protección IP42 contra el polvo y los derrames ayuda a evitar accidentes para que nunca tenga que interrumpir el juego.</p>
			<p> - Reposamuñecas extraíble: El reposamuñecas de goma suave reduce la presión en las muñecas, de modo que pueda jugar cómodamente durante más tiempo, y cuenta con superficie texturizada para evitar que las manos se deslicen.</p>
			<p> - Teclas específicas de volumen y reproducción multimedia: Práctico control de reproducción multimedia y ajuste de volumen de precisión sobre la marcha, sin tener que interrumpir el juego.</p>
			<p> - El potente software CORSAIR iCUE: Ofrece un potente control de la iluminación RGB dinámica, con una sofisticada programación de macros.</p>
			<p></p>
			<p></p>
			<p></p>
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
