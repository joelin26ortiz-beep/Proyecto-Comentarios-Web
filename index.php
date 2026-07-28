<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica Grupal - Programación Frontend / Backend</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .comment-card {
            background-color: #e8f5e9;
            border-left: 5px solid #2e7d32;
            padding: 12px 16px;
            margin-bottom: 12px;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <!-- Menú de Navegación del Modelo -->
    <div class="container mt-3">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active fw-semibold" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Tiendas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Categorías</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Ofertas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Contactos</a>
            </li>
        </ul>
    </div>

    <!-- Contenido Principal -->
    <div class="container my-4">

        <!-- Formulario -->
        <h2 class="fw-bold mb-4">Su opinión es importante</h2>

        <form action="guardar.php" method="POST" id="formComentario" class="mb-4">
            <div class="mb-3">
                <label for="nombre" class="form-label text-secondary fw-semibold">Su nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Su nombre">
                <span id="error-nombre" class="invalid-feedback" aria-live="polite"></span>
            </div>

            <div class="mb-3">
                <label for="comentario" class="form-label text-secondary fw-semibold">Comentario</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="4"></textarea>
                <span id="error-comentario" class="invalid-feedback" aria-live="polite"></span>
            </div>

            <button type="submit" class="btn btn-primary px-4">Enviar</button>
        </form>

        <!-- Zona de Comentarios Recibidos -->
        <div class="mt-5">
            <div class="text-muted mb-2">
                <span id="contador">0</span> comentarios
            </div>
            <h4 class="fw-bold mb-3">Comentarios recibidos</h4>

            <div id="listaComentarios">
                <div class="comment-card">
                    <div class="fw-bold text-dark">Ejemplo</div>
                    <div class="text-secondary mt-1">Aquí se mostrarán los comentarios recibidos.</div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script personalizado -->
    <script src="./script.js"></script>
</body>

</html>