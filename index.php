<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.11.0/sweetalert2.css">
    <script src="js/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/enviar-email.js"></script>
    <title>Linabat</title>
</head>

<body>
    <div>
        <header class="site-header">
            <?php include 'Layout/barra-menu.php'?>
        </header>

        <section class="hero hero-tech" id="inicio">
            <div class="hero-overlay-grid"></div>
            <div class="hero-particles" aria-hidden="true">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="contenido-hero contenedor hero-grid">
                <div class="hero-copy hero-copy-tech">
                    <p class="hero-kicker hero-animate hero-animate-1">Innovación accesible para PYMES</p>
                    <h1 class="hero-animate hero-animate-2">Tecnología real para negocios que quieren crecer</h1>
                    <p class="hero-texto hero-animate hero-animate-3">Desarrollo web, sistemas a medida y capacitación digital para PYMES en crecimiento.</p>
                    <div class="hero-actions hero-animate hero-animate-4">
                        <a href="#servicios" class="btn btn-verde">Ver servicios</a>
                        <a href="#contacto" class="btn btn-secundario">Contactar</a>
                    </div>
                </div>
                <div class="hero-highlight hero-animate hero-animate-4">
                    <div class="hero-card hero-card-tech">
                        <div class="hero-card-top">
                            <span class="hero-chip">Tecnología + impacto social</span>
                            <h2>Linabat</h2>
                            <p>Desarrollamos soluciones digitales accesibles para negocios en crecimiento y proyectos que generan valor en la comunidad.</p>
                        </div>
                        <div class="hero-card-metrics">
                            <div>
                                <strong>PYMES</strong>
                                <span>acompañamiento cercano</span>
                            </div>
                            <div>
                                <strong>Digitalización</strong>
                                <span>web, sistemas y soporte</span>
                            </div>
                            <div>
                                <strong>Impacto social</strong>
                                <span>capacitaciones y formación</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <main>
            <section class="seccion-home contenedor" id="quienes-somos">
                <div class="seccion-encabezado">
                    <p class="etiqueta">Quiénes somos</p>
                    <h2>Una empresa que nació para ayudar a negocios que todavía no estaban digitalizados</h2>
                </div>
                <div class="grid-dos columnas-destacadas">
                    <article class="bloque-info">
                        <p>Linabat surge con una idea muy clara: acercar la tecnología a pequeñas y medianas empresas que necesitaban modernizarse, mejorar sus procesos y tener presencia digital real.</p>
                        <p>Iniciamos con experiencia limitada, pero con mucha disposición para aprender, resolver problemas reales y construir soluciones útiles. Ese camino nos ha permitido crecer, sumar experiencia en proyectos concretos y colaborar con instituciones y clientes que confiaron en nuestro trabajo.</p>
                    </article>
                    <article class="bloque-info bloque-resaltado">
                        <h3>Hoy Linabat combina</h3>
                        <ul class="lista-check">
                            <li>Desarrollo de soluciones para PYMES</li>
                            <li>Experiencia en proyectos y colaboración institucional</li>
                            <li>Servicios cercanos, accesibles y adaptados a cada necesidad</li>
                            <li>Un enfoque social orientado a reducir la brecha digital</li>
                        </ul>
                    </article>
                </div>
            </section>

            <section class="seccion-home seccion-fondo" id="servicios">
                <div class="contenedor">
                    <div class="seccion-encabezado centrar-texto">
                        <p class="etiqueta">Servicios</p>
                        <h2>Soluciones tecnológicas y digitales para negocios en crecimiento</h2>
                        <p>Trabajamos con un enfoque claro: ayudar a que las PYMES adopten tecnología útil, accesible y sostenible.</p>
                    </div>
                    <div class="servicios-grid">
                        <article class="service-card">
                            <i class="fas fa-laptop-code"></i>
                            <h3>Desarrollo tecnológico</h3>
                            <p>Páginas web, sistemas a medida y mantenimiento web para empresas que buscan operar mejor y verse más profesionales.</p>
                        </article>
                        <article class="service-card">
                            <i class="fas fa-bullhorn"></i>
                            <h3>Contenido digital</h3>
                            <p>Manejo de redes sociales y creación de contenido para fortalecer la comunicación de marcas y negocios locales.</p>
                        </article>
                        <article class="service-card">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h3>Capacitación</h3>
                            <p>Cursos de computación, talleres digitales y acompañamiento formativo para personas, equipos y emprendimientos.</p>
                        </article>
                        <article class="service-card">
                            <i class="fas fa-store"></i>
                            <h3>Apoyo a PYMES</h3>
                            <p>Asesoría tecnológica y digitalización de negocios para dar el siguiente paso con herramientas claras y funcionales.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="seccion-home contenedor" id="proyectos">
                <div class="seccion-encabezado">
                    <p class="etiqueta">Proyectos</p>
                    <h2>Experiencia real en soluciones, colaboración y desarrollo continuo</h2>
                </div>
                <div class="proyectos-grid">
                    <article class="proyecto-card">
                        <img src="img/refaccionaria.png" alt="Proyecto de digitalización para negocio local">
                        <div>
                            <h3>Soluciones para negocios y presencia digital</h3>
                            <p>Hemos trabajado en páginas web y soluciones enfocadas en resolver necesidades reales de operación, comunicación y crecimiento comercial.</p>
                        </div>
                    </article>
                    <article class="proyecto-card">
                        <img src="img/ejemplo2.jpg" alt="Colaboración institucional de Linabat">
                        <div>
                            <h3>Colaboración con instituciones</h3>
                            <p>La participación en proyectos y colaboraciones, como las realizadas con ACMor, fortalece nuestra experiencia y nuestra capacidad de adaptarnos a distintos contextos.</p>
                        </div>
                    </article>
                    <article class="proyecto-card">
                        <img src="img/ejemplo4.jpg" alt="Productos y soluciones en desarrollo">
                        <div>
                            <h3>Productos y soluciones propias</h3>
                            <p>También impulsamos ideas, productos y herramientas en desarrollo o comercialización que nacen de observar problemas concretos y convertirlos en oportunidades.</p>
                        </div>
                    </article>
                </div>
            </section>

            <section class="seccion-home impacto-social" id="impacto-social">
                <div class="contenedor impacto-grid">
                    <div>
                        <p class="etiqueta etiqueta-clara">Impacto social</p>
                        <h2>La tecnología también puede ser una herramienta de comunidad</h2>
                        <p>En Linabat no solo pensamos en servicios para empresas. También creemos en la formación tecnológica como una forma de abrir oportunidades y reducir la brecha digital.</p>
                        <p>Por eso impulsamos proyectos de capacitación, cursos de computación y talleres digitales dirigidos a niños, jóvenes y personas que necesitan acercarse a herramientas tecnológicas de manera práctica y accesible.</p>
                    </div>
                    <div class="impacto-panel">
                        <h3>Nuestro enfoque social busca</h3>
                        <ul class="lista-check lista-clara">
                            <li>Acercar la tecnología a más personas</li>
                            <li>Fortalecer habilidades digitales en la comunidad</li>
                            <li>Crear oportunidades a través de la capacitación</li>
                            <li>Demostrar que la innovación también puede tener impacto humano</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="seccion-home contenedor" id="contacto">
                <div class="seccion-encabezado">
                    <p class="etiqueta">Contacto</p>
                    <h2>Hablemos sobre tu idea, tu negocio o tu próximo proyecto</h2>
                    <p>Si necesitas una página web, una solución a medida, capacitación o asesoría tecnológica, podemos ayudarte.</p>
                </div>

                <div class="contacto-grid">
                    <div class="contacto-datos">
                        <article class="contacto-card">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h3>Correo</h3>
                                <p><a href="mailto:linabatoficial@gmail.com">linabatoficial@gmail.com</a></p>
                            </div>
                        </article>
                        <article class="contacto-card">
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <h3>WhatsApp</h3>
                                <p><a href="https://api.whatsapp.com/send?phone=527341355449" target="_blank" rel="noopener noreferrer">+52 734 135 5449</a></p>
                            </div>
                        </article>
                        <article class="contacto-card">
                            <i class="fab fa-facebook-f"></i>
                            <div>
                                <h3>Redes sociales</h3>
                                <p><a href="https://facebook.com/Linabat-103510594510372/" target="_blank" rel="noopener noreferrer">Facebook / Linabat</a></p>
                            </div>
                        </article>
                    </div>
                    <div class="formulario formulario-home">
                        <form action="#" method="POST" id="form_email" class="form_email">
                            <?php include 'Layout/formulario-email.php'?>
                        </form>
                    </div>
                </div>
            </section>
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
