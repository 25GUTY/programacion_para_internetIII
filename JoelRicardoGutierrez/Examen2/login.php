<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login - Sistema de Tickets</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="assets/css/login.css">

</head>

<body>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card shadow-lg mt-5">

                    <div class="card-header bg-primary text-white text-center">

                        <h3><i class="fa-solid fa-ticket"></i>Sistema de Tickets</h3>
                    </div>

                    <div class="card-body p-4">

                        <?php

                        if (isset($_GET['error'])) {

                        ?>

                            <div class="alert alert-danger alert-dismissible fade show">Correo o contraseña incorrectos.<button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"></button>

                            </div>

                        <?php

                        }

                        ?>

                        <form
                            action="controllers/LoginController.php"
                            method="POST"
                            onsubmit="return validarLogin();">

                            <div class="mb-3">

                                <label class="form-label">Correo Electrónico</label>

                                <div class="input-group">

                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i>
                                    </span>

                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control"
                                        placeholder="Ingrese su correo"
                                        required>

                                </div>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">Contraseña</label>

                                <div class="input-group">

                                    <span class="input-group-text">

                                        <i class="fa-solid fa-lock"></i>

                                    </span>

                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        class="form-control"
                                        placeholder="Ingrese su contraseña"
                                        required>

                                    <button type="button" class="btn btn-outline-secondary" onclick="mostrarPassword()">
                                        <i
                                            class="fa-solid fa-eye"
                                            id="iconoPassword"></i>
                                    </button>

                                </div>

                            </div>

                            <div class="d-grid mt-4">

                                <button
                                    type="submit"
                                    class="btn btn-primary btn-login">

                                    <i class="fa-solid fa-right-to-bracket"></i>Iniciar Sesión</button>

                            </div>

                        </form>

                    </div>

                    <div class="card-footer text-center">

                        <small>Sistema de Gestión de Tickets <br>Programación para Internet III
                        </small>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/login.js"></script>

    <script>
        function mostrarPassword() {

            const password = document.getElementById("password");

            const icono = document.getElementById("iconoPassword");

            if (password.type === "password") {

                password.type = "text";

                icono.classList.remove("fa-eye");

                icono.classList.add("fa-eye-slash");

            } else {

                password.type = "password";

                icono.classList.remove("fa-eye-slash");

                icono.classList.add("fa-eye");

            }

        }
    </script>

</body>

</html>