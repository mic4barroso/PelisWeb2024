<?php
    $pageType = 'perfilUsuario';
    require('./conexion/conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
    require('./includes/head.php');
    ?>
    <body>
    <?php
    require('./includes/navbar.php');
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">PelisWeb</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menú
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="menuDropdown">
                            <li><a class="dropdown-item" href="#">Peliculas</a></li>
                            <li><a class="dropdown-item" href="#">Actores</a></li>
                            <li><a class="dropdown-item" href="#">Directores</a></li>
                           
                        </ul>
                    </li>
                </ul>
                <form class="d-flex me-3">
                    <input class="form-control me-2" type="search" placeholder="Buscar películas..." aria-label="Buscar">
                    <button class="btn btn-warning" type="submit">Buscar</button>
                </form>
                <div class="d-flex">
                    <button type="button" class="btn btn-warning me-2 botonLogin" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Iniciar Sesión
                    </button>
                    <button type="button" class="btn btn-warning me-2 botonRegistrarse" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        Registrarse
                    </button>
                    <button type="button" class="btn btn-link btnPerfil">Perfil</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- perfil -->
    <div class="container mt-5">
        <div class="profile-header">
            <div class="row">
                <div class="col-auto">
                    <img src="img/icon.png" width="100px" height="100px" alt="Foto del Usuario">
                </div>
                <div class="col">
                    <h1>lore_sanchez02</h1>
                    <a href="editarPerfil.html">
                        <button class="btn btn-warning" type="button">Editar Perfil</button>
                    </a>
                    <p>Email: lorena@gmail.com</p>
                    <p>Cinéfila apasionada, disfruto explorar diferentes géneros y estilos, amor por el cine, es una forma de descubrir nuevas perspectivas y emociones.
                        Comparto mis opiniones y reseñas sobre películas que veo, destacando sus puntos fuertes, con un enfoque honesto y detallado, busco generar conversación y ayudar a otros espectadores a encontrar su próxima película favorita.</p>
                        
                    </div>
            </div>
        </div>
    <!-- favoritos -->
        <div class="mt-4 p-3">
            <h2>Favoritos</h2><br>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card movie-card">
                        <img src="img/batt.jpg" class="card-img-top" alt="The Batman">
                        <div class="card-body">
                            <h5 class="card-title">The Batman</h5>
                            <small>⭐⭐⭐⭐</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card">
                        <img src="img/avengersendgame_lob_crd_05.jpg" class="card-img-top" alt="The Avengers">
                        <div class="card-body">
                            <h5 class="card-title">The Avengers: Endgame</h5>
                            <small>⭐⭐⭐⭐</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card">
                        <img src="img/imagees.jpeg" class="card-img-top" alt="Inception">
                        <div class="card-body">
                            <h5 class="card-title">Inception</h5>
                            <small>⭐⭐⭐⭐</small>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
    
        <!-- reseñas -->
        <div class="mt-4 reseñas-bg p-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Reseñas recientes</h2>
        </div>
            <br>
            <div class="list-group">
                <div class="list-group-item reseña-item">
                    <h5 class="mb-3 titulo-peli">Spider-Man</h5>
                    <span class="review-date">27-09-2024</span><br>
                    <div id="carouselExample1" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/spidermann.jpg" class="d-block" alt="Imagen 1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/spiderman11.webp" class="d-block" alt="Imagen 2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/spiderm.jpg" class="d-block" alt="Imagen 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <p class="mb-4">"Spider-Man" de Sam Raimi es una de esas películas que marcó a toda una generación y que, a día de hoy, sigue siendo un referente en el cine de superhéroes. Desde la increíble actuación de Tobey Maguire como Peter Parker, hasta el icónico villano interpretado por Willem Dafoe como el Duende Verde, la película combina perfectamente acción, emoción y desarrollo de personajes.
                        Una de las cosas que más me gustó es cómo manejan el dilema interno de Peter: ser un adolescente común mientras aprende a llevar el peso de sus responsabilidades como héroe. La famosa frase “Un gran poder conlleva una gran responsabilidad” realmente define toda la trama y es algo que resuena incluso fuera de la pantalla.    
                        La escena del beso boca abajo entre Peter y Mary Jane se ha convertido en un momento icónico del cine, y las secuencias de acción, aunque más simples comparadas con las películas modernas, siguen siendo emocionantes y bien ejecutadas. La ciudad de Nueva York se siente viva, y la forma en que Spider-Man se balancea entre los rascacielos sigue siendo visualmente impresionante para su época.
                        Mi única crítica es que, aunque el ritmo es en su mayoría bueno, hay momentos donde la película se siente un poco lenta, especialmente en el desarrollo del romance. Aun así, esta primera película de Spider-Man me sigue pareciendo una de las mejores adaptaciones del personaje y una obra clave dentro del cine de superhéroes. ¡Si te gusta el cine de acción y los cómics, no te la puedes perder!"</p>
                    <small>Calificación: ⭐⭐⭐⭐</small>
                    <small class="comentarios">Ver comentarios</small>
                </div>

                <div class="list-group-item reseña-item">
                    <h5 class="mb-3 titulo-peli">The Truman Show: historia de una vida</h5>
                    <span class="review-date">20-09-2024</span><br>
                    <div id="carouselExample2" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/the-truman-show_0.jpg" class="d-block" alt="Imagen 1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/truman-portada.jpg" class="d-block" alt="Imagen 2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/truman.jpg" class="d-block" alt="Imagen 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <p class="mb-4">"The Truman Show" es una de esas películas que te hacen pensar mucho más allá del simple entretenimiento. La trama sigue la vida de Truman Burbank, interpretado brillantemente por Jim Carrey, quien sin saberlo vive en un gigantesco reality show donde todo su mundo es falso: su familia, sus amigos, su trabajo, y hasta la ciudad donde vive son solo un montaje para las cámaras.
                        Lo que más me impactó de esta película es cómo aborda temas como el control, la manipulación de los medios y la búsqueda de la libertad personal. Truman vive una vida perfecta, pero completamente artificial, y la película hace un trabajo increíble mostrándonos cómo, a pesar de todo, su instinto de libertad lo lleva a cuestionar su realidad. Es una crítica sutil pero poderosa sobre la sociedad del espectáculo y hasta sobre nuestra obsesión por los reality shows.
                        Jim Carrey, conocido por su comedia, ofrece aquí una actuación conmovedora y sorprendentemente dramática. Ver cómo su personaje pasa de la ingenuidad a la conciencia total de su situación es simplemente fascinante. Ed Harris, como el creador del show, añade un toque inquietante, ya que representa a esa figura todopoderosa que decide qué es real para Truman y qué no.
                        La cinematografía, con sus ángulos de cámara estilo vigilancia, te hace sentir parte del show, como si también fueras un espectador espiando la vida de Truman. Y el final… ese final me dejó pensando por días. Sin spoilear, diré que es uno de los cierres más satisfactorios y reflexivos que he visto en el cine.                
                        Para mí, The Truman Show es una obra maestra moderna. No solo entretiene, sino que te deja con preguntas profundas sobre la vida, la libertad y lo que significa ser observado constantemente. Una película que recomiendo sin reservas y que seguramente te hará replantearte la realidad que te rodea."</p>
                    <small>Calificación: ⭐⭐⭐</small>
                    <small class="comentarios">Ver comentarios</small>
                </div>
                <div class="list-group-item reseña-item">
                    <h5 class="mb-3 titulo-peli">Eternal Sunshine of the Spotless Mind</h5>
                    <span class="review-date">20-09-2024</span><br>
                    <div id="carouselExample3" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/Brilho Eterno de uma Mente sem Lembrancas (5).jpg" class="d-block" alt="Imagen 1">
                            </div>
                            <div class="carousel-item">
                                <img src="img/EternalSunshineLeads_midroll.jpg" class="d-block" alt="Imagen 2">
                            </div>
                            <div class="carousel-item">
                                <img src="img/eternal.jpeg" class="d-block" alt="Imagen 3">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <p class="mb-4">"Eternal Sunshine of the Spotless Mind" es una de las películas más originales, emotivas y visualmente sorprendentes que he visto. Es una obra maestra de la ciencia ficción romántica que aborda el amor, la pérdida y el poder (y el dolor) de los recuerdos de una manera completamente única. La premisa de borrar los recuerdos de una relación fallida es fascinante y abre un montón de preguntas sobre lo que nos define como personas."</p>
                    <small>Calificación: ⭐⭐⭐⭐⭐</small>
                    <small class="comentarios">Ver comentarios</small>
                </div>
            </div>
        </div>
    </div>

    <!-- peliculas pendientes -->
    <div class="mt-4 p-3">
        <h2>Pendientes de este mes</h2>
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card cardp d-flex flex-row">
                    <img src="img/spider.jpg" class="card-img-top cardimg" alt="spider-man lejos de casa">
                    <div class="card-body">
                        <h5 class="card-title">Spider-Man: lejos de casa (2019)</h5>
                        <p class="card-text">Peter Parker decide pasar unas merecidas vacaciones en Europa junto a MJ, Ned y el resto de sus amigos. Sin embargo, Peter debe volver a ponerse el traje de Spider-Man cuando Nick Fury le encomienda una nueva misión: frenar el ataque de unas criaturas que están causando el caos en el continente.</p>
                    </div>
                </div>
            </div>
            <div class="col-10">
                <div class="card cardp d-flex flex-row">
                    <img src="img/elpadrino.jpeg" class="card-img-top cardimg" alt="el padrino">
                    <div class="card-body">
                        <h5 class="card-title">El Padrino</h5>
                        <p class="card-text">Don Vito Corleone es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York en los años 40. El hombre tiene cuatro hijos: Connie, Sonny, Fredo y Michael, que no quiere saber nada de los negocios sucios de su padre. Cuando otro capo, Sollozzo, intenta asesinar a Corleone, empieza una cruenta lucha entre los distintos clanes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require('./includes/footer.php');
?>

</div>
</body>
</html>