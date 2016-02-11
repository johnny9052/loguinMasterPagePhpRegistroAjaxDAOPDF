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
        <form name="formularioLoguin" method="post" action="Controlador/gestionLoguin.php">
            <table border="0">
                <tr>
                    <td>
                        <label>Usuario</label>                        
                    </td>
                    <td>
                        <input type="text" id="txtUsuario" name="usuario">
                    </td>                     
                </tr>
                
                <tr>
                    <td>
                        <label>Password</label>                        
                    </td>
                    <td>
                        <input type="text" id="txtPassword" name="password">
                    </td>                     
                </tr>

                <tr>
                    <td>
                        <input type="text" name="type" style="display: none">
                    </td>
                    <td>
                        <input type="button" value="Loguin" id="btnLoguin" 
                               onclick="validarLoguin(formularioLoguin,'con')">                       
                    </td>
                </tr>

            </table>           
        </form>
    </body>
</html>
