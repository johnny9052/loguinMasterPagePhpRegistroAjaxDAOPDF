<?php

class loguinDAO{

    private $con;
    private $objCon;

    function loguinDAO() {
        require '../Modelo/clsConexion.php';
        $this->objCon = new clsConexion();
        $this->con = $this->objCon->conectar();
    }

    public function loguear(clsLoguin $obj) {
        $sql = "SELECT nickname,password from usuario where"
                . " nickname='" . $obj->getUsuario() . "' and "
                . "password='" . md5($obj->getPassword()) . "'";
        $resultado = $this->objCon->Ejecutar($sql);
        return $this->objCon->validarLoguin($resultado);
    }

}
