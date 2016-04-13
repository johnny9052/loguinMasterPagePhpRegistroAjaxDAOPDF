// Cuando se encuentra listo el doc esto es lo primero que se ejecutara
$(document).ready(function () {
    cargarDepartamento();
});



function cargarDepartamento() {
    $.ajax({
        type: 'post',
        url: "Controlador/gestionGeneral.php",
        beforeSend: function () {

        },
        data: {type: "departamento"},
        success: function (data) {

            var info = JSON.parse(data);
            
            var select = document.getElementById("selDepartamento");

            //Limpiar select
            while (select.length > 1) {
                select.remove(select.length - 1);
            }

            //Se llena el select
            if (data.length > 0) {
                var opt = null;
                for (var i = 0; i < info.length; i++) {
                    opt = new Option(info[i].nombre, info[i].id);
                    select.options[select.length] = opt;
                }
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error detectado: " + textStatus + "\nExcepcion: " + errorThrown);
            alert("Verifique la ruta del archivo");
        }
    });
}



function cargarMunicipio() {

    var idDepartamento = $("#selDepartamento").val();
    

    $.ajax({
        type: 'post',
        url: "Controlador/gestionGeneral.php",
        beforeSend: function () {

        },
        data: {type: "municipio", id: idDepartamento},
        success: function (data) {

            var info = JSON.parse(data);

            //var select = $("#selDepartamento");
            var select = document.getElementById("selMunicipio");

            //Limpiar select
            while (select.length > 1) {
                select.remove(select.length - 1);
            }

            //Se llena el select
            if (data.length > 0) {
                var opt = null;
                for (var i = 0; i < info.length; i++) {
                    opt = new Option(info[i].nombre, info[i].id);
                    select.options[select.length] = opt;
                }
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            alert("Error detectado: " + textStatus + "\nExcepcion: " + errorThrown);
            alert("Verifique la ruta del archivo");
        }
    });
}