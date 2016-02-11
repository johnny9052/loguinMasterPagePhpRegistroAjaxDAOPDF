<?php

class clsLoguin {

    private $usuario;
    private $password;

    public function __Construct($usuario, $password) {
        $this->usuario = $usuario;
        $this->password = $password;
    }

    public function getUsuario() {
        return $this->usuario;
    }
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
    }

}

?>
