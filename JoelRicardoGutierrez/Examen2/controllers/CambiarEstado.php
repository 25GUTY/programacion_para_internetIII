<?php

session_start();

if ($_SESSION['rol'] != "tecnico") {

    header("Location: ../dashboard.php");
    exit();
}

require_once("../config/db.php");



$id = $_POST['id'];

$estado = $_POST['estado'];

$sql = "UPDATE tickets
SET estado=:estado
WHERE id=:id";

$stmt = $conexion->prepare($sql);

$stmt->bindParam(":estado", $estado);
$stmt->bindParam(":id", $id);

$stmt->execute();

header("Location: ../tickets.php");
