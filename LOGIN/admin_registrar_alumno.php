<?php
//Registro Estudiante
$codigo = $_POST['codigo'];
$tipo_documento = $_POST['tip_documento'];
$num_doc_registro = $_POST['num_doc_registro'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$nombres = $_POST['nombres'];
$sexo = $_POST['sexo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$estado_civil = $_POST['estado_civil'];
$grado_instruccion = $_POST['grado_instruccion'];
$telefono = $_POST['telefono'];
$celular1 = $_POST['celular1'];
$celular2 = $_POST['celular2'];
$email_institucional = $_POST['email_institucional'];
$email_personal = $_POST['email_personal'];
//Ubigeo
$departamento_nacimiento = $_POST['departamento_nacimiento'];
$provincia_nacimiento = $_POST['provincia_nacimiento'];
$distrito_nacimiento = $_POST['distrito_nacimiento'];
$departamento_residencia = $_POST['departamento_residencia'];
$provincia_residencia = $_POST['provincia_residencia'];
$distrito_residencia = $_POST['distrito_residencia'];
$tipo_zona = $_POST['tipo_zona'];
$nombre_zona = $_POST['nombre_zona'];
$tipo_via = $_POST['tipo_via'];
$nombre_via = $_POST['nombre_via'];
$numero = $_POST['numero'];
$referencia = $_POST['referencia'];
//Idioma
$lengua_materna = $_POST['lengua_materna'];
$segunda_lengua = $_POST['segunda_lengua'];
$nacionalidad = $_POST['nacionalidad'];
//Educacións
$departamento_centro_estudios = $_POST['departamento_centro_estudios'];
$provincia_centro_estudios = $_POST['provincia_centro_estudios'];
$distrito_centro_estudios = $_POST['distrito_centro_estudios'];
$centro_estudios = $_POST['centro_estudios'];
$modalidad_estudios = $_POST['modalidad_estudios'];
$sede = $_POST['sede'];
$tipo_ingreso = $_POST['tipo_ingreso'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdestudiante_registro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Insertar en la tabla `registro_estudiante`
$sql = "INSERT INTO registro_estudiante (codigo, tip_documento, num_doc_registro, apellido_paterno, apellido_materno, nombres, sexo, fecha_nacimiento, estado_civil, grado_instruccion, telefono, celular1, celular2, email_institucional, email_personal)
        VALUES ('$codigo', '$tipo_documento', $num_doc_registro, '$apellido_paterno', '$apellido_materno', '$nombres', '$sexo', '$fecha_nacimiento', '$estado_civil', '$grado_instruccion', '$telefono', '$celular1', '$celular2', '$email_institucional', '$email_personal')";

if ($conn->query($sql) !== true) {
    echo "Error al registrar los datos en la tabla registro_estudiante: " . $conn->error;
    $conn->close();
    exit();
}

// Insertar en la tabla `ubigeo`
$sql = "INSERT INTO ubigeo (codigo, departamento_nacimiento, provincia_nacimiento, distrito_nacimiento, departamento_residencia, provincia_residencia, distrito_residencia, tipo_zona, nombre_zona, tipo_via, nombre_via, numero, referencia)
        VALUES ('$codigo', '$departamento_nacimiento', '$provincia_nacimiento', '$distrito_nacimiento', '$departamento_residencia', '$provincia_residencia', '$distrito_residencia', '$tipo_zona', '$nombre_zona', '$tipo_via', '$nombre_via', $numero, '$referencia')";

if ($conn->query($sql) !== true) {
    echo "Error al registrar los datos en la tabla ubigeo: " . $conn->error;
    $conn->close();
    exit();
}

// Insertar en la tabla `idioma`
$sql = "INSERT INTO idioma (codigo, lengua_materna, segunda_lengua, nacionalidad)
        VALUES ('$codigo', '$lengua_materna', '$segunda_lengua', '$nacionalidad')";

if ($conn->query($sql) !== true) {
    echo "Error al registrar los datos en la tabla idioma: " . $conn->error;
    $conn->close();
    exit();
}

// Insertar en la tabla `educacion`
$sql = "INSERT INTO educacion (codigo, departamento_centro_estudios, provincia_centro_estudios, distrito_centro_estudios, centro_estudios, modalidad_estudios, sede, tipo_ingreso)
        VALUES ('$codigo', '$departamento_centro_estudios', '$provincia_centro_estudios', '$distrito_centro_estudios', '$centro_estudios', '$modalidad_estudios', '$sede', '$tipo_ingreso')";

if ($conn->query($sql) !== true) {
    echo "Error al registrar los datos en la tabla educacion: " . $conn->error;
    $conn->close();
    exit();
}

echo "Los datos se han registrado correctamente.";

$conn->close();
?>
