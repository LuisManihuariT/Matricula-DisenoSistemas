<?php
$codigo = $_POST['codigo'];
$tipo_documento = $_POST['tip_documento'];
$num_doc_registro = $_POST['num_doc_registro'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$nombres = $_POST['nombres'];
$sexo = $_POST['sexo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$estado_civil = $_POST['estado_civil'];
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
$lengua_materna = $_POST['lengua_materna'];
$segunda_lengua = $_POST['segunda_lengua'];
$nacionalidad = $_POST['nacionalidad'];
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

$sql = "INSERT INTO registro_estudiante (codigo, tip_documento, num_doc_registro, apellido_paterno, apellido_materno, nombres, sexo, fecha_nacimiento, estado_civil, departamento_nacimiento, provincia_nacimiento, distrito_nacimiento, departamento_residencia, provincia_residencia, distrito_residencia, tipo_zona, nombre_zona, tipo_via, nombre_via, numero, referencia, lengua_materna, segunda_lengua, nacionalidad, departamento_centro_estudios, provincia_centro_estudios, distrito_centro_estudios, centro_estudios, modalidad_estudios, sede, tipo_ingreso)
        VALUES ('$codigo', '$tipo_documento', $num_doc_registro, '$apellido_paterno', '$apellido_materno', '$nombres', '$sexo', '$fecha_nacimiento', '$estado_civil', '$departamento_nacimiento', '$provincia_nacimiento', '$distrito_nacimiento', '$departamento_residencia', '$provincia_residencia', '$distrito_residencia', '$tipo_zona', '$nombre_zona', '$tipo_via', '$nombre_via', $numero, '$referencia', '$lengua_materna', '$segunda_lengua', '$nacionalidad', '$departamento_centro_estudios', '$provincia_centro_estudios', '$distrito_centro_estudios', '$centro_estudios', '$modalidad_estudios', '$sede', '$tipo_ingreso')";

if ($conn->query($sql) === true) {
    echo "Los datos se han registrado correctamente.";
} else {
    echo "Error al registrar los datos: " . $conn->error;
}

$conn->close();
?>
