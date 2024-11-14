<?php
    $pageType = 'index';
    require('./conexion/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
    <?php
    require('./includes/head.php');
    ?>
    <body>
    <?php
    require('./includes/navbar.php');
    ?>                  
    <div class="contenedor mt-4">
        <div class="row">
            <div class="col-md-8">
                <a href="theBatman3.html" class="text-decoration-none">
                    <div class="card mb-4">
                        <img src="imagenes/TheBatman.jpg" alt="Trailer" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">The Batman</h5>
                            <p class="card-text">The Batman es una película que sigue al icónico superhéroe mientras investiga una serie de asesinatos en Gotham City. A medida que desentraña una conspiración más profunda, Bruce Wayne debe enfrentar sus propios demonios y la corrupción que envuelve a la ciudad.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <h4>Estrenos</h4>
                <div class="list-group">
                    <a href="#" class="novedades list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#videoModal1">
                        <img class="imagen-estrenos" src="imagenes/Thunderbolts.jpg" alt="Trailer Thunderbolts" class="mr-2">
                        <div>
                            <p>Thunderbolts</p>
                        </div>
                    </a>
                    <a href="#" class="novedades list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#videoModal2">
                        <img class="imagen-estrenos" src="imagenes/gladiador.jpg" alt="Entrevista a Nolan" class="mr-2">
                        <div>
                            <p>Gladiador II</p>
                        </div>
                    </a>
                    <a href="#" class="novedades list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#videoModal3">
                        <img class="imagen-estrenos" src="imagenes/kraven.jpg" alt="Trailer de Interstellar" class="mr-2">
                        <div>
                            <p>Kraven, The Hunter</p>
                        </div>
                    </a>
                    <!-- Nuevas películas agregadas -->
                    <a href="#" class="novedades list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#videoModal4">
                        <img class="imagen-estrenos" src="imagenes/moana2.jpg" alt="Nueva Película 1" class="mr-2">
                        <div>
                            <p>Moana 2</p>
                        </div>
                    </a>
                    <a href="#" class="novedades list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#videoModal5">
                        <img class="imagen-estrenos" src="imagenes/joker2.jpg" alt="Nueva Película 2" class="mr-2">
                        <div>
                            <p>Joker: Folie à Deux</p>
                        </div>
                    </a>
                </div>
                
                <!-- Modal para Thunderbolts -->
                <div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModalLabel1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="videoModalLabel1">Thunderbolts</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body video-modal">
                                <iframe class="src-modal" src="https://www.youtube.com/embed/_FjPVw6t0so" title="Marvel Studios Thunderbolts* | Tráiler Oficial | Doblado" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal para Gladiador II -->
                <div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="videoModalLabel2">Gladiador II</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body video-modal">
                                <iframe class="src-modal" src="https://www.youtube.com/embed/TCUoCauKsfQ" title="Gladiador II | Tráiler oficial (SUBTITULADO) – Paul Mescal, Pedro Pascal, Denzel Washington" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                        
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Modal para Kraven, The Hunter -->
                <div class="modal fade" id="videoModal3" tabindex="-1" aria-labelledby="videoModalLabel3" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="videoModalLabel3">Kraven, The Hunter</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body video-modal" style="height: 400px;">
                                <iframe class="src-modal" src="https://www.youtube.com/embed/Ze7bQfEBFjo" title="Kraven El Cazador - Nuevo Tráiler" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal para Moana 2 -->
                <div class="modal fade" id="videoModal4" tabindex="-1" aria-labelledby="videoModalLabel4" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="videoModalLabel4">Moana 2</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body video-modal" style="height: 400px;">
                                <iframe class="src-modal" src="https://www.youtube.com/embed/t3C8TrVo0zo" title="Moana 2 | Tráiler Oficial | Doblado" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal para Joker: Folie à Deux -->
                <div class="modal fade" id="videoModal5" tabindex="-1" aria-labelledby="videoModalLabel5" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="videoModalLabel5">Joker: Folie à Deux</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body video-modal" style="height: 400px;">
                                <iframe class="src-modal" src="https://www.youtube.com/embed/oXTO2a9sNpg" title="Guasón 2: Folie À Deux | Tráiler Oficial | Subtitulado" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                <!-- Sección de Listas--> 
                <h4 class="mt-4">Actores</h4>
                <div class="list-group">
                    <a href="KeanuReeves.html" class="novedades list-group-item list-group-item-action">
                        <img class="imagen-actores" src="actores/keanu.jpg" alt="Trailer de Matrix" class="mr-2">
                        <div>
                            <h5>Keanu Reeves</h5>
                            <p>Matriz - John Wick - Maxima Velocidad<p>
                        </div>
                    </a>
                    <a href="#" class="novedades list-group-item list-group-item-action">
                        <img class="imagen-actores" src="actores/robert.jpg" alt="Entrevista a Nolan" class="mr-2">
                        <div>
                            <h5>Robert Downey Jr</h5>
                            <p>Iron Man - Sherlock Holmes - The Avengers</p>
                        </div>
                    </a>
                    <a href="#" class="novedades list-group-item list-group-item-action">
                        <img class="imagen-actores" src="actores/Jennifer-Aniston.jpg" alt="Trailer de Interstellar" class="mr-2">
                        <div>
                            <h5>Jenniffer Aniston</h5>
                            <p>Friends - Cake - Misterio A Bordo</p>
                        </div>
                    </a>
                
            
                </div>
        </div>

    <div class="contenedor lista-peliculas mt-4">
        <div class="row" id="movieList">
            <h1 class="titulo-peliculas">Conoce todo sobre las peliculas que mas te gustan</h1>
            <div class="col-md-4">
                <a href="avengers.html" class="novedades list-group-item list-group-item-action">
                <div class="pelicula" data-title="Avengers">
                    <h2>The Avengers</h2>
                    <img src="imagenes/avengers.jpeg" alt="The Avengers" class="img-fluid">
                    <p class="sinopsis">Sinopsis: Un grupo de superhéroes se une para enfrentar a una poderosa amenaza que pone en peligro al mundo.</p>
                </div>
                </a>
            </div>
            <div class="col-md-4">
                <div class="pelicula" data-title="Spider-Man: No Way Home">
                    <h2>Spider-Man: No Way Home</h2>
                    <img src="imagenes/spiderman.jpg" alt="Spider-Man: No Way Home" class="img-fluid">
                    <p class="sinopsis">Sinopsis: Spider-Man busca ayuda para lidiar con las consecuencias de ser revelado como Peter Parker.</p>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="pelicula" data-title="Dune">
                    <h2>Dune</h2>
                    <img src="imagenes/dune.jpeg" alt="Dune" class="img-fluid">
                    <p class="sinopsis">Sinopsis: En un futuro lejano, un joven noble se embarca en una misión para proteger el recurso más valioso del universo.</p>
                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- Modal de Iniciar Sesión -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Iniciar Sesión</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Iniciar Sesión -->
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="emailModal" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailModal" aria-describedby="emailHelp" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                            <p class="text-danger" id="emailError"></p>
                        </div>
                        <div class="mb-3">
                            <label for="contrasenaModal" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contrasenaModal" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                            <div id="passwordHelp" class="form-text">La contraseña debe tener al menos una mayúscula, una minúscula y un número.</div>
                            <p class="text-danger" id="contrasenaError"></p>
                            <button type="submit" class="btn btn-primary btnLogin">Enviar</button>
                            <button type="button" class="btn btn-secondary btnLogin" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Registro -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel2">Registrarse</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="registroForm">
                        <div class="mb-3">
                            <label for="inputNombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="NombreModal" placeholder="Introduce tu nombre" pattern="[A-Za-z\s]+" required>
                            <p class="text-danger" id="nombreError"></p>
                        </div>
                        <div class="mb-3">
                            <label for="inputApellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="ApellidoModal" placeholder="Introduce tu apellido" pattern="[A-Za-z\s]+" required>
                            <p class="text-danger" id="apellidoError"></p>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailModal2" aria-describedby="emailHelp" placeholder="Introduce tu correo electrónico" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                            <p class="text-danger" id="emailError"></p>
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contrasenaModal2" placeholder="Introduce tu contraseña" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                            <div id="passwordHelp" class="form-text">La contraseña debe tener al menos una mayúscula, una minúscula y un número.</div>
                            <p class="text-danger" id="contrasenaError"></p>
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

    <?php
    require('./includes/footer.php');
    ?>

</html>
