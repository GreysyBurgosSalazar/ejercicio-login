class VentasModel {
    url = '../api/ventas/';

    constructor(ventasPorPagina) {
        this.ventasPorPagina = ventasPorPagina;
    }

    async getVentas(pagina = 1) {
        const respuesta = await fetch(this.url + '?cantidad='
            + this.ventasPorPagina + '&pagina=' + pagina);
        if (!respuesta.ok) {
            return false;
        }
        this.ventas = await respuesta.json();
        return this.ventas;
    }

    async getPaginas() {
        const respuesta = await fetch(this.url + '/paginas/?cantidad=' + this.ventasPorPagina);
        if (!respuesta.ok) {
            return false;
        }
        this.paginas = await respuesta.json();
        return this.paginas;
    }
}