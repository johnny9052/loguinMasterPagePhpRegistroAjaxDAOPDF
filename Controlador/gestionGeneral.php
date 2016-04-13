<?php

require '../Modelo/clsGeneral.php';
require '../DAO/generalDAO.php';

isset($_REQUEST['id']) ? $id = $_REQUEST['id'] : $id = "";
isset($_REQUEST['type']) ? $accion = $_REQUEST['type'] : $accion = "";

$select = new clsGeneral($id);
$dao = new generalDAO();

switch ($accion) {

    case "departamento":
        $dao->listarDepartamento();
        break;

    case "municipio":
        $dao->listarMunicipio($select);
        break;
}
