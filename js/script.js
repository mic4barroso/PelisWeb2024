function validarModal1(event) {
    event.preventDefault();
    
    // Captura de valores de los inputs
    let email1 = document.getElementById("emailModal").value;
    console.log("Email ingresado:", email1);

    let contrasena1 = document.getElementById("contrasenaModal").value;
    console.log("Contraseña ingresada:", contrasena1);


    if (!isValidEmail(email1)) {
        emailError.textContent = "Ingrese un correo electrónico válido.";
    }

    if (!isValidPassword(contrasena1)) {
        contrasenaError.textContent = "La contraseña debe tener al menos 8 caracteres, incluir una letra mayúscula, una letra minúscula, un número y un carácter especial.";
    }

    // Cerrar el modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
    modal.hide();

    // Deshabilitar el botón que lanza el modal
    const botonIniciarSesion = document.querySelector('.botonLogin'); // Selecciona por clase
    botonIniciarSesion.disabled = true;
    botonIniciarSesion.innerText = "Sesión Iniciada"; // Opcional: cambiar el texto del botón

    const botonRegistro = document.querySelector('.botonRegistrarse');
    botonRegistro.disabled = true;

    //Que se muestre el boton de perfil una vez iniciada la sesion
}
    

function validarModal2(e) {
    e.preventDefault();

    let nombre = document.getElementById('NombreModal').value;
    console.log(nombre);

    let apellido = document.getElementById('ApellidoModal').value;
    console.log(apellido);

    let email2 = document.getElementById("emailModal2").value;
    console.log("Email ingresado:", email2);

    let contrasena2 = document.getElementById("contrasenaModal2").value;
    console.log("Contraseña ingresada:", contrasena2);

    const emailError = document.getElementById("emailError");
    const contrasenaError = document.getElementById("contrasenaError");
    const nombreError = document.getElementById("nombreError"); 
    const apellidoError = document.getElementById("apellidoError"); 
    // Expresión regular para validar que solo contenga letras y espacios
    const nombreapellidoRegex = /^[A-Za-z\s]+$/;

    // Validación
    if (nombre.length < 3 || nombre.split(' ').length > 3 || !nombreapellidoRegex.test(nombre)) {
        nombreError.textContent = "Ingrese un nombre válido. Debe tener al menos 3 letras y un máximo de 3 palabras, solo se permiten letras.";
    } else {
        nombreError.textContent = ""; // Limpia el mensaje de error si la validación pasa
    }

    if (apellido.length < 3 || apellido.split(' ').length > 3 || !nombreapellidoRegex.test(apellido)) {
        apellidoError.textContent = "Ingrese un nombre válido. Debe tener al menos 3 letras y un máximo de 3 palabras, solo se permiten letras.";
    } else {
        apellidoError.textContent = ""; // Limpia el mensaje de error si la validación pasa
    }

    if (!isValidEmail(email2)) {
        emailError.textContent = "Ingrese un correo electrónico válido.";
    }
    
    if (!isValidPassword(contrasena2)) {
        contrasenaError.textContent = "La contraseña debe tener al menos 8 caracteres, incluir una letra mayúscula, una letra minúscula, un número y un carácter especial.";
    }

    // Cerrar el modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal2'));
    modal.hide();

    // Deshabilitar el botón que lanza el modal
    const botonRegistro = document.querySelector('.botonRegistrarse'); // Selecciona por clase
    botonRegistro.disabled = true;

    //Deshabilitar el botón que lanza el modal
    const botonIniciarSesion = document.querySelector('.botonLogin'); // Selecciona por clase
    botonIniciarSesion.disabled = true;
}

//Funcion para validar mail
function isValidEmail(email) {
// Expresion regular simple para validar correos electronicos
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
return emailRegex.test(email);
}

// Función para validar la contraseña
function isValidPassword(password) {
    // Expresion regular para validar la contraseña
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/;
    return passwordRegex.test(password);
}

function inicio() {
    //Modal1 Login
    let formularioLogin = document.querySelector('#loginForm');
    formularioLogin.addEventListener('submit', validarModal1);

    //Modal2 Registro
    let formularioRegistro = document.querySelector('#registroForm');
    formularioRegistro.addEventListener('submit', validarModal2);

}

window.onload = inicio;
