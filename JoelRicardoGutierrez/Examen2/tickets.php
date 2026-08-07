<?php

require_once("includes/session.php");
require_once("config/db.php");


include("includes/header.php");
include("includes/navbar.php");

if ($_SESSION['rol'] == "tecnico") {

    $sql = "SELECT
            tickets.*,
            usuarios.nombre
          FROM tickets
          INNER JOIN usuarios
          ON tickets.id_usuario=usuarios.id
          ORDER BY fecha_creacion DESC";

    $stmt = $conexion->prepare($sql);
} else {

    $sql = "SELECT
            tickets.*,
            usuarios.nombre
          FROM tickets
          INNER JOIN usuarios
          ON tickets.id_usuario=usuarios.id
          WHERE id_usuario=:id
          ORDER BY fecha_creacion DESC";

    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":id", $_SESSION['id']);
}

$stmt->execute();

?>

<div class="d-flex">

    <?php include("includes/sidebar.php"); ?>

    <div class="container mt-4">

        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                <h4>Listado de Tickets</h4>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-hover">

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Título</th>
                            <th>Departamento</th>
                            <th>Prioridad</th>
                            <th>Estado</th>
                            <th>Fecha</th>

                            <?php

                            if ($_SESSION['rol'] == "tecnico") {

                            ?>
                                <th>Acción</th>
                            <?php } ?>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                            $clasePrioridad = "";

                            switch ($row['prioridad']) {

                                case "Alta":
                                    $clasePrioridad = "table-danger";
                                    break;

                                case "Media":
                                    $clasePrioridad = "table-warning";
                                    break;

                                case "Baja":
                                    $clasePrioridad = "table-success";
                                    break;
                            }

                        ?>

                            <tr class="<?php echo $clasePrioridad; ?>">

                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['titulo']; ?></td>
                                <td><?php echo $row['departamento']; ?></td>
                                <td>
                                    <span class="badge bg-dark"><?php echo $row['prioridad']; ?></span>
                                </td>
                                <td>

                                    <?php

                                    if ($row['estado'] == "Pendiente") {
                                        echo '<span class="badge bg-warning text-dark">Pendiente</span>';
                                    } elseif ($row['estado'] == "En Proceso") {
                                        echo '<span class="badge bg-primary">En Proceso</span>';
                                    } else {
                                        echo '<span class="badge bg-success">Resuelto</span>';
                                    }
                                    ?>

                                </td>

                                <td>
                                    <?php echo $row['fecha_creacion']; ?>
                                </td>

                                <?php
                                if ($_SESSION['rol'] == "tecnico") {
                                ?>

                                    <td>
                                        <form
                                            action="controllers/CambiarEstado.php" method="POST">

                                            <input
                                                type="hidden"
                                                name="id"
                                                value="<?php echo $row['id']; ?>">

                                            <select
                                                name="estado"
                                                class="form-select form-select-sm">

                                                <option
                                                    <?php if ($row['estado'] == "Pendiente") echo "selected"; ?>> Pendiente</option>
                                                <option
                                                    <?php if ($row['estado'] == "En Proceso") echo "selected"; ?>>En Proceso</option>
                                                <option
                                                    <?php if ($row['estado'] == "Resuelto") echo "selected"; ?>>Resuelto</option>
                                            </select>
                                            <button class="btn btn-success btn-sm mt-2">Actualizar</button>
                                        </form>
                                    </td>
                                <?php
                                }
                                ?>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?php include("includes/footer.php"); ?>