<?php

require_once("includes/session.php");

if ($_SESSION['rol'] != "usuario") {
    header("Location: dashboard.php");
    exit();
}

include("includes/header.php");
include("includes/navbar.php");

?>

<div class="d-flex">

    <?php include("includes/sidebar.php"); ?>

    <div class="container mt-4">

        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                <h4>Registrar Ticket</h4>

            </div>

            <div class="card-body">

                <form action="controllers/TicketController.php"
                    method="POST"
                    onsubmit="return validarTicket();">

                    <div class="mb-3">

                        <label class="form-label">Título</label>
                        <input
                            type="text"
                            name="titulo"
                            id="titulo"
                            class="form-control">

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea
                            name="descripcion"
                            id="descripcion"
                            rows="5"
                            class="form-control"></textarea>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Departamento</label>
                        <input
                            type="text"
                            name="departamento"
                            id="departamento"
                            class="form-control">
                    </div>

                    <div class="mb-3">

                        <label class="form-label">Prioridad</label>

                        <select name="prioridad" id="prioridad" class="form-select" required>
                            <option value="">Seleccione</option>
                            <option value="Baja">Baja</option>
                            <option value="Media">Media</option>
                            <option value="Alta">Alta</option>
                        </select>

                    </div>

                    <button type="submit" class="btn btn-success">Guardar Ticket</button>

                    <a href="dashboard.php" class="btn btn-secondary">Cancelar</a>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>