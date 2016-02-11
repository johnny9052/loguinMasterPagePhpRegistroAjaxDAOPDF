<?php

class clsConexion {

    private $usuario;
    private $password;
    private $database;
    private $puerto;
    private $host;
    private $cadenaconexion;
    private $connect;
    private $Consulta_ID;
    

    public function conectar() {
        $this->usuario = "postgres";
        $this->password = "admin";
        $this->database = "registroAcademico";
        $this->puerto = 5432;
        $this->host = "localhost";
        $this->cadenaconexion = "host=$this->host port=$this->puerto dbname=$this->database user=$this->usuario password=$this->password";

        $this->connect = pg_connect($this->cadenaconexion) or die("Error al realizar la conexion");
    }

    public function acceder_conexion() {
        return $this->connect;
    }

    function Ejecutar($sql) {
        if ($sql == "") {
            return 0;
        } else {
            $this->Consulta_ID = pg_query($this->connect, $sql);
            return $this->Consulta_ID;
        }
    }

    function validarLoguin($resultado) {
        $vec = pg_fetch_row($resultado);
        if ($vec[0] != "") {
            return $vec[0];
        } else {
            return "";
        }
    }

    function respuesta($resultado) {
        if ($resultado) {
            $mensaje = "true";
        } else {
            $mensaje = "false";
        }
        echo '[{"res" : "' . $mensaje . '"}]';
    }

    function listadoRegistro($resultado) {
        while ($reg = pg_fetch_array($resultado, null, PGSQL_ASSOC)) {
            $vec[] = $reg;
        }
        if (isset($vec)) {
            echo(json_encode($vec));
        } else {
            echo '[{"res" : "0"}]';
        }
    }        
}

?>