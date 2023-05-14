document.getElementById("login-form").addEventListener('submit', login);

/**
 * Se ejecutará cuando se envíe el formulario.
 * Puesto que se usa fetch, es una función asíncrona
 * @param event Objeto con información del evento.
 */
async function login(event) {
    event.preventDefault();
    const formData = new FormData(event.target);

    /* Usamos fetch para enviar al servidor los datos */
    const respuesta = await fetch('api/sesion', {
        method: 'post', // método HTTP
        body: formData  // el objeto FormData se puede incluir directamente como contenido del body
    })

}

