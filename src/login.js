document.getElementById("login-form").addEventListener('submit', login);

/**
 * Se ejecutará cuando se envíe el formulario.
 * @param event Objeto con información del evento.
 */
function login(event) {
    event.preventDefault();

    /* utilizamos FormData para recoger todos los campos del formulario
    *  ver https://developer.mozilla.org/es/docs/Web/API/FormData */
    const formData = new FormData(event.target);

    /* Para ver su contenido podemos usar la colección que devuelve su método
       entries().
       Esta colección contiene pares clave-valor en un array, con la clave en
       la posición 0 y el valor en la 1. La clave se corresponde con el atributo
       name del elemento input */
    for (const entrada of formData.entries()) {
        console.log(`clave: ${entrada[0]}, valor: ${entrada[1]}`);
    }

}

