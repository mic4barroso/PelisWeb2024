<?php
if (session_status() === PHP_SESSION_NONE) { 
    session_start(); 
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">PelisWeb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" 
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" 
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Menú
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="menuDropdown">
                            <li><a class="dropdown-item" href="#">Peliculas</a></li>
                            <li><a class="dropdown-item" href="#">Actores</a></li>
                            <li><a class="dropdown-item" href="#">Directores</a></li>
                        </ul>
                    </li>
                </ul>


                <form action="" method="get" class="d-flex" role="search">
                <input class="form-control me-2" type="text" placeholder="Buscar..." name="busqueda">
                <input type="submit" value="Buscar" placeholder="Buscar..." name="enviar">
            </form>
            
            <?php
            if(isset($_GET['enviar'])) {
                $busqueda = $_GET['busqueda'];
                
                $consulta = $conexion->prepare("SELECT * FROM film WHERE nombre LIKE '%$busqueda%'");
                
                $consulta->execute();
                
                // Utiliza fetchAll para obtener todas las filas
                $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
                
                foreach ($resultado as $row) {
                    echo $row['nombre'] . '<br>';
                }
                
            // Redirige a la página de resultados con la búsqueda como parámetro
            header("Location: resultados_busqueda.php?busqueda=$busqueda");
            exit(); // Asegura que no se ejecute más código después de la redirección
            }
            ?>


                
                <div class="d-flex">
                    
                    <?php
                        if (isset($_SESSION['nombre'])) {
                            // Si el usuario ha iniciado sesión, muestra su nombre y el botón de "Log Out"
                            $nombre = $_SESSION['nombre'];
                            echo '
                                <span class="navbar-text">Hola, ' . $nombre . '</span>
                                <a href="perfiles.php" class="fa-solid fa-gear"></a>                    
                                <a href="logOut.php" class="btn btn-danger">Log Out</a>
                            ';
                            
                            
                        } else {
            
                            // El usuario no ha iniciado sesión, muestra un mensaje de bienvenida y los botones de "Log In" y "Registrarse"
                            echo '<div class="ms-3">
                                <span class="navbar-text">Bienvenido Invitado</span>
                                <a href="formularioLogin.php" class="btn btn-primary">Log In</a>
                                <a href="formularioRegistro.php" class="btn btn-secondary">Registrarse</a>
                            </div>';
            
            
                        }
                    ?>
                    
                    
                    
                    <a href="perfilUsuario.html" class="btn btn-link btnPerfil">Perfil</a>
                </div>
            </div>
        </div>
    </nav>