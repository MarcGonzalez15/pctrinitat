<!DOCTYPE html>
<html>
<link rel="stylesheet" href="producto8.css" type="text/css">
<head>
        <title>Logitech G29 Driving Force</title>
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
                <h1>Logitech G29 Driving Force</h1>
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
                                                <img id="img_product1" src="https://resource.logitechg.com/d_transparent.gif/content/dam/gaming/en/products/drivingforce/g920-gallery-1-1.png">
                                                </div>
                                                <div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>VOLANTE DE CUERO</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product2">
                        <div id="border_product2">
                                <div id="content_product2">
                                                <div id="zone_img_product2">
                                                <img id="img_product2" src="https://c1-ebgames.eb-cdn.com.au/merchandising/images/packshots/a1db609bd9204f4d9fcf0bc921928b7d_Large.png">
                                                </div>
                                                <div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>PEDALES AJUSTABLES</b></div>
                                                </div>
                        </div>
                </div>

                <div id="zone_product3">
                                        <div id="border_product3">
                                                        <div id="content_product3">
                                        <div id="zone_img_product3">
                                        <img id="img_product3" src="https://resource.logitechg.com/d_transparent.gif/content/dam/gaming/en/products/driving-force-shifter/shifter-gallery-1.png">
                                        </div>
                                        <div id="name_product3" style="font-family: 'Courier New', Courier, monospace"><b>A TODA MARCHA</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product4">
                        <div id="border_product4">
                                <div id="content_product4">
                                        <div id="zone_img_product4">
                                        <img id="img_product4" src="https://www.beracer.com/wp-content/uploads/2018/08/dirt.png">
                                        </div>
                                        <div id="name_product4" style="font-family: 'Courier New', Courier, monospace"><b>SOPORTES PARA MESA O CONDUCCIÓN</b></div>
                                </div>
                        </div>
                </div>
        </div>
        <div id="footer_zone">
                <div id="footer_text">
                        <a href="http://138.2.183.208/privacidad.php"></a>
                        <p> - Combina el volante G29 Driving Force con la palanca de cambio Driving Force para tener un soporte completo y vivir una experiencia de carreras increíblemente realista.</p>
                        <p> - Mete la marcha adecuada en el momento preciso con nuestra palanca de coche de carreras con cambio manual de 6 velocidades.</p>
                        <p> - Este volante PS4 incorpora Force Feedback, dos motores que te permitirán sentir cada curva y derrape como si estuvieras realmente en un vehículo. Vibrarás cuando se pongan en marcha y notarás con precisión hasta la última maniobra.</p>
                        <p> - Los materiales con los que ha sido fabricado el G29 para durar y aguantar todo lo que le eches. Tiene cojinetes de acero en el eje utiliza acero inoxidable para pedales y palancas.</p>
                        <p> - La acción es fluida y silenciosa en el volante PS3 gracias a su sistema de transmisión que reduce ruido y vibraciones no deseadas. La tensión contra la holgura permite que los pedales y el volanteG29 estén siempre firmes..</p>
                        <p> - Con una rotación de 900º, el volante Logitech G29 simula el giro de un volante real y lo disfrutarás a tope en el Need for Speed, DriveClub o Gran Turismo 7.</p>
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
                        confirmButtonText: 'Si, añadelo!',
			cancelButtonText: 'Cancelar'
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

