<?php
//error_reporting(0);
//ini_set("display_errors", 0);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>        
        <script type="text/javascript" src="Recursos/jquery/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="Recursos/datatables/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" href="Recursos/datatables/css/jquery.dataTables.css" />        
        <script type="text/javascript" src="Recursos/js/send_request.js"></script>
        <script type="text/javascript" src="Recursos/js/gestionEstudianteGRID.js"></script>
    </head>      
    <body>                
        <table>
            <tr>
                <td colspan="2">
                    <input type="text" id="txtId" style="display: none">
                </td>
            </tr>
            <tr>                
                <td>
                    <label>Codigo</label>                        
                </td>
                <td>
                    <input type="text" id="txtCodigo">
                </td>

                <td rowspan="10" id="listado">
                    
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nombre</label>                        
                </td>
                <td>
                    <input type="text" id="txtNombre">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Apellido</label>                        
                </td>
                <td>
                    <input type="text" id="txtApellido">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Cedula</label>                        
                </td>
                <td>
                    <input type="text" id="txtCedula">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Edad</label>                        
                </td>
                <td>
                    <input type="text" id="txtEdad">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Semestre</label>                        
                </td>
                <td>
                    <input type="text" id="txtSemestre">
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="button" value="Guardar" id="btnGuardar" onclick="guardarEstudiante();">
                    <input type="button" value="Buscar" id="btnBuscar" onclick="buscarEstudiante();">                    
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="button" value="Modificar" id="btnModificar" onclick="guardarEstudiante();">
                    <input type="button" value="Eliminar" id="btnEliminar" onclick="eliminarEstudiante();">
                </td>
            </tr>

        </table>
    </body>
</html>
