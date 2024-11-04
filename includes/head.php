<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PelisWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <?php
    if (isset($pageType)) {
        if ($pageType === 'index') {
            echo '<script src="./js/script.js"></script>';
            echo'<link rel="stylesheet" href="./css/style.css">';
        } elseif ($pageType === 'gestionarContenido') {
            echo '<script src="./js/scriptGenerarContenido.js"></script>';
            echo '<link rel="stylesheet" href="./css/style.css">';
        }elseif ($pageType === 'perfilUsuario') {
            echo '<link rel="stylesheet" href="./css/estilos.css">';
        }
    }
    ?>
</head>