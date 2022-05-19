<!DOCTYPE html>
<html>
<link rel="stylesheet" href="producto4.css" type="text/css">
<head>
        <title>Forgeon Mithril ARGB Mesh</title>
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
                <h1>Forgeon Mithril ARGB Mesh</h1>
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
                                                <img id="img_product1" src="https://cdn.pccomponentes.com/img/landingpages/Fichas_Forgeon/mitrhil-WHITE/img/rgb_ventiladores@1,25x-min.png">
                                                </div>
                                                <div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>VENTILADORES RGB</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product2">
                        <div id="border_product2">
                                <div id="content_product2">
                                                <div id="zone_img_product2">
                                                <img id="img_product2" src="https://cdn.pccomponentes.com/img/landingpages/Fichas_Forgeon/mitrhil-BLACK/img/m_01-min.png">
                                                </div>
                                                <div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>GRAN CAPACIDAD</b></div>
                                                </div>
                        </div>
                </div>

                <div id="zone_product3">
                                        <div id="border_product3">
                                                        <div id="content_product3">
                                        <div id="zone_img_product3">
                                        <img id="img_product3" src="https://cdn.pccomponentes.com/img/landingpages/Fichas_Forgeon/mitrhil-BLACK/img/m_02-min.png">
                                        </div>
                                        <div id="name_product3" style="font-family: 'Courier New', Courier, monospace"><b>PANEL MODULAR</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product4">
                        <div id="border_product4">
                                <div id="content_product4">
                                        <div id="zone_img_product4">
                                        <img id="img_product4" src="https://cdn.pccomponentes.com/img/landingpages/Fichas_Forgeon/mitrhil-BLACK/img/mitrhil_05@1,25x-min.png">
                                        </div>
                                        <div id="name_product4" style="font-family: 'Courier New', Courier, monospace"><b>FORGEON MITRHIL</b></div>
                                </div>
                        </div>
                </div>
        </div>
        <div id="footer_zone">
                <div id="footer_text">
                        <a href="http://138.2.183.208/privacidad.php"></a>
                        <p> - Esta torre dispone de un acceso completo a sus diferentes elementos de conectividad entre ellos incorpora dos puertos USB 3.0 .</p>
                        <p> - Incrementa la velocidad de lectura de datos y programas junto a otro puerto USB de tipo C para la conexión de móviles más un panel HD de audio.</p>
                        <p> - Sus dimensiones de 460 mm x 231mm x 490mm te proporcionan el espacio que necesitas para que puedas conectar todos tus elementos con total comodidad. .</p>
                        <p> - Por lo tanto al disponer de más espacio podrás limpiarla con mayor facilidad y tenerla siempre lista.</p>
                        <p> - Como novedad incorpora grandes posibilidades respecto a los ventiladores RGB. Entre ellos incluye 3 de tipo A-RGB en su parte delantera de 120 mm, 1 de tipo A-RGB en parte trasera.</p>
                        <p> -Como funcionalidad exclusiva incorpora un panel central modular que te brinda tener un control total del flujo de aire que necesitas para que puedas decidir qué cantidad de aire quieres en esta fantástica torre.</p>
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
