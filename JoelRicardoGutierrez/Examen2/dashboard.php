<?php

require_once("includes/session.php");

include("includes/header.php");
include("includes/navbar.php");

?>

<div class="d-flex">

    <?php include("includes/sidebar.php"); ?>

    <div class="container mt-4">

        <div class="card shadow">

            <div class="card-body">

                <h2>Bienvenido</h2>
                <hr>
                <h4><?php echo $_SESSION['nombre']; ?></h4>

                <p><strong>Correo:</strong> <?php echo $_SESSION['usuario']; ?></p>
                <p><strong>Rol:</strong> <?php echo ucfirst($_SESSION['rol']); ?></p>

            </div>

        </div>

    </div>

</div>

<?php include("includes/footer.php"); ?>