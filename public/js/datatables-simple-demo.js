window.addEventListener("DOMContentLoaded", (event) => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById("datatablesSimple");
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple, {
            labels: {
                placeholder: "Buscar...",
                searchTitle: "Buscar en la tabla",
                perPage: " registros por página",
                noRows: "No se encontraron registros",
                info: "Mostrando {start} a {end} de {rows} registros",
                noResults: "No hay resultados coincidentes",
                loading: "Cargando...",
                infoFiltered: "(filtrado de {rows} registros totales)",
                infoEmpty: "Mostrando 0 a 0 de 0 registros",
            },
            layout: {
                top: "{search}",
                bottom: "{info}{pager}",
            },
        });
    }
});
