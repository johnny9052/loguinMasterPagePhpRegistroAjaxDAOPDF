<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="Recursos/js/cargarForaneas.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    Departamento
                </td>
                <td>
                    <select id="selDepartamento" onchange="cargarMunicipio();">
                        <option value="-1">-- SELECCIONE --</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    Municipio
                </td>
                <td>
                    <select id="selMunicipio">
                        <option value="-1">-- SELECCIONE --</option>
                    </select>
                </td>
            </tr>
        </table>
    </body>
</html>
