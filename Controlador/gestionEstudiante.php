<?php

include '../Modelo/clsEstudiante.php';
include '../DAO/estudianteDAO.php';

isset($_POST['id']) ? $id = $_POST['id'] : $id = "";
isset($_POST['codigo'])? $codigo = $_POST['codigo'] :  $codigo = "";
isset($_POST['nombre'])? $nombre = $_POST['nombre']: $nombre = "";
isset($_POST['apellido']) ? $apellido = $_POST['apellido']: $apellido = "";
isset($_POST['cedula']) ? $cedula = $_POST['cedula']: $cedula = "";
isset($_POST['edad']) ? $edad = $_POST['edad'] : $edad = "";
isset($_POST['semestre'])? $semestre = $_POST['semestre'] : $semestre = "";
isset($_POST['type']) ? $accion = $_POST['type'] : $accion = "";

$estudiante = new clsEstudiante($id,$codigo, $nombre, $apellido, $cedula, $edad, $semestre);
$conex = new estudianteDAO();

switch ($accion) {
    case "save":
        $conex->guardar($estudiante);
        break;

    case "search":
        $conex->buscar($estudiante);
        break;

    case "delete":
        $conex->eliminar($estudiante);
        break;

    case "update":
        $conex->modificar($estudiante);
        break;

    case "list":
        $conex->listar();
        break;
    
    default :
         $conex->generarPDF();
        break;
}