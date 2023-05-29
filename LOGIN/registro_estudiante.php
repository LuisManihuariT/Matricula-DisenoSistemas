<!DOCTYPE html>
<html>
<head>
    <title>Registro de Estudiante</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
<header>
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

            <a href="#">
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

            <a href="perfil.html">
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
    
    <form action="admin_registrar_alumno.php" method="POST" id="form-registro__estudiante">
    <h2>Registro de Estudiante</h2>
        <div class="row">
            <label for="codigo">Código:</label>
            <label for="tip_documento">Tipo de documento:</label>
            <label for="num_doc_registro">Número de documento de registro:</label>
        </div>
        <div class="row">
            <input type="text" name="codigo" id="codigo" required>
            <input type="text" name="tip_documento" id="tip_documento" required>
            <input type="number" name="num_doc_registro" id="num_doc_registro" required>
        </div>

        <div class="row">
            <label for="apellido_paterno">Apellido paterno:</label>
            <label for="apellido_materno">Apellido materno:</label>
            <label for="nombres">Nombres:</label>
        </div>
        <div class="row">
            <input type="text" name="apellido_paterno" id="apellido_paterno" required>
            <input type="text" name="apellido_materno" id="apellido_materno" required>
            <input type="text" name="nombres" id="nombres" required>
        </div>

        <div class="row">
            <label for="sexo">Sexo:</label>
            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
            <label for="estado_civil">Estado civil:</label>
        </div>
        <div class="row">
            <input type="text" name="sexo" id="sexo" required>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
            <input type="text" name="estado_civil" id="estado_civil" required>
        </div>

        <div class="row">
            <label for="grado_instruccion">Grado de instrucción:</label>
            <label for="telefono">Teléfono:</label>
            <label for="celular1">Celular 1:</label>
        </div>
        <div class="row">
            <input type="text" name="grado_instruccion" id="grado_instruccion" required>
            <input type="number" name="telefono" id="telefono" required>
            <input type="number" name="celular1" id="celular1" required>
        </div>

        <div class="row">
            <label for="celular2">Celular 2:</label>
            <label for="email_institucional">Email Institucional:</label>
            <label for="email_personal">Email Personal:</label>
        </div>
        <div class="row">
            <input type="number" name="celular2" id="celular2" required>
            <input type="text" name="email_institucional" id="email_institucional" required>
            <input type="text" name="email_personal" id="email_personal" required>
        </div>
        
        <h2>Ubigeo</h2>

        <div class="row">
            <label for="departamento_nacimiento">Departamento de nacimiento:</label>
            <label for="provincia_nacimiento">Provincia de nacimiento:</label>
            <label for="distrito_nacimiento">Distrito de nacimiento:</label>
        </div>
        <div class="row">
            <input type="text" name="departamento_nacimiento" id="departamento_nacimiento" required>
            <input type="text" name="provincia_nacimiento" id="provincia_nacimiento" required>
            <input type="text" name="distrito_nacimiento" id="distrito_nacimiento" required>
        </div>

        <div class="row">
            <label for="departamento_residencia">Departamento de residencia:</label>
            <label for="provincia_residencia">Provincia de residencia:</label>
            <label for="distrito_residencia">Distrito de residencia:</label>
        </div>
        <div class="row">
            <input type="text" name="departamento_residencia" id="departamento_residencia" required>
            <input type="text" name="provincia_residencia" id="provincia_residencia" required>
            <input type="text" name="distrito_residencia" id="distrito_residencia" required>
        </div>

        <div class="row">
            <label for="tipo_zona">Tipo de zona:</label>
            <label for="nombre_zona">Nombre de zona:</label>
            <label for="tipo_via">Tipo de vía:</label>
        </div>
        <div class="row">
            <input type="text" name="tipo_zona" id="tipo_zona" required>
            <input type="text" name="nombre_zona" id="nombre_zona" required>
            <input type="text" name="tipo_via" id="tipo_via" required>
        </div>

        <div class="row">
            <label for="nombre_via">Nombre de vía:</label>
            <label for="numero">Número:</label>
            <label for="referencia">Referencia:</label>
        </div>
        <div class="row">
            <input type="text" name="nombre_via" id="nombre_via" required>
            <input type="number" name="numero" id="numero" required>
            <input type="text" name="referencia" id="referencia" required>
        </div>

        <h2>Idioma</h2>

        <div class="row">
            <label for="lengua_materna">Lengua materna:</label>
            <label for="segunda_lengua">Segunda lengua:</label>
            <label for="nacionalidad">Nacionalidad:</label>
        </div>
        <div class="row">
            <input type="text" name="lengua_materna" id="lengua_materna" required>
            <input type="text" name="segunda_lengua" id="segunda_lengua" required>
            <input type="text" name="nacionalidad" id="nacionalidad" required>
        </div>

        <h2>Educación</h2>
        
        <div class="row">
            <label for="departamento_centro_estudios">Departamento del centro de estudios:</label>
            <label for="provincia_centro_estudios">Provincia del centro de estudios:</label>
            <label for="distrito_centro_estudios">Distrito del centro de estudios:</label>
        </div>
        <div class="row">
            <input type="text" name="departamento_centro_estudios" id="departamento_centro_estudios" required>
            <input type="text" name="provincia_centro_estudios" id="provincia_centro_estudios" required>
            <input type="text" name="distrito_centro_estudios" id="distrito_centro_estudios" required>
        </div>

        <div class="row">
            <label for="centro_estudios">Centro de estudios:</label>
        </div>
        <div class="row">
            <input type="text" name="centro_estudios" id="centro_estudios" required>
        </div>
        <div class="row">
            <label for="modalidad_estudios">Modalidad de estudios:</label>
            <label for="sede">Sede:</label>
            <label for="tipo_ingreso">Tipo de ingreso:</label>
        </div>
        <div class="row">
            <select name="modalidad_estudios" id="modalidad_estudios" required>
                <option value="presencial">Presencial</option>
                <option value="semipresencial">Semipresencial</option>
                <option value="virtual">Virtual</option>
            </select>
            <input type="text" name="sede" id="sede" required>
            <input type="text" name="tipo_ingreso" id="tipo_ingreso" required>
        </div>

        <input id="btn-registro__estudiante" type="submit" value="Enviar">
    </form>
    </main>
    <script src="js/script.js"></script>
</body>
</html>
