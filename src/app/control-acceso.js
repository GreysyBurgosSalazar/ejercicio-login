/* Como queremos que se ejecute inmediatamente ponemos el código en una
   función auto-ejecutable */
(async () => {
    // petición a la API, si no se especifica, será por el método GET
    const respuesta = await fetch('../api/sesion/');
    // Si la respuesta es correcta...
    if(respuesta.ok) {
        // procesar la respuesta
        const data = await respuesta.json();
        console.log(data);
    } else {
        location.href = '../';
    }
})()