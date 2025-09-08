
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyectos de Carbono</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="mb-4 text-center">Proyectos de Carbono</h1>
        <div class="card shadow">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <?php
                    // Obtener todas las carpetas en el directorio actual
                    $dirs = array_filter(glob('*'), 'is_dir');
                    if (empty($dirs)) {
                        echo '<li class="list-group-item text-muted">No hay proyectos disponibles.</li>';
                    } else {
                        foreach ($dirs as $dir) {
                            // Puedes personalizar el enlace si cada proyecto tiene un index.html o index.php
                            echo '<li class="list-group-item">';
                            echo '<i class="bi bi-folder-fill text-warning"></i> ';
                            echo '<a href="' . htmlspecialchars($dir) . '/" class="text-decoration-none">' . htmlspecialchars($dir) . '</a>';
                            echo '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Bootstrap JS Bundle CDN (opcional, solo si necesitas JS de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>