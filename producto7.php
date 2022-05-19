<!DOCTYPE html>
<html>
<link rel="stylesheet" href="producto7.css" type="text/css">
<head>
        <title>Gigabyte GeForce RTX 3060 GAMING</title>
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
                <h1>Gigabyte GeForce RTX 3060 GAMING</h1>
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
                                                <img id="img_product1" src="https://www.abctic.com/123898-home_default/gigabyte-geforce-rtx-3060-ti-gaming-oc-pro-8g-rev-3-0-nvidia-8-gb-gddr6.jpg">
                                                </div>
                                                <div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>ARQUITECTURA NVIDIA AMPERE</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product2">
                        <div id="border_product2">
                                <div id="content_product2">
                                                <div id="zone_img_product2">
                                                <img id="img_product2" src="https://www.gigabyte.com/FileUpload/Global/KeyFeature/1889/innergigabyteimages/rgb/cover.png">
                                                </div>
                                                <div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>ACELERACIÓN POR IA DE DLSS</b></div>
                                                </div>
                        </div>
                </div>

                <div id="zone_product3">
                          <div id="border_product3">
                                 <div id="content_product3">
                                        <div id="zone_img_product3">
                                        <img id="img_product3" src="http://sc04.alicdn.com/kf/H9be546189fc247528b3155ca0fd948e0Y.png">
                                        </div>
                                        <div id="name_product3" style="font-family: 'Courier New', Courier, monospace"><b>VENTILADORES DE ALTA POTENCIA</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product4">
                        <div id="border_product4">
                                <div id="content_product4">
                                        <div id="zone_img_product4">
                                        <img id="img_product4" src="https://www.buyer-trade.com/1452-home_default/gigabyte-geforce-rtx-3060-gaming-ddr6-oc-12gb.jpg">
                                        </div>
                                        <div id="name_product4" style="font-family: 'Courier New', Courier, monospace"><b>CAPACIDAD MEMÓRIA 12 GB</b></div>
                                </div>
                        </div>
                </div>
        </div>
        <div id="footer_zone">
                <div id="footer_text">
                        <a href="http://138.2.183.208/privacidad.php"></a>
                        <p> - Disfruta de los mayores éxitos de ventas de hoy como nunca antes con la fidelidad visual del trazado de rayos en tiempo real y el rendimiento definitivo de DLSS con tecnología de IA.</p>
                        <p> - NVIDIA Reflex ofrece la máxima ventaja competitiva. La latencia más baja. La mejor capacidad de respuesta. Gracias a las GPU GeForce RTX serie 30 y los monitores NVIDIA.</p>
                        <p> - Adquiere objetivos más rápido, reacciona con más rapidez y aumenta la precisión del objetivo con un conjunto revolucionario de tecnologías para medir y optimizar la latencia del sistema para los juegos competitivos.</p>
                        <p> - Acapara la atención de todos gracias a unos gráficos increíbles y a una transmisión en directo fluida y sin cortes. La codificación y la decodificación de hardware de última generación se combinan para que presumas de tus mejores momentos con gran detalle.</p>
                        <p> - La nueva arquitectura NVIDIA Ampere ofrece el juego definitivo y presenta los núcleos avanzados de trazado de rayos de segunda generación y los Tensor Cores de tercera generación con un rendimiento superior.</p>
                        <p> - Las tarjetas gráficas GeForce RTX presentan características avanzadas de DX12 como el trazado de rayos y el sombreado de tasa variable, que dan vida a los juegos con efectos visuales muy realistas.</p>
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
