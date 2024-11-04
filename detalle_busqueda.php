<?php
    require('./conexion/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    require('./includes/head.php');
    ?>
</head>

<body>
        <?php
        require('./includes/navbar.php');
        ?>

    <main>
        <?php
        if (isset($_GET['id'])) {
            $id_film = $_GET['id'];
        
            $consulta = $conexion->prepare("SELECT * FROM film WHERE id = ?");
            $consulta->bindParam(1, $id_film, PDO::PARAM_INT);
            $consulta->execute();
            $film = $consulta->fetch(PDO::FETCH_ASSOC);
        
            // Mostrar los detalles de la película
            if ($film) {
                ?>
                <div class="container">
                    <div class="col-12">
                        <div class="noticias">
                            <h1 class="encabezadoNoticias"><?php echo htmlspecialchars($film['nombre']); ?></h1>
                            <p class="parrafoGuias"><?php echo htmlspecialchars($film['genero']); ?></p>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo 'No se encontró la película con ese ID.';
            }
        } else {
            echo 'No se proporcionó un ID.';
        }
        ?>
    </main>

        <?php
        require('./includes/footer.php')
        ?>

</body>

</html>