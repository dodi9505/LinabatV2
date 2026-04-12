<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Linabat</title>
</head>

<body>
    <div>
        <header class="site-header">
            <?php include 'Layout/barra-menu.php'?>
        </header>

        <main class="nosotros contenedor">
            <div class="contenido-nosotros">
                <div class="info-nosotros">
                    <h2 class="centrar titulo">Linabat</h2>
                    <div class="descripcion principla contenedor">
                        <p>
                            Es una empresa dedicada a la consultoría en tecnologías de la información, así como el diseño,
                            desarrollo y comercialización de software a la medida para PYMES.
                        </p>
                    </div>
                </div>
                <?php include 'Layout/info-nosotros.php'?>
            </div>
        </main>

        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=527341355449" target="_blank" rel="noopener noreferrer"><img src="img/whatsapp.svg"
                    alt="WhatsApp Linabat"></a>
        </div>
    </div>
    <div>
        <footer class="site-footer">
            <?php include 'Layout/footer.php' ?>
        </footer>

        <div class="foot-copyright">
            <p>Linabat &copy; 2020 Todos los Derechos Reservados</p>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>
