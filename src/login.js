/* Cpaturar el evento submit del formulario */
document.getElementById("login-form").addEventListener('submit', login);

/**
 * Se ejecutará cuando se envíe el formulario.
 * @param event Objeto con información del evento.
 */
function login(event) {
    console.log(event);

    /* anular el comprotamiento por defecto del evento (enviar el formulario) */
    event.preventDefault();
}

