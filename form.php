<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tu Sitio Web</title>
    <!-- Agrega enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body style="background-color: #343a40;">

    <!-- Navbar con título a la izquierda y 3 botones a la derecha -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Título a la izquierda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Botón 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Botón 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Botón 3</a>
                </li>
            </ul>
        </div>
    </nav>
	<br>
	<br>
    <!-- Barra de búsqueda y botón de filtros -->
    <div class="container">
        <h2>Formulario de Carga</h2>
        <form action="mod_carga.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
           <!-- <div class="form-group">
                <label for="info">Información:</label>
                <textarea class="form-control" id="info" name="info" required></textarea>
            </div> -->
            <div class="form-group">
                <label for="escuela">Escuela:</label>
                <select class="form-control" id="escuela" name="escuela" required>
                    <?php

                    // Consulta SQL para obtener todas las escuelas
                    $query = "SELECT DISTINCT nombre FROM escuelas";
                    $resultado = $conexion->query($query);

                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<option value='" . $fila['nombre'] . "'>" . $fila['nombre'] . "</option>";
                    }

                    // Cerrar la conexión
                    $conexion->close();
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white py-3">
        © 2023 Tu Sitio Web
    </footer>

    <!-- Agrega enlaces a los archivos JavaScript de Bootstrap y otros scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#escuela").select2(); // Aplicar Select2 al select
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script para mostrar/ocultar opciones de filtros -->
    

    <!-- Agrega aquí tus scripts para trabajar con mapas u otras funcionalidades -->

</body>
</html>