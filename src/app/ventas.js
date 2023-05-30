class VentasModel {
    url = '../api/ventas/';

    async getVentas(cantidad) {
        const respuesta = await fetch(this.url+'?cantidad='+cantidad);
        if(!respuesta.ok) {
            return false;
        }
        this.ventas = await respuesta.json();
        return this.ventas;
    }
}