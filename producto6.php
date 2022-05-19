<!DOCTYPE html>
<html>
<link rel="stylesheet" href="producto6.css" type="text/css">
<head>
        <title>Newskill Kitsune Silla Gaming</title>
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
                <h1>Newskill Kitsune Silla Gaming</h1>
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
                                                <img id="img_product1" src="https://www.newskillgaming.com/img/cms/Kitsune%20Zephyr/KS-Zephyr-web-01.png">
                                                </div>
                                             <div id="name_product1" style="font-family: 'Courier New', Courier, monospace"><b>DIFERENTES COLORES</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product2">
                        <div id="border_product2">
                                <div id="content_product2">
                                                <div id="zone_img_product2">
                                                <img id="img_product2" src="https://www.newskillgaming.com/img/cms/kitsune%20RGB%20V2/Kitsune-RGB-V2-web-02.png">
                                                </div>
                                                <div id="name_product2" style="font-family: 'Courier New', Courier, monospace"><b>COJINES CONFORTABLES</b></div>
                                                </div>
                        </div>
                </div>

                <div id="zone_product3">
                                        <div id="border_product3">
                                                        <div id="content_product3">
                                        <div id="zone_img_product3">
                                        <img id="img_product3" src="https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_84002361/fee_325_225_png">
                                        </div>
                                        <div id="name_product3" style="font-family: 'Courier New', Courier, monospace"><b>DISEÑO ERGONÓMICO</b></div>
                                </div>
                        </div>
                </div>

                <div id="zone_product4">
                        <div id="border_product4">
                                <div id="content_product4">
                                        <div id="zone_img_product4">
                                        <img id="img_product4" src="https://sillagamer.org/wp-content/uploads/2021/09/Newskill-Neith-opiniones-e1631556420677-768x799.png">
                                        </div>
                                        <div id="name_product4" style="font-family: 'Courier New', Courier, monospace"><b>RECLINATE Y DISFRUTA</b></div>
                                </div>
                        </div>
                </div>
        </div>
        <div id="footer_zone">
                <div id="footer_text">
                        <a href="http://138.2.183.208/privacidad.php"></a>
                        <p> - Su diseño ergonómico hace que KITSUNE se ajuste a las curvaturas naturales de la espalda, proporcionándote una sensación de máximo confort.</p>
                        <p> - Cuenta además con cojines lumbares y trapezoidales que evitarán la sobrecarga de la musculatura de la espalda y el cuello.</p>
                        <p> - El reposamuñecas acolchado de KITSUNE te permitirá mantener un control total sobre tu ratón o teclado sin renunciar en ningún momento a la comodidad que te ofrece el completo apoyo del antebrazo.</p>
                        <p> - Aunque el exterior sea suave y acolchado como el algodón de azúcar, el interior cuenta con una estructura metálica que otorga la máxima solidez a la silla.</p>
                        <p> - Además de estar hecha con materiales de máxima calidad en su estructura interna y externa, las ruedas y la base de KITSUNE son de nylon reforzado para maximizar la durabilidad de la silla.</p>
                        <p> - Diseñada para aguantarlo todo KITSUNE tiene un pistón de gas clase 4 capaz de aguantar hasta 150 kilogramos.</p>
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

