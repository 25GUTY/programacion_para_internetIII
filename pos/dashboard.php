<?php
require "includes/session.php";
require "config/db.php";

include "includes/header.php";
include "includes/navbar.php";
include "includes/sidebar.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard | Punto de Venta</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>

        body{
            background:#f4f6f9;
        }

        .card-dashboard{
            border:none;
            border-radius:12px;
            box-shadow:0 0 10px rgba(0,0,0,.08);
        }

        .icono{
            font-size:35px;
            opacity:.3;
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            Punto de Venta
        </a>

        <div class="d-flex align-items-center">

            <span class="text-white me-3">

                <i class="fa-solid fa-user"></i>

                <?php echo $_SESSION['nombre']; ?>

            </span>

            <a href="logout.php" class="btn btn-light btn-sm">

                <i class="fa-solid fa-right-from-bracket"></i>

                Salir

            </a>

        </div>

    </div>

</nav>


<div class="container-fluid mt-4">

    <div class="row">

        <div class="col-md-3">

            <div class="card card-dashboard">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Ventas Hoy</h6>

                            <h3>$0.00</h3>

                        </div>

                        <div>

                            <i class="fa-solid fa-cash-register icono text-success"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card card-dashboard">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Productos</h6>

                            <h3>0</h3>

                        </div>

                        <div>

                            <i class="fa-solid fa-box icono text-primary"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card card-dashboard">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Clientes</h6>

                            <h3>0</h3>

                        </div>

                        <div>

                            <i class="fa-solid fa-users icono text-warning"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card card-dashboard">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6>Stock Bajo</h6>

                            <h3>0</h3>

                        </div>

                        <div>

                            <i class="fa-solid fa-triangle-exclamation icono text-danger"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="row mt-4">

        <div class="col-lg-8">

            <div class="card card-dashboard">

                <div class="card-header">

                    Últimas Ventas

                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <thead>

                            <tr>

                                <th>#</th>
                                <th>Cliente</th>
                                <th>Total</th>
                                <th>Fecha</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td colspan="4" class="text-center">

                                    No hay registros.

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card card-dashboard">

                <div class="card-header">

                    Información

                </div>

                <div class="card-body">

                    <p><strong>Usuario:</strong> <?php echo $_SESSION['nombre']; ?></p>

                    <p><strong>Rol:</strong> <?php echo $_SESSION['nombre_rol']; ?></p>

                    <p><strong>Usuario:</strong> <?php echo $_SESSION['usuario']; ?></p>

                </div>

            </div>

        </div>

    </div>

</div>
<?php 
    include "includes/footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>