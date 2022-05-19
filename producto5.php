<!DOCTYPE html>
<html>
<link rel="stylesheet" href="producto5.css" type="text/css">
<head>
        <title>Newskill Seth Auriculares Gaming</title>
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
                <h1>Newskill Seth Auriculares Gaming</h1>
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
                                                <img id="img_product1" src="https://www.newskillgaming.com/3402-medium_default/newskill-seth-auriculares-gaming-inalambricos-24hz-rgb.jpg">
                                                </div>
                                                <div id="name_product1" style="font-family: 'Courier New', Courier, monospace"><b>COLORES RGB</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product2">
                        <div id="border_product2">
                                <div id="content_product2">
                                                <div id="zone_img_product2">
                                                <img id="img_product2" src="https://www.newskillgaming.com/3407-medium_default/newskill-seth-ivory-auriculares-gaming-inalambricos-24hz-rgb.jpg">
                                                </div>
                                                <div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>DIFERENTES COLORES DE MODELO</b></div>
                                                </div>
                        </div>
                </div>

                <div id="zone_product3">
                        <div id="border_product3">
                                <div id="content_product3">
                                        <div id="zone_img_product3">
                                        <img id="img_product3" src="https://i0.wp.com/zonaactual.es/wp-content/uploads/2022/01/newskill-seth-auriculares-gaming-inalambricos-24hz-rgb-2.png?ssl=1">
                                        </div>
                                        <div id="name_product3" style="font-family: 'Courier New', Courier, monospace"><b>CASCOS INALÁMBRICOS</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product4">
                        <div id="border_product4">
                                <div id="content_product4">
                                        <div id="zone_img_product4">
                                        <img id="img_product4" src="https://www.newskillgaming.com/1790-medium_default/newskill-raksha-spectrum-soporte-para-auriculares-rgb.jpg">
                                        </div>
                                        <div id="name_product4" style="font-family: 'Courier New', Courier, monospace"><b>SOPORTE INCLUIDO</b></div>
                                </div>
                        </div>
                </div>
        </div>
        <div id="footer_zone">
                <div id="footer_text">
                        <a href="http://138.2.183.208/privacidad.php"></a>
                        <p> - Seth cuenta con maravillosa tecnología wireless 2.4Ghz, para que te olvides del cableado y disfrutes de una experiencia totalmente inalámbrica, con una conexión estable.</p>
                        <p> - Controla todas tus acciones cómodamente desde los botones integrados en los auriculares: conéctalos, muévete entre canciones, sube o baja el volumen, mutea el micro, activa o desactiva la iluminación RGB.</p>
                        <p> - La tecnología wireless 2.4GHz de Seth, te proporcionará una experiencia de sonido estéreo estable y de alta calidad.</p>
                        <p> - Su micrófono extraíble te acompañará durante tus partidas, para que te reciban siempre alto y claro.</p>
                        <p> - Gracias a su posibilidad de conexión con cable de audio jack 3.5 mm, podrás disfrutar del mejor audio y sonido también en PS4, PS5, Xbox One, Xbox Series X/S, Nintendo Switch o incluso algunos móviles.</p>
                        <p> - La tecnología wireless 2.4GHz de Seth, te proporcionará una experiencia de sonido estéreo estable y de alta calidad, incluso en su modo inalámbrico, de la manera más cómoda, gracias a sus auriculares de 50mm, con almohadillas acolchadas.</p>
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

