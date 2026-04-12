document.addEventListener('DOMContentLoaded', function() {
    let navegacion = document.querySelector('.site-header'),
        largoNavegacion = navegacion.clientHeight;

    if (location.pathname == '/index.php') {
        largoNavegacion = 0;
        document.querySelector('.site-header').classList.add('oscuro');
    }

    if (location.pathname.split("/")[location.pathname.split("/").length - 1] == 'index.php') {
        if (window.scrollY >= largoNavegacion) {
            document.querySelector('.site-header').style="background-image: linear-gradient(160deg, #82C281 0%, #1298A1 100%);box-shadow: 0 0 5px 0;";
        }else{
            document.querySelector('.site-header').style="background-image: none;box-shadow: none;";
        }
}else if (!(window.scrollY >= largoNavegacion)) {
        document.body.style.marginTop = (largoNavegacion - window.scrollY) + 'px';
    }

    window.addEventListener('scroll', function() {
        if (location.pathname.split("/")[location.pathname.split("/").length - 1] == 'index.php') {
            if (window.scrollY >= 180) {
                document.querySelector('.site-header').classList.remove('oscuro');
            } else {
                document.querySelector('.site-header').classList.add('oscuro');
            }
            if (window.scrollY >= largoNavegacion) {
                document.querySelector('.site-header').style="background-image: linear-gradient(160deg, #82C281 0%, #1298A1 100%);box-shadow: 0 0 5px 0;";
            } else {
                document.querySelector('.site-header').style="background-image: none;box-shadow: none;";
            }
        }else{
            if (window.scrollY >= largoNavegacion) {
                document.body.style.marginTop = '0px';
            } else {
                document.body.style.marginTop = (largoNavegacion - window.scrollY) + 'px';
            }
        }
    });

    function tecnologiaColor(tecnologia, nombreTecnologia) {
        switch (nombreTecnologia.trim()) {
            case 'html5':
                tecnologia.style.color = '#FF5733';
                break;
            case 'js-square':
                tecnologia.style.color = '#F1AA23';
                break;
            case 'react':
                tecnologia.style.color = '#23F1E1';
                break;
            case 'laravel':
                tecnologia.style.color = '#F12323';
                break;
            case 'vuejs':
                tecnologia.style.color = '#68D47F';
                break;
            case 'node-js':
                tecnologia.style.color = '#6FD468';
                break;
            case 'android':
                tecnologia.style.color = '#A4C639';
                break;
            case 'php':
                tecnologia.style.color = '#474A8A';
                break;
        }
    }

    let tecnologias = document.querySelectorAll('ul.tecnologias li i');
    for (const tecnologia of tecnologias) {
        tecnologia.addEventListener("mouseover", function(e) {
            tecnologiaColor(tecnologia, e.target.className.replace('fab fa-', ''));
        });

        tecnologia.addEventListener("mouseout", function(e) {
            tecnologia.style.color = document.querySelector('body.nocturno') == null ? '#000000' : '#FFFFFF';
        });
    }

    setInterval(() => {
        let tecnologias = document.querySelectorAll('ul.tecnologias li i'),
            valSeg = 300,
            numSeg = -1;
        for (const tecnologia of tecnologias) {
            setTimeout(() => {
                tecnologiaColor(tecnologia, tecnologia.className.replace('fab fa-', ''));
                tecnologia.style.transform = 'scale(1.2)';
                tecnologia.style.transition = 'all 0.3s ease-in-out';
            }, valSeg * ++numSeg);

            setTimeout(() => {
                tecnologia.style.color = document.querySelector('body.nocturno') == null ? '#000000' : '#FFFFFF';
                tecnologia.style.transform = 'scale(1)';
            }, valSeg * ++numSeg);
        }
    }, 5000);

    if (document.querySelector('#canvas') != null) {
        var img = new Image();

        // Variables de usuario - personalizar estas para cambiar la imagen cuando inicie el desplazamiento
        // dirección y velocidad.

        img.src = 'img/portada2.jpg';

        document.querySelector('#canvas').width = window.innerWidth;
        // document.querySelector('#canvas').height = 400;
        var CanvasXSize = window.innerWidth;
        var CanvasYSize = 400;
        var speed = 03; //más bajo es más rápido
        var scale = 0.40;
        var y = -4.5; //desplazamiento vertical

        // Programa principal

        var dx = 0.75;
        var imgW;
        var imgH;
        var x = 0;
        var clearX;
        var clearY;
        var ctx;

        img.onload = function() {
            imgW = img.width * scale;
            imgH = img.height * scale;

            if (imgW > CanvasXSize) {
                // imagen más grande que canvas
                x = CanvasXSize - imgW;
            }
            if (imgW > CanvasXSize) {
                // ancho de imagen más grande que canvas
                clearX = imgW;
            } else {
                clearX = CanvasXSize;
            }
            if (imgH > CanvasYSize) {
                // altura de la imagen más grande que canvas
                clearY = imgH;
            } else {
                clearY = CanvasYSize;
            }

            // obtener contexto de canvas

            ctx = document.getElementById('canvas').getContext('2d');

            // establecer frecuencia de actualización
            return setInterval(draw, speed);
        }

        function draw() {
            ctx.clearRect(0, 0, clearX, clearY); // clear the canvas

            // si la imagen es <= tamaño de Canvas
            if (imgW <= CanvasXSize) {
                // reiniciar, comenzar desde el principio
                if (x > CanvasXSize) {
                    x = -imgW + x;
                }
                // dibujar image1 adicional
                if (x > 0) {
                    ctx.drawImage(img, -imgW + x, y, imgW, imgH);
                }
                // dibujar image2 adicional
                if (x - imgW > 0) {
                    ctx.drawImage(img, -imgW * 2 + x, y, imgW, imgH);
                }
            }

            // la imagen es > tamaño de Canvas
            else {
                // reiniciar, comenzar desde el principio
                if (x > (CanvasXSize)) {
                    x = CanvasXSize - imgW;
                }
                // dibujar image adicional
                if (x > (CanvasXSize - imgW)) {
                    ctx.drawImage(img, x - imgW + 1, y, imgW, imgH);
                }
            }
            // dibujar imagen
            ctx.drawImage(img, x, y, imgW, imgH);
            // cantidad para moverse
            x += dx;
        }
    }

    let estadoNav = false;

    document.querySelector('#open-menu').addEventListener('click', function() {
        document.querySelector('.navegacion').style.display = 'block';
        document.querySelector('#close-menu').style.display = 'block';
        document.querySelector('#open-menu').style.display = 'none';
        estadoNav = true;
    });

    document.querySelector('#close-menu').addEventListener('click', function() {
        document.querySelector('.navegacion').style.display = 'none';
        document.querySelector('#open-menu').style.display = 'block';
        document.querySelector('#close-menu').style.display = 'none';
        // document.querySelector('#open-menu').style.top = '2rem';
        // document.querySelector('#open-menu').style.left = '2rem';
        document.querySelector('#open-menu').style.background = 'none';
        estadoNav = false;
    });

    document.body.addEventListener('click', function(e) {
        if (e.target == document.querySelector('.navegacion') || e.target == document.querySelector('#close-menu') || e.target == document.querySelector('#open-menu')) {
            e.preventDefault();
        } else {
            if (window.innerWidth < 768) {
                document.querySelector('.navegacion').style.display = 'none';
                document.querySelector('#close-menu').style.display = 'none';
                document.querySelector('#open-menu').style.display = 'block';
            }
        }
    });

    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            document.querySelector('.navegacion').style.display = 'flex';
            document.querySelector('#open-menu').style.display = 'none';
            document.querySelector('#close-menu').style.display = 'none';
        } else {
            document.querySelector('#open-menu').style.display = 'block';
            document.querySelector('#close-menu').style.display = 'none';
            document.querySelector('.navegacion').style.display = 'none';
        }
    });

    let estadoNocturno = false;

    document.querySelector('.modo').addEventListener('click', function(e) {
        let elementos = ["body", ".formulario", "input:not([type='submit'])",
            "textarea", ".contenido-nosotros", ".info-contacto", "#correo"
        ];
        if (estadoNocturno) {
            estadoNocturno = false;
            document.querySelector('.fa-sun').style.display = "none";
            document.querySelector('.fa-moon').style.display = "inline";
            for (const elemento of elementos) {
                let elemt = document.querySelector(elemento);
                if (elemt != null)
                    elemt.classList.remove('nocturno');
            }
        } else {
            estadoNocturno = true;
            document.querySelector('.fa-sun').style.display = "inline";
            document.querySelector('.fa-moon').style.display = "none";
            for (const elemento of elementos) {
                let elemt = document.querySelector(elemento);
                if (elemt != null)
                    elemt.classList.add('nocturno');
            }
        }
    });


});