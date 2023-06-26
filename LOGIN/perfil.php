<?php
session_start();

// Verificar si se ha enviado una solicitud de cierre de sesión
if (isset($_GET['logout'])) {
    // Eliminar todas las variables de sesión
    session_unset();

    // Destruir la sesión
    session_destroy();

    // Redireccionar al formulario de inicio de sesión
    header("Location: login.php");
    exit();
}

// Verificar si no se ha iniciado sesión
if (!isset($_SESSION['codigo_estudiante'])) {
    // Si no se ha iniciado sesión, redireccionar al formulario de inicio de sesión
    header("Location: login.php");
    exit();
}

$codigo = $_SESSION['codigo_estudiante'];

// Resto del código para mostrar los datos del perfil
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdestudiante_registro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$sql = "SELECT * FROM registro_estudiante WHERE codigo = '$codigo' ORDER BY codigo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $apellido_paterno = $row['apellido_paterno'];
        $apellido_materno = $row['apellido_materno'];
        $nombres = $row['nombres'];
        $contraseña = $row['contraseña'];
        $num_doc_registro = $row['num_doc_registro'];
        $email_institucional = $row['email_institucional'];
        $celular1 = $row['celular1'];
    }
} else {
    echo "<p>No se encontraron registros para el código especificado.</p>";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Estudiante</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
 
<header >
        <div class="icon__menu">
           
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa-thin fa-door-open"></i>
            <h4>Bienvenido</h4>
        </div>

        <div class="options__menu">	

            <a href="index.html" >
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Panel General</h4>
                </div>
            </a>

            <a href="registro_estudiante.php">
                <div class="option">
                    <i class="fa-solid fa-user" title="Registro de Estudiantes"></i>
                    <h4>Registro de Estudiantes</h4>
                </div>
            </a>
            
            <a href="#">
                <div class="option">
                    <i class="fa-solid fa-file"></i>
                    <h4>Ficha de Matricula</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="fa-solid fa-folder"></i>
                    <h4>Documentos y Pagos</h4>
                </div>
            </a>

            <a href="proyecto.html">
                <div class="option">
                    <i class="fa-solid fa-file-import"></i>
                    <h4>Reporte</h4>
                </div>
            </a>

            <a href="encuesta.html">
                <div class="option">
                    <i class="fa-solid fa-poo-storm"></i>
                    <h4>Encuesta</h4>
                </div>
            </a>
            <a href="perfil.php" class="selected">
                <div class="option">
                    <i class="fa-solid fa-mask"></i>
                    <h4>Perfil</h4>
                </div>
            </a>

        </div>

    </div>




<main>
<h1>Detalles de mi perfil</h1>
<div class="grid-perfil_contenedor">
    <div class="grid-perfil_item">
        <p><strong>Código de estudiante: </strong><?php echo $codigo; ?></p>
    </div>
    <div class="grid-perfil_item">
        <p><strong>Apellido Paterno: </strong><?php echo $apellido_paterno; ?></p>
    </div>
    <div class="grid-perfil_item">
        <p><strong>Apellido Materno: </strong><?php echo $apellido_materno; ?></p>
    </div>
    <br>
    <h1>Seguridad de contraseñas</h1>
    <br>
    <div class="grid-perfil_item">
        <p><strong>Nombres: </strong><?php echo $nombres; ?></p>
    </div>
    <div class="grid-perfil_item">
        <p><strong>Contraseña: </strong><?php echo $contraseña; ?></p>
    </div>
    <div class="grid-perfil_item">
        <p><strong>Número de documento de registro: </strong><?php echo $num_doc_registro; ?></p>
    </div>
    <div class="grid-perfil_item">
        <p><strong>Email institucional: </strong><?php echo $email_institucional; ?></p>
    </div>  
    <div class="grid-perfil_item">
        <p><strong>Celular: </strong><?php echo $celular1; ?></p>
    </div>
</main>

<script src="js/script.js"></script>


</body>
</html>