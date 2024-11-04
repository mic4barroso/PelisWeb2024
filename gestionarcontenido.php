<?php
    $pageType = 'gestionarContenido';
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

<div class="container">
    <div class="form-container">
        <h2 class="form-header">Agregar contenido</h2>
        
        <div class="mb-3">
            <label for="tipoContenido" class="form-label">Tipo de contenido</label>
            <select class="form-select" id="tipoContenido" required>
                <option value="">Seleccione un tipo</option>
                <option value="pelicula">Película</option>
                <option value="serie">Serie</option>
                <option value="actor">Actor</option>
                <option value="personal_tecnico">Personal Técnico</option>
                <option value="director">Director</option>
            </select>
        </div>

        <!-- Formulario para películas/Series -->
        <form id="formPeliculaSerie">
            <h3>Formulario de película/Serie</h3>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la película/serie" pattern="[A-Za-z0-9\s.,?!]+" required>
                <p id="nombreError" class="text-danger"></p>
            </div>

            <div class="mb-3">
                <label for="sinopsis" class="form-label">Sinopsis</label>
                <textarea class="form-control" id="sinopsis" name="sinopsis" placeholder="Sinopsis" required></textarea>
                <p id="sinopsisError" class="text-danger"></p>   
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
            </div>

            <div class="mb-3">
                <label for="video" class="form-label">Video</label>
                <input type="url" class="form-control" id="video" name="video" placeholder="URL del video">
            </div>

            <div class="mb-3">
                <label for="casting" class="form-label">Casting</label>
                <input type="text" class="form-control" id="casting" name="casting" placeholder="Actores principales">
                <p id="castingError" class="text-danger"></p>
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Género</label>
                <select class="form-select" id="genero" required>
                    <option value="">Seleccione un tipo</option>
                    <option value="terror">Terror</option>
                    <option value="suspenso">Suspenso</option>
                    <option value="comedia">Comedia</option>
                    <option value="accion">Acción</option>
                    <option value="documental">Documental</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="etiquetas" class="form-label">Etiquetas</label>
                <input type="text" class="form-control" id="etiquetas" name="etiquetas" placeholder="Etiquetas separadas por comas" pattern="^([A-Za-z]+(,[A-Za-z]+)*)?$" required>
            </div>

            <button type="submit" class="btn btn-primary">Agregar película/Serie</button>
        </form>

        <!-- Formulario para Actor/Director/personal Técnico -->
        <form id="formPersonal">
            <h3>Formulario de Actor/Director/personal Técnico</h3>
            <div class="mb-3">
                <label for="nombrePersona" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombrePersona" name="nombrePersona" placeholder="Nombre" required>
                <p id="nombrepersonaError" class="text-danger"></p>
            </div>

            <div class="mb-3">
                <label for="nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="nacimiento" name="nacimiento" required>
                <p id="fechaNacimientoError" class="text-danger"></p>
            </div>

            <div class="mb-3">
                <label for="lugarNacimiento" class="form-label">Lugar de Nacimiento</label>
                <input type="text" class="form-control" id="lugarNacimiento" name="lugarNacimiento" placeholder="Lugar de nacimiento" pattern="[A-Za-z\s]+" required>
                <p id="lugarNacimientoError" class="text-danger"></p>
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" min="3" max="110" required>
                <p id="edadError" class="text-danger"></p>
            </div>

            <div class="mb-3">
                <label for="equipoTecnico" class="form-label">Equipo Técnico</label>
                <input type="text" class="form-control" id="equipoTecnico" name="equipoTecnico" placeholder="Director, guionista, etc." required>
            </div>

            <div class="mb-3">
                <label for="peliculasTrabajadas" class="form-label">Películas/Series en las que ha trabajado</label>
                <div id="movies">
                    <div class="movie-entry">
                        <input type="text" class="form-control" placeholder="Nombre de la película/serie" required>
                        <input type="date" class="form-control mt-2" placeholder="Fecha de estreno" required>
                        <input type="file" class="form-control mt-2" accept="image/*" required>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary mt-2" id="addMovieButton">Agregar Otra película/Serie</button>
            </div>

            <button type="submit" class="btn btn-primary">Agregar Actor/Director/personal Técnico</button>
        </form>

        <h3 class="mt-4">Contenido Almacenado</h3>
        <ul id="contentList" class="list-group">
            <!-- Lista de contenidos almacenados -->
        </ul>
    </div>
</div>
</body>
</html>
