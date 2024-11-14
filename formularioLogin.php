<?php
// Mostrar errores para depuración
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

session_start();

$loginOk = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include __DIR__.'/conexion/conexion.php';

    $msg = '';
    $varClass = '';

    // Validar que los campos no estén vacíos
    if (empty($_POST['emailModal']) || empty($_POST['contrasenaModal'])) {
        $loginOk = false;
        $msg = 'Por favor, complete todos los campos.';
        $varClass = 'alert-danger';
    } else {
        $queryCheckLogin = 'SELECT * FROM usuarios WHERE email = :email AND contrasena = :contrasena';
        $resultadoQuery = $conexion->prepare($queryCheckLogin);
        $resultadoQuery->bindParam(':email', $_POST['emailModal']);
        $resultadoQuery->bindParam(':contrasena', $_POST['contrasenaModal']);
        $resultadoQuery->execute();

        if($row = $resultadoQuery->fetch(PDO::FETCH_ASSOC)) { 
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['email'] = $row['email'];
            

            header('Location: /PelisWeb2024/index.php');
            die;
        } else {
            $loginOk = false;
            $msg = 'El usuario o la contraseña no son correctos!!';
            $varClass = 'alert-danger';
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
if ($loginOk !== null) {
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
            <!-- Formulario de Iniciar Sesión -->
            <form action="" method="POST" id="loginForm" class="formulario">
                <div class="mb-3">
                    <label for="emailModal" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailModal" name="emailModal" aria-describedby="emailHelp" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" required>
                    <p class="text-danger" id="emailError"></p>
                </div>
                <div class="mb-3">
                    <label for="contrasenaModal" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contrasenaModal" name="contrasenaModal" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
                    <div id="passwordHelp" class="form-text">La contraseña debe tener al menos una mayúscula, una minúscula y un número.</div>
                    <p class="text-danger" id="contrasenaError"></p>
                </div>
                <button type="submit" class="btn btn-primary btnLogin">Enviar</button>
            </form>
        </div>
    </div>
</div>
<?php
    require('./includes/footer.php');
?>
</body>
</html>
