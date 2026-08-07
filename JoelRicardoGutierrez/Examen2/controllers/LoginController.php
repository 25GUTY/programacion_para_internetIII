<?php

session_start();

require_once("../config/db.php");

$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM usuarios
        WHERE email = :email
        AND password = :password";

$stmt = $conexion->prepare($sql);

$stmt->bindParam(":email", $email);
$stmt->bindParam(":password", $password);

$stmt->execute();

if ($stmt->rowCount() > 0) {

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['usuario'] = $usuario['email'];
    $_SESSION['rol'] = $usuario['rol'];

    header("Location: ../dashboard.php");
} else {

    header("Location: ../login.php?error=1");
}
