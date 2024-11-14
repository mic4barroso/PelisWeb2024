<?php
session_start();
// Mostrar errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include __DIR__.'/conexion/conexion.php';

    $msg = '';
    $varClass = '';

    // Validar que los campos no estén vacíos
    if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['email']) || empty($_POST['contrasena'])) {
        $msg = 'Por favor, complete todos los campos.';
        $varClass = 'alert-danger';
    } else {
        // Verificar si el email ya está registrado
        $queryCheckEmail = 'SELECT * FROM usuarios WHERE email = :email';
        $resultadoQuery = $conexion->prepare($queryCheckEmail);
        $resultadoQuery->bindParam(':email', $_POST['email']);
        $resultadoQuery->execute();

        if ($resultadoQuery->fetch(PDO::FETCH_ASSOC)) {
            $msg = 'El email ya está registrado.';
            $varClass = 'alert-danger';
        } else {
            // Determinar el rol del usuario basado en la contraseña
            $contrasena = $_POST['contrasena'];
            $rol_id = 1; // Por defecto, rol de usuario común

            if ($contrasena === 'Admin123') {
                $rol_id = 2; // Rol de administrador
            } elseif ($contrasena === 'Editor123') {
                $rol_id = 3; // Rol de editor de contenido
            }

            // Insertar nuevo usuario en la base de datos
            $queryInsertUser = 'INSERT INTO usuarios (nombre, apellido, email, contrasena) VALUES (:nombre, :apellido, :email, :contrasena)';
            $resultadoInsert = $conexion->prepare($queryInsertUser);
            $resultadoInsert->bindParam(':nombre', $_POST['nombre']);
            $resultadoInsert->bindParam(':apellido', $_POST['apellido']);
            $resultadoInsert->bindParam(':email', $_POST['email']);
            $resultadoInsert->bindParam(':contrasena', $contrasena); 
            $resultadoInsert->execute();

            if ($resultadoInsert) {
                // Obtener el ID del usuario insertado
                $usuario_id = $conexion->lastInsertId();

                // Insertar en la tabla roles_usuarios
                $queryInsertRole = 'INSERT INTO roles_usuarios (id_usuario, id_rol) VALUES (:id_usuario, :id_rol)';
                $resultadoInsertRole = $conexion->prepare($queryInsertRole);
                $resultadoInsertRole->bindParam(':id_usuario', $usuario_id);
                $resultadoInsertRole->bindParam(':id_rol', $rol_id);
                $resultadoInsertRole->execute();

                header('Location: /PelisWeb2024/index.php');
                die;
            } else {
                $msg = 'Hubo un error en el registro. Por favor, intente de nuevo.';
                $varClass = 'alert-danger';
            }
        }
    }
}
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

<?php
if (isset($msg) && $msg !== '') {
?>
    <div class="alert <?= $varClass ?>" role="alert">
        <?= $msg ?>
    </div>
<?php
}
?>
<div class="container">
    <div class="col">
        <div class="row"> 
            <!-- Formulario de Registro -->
            <form action="" method="POST" id="registerForm" class="formulario">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" pattern="[A-Za-z\s]+" required>
                    <p class="text-danger" id="nombreError"></p>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" pattern="[A-Za-z\s]+" required>
                    <p class="text-danger" id="apellidoError"></p>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                    <p class="text-danger" id="emailError"></p>
                </div>
                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    <div id="passwordHelp" class="form-text">La contraseña debe tener al menos una mayúscula, una minúscula y un número.</div>
                    <p class="text-danger" id="contrasenaError"></p>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
</div>
<?php
require('./includes/footer.php');
?>
</body>
</html>
