listarEstudiante();

function guardarEstudiante() {
    var id = document.getElementById('txtId').value;
    var codigo = document.getElementById('txtCodigo').value;
    var nombre = document.getElementById('txtNombre').value;
    var apellido = document.getElementById('txtApellido').value;
    var cedula = document.getElementById('txtCedula').value;
    var edad = document.getElementById('txtEdad').value;
    var semestre = document.getElementById('txtSemestre').value;

    var arrayParameters = new Array();


    if (codigo != "" && nombre != "" && apellido!="" && cedula!="" && edad!="" && semestre!="") {

        if (id !== "") {
            arrayParameters.push(newArg('type', 'update'));
        } else {
            arrayParameters.push(newArg('type', 'save'));
        }

        arrayParameters.push(newArg('id', id));
        arrayParameters.push(newArg('codigo', codigo));
        arrayParameters.push(newArg('nombre', nombre));
        arrayParameters.push(newArg('apellido', apellido));
        arrayParameters.push(newArg('cedula', cedula));
        arrayParameters.push(newArg('edad', edad));
        arrayParameters.push(newArg('semestre', semestre));

        var send = arrayParameters.join('&');

        $.post('Controlador/gestionEstudiante.php', send, guardarEstudiante_processResponse);
    } else {
        alert("Ingrese todos los datos");
    }
}

function guardarEstudiante_processResponse(res) {
    var info = eval("(" + res + ")");

    if (info[0].res !== false) {
        limpiar();
        alert("Guardado con exito");
        listarEstudiante();
    }
    else {
        alert("No se ha guardado");
    }
}

function limpiar() {
    document.getElementById('txtId').value = "";
    document.getElementById('txtCodigo').value = "";
    document.getElementById('txtNombre').value = "";
    document.getElementById('txtApellido').value = "";
    document.getElementById('txtCedula').value = "";
    document.getElementById('txtEdad').value = "";
    document.getElementById('txtSemestre').value = "";
}


function buscarEstudiante() {
    var codigo = document.getElementById('txtCodigo').value;

    var arrayParameters = new Array();

    arrayParameters.push(newArg('type', 'search'));
    arrayParameters.push(newArg('codigo', codigo));

    var send = arrayParameters.join('&');

    $.post('Controlador/gestionEstudiante.php', send, buscarEstudiante_processResponse);
}



function buscarEstudiante_processResponse(res) {
    var info = eval("(" + res + ")");
    if (info[0].res != 0) {
        if (info.length > 0) {
            for (f = 0; f < info.length; f++) {
                document.getElementById('txtId').value = info[f].id;
                document.getElementById('txtNombre').value = info[f].nombre;
                document.getElementById('txtApellido').value = info[f].apellido;
                document.getElementById('txtCedula').value = info[f].cedula;
                document.getElementById('txtEdad').value = info[f].edad;
                document.getElementById('txtSemestre').value = info[f].semestre;
            }
        }
    }
    else {
        alert("No se encuentra");
        limpiar();
    }
}





function eliminarEstudiante() {
    var id = document.getElementById('txtId').value;

    if (confirm("Esta seguro")) {

        var arrayParameters = new Array();

        arrayParameters.push(newArg('type', 'delete'));
        arrayParameters.push(newArg('id', id));

        var send = arrayParameters.join('&');

        $.post('Controlador/gestionEstudiante.php', send, eliminarEstudiante_processResponse);
    }
}

function eliminarEstudiante_processResponse(res) {
    var info = eval("(" + res + ")");

    if (info[0].res != false) {
        limpiar();
        alert("Eliminado con exito");
        listarEstudiante();
    }
    else {
        alert("No se ha eliminado");
    }
}

function listarEstudiante() {
    var arrayParameters = new Array();
    arrayParameters.push(newArg('type', 'list'));
    var send = arrayParameters.join('&');
    $.post('Controlador/gestionEstudiante.php', send, listarEstudiante_processResponse);
}

function listarEstudiante_processResponse(res) {
        
    var info = eval("(" + res + ")");

    var lista = "<tr><td><b>Codigo</b></td><td><b>Nombre</b></td><td><b>Apellido</b></td><td><b>Cedula</b></td><td><b>Edad</b></td><td><b>Semestre</b></td></tr>";

    if (info[0].res != 0) {
        if (info.length > 0) {
            for (f = 0; f < info.length; f++) {
                lista = lista + "<tr>"
                lista = lista + "<td>" + info[f].codigo + "</td>";
                lista = lista + "<td>" + info[f].nombre + "</td>";
                lista = lista + "<td>" + info[f].apellido + "</td>";
                lista = lista + "<td>" + info[f].cedula + "</td>";
                lista = lista + "<td>" + info[f].edad + "</td>";
                lista = lista + "<td>" + info[f].semestre + "</td>";
                lista = lista + "</tr>"
            }
        }

        document.getElementById("listadoEstudiantes").innerHTML = lista;
    }
    else {
        document.getElementById("listadoEstudiantes").innerHTML = "<b>No se encuentra informacion</b>"
        limpiar();
    }
}
