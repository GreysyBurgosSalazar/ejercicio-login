(async () => {
    const respuesta = await fetch('../api/sesion/');
    if(respuesta.ok) {
        // procesar la respuesta
        const data = await respuesta.json();
        // mostrar el nombre del usuario en el mensaje de bienvenida
        document.getElementById('user-name').innerText = data.nombre;
        // mostrar el contenido de la página
        document.body.classList.remove("loading");
    } else {
        location.href = '../';
    }
})()