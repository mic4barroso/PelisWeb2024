function validarFormularioPelicula(e) {
    e.preventDefault();
    
    const nombrePeliculaSerie = document.getElementById('nombre').value;
    console.log(nombrePeliculaSerie);
    
    const sinopsis = document.getElementById('sinopsis').value;
    console.log(sinopsis);

    const casting = document.getElementById('casting').value;
    console.log(casting);

    const genero = document.getElementById('genero').value;
    console.log(genero);

    const etiquetas = document.getElementById('etiquetas').value;
    console.log(etiquetas);

    let hayErrores = false;

    // Validación del nombre de la película/serie
    const nombreError = document.getElementById('nombreError'); 
    if (nombrePeliculaSerie.trim() === "") {
        nombreError.textContent = "El nombre de la película/serie no puede estar vacío.";
        nombreError.style.display = "block";
        hayErrores = true; 
        return; 
    } else if (nombrePeliculaSerie.length < 2 || nombrePeliculaSerie.length > 50) {
        nombreError.textContent = "El nombre debe tener entre 2 y 50 caracteres.";
        nombreError.style.display = "block";
        hayErrores = true; 
        return; 
    } else {
        nombreError.style.display = "none"; 
        document.getElementById('nombre').value = '';
    }

    const sinopsisError = document.getElementById('sinopsisError'); // Asegúrate de tener un elemento para mostrar errores
    const cantidadPalabras = sinopsis.trim().split(/\s+/).length;

    if (cantidadPalabras < 20 || cantidadPalabras > 100) {
        sinopsisError.textContent = "La sinopsis debe tener entre 20 y 100 palabras.";
        sinopsisError.style.display = "block";
        hayErrores = true; 
        return; 
    } else {
        sinopsisError.style.display = "none"; 
        document.getElementById('sinopsis').value = '';
    }

    const castingError = document.getElementById('castingError');
    const castingPalabras = casting.trim().split(/\s+/);

    if (casting.trim() === "" || cantidadPalabrasCasting < 2) {
        castingError.textContent = "El casting no puede estar vacío y debe contener al menos 2 palabras.";
        castingError.style.display = "block";
        return; 
    } else {
        castingError.style.display = "none"; 
        document.getElementById('casting').value = '';
    }

    if (hayErrores) {
        return; 
    }
}

function validarFormularioPersonal(e) {
    e.preventDefault();

    const nombrePersona = document.getElementById('nombrePersona').value;
    console.log(nombrePersona);
    
    const nacimiento = document.getElementById('nacimiento').value;
    console.log(nacimiento);
    
    const lugarNacimiento = document.getElementById('lugarNacimiento').value;
    console.log(lugarNacimiento);
    
    const edad = document.getElementById('edad').value;
    console.log(edad);
    
    const equipoTecnico = document.getElementById('equipoTecnico').value;
    console.log(equipoTecnico);

    let hayErrores = false;

    const nombreError = document.getElementById('nombrePersonaError');
    
    const palabrasNombre = nombrePersona.trim().split(/\s+/);
    if (nombrePersona.trim() === "") {
        nombreError.textContent = "El nombre no puede estar vacío.";
        nombreError.style.display = "block";
        hayErrores = true;
        return; 
    } else if (palabrasNombre.length < 2) {
        nombreError.textContent = "El nombre debe contener al menos 2 palabras.";
        nombreError.style.display = "block";
        hayErrores = true;
        return; 
    } else {
        nombreError.style.display = "none"; 
        document.getElementById('nombrePersona').value = ''; // Limpiar el campo
    }

    const fechaNacimientoError = document.getElementById('fechaNacimientoError'); 
    if (nacimiento === "") {
        fechaNacimientoError.textContent = "La fecha de nacimiento es requerida.";
        fechaNacimientoError.style.display = "block";
        hayErrores = true; 
    } else {
        fechaNacimientoError.style.display = "none"; 
    }

    const lugarNacimientoError = document.getElementById('lugarNacimientoError'); 
    const regexSoloLetras = /^[A-Za-z\s]+$/; // Expresión regular: Solo letras y espacios
    if (lugarNacimiento.trim() === "") {
        lugarNacimientoError.textContent = "El lugar de nacimiento no puede estar vacío.";
        lugarNacimientoError.style.display = "block";
        hayErrores = true; 
    } else if (!regexSoloLetras.test(lugarNacimiento)) {
        lugarNacimientoError.textContent = "El lugar de nacimiento solo puede contener letras.";
        lugarNacimientoError.style.display = "block";
        hayErrores = true; 
    } else {
        lugarNacimientoError.style.display = "none"; 
    }
    
    const edadError = document.getElementById('edadError'); 
    if (edad < 1 || edad > 110) {
        edadError.textContent = "La edad debe ser un valor válido.";
        edadError.style.display = "block";
        hayErrores = true; 
    } else {
        edadError.style.display = "none"; 
    }

    if (hayErrores) {
        return; 
    }
}

function mostrarFormulario() {
    const tipoContenido = document.getElementById('tipoContenido');
    const formPeliculaSerie = document.getElementById('formPeliculaSerie');
    const formPersonal = document.getElementById('formPersonal');

    // Ocultar ambos formularios
    formPeliculaSerie.style.display = 'none';
    formPersonal.style.display = 'none';

    // Mostrar el formulario correspondiente
    if (tipoContenido.value === 'pelicula' || tipoContenido.value === 'serie') {
        formPeliculaSerie.style.display = 'block';
    } else if (tipoContenido.value === 'actor' || tipoContenido.value === 'personal_tecnico' || tipoContenido.value === 'director') {
        formPersonal.style.display = 'block';
    }
}

function inicio() {
    const tipoContenido = document.getElementById('tipoContenido');
    tipoContenido.addEventListener('change', mostrarFormulario);

    const formPeliculaSerie = document.getElementById('formPeliculaSerie');
    formPeliculaSerie.addEventListener('submit', validarFormularioPelicula);

    const formPersonal = document.getElementById('formPersonal');
    formPersonal.addEventListener('submit', validarFormularioPersonal);

    // Ocultar formularios al cargar
    mostrarFormulario(); 
}

window.onload = inicio;
