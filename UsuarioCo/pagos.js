//Obtenemos el API
function obtenerDatos() {
    const url = 'http://localhost/Torres/php/Pagos.php?metodo=obtener';
    fetch(url)
    //Indicamos que es un json
        .then(respuesta => respuesta.json())
        .then( resultado =>mostrarHTML(resultado.data ));
}

//Creamos la funcion para mostrar los datos
function mostrarHTML(datos){
    //Indicamos el id del body de la tabla para insertar los datos
    const contenido = document.querySelector('#cuerpo');

    //Recorremos los datos y le asignamos su td a cada elemento
    datos.forEach(elemento => {
        contenido.innerHTML += `
            <tr>
            <td>${elemento.FolioPago}</td>
            <td>${elemento.Concepto}</td>
            <td>${elemento.Monto}</td>
            <td>${elemento.FechaPago}</td>
        </tr>
        `
    });
}