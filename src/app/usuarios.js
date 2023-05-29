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
        console.log(id, this.usuarios[0].id);
        if(this.usuarios.length === 0) await this.getAll();
        return this.usuarios.find((usuario) => parseInt(usuario.id) === parseInt(id));
    }

    async updateUsuario(datos) {
        const respuesta = await fetch(this.url + datos.id, {
            method: 'put',
            body: JSON.stringify(datos)
        })
        return await respuesta.ok;
    }
}