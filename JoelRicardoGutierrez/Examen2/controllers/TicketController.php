<?php

session_start();

require_once("../config/db.php");

$id_usuario = $_SESSION['id'];

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$departamento = $_POST['departamento'];
$prioridad = $_POST['prioridad'];

$sql = "INSERT INTO tickets (id_usuario,titulo,descripcion,departamento,prioridad) VALUES (:id_usuario,:titulo,:descripcion,:departamento,:prioridad)";

$stmt = $conexion->prepare($sql);

$stmt->bindParam(":id_usuario", $id_usuario);
$stmt->bindParam(":titulo", $titulo);
$stmt->bindParam(":descripcion", $descripcion);
$stmt->bindParam(":departamento", $departamento);
$stmt->bindParam(":prioridad", $prioridad);

if ($stmt->execute()) {

    header("Location: ../tickets.php");
} else {

    echo "Error al guardar.";
}
