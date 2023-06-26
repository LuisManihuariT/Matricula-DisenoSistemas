<?php
session_start();

// Verificar si ya se ha iniciado sesión
if (isset($_SESSION['codigo_estudiante'])) {
    // Si ya se ha iniciado sesión, redireccionar a la página principal
    header("Location: index.html");
    exit();
}

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los valores ingresados en el formulario
    $codigo = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Realizar la conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bdestudiante_registro";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Consultar en la tabla `registro_estudiante`
    $sql = "SELECT * FROM registro_estudiante WHERE codigo = '$codigo' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Los datos ingresados son válidos, iniciar sesión y redireccionar a la página principal
        $_SESSION['codigo_estudiante'] = $codigo;
        header("Location: index.html");
        exit();
    } else {
        // Los datos ingresados son inválidos, mostrar mensaje de error
        $error_message = "Usuario o contraseña incorrectos.";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="./css/normalize.css">
    
    <link rel="preload" href="css/style.css" as="style">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <h1>Administracion</h1>
    </header>
    <main class="contenedor">
        <div class="form-body">
            <img src="img/login.png" alt="imagen login">
            <p class="text">Inicio de Sesión</p>
            <?php if (isset($error_message)): ?>
                <p><?php echo $error_message; ?></p>
            <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="login-form" method="POST">
                <label  for="usuario">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" id="usuario" name="usuario" placeholder="Usuario">
                </label>
                <label for="contraseña">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña">
                </label>
                <label class="periodo" for="periodo">Periodo

                    <select name="periodo" id="periodo">
                        <option value="2023-I">2023-I</option>
                        <option value="2022-NIVELACION">2022-NIVELACION</option>
                        <option value="2022-II">2022-II</option>
                        <option value="2022-I">2022-I</option>
                        <option value="2021-II">2021-II</option>
                        <option value="2021-I">2021-I</option>
                        <option value="2020-II">2020-II</option>
                        <option value="2019-I">2019-II</option>   
                    </select>   
                </label>
                <a href=""><span></span>Recuperar mi Contraseña</a>
                <button type="submit">INGRESAR</button>
            </form>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content">
          <p>SysaWEb &copy es un software del grupo numero 1 </p> 
          <p><span>sopyright</span> &copy 2023 - DSAR-UNJBG versión 3.0.0.0</p>   
        </div>
    </footer>
<script src="main.js"></script>
</body>
</html>
