/**
 * Clase para manejar las peticiones a la API de usuarios
 */
class UsuariosModel {
    /**
     * URL a la que se hacen las peticiones
     */
    url = '../api/usuarios/';

    /**
     * Obtiene todos los usuarios
     * @returns {Promise<any|boolean>}
     */
    async getAll() {
        const respuesta = await fetch(this.url);
        if(!respuesta.ok) {
            return false;
        }
        return await respuesta.json();
    }
}