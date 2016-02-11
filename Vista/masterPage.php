<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <table border="1">
            <tbody>
                <tr>
                    <td width="20%">
                        <a href="index.php">Inicio</a><br>
                        <a href="index.php?page=estudiantes">Estudiantes</a><br>
                        <a href="index.php?page=categorias">Categorias</a><br>
                        <a href="index.php?page=estudiantesGRID">Estudiantes GRID</a><br>
                    </td>

                    <td width="80%">                        
                        <?php
                        if (isset($_GET['page'])) {
                            include($_GET['page'] . ".php");
                        } else {
                            include("inicio.php");
                        }
                        ?>
                    </td>

                </tr>
            </tbody>
        </table>

        <form name="formularioLogout" method="post" action="Controlador/gestionLoguin.php">
            <table border="0">
                <tr>
                    <td>
                        <input type="text" name="type" style="display: none">
                    </td>
                    <td>
                        <input type="button" value="Desconectar" id="btnDesconectar" 
                               onclick="validarLoguin(formularioLogout, 'desc')">                       
                    </td>
                </tr>
            </table>           
        </form>

    </body>
</html>
