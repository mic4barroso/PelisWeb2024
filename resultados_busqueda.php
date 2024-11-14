<?php
    include('./conexion/conexion.php');

    $resultados = []; 

    if (isset($_GET['busqueda'])) {
    $busqueda = $_GET['busqueda'];

    $consulta = $conexion->prepare("SELECT * FROM films WHERE nombre LIKE :busqueda");
    $busquedaParam = "%$busqueda%"; // Parámetro de búsqueda
    $consulta->bindParam(':busqueda', $busquedaParam);
    $consulta->execute();
    $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC);
}

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
        <div class="container">
        <div class="col-12">
                <?php
                // Mostrar los resultados
                foreach ($resultados as $film) {
                ?>
                    <div class="resultado-texto">
                        <h2><a href="detalle_busqueda.php?id=<?php echo $film['id']; ?>"><?php echo htmlspecialchars($film['nombre']); ?></a></h2>
                        <p><?php echo htmlspecialchars($film['genero']); ?></p>
                    </div>
                <?php
                }
                // Mostrar mensaje si no hay resultados
                if (empty($resultados)) {
                    echo '<h4 class="resultado-texto2">No se encontraron películas que coincidan con la búsqueda.</h4>';
                }
                ?>
            </div>
        </div>
    </main>

        <?php
        require('./includes/footer.php')
        ?>

</body>

</html>
