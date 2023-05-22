(async (script) => {
    const respuesta = await fetch('../api/sesion/');
    if(respuesta.ok) {
        const data = await respuesta.json();
        if(script.dataset && script.dataset.rolesRestringidos) {
            const rolesRestringidos = script.dataset.rolesRestringidos.split(',');
            if(rolesRestringidos.includes(data.idRol)) {
                alert('Permisos insuficientes para acceder a la página');
                location.href = 'index.html';
                return;
            }
        }
        document.getElementById('user-name').innerText = data.nombre;
        document.body.classList.remove("loading");
    } else {
        location.href = '../';
    }
})(document.currentScript)

async function logout() {
    const respuesta = await fetch('../api/sesion/', {
        method: 'delete'
    });
    if(respuesta.ok) {
        location.href = '../';
    }
}