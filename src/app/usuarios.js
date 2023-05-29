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
        this.usuarios = await respuesta.json();
        return this.usuarios;
    }

    usuarios = [];

    async getUsuario(id) {
        if(this.usuarios.length === 0) await this.getAll();
        return this.usuarios.find((usuario) => usuario.id === id);
    }
}