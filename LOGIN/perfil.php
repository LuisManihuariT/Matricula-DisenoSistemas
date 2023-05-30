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

            <a href="index.html" class="selected">
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
            <a href="perfil.php">
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
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bdestudiante_registro";
            
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error en la conexión: " . $conn->connect_error);
            }

            $codigo = "2021-119082";

            $sql = "SELECT * FROM registro_estudiante WHERE codigo = '$codigo' ORDER BY codigo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p><strong>Apellido Paterno:</strong> " . $row['apellido_paterno'] . "</p>";
                echo "</div>";
            }
            } 
            else {
                echo "<p>No se encontraron registros para el código especificado.</p>";
            }
            $conn->close();
        ?>
    </div>
    <div class="grid-perfil_item">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bdestudiante_registro";
            
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error en la conexión: " . $conn->connect_error);
            }

            $codigo = "2021-119082";

            $sql = "SELECT * FROM registro_estudiante WHERE codigo = '$codigo' ORDER BY codigo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p><strong>Apellido Materno:</strong> " . $row['apellido_materno'] . "</p>";
                echo "</div>";
            }
            } 
            else {
                echo "<p>No se encontraron registros para el código especificado.</p>";
            }
            $conn->close();
        ?>
    </div>
    <div class="grid-perfil_item">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bdestudiante_registro";
            
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error en la conexión: " . $conn->connect_error);
            }

            $codigo = "2021-119082";

            $sql = "SELECT * FROM registro_estudiante WHERE codigo = '$codigo' ORDER BY codigo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p><strong>Nombres:</strong> " . $row['nombres'] . "</p>";
                echo "</div>";
            }
            } 
            else {
                echo "<p>No se encontraron registros para el código especificado.</p>";
            }
            $conn->close();
        ?>
    </div>
    <br>
    <h1>Seguridad de contraseñas</h1>
    <br>
    <div class="grid-perfil_item">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bdestudiante_registro";
            
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error en la conexión: " . $conn->connect_error);
            }

            $codigo = "2021-119082";

            $sql = "SELECT * FROM registro_estudiante WHERE codigo = '$codigo' ORDER BY codigo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p><strong>Usuario: </strong>" . $row['codigo'] . "</p>";
                echo "</div>";
            }
            } 
            else {
                echo "<p>No se encontraron registros para el código especificado.</p>";
            }
            $conn->close();
        ?>
    </div>
    <div class="grid-perfil_item">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bdestudiante_registro";
            
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error en la conexión: " . $conn->connect_error);
            }

            $codigo = "2021-119082";

            $sql = "SELECT * FROM registro_estudiante WHERE codigo = '$codigo' ORDER BY codigo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p><strong>Contraseña: </strong>" . $row['num_doc_registro'] . "</p>";
                echo "</div>";
            }
            } 
            else {
                echo "<p>No se encontraron registros para el código especificado.</p>";
            }
            $conn->close();
        ?>
    </div>
    <div class="grid-perfil_item">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bdestudiante_registro";
            
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error en la conexión: " . $conn->connect_error);
            }

            $codigo = "2021-119082";

            $sql = "SELECT * FROM registro_estudiante WHERE codigo = '$codigo' ORDER BY codigo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p><strong>Confirme: </strong>" . $row['num_doc_registro'] . "</p>";
                echo "</div>";
            }
            } 
            else {
                echo "<p>No se encontraron registros para el código especificado.</p>";
            }
            $conn->close();
        ?>
    </div>
    <div class="grid-perfil_item">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bdestudiante_registro";
            
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error en la conexión: " . $conn->connect_error);
            }

            $codigo = "2021-119082";

            $sql = "SELECT * FROM registro_estudiante WHERE codigo = '$codigo' ORDER BY codigo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p><strong>Email: </strong>" . $row['email_institucional'] . "</p>";
                echo "</div>";
            }
            } 
            else {
                echo "<p>No se encontraron registros para el código especificado.</p>";
            }
            $conn->close();
        ?>
    </div>
    <div class="grid-perfil_item">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bdestudiante_registro";
            
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error en la conexión: " . $conn->connect_error);
            }

            $codigo = "2021-119082";

            $sql = "SELECT * FROM registro_estudiante WHERE codigo = '$codigo' ORDER BY codigo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<p><strong>Número: </strong>" . $row['numero'] . "</p>";
                echo "</div>";
            }
            } 
            else {
                echo "<p>No se encontraron registros para el código especificado.</p>";
            }
            $conn->close();
        ?>
    </div>
</main>

<script src="js/script.js"></script>


</body>
</html>
