<div class="sidebar bg-dark text-white p-3">

    <h3 class="mb-4"><i class="fa-solid fa-bars"></i> Menú</h3>
    <hr>

    <a href="dashboard.php" class="btn btn-dark w-100 text-start mb-2"><i class="fa-solid fa-gauge-high"></i>Dashboard</a>

    <?php if ($_SESSION['rol'] == "usuario") { ?>

        <a href="nuevoTicket.php" class="btn btn-dark w-100 text-start mb-2"><i class="fa-solid fa-circle-plus"></i>Nuevo Ticket</a>

        <a href="tickets.php" class="btn btn-dark w-100 text-start mb-2"><i class="fa-solid fa-ticket"></i>Mis Tickets</a>

    <?php } else { ?>

        <a href="tickets.php" class="btn btn-dark w-100 text-start mb-2"><i class="fa-solid fa-ticket"></i>Todos los Tickets</a>

    <?php } ?>

    <a href="logout.php" class="btn btn-danger w-100 text-start mt-4"><i class="fa-solid fa-right-from-bracket"></i>Cerrar sesión</a>

</div>