<?php
//Funcion que me permite manejar sesiones
session_start();
// SI ES LA PRMERA LLAMADO 

//Para que no pueda loguarse dos veces
//si ya esta seteada la session id, ya esta logueada

/*if (isset($_SESSION['id'])) {
    header('Location: /tp2/index.php');
}*/

$loginOk = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //llamo a la base de datos cuando realmente la voy a usar
    //En este caso cuando el metodo sea POST
    include __DIR__.'/conexion/conexion.php';

    $msg = '';
    $varClass = '';

    //if ($_POST['email'] == 'gibarra@upe.edu.ar' && $_POST['password'] == '1234') {
    
    //Antes de la query deberia validarse que los campos esten llegando completos

    //Usamos una query
    //Ponemos el 1, pero tambien puede ser true o *, pero uso el * para traer todos los datos de la fila
    $queryCheckLogin = 'SELECT * FROM login WHERE email = :email AND contrasena = :contrasena';    
    //Cuando inclui el archivo que trae la conexion a la db puedo usar la variable donde esta la conexion a la db "$conn"
    $resultadoQuery = $conn->prepare($queryCheckLogin); //El strting de la query aaentro
    $resultadoQuery->bindParam(':email', $_POST['emailModal']);
    $resultadoQuery->bindParam(':contrasena', $_POST['contrasenaModal']);
    $resultadoQuery->execute();
    //if($resultadoQuery->fetch(PDO::FETCH_ASSOC)) { //Hago un fetch si devuelve valores es valido y me da la primera fila
    if($row = $resultadoQuery->fetch(PDO::FETCH_ASSOC)) { 
    //Por ejemplo si la password esta mal devuelve 0 filas y el fetch queda null, es decir da vacio y entra por el else
    //Si entra por el true, guardo la fila en una variable $row, es decir se guarda y se evalua
        // TODO: setear session
        //print_r($row); De esta forma chequeo si esta correcta la query
        //die();
        //En la variable session guardo los datos del usuarios, como un array asosiativo, con claves
        $_SESSION['id'] = $row['id'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellido'] = $row['apellido'];
        //Si el logueo es correcto nos podemos redirigir a otra pagina mediante el header
        header('Location: /PelisWeb2024/gestionarcontenido.php');
        die;
        $loginOk = true;
        $msg = 'Bienvenido '.$row['apellido'].' '.$row['nombre'];
        $varClass = 'alert-success';
    } else {
        $loginOk = false;
        $msg = 'El usuario o la contraseña no son correctas!!';
        $varClass = 'alert-danger';
    }
}
?>