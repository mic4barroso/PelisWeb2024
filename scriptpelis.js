// Espera a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    // Calificación por estrellas
    document.querySelectorAll('.calificacion-estrellas').forEach(function(calificacionEstrellasElemento) {
        const usuarioCalificacionElemento = calificacionEstrellasElemento.nextElementSibling.querySelector('#usuarioCalificacion');
        let usuarioCalificacion = 0;

        calificacionEstrellasElemento.addEventListener('click', function(e) {
            if (e.target.tagName === 'I') {
                usuarioCalificacion = parseInt(e.target.getAttribute('data-calificacion'));
                actualizarCalificacionEstrellas(calificacionEstrellasElemento, usuarioCalificacion);
                usuarioCalificacionElemento.textContent = usuarioCalificacion;
            }
        });

        function actualizarCalificacionEstrellas(calificacionEstrellasElemento, usuarioCalificacion) {
            const estrellas = calificacionEstrellasElemento.children;
            for (let i = 0; i < estrellas.length; i++) {
                if (i < usuarioCalificacion) {
                    estrellas[i].classList.remove('far');
                    estrellas[i].classList.add('fas', 'activo');
                } else {
                    estrellas[i].classList.remove('fas', 'activo');
                    estrellas[i].classList.add('far');
                }
            }
        }
    });

    // Mostrar formulario de reseña
    document.querySelectorAll('#botonEscribirResena').forEach(function(boton) {
        boton.addEventListener('click', function() {
            const formularioResena = boton.previousElementSibling;
            formularioResena.style.display = 'block';
            boton.style.display = 'none';
        });
    });

    // Enviar reseña
    window.enviarResena = function() {
        const textarea = document.querySelector('#formularioResena textarea');
        const textoResena = textarea.value;
        if (textoResena.trim() === '') {
            alert('Por favor, escribe una reseña.');
            return;
        }

        const listaResenas = document.getElementById('listaResenas');
        const nuevaResena = document.createElement('div');
        nuevaResena.className = 'resena';
        nuevaResena.innerHTML = `
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="text-light">Usuario</a>
                <small class="text-muted">Ahora</small>
            </div>
            <p></p>
        `;
        listaResenas.prepend(nuevaResena);
        textarea.value = '';
        document.getElementById('formularioResena').style.display = 'none';
        document.getElementById('botonEscribirResena').style.display = 'block';
    };

    // Enviar comentario
    window.enviarComentario = function() {
        const textarea = document.querySelector('#formularioComentario textarea');
        const textoComentario = textarea.value;
        if (textoComentario.trim() === '') {
            alert('Por favor, escribe un comentario.');
            return;
        }

        const listaComentarios = document.getElementById('listaComentarios');
        const nuevoComentario = document.createElement('div');
        nuevoComentario.className = 'comentario';
        nuevoComentario.innerHTML = `
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="text-light">Usuario</a>
                <small class="text-muted">Ahora</small>
            </div>
            <p></p>
            <div>
                <button class="btn btn-sm btn-outline-primary" onclick="meGustaComentario(this)">
                    <i class="far fa-thumbs-up"></i> Me gusta
                </button>
                <button class="btn btn-sm btn-outline-danger" onclick="reportarComentario(this)">
                    <i class="far fa-flag"></i> Denunciar
                </button>
            </div>
        `;
        listaComentarios.prepend(nuevoComentario);
        textarea.value = '';
    };

    // Función para darle "Me gusta" a un comentario
    window.meGustaComentario = function(boton) {
        boton.classList.toggle('btn-primary');
        boton.classList.toggle('btn-outline-primary');
    };

    // Función para reportar un comentario
    window.reportarComentario = function(boton) {
        alert('Comentario reportado');
    };
});
