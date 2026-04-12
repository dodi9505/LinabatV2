window.addEventListener('load', function () {
    const form = document.querySelector('#form_email');

    if (!form) {
        return;
    }

    form.addEventListener('submit', leerFormEmail);

    function leerFormEmail(e) {
        e.preventDefault();

        const nombre = document.querySelector('#nombre').value.trim();
        const correo = document.querySelector('#correo').value.trim();
        const mensaje = document.querySelector('#mensaje').value.trim();
        const accion = document.querySelector('#enviar').value;

        if (nombre === '' || correo === '' || mensaje === '' || accion === '') {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Existen campos vacíos.',
                timer: 2000,
                showConfirmButton: false
            });
            return;
        }

        if (!isValidEmail(correo)) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Correo electrónico inválido.',
                timer: 2000,
                showConfirmButton: false
            });
            return;
        }

        const infoEmail = new FormData();
        infoEmail.append('nombre', nombre);
        infoEmail.append('correo', correo);
        infoEmail.append('mensaje', mensaje);
        infoEmail.append('accion', accion);

        if (accion === 'Enviar') {
            enviarEmail(infoEmail);
        }
    }

    function isValidEmail(email) {
        return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(email);
    }

    function enviarEmail(datos) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'operaciones/enviar-email.php', true);
        xhr.onload = function () {
            let res = null;

            try {
                res = JSON.parse(xhr.responseText);
            } catch (error) {
                res = null;
            }

            if (this.status === 200 && res && res.respuesta === 'correcto') {
                Swal.fire({
                    icon: 'success',
                    title: 'Gracias por contactarnos',
                    text: 'Nos pondremos en contacto contigo a la brevedad.',
                    showConfirmButton: false,
                    timer: 3500
                });
                form.reset();
                return;
            }

            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: res && res.error ? res.error : 'No fue posible enviar tu mensaje.',
                showConfirmButton: false,
                timer: 3000
            });
        };

        xhr.onerror = function () {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Ocurrió un problema al enviar el formulario.',
                showConfirmButton: false,
                timer: 3000
            });
        };

        xhr.send(datos);
    }
});
