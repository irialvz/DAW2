<?php
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen PHP - Tu Nombre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #f8f9fa; }
        .card { box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="index.php">Examen PHP</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="listado.php">Listado</a></li>
                <li class="nav-item"><a class="nav-link" href="formulario.php">Nuevo</a></li>
            </ul>
            <span class="navbar-text text-white">
                    Usuario: <strong>Invitado</strong> | <a href="logout.php" class="text-white text-decoration-underline">Salir</a>
                </span>
        </div>
    </div>
</nav>

<main class="container">

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error:</strong> Aquí iría el mensaje de error de PHP.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Éxito:</strong> Operación realizada correctamente.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h4 class="mb-0">Título del Formulario</h4>
                </div>
                <div class="card-body">
                    <form action="procesar.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                        </div>

                        <div class="mb-3">
                            <label for="opcion" class="form-label">Selección</label>
                            <select class="form-select" name="opcion" id="opcion">
                                <option value="1">Opción A</option>
                                <option value="2">Opción B</option>
                            </select>
                        </div>

                        <button type="submit" name="btnEnviar" class="btn btn-primary w-100">Enviar Datos</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Listado de Datos</h4>
                    <a href="#" class="btn btn-sm btn-success">+ Nuevo Registro</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Producto Ejemplo</td>
                                <td><span class="badge bg-success">Activo</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="#" class="btn btn-sm btn-danger">Borrar</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<footer class="footer mt-auto py-3 bg-light text-center border-top">
    <div class="container">
        <span class="text-muted">&copy; 2024 - Examen DWES - Tu Nombre</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
