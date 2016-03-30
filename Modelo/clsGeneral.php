<?php

class clsGeneral {

    private $id;

    function clsGeneral($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

}
