<!DOCTYPE html>
<html>
<link rel="stylesheet" href="producto3.css" type="text/css">
<head>
        <title>MSI Optix G27C7 27" LED FullHD</title>
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
                <h1>MSI Optix G27C7 27" LED FullHD</h1>
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
                                                <img id="img_product1" src="https://storage-asset.msi.com/global/picture/image/feature/monitor/Optix-G27C7/mnt-165hz.png">
                                                </div>
                                                <div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>165 Hz</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product2">
                        <div id="border_product2">
                                <div id="content_product2">
                                                <div id="zone_img_product2">
                                                <img id="img_product2" src="https://my-cdn.pgmall.my/image/cache/catalog/seller_store/store14913/product/0535895001638521220product0201908190521135d5a31c9ec64d-819x866.png">                                                </div>
                                                <div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>PANTALLA CURVADA</b></div>
                                                </div>
                        </div>
                </div>

                <div id="zone_product3">
                                        <div id="border_product3">
                                                        <div id="content_product3">
                                        <div id="zone_img_product3">
                                        <img id="img_product3" src="https://blurbusters.com/wp-content/uploads/2021/01/MSI-Optix-G27CQ4P-4.png">
                                        </div>
                                        <div id="name_product3" style="font-family: 'Courier New', Courier, monospace"><b>RESOLUCIÓN HD CON RGB</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product4">
                        <div id="border_product4">
                                <div id="content_product4">
                                        <div id="zone_img_product4">
                                        <img id="img_product4" src="https://image.ceneostatic.pl/data/article_picture/87/a6/fc82-1b76-499e-9758-132538c95729_large.png">
                                        </div>
                                        <div id="name_product4" style="font-family: 'Courier New', Courier, monospace"><b>27 PULGADAS</b></div>
                                </div>
                        </div>
                </div>
        </div>
        <div id="footer_zone">
                <div id="footer_text">
                        <a href="privacidad.php"></a>
                        <p> - Pantalla de juego curva (1500R): la mejor inmersión de juego.</p>
                        <p> - Frecuencia de actualización de 165 Hz: juego realmente fluido.</p>
                        <p> - Amplia gama de colores: los colores y detalles del juego se verán más realistas y refinados, llevando la inmersión al juego al límite.</p>
                        <p> - Visión nocturna: vea cada detalle con claridad en la oscuridad, lo que lo ayudará a encontrar y atacar a los enemigos antes de que se den cuenta.</p>
                        <p> - Ángulo de visión amplio de 178 °: los colores y los detalles se mantendrán nítidos en más ángulos con un ángulo de visión amplio de 178 °.</p>
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
