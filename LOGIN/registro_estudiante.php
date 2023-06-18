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

                <a href="index.html">
                    <div class="option">
                        <i class="fas fa-home" title="Inicio"></i>
                        <h4>Panel General</h4>
                    </div>
                </a>

                <a href="#" class="selected">
                    <div class="option" >
                        <i class="fa-solid fa-user" title="Registro de Estudiantes"></i>
                        <h4>Registro de Estudiantes</h4>
                    </div>
                </a>
            
                <a href="ficha_matricula.php">
                    <div class="option">
                        <i class="fa-solid fa-file"></i>
                        <h4>Ficha de Matricula</h4>
                    </div>
                </a>

                <a href="Documentos_pagos.php">
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
            <form action="admin_registrar_alumno.php" method="POST" id="form-registro__estudiante">
                <h2>Registro de Estudiante</h2>
                <div class="row">
                    <label for="codigo">Código:</label>
                    <label for="tip_documento">Tipo de documento:</label>
                    <label for="num_doc_registro">Número de documento de registro:</label>
                </div>
                <div class="row">
                    <input type="text" name="codigo" id="codigo" required>
                    <select name="tip_documento" id="tip_documento" required>
                        <option value="NO ESPECIFICADO">NO ESPECIFICADO</option>
                        <option value="PARTIDA DE NACIMIENTO">PARTIDA DE NACIMIENTO</option>
                        <option value="DOCUMENTO NACIONAL DE IDENTIDAD">DOCUMENTO NACIONAL DE IDENTIDAD</option>
                        <option value="LIBRETA ELECTORAL">LIBRETA ELECTORAL</option>
                        <option value="LIBRETA MILITAR">LIBRETA MILITAR</option>
                        <option value="PASAPORTE">PASAPORTE</option>
                        <option value="CARNET DE EXTRANJERIA">CARNET DE EXTRANJERIA</option>
                        <option value="CEDULA DE IDENTIDAD">CEDULA DE IDENTIDAD</option>
                        <option value="CARNET DE IDENTIDAD">CARNET DE IDENTIDAD</option>
                        <option value="PERMISO TEMPORAL DE PERMANENCIA">PERMISO TEMPORAL DE PERMANENCIA</option>
                    </select>
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
                    <select name="sexo" id="sexo" required>
                    <option value="NO ESPECIFICADO">NO ESPECIFICADO</option>
                    <option value="FEMENINO">FEMENINO</option>
                    <option value="MASCULINO">MASCULINO</option>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
                    <select name="estado_civil" id="estado_civil" required>
                        <option value="NO ESPECIFICADO">NO ESPECIFICADO</option>
                        <option value="SOLTERO">SOLTERO</option>
                        <option value="CASADO">CASADO</option>
                        <option value="DIVORCIADO / SEPARADO">DIVORCIADO / SEPARADO</option>
                        <option value="VIUDO">VIUDO</option>
                        <option value="CONVIVIENTE">CONVIVIENTE</option>
                    </select>
                </div>

                <div class="row">
                    <label for="grado_instruccion">Grado de instrucción:</label>
                    <label for="telefono">Teléfono:</label>
                    <label for="celular1">Celular 1:</label>
                </div>
                <div class="row">
                    <select name="grado_instruccion" id="grado_instruccion" required>
                        <option value="NO ESPECIFICADO">NO ESPECIFICADO</option>
                        <option value="NINGUNO">NINGUNO</option>
                        <option value="INICIAL">INICIAL</option>
                        <option value="PRIMARIA">PRIMARIA</option>
                        <option value="SECUNDARIA">SECUNDARIA</option>
                        <option value="TECNICO">TÉCNICO</option>
                        <option value="SUPERIOR NO UNIVERSITARIA">SUPERIOR NO UNIVERSITARIA</option>
                        <option value="SUPERIOR UNIVERSITARIA">SUPERIOR UNIVERSITARIA</option>
                        <option value="POSTGRADO">POSTGRADO</option>
                        <option value="DOCTORADO">DOCTORADO</option>
                    </select>
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
                    <select id="departamento_nacimiento" name="departamento_nacimiento">
                        <option value="amazonas">Amazonas</option>
                        <option value="ancash">Áncash</option>
                        <option value="apurimac">Apurímac</option>
                        <option value="arequipa">Arequipa</option>
                        <option value="ayacucho">Ayacucho</option>
                        <option value="cajamarca">Cajamarca</option>
                        <option value="callao">Callao</option>
                        <option value="cusco">Cusco</option>
                        <option value="huancavelica">Huancavelica</option>
                        <option value="huanuco">Huánuco</option>
                        <option value="ica">Ica</option>
                        <option value="junin">Junín</option>
                        <option value="la-libertad">La Libertad</option>
                        <option value="lambayeque">Lambayeque</option>
                        <option value="lima">Lima</option>
                        <option value="loreto">Loreto</option>
                        <option value="madre-de-dios">Madre de Dios</option>
                        <option value="moquegua">Moquegua</option>
                        <option value="pasco">Pasco</option>
                        <option value="piura">Piura</option>
                        <option value="puno">Puno</option>
                        <option value="san-martin">San Martín</option>
                        <option value="tacna">Tacna</option>
                        <option value="tumbes">Tumbes</option>
                        <option value="ucayali">Ucayali</option>
                    </select>
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
                    <select name="tipo_zona" id="tipo_zona" required>
                        <option value="">Seleccione una opción</option>
                        <option value="NO ESPECIFICADO">NO ESPECIFICADO</option>
                        <option value="URBANIZACIÓN">URBANIZACIÓN</option>
                        <option value="PUBLO JOVEN">PUBLO JOVEN</option>
                        <option value="JUNTA VECINAL">JUNTA VECINAL</option>
                        <option value="UNIDAD VECINAL">UNIDAD VECINAL</option>
                        <option value="CONJUNTO HABITACIONAL">CONJUNTO HABITACIONAL</option>
                        <option value="ASENTAMIENTO HUMANO">ASENTAMIENTO HUMANO</option>
                        <option value="COOPERATIVA">COOPERATIVA</option>
                        <option value="RESIDENCIAL">RESIDENCIAL</option>
                        <option value="ZONA INDUSTRIAL">ZONA INDUSTRIAL</option>
                        <option value="GRUPO">GRUPO</option>
                        <option value="CASERÍO">CASERÍO</option>
                        <option value="FUNDO">FUNDO</option>
                        <option value="ASOCIACIÓN">ASOCIACIÓN</option>
                        <option value="COMITÉ">COMITÉ</option>
                    </select>

                    <input type="text" name="nombre_zona" id="nombre_zona" required>
                    <select name="tipo_via" id="tipo_via" required>
                        <option value="">Seleccione una opción</option>
                        <option value="NO ESPECIFICADO">NO ESPECIFICADO</option>
                        <option value="AVENIDA">AVENIDA</option>
                        <option value="JIRON">JIRON</option>
                        <option value="CALLE">CALLE</option>
                        <option value="PASAJE">PASAJE</option>
                        <option value="ALAMEDA">ALAMEDA</option>
                        <option value="MALECÓN">MALECÓN</option>
                        <option value="OVALO">OVALO</option>
                        <option value="PARQUE">PARQUE</option>
                        <option value="PLAZA">PLAZA</option>
                        <option value="CARRETERA">CARRETERA</option>
                        <option value="BLOCK">BLOCK</option>
                        <option value="NO DISPONIBLE">NO DISPONIBLE</option>
                    </select>
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
                        <option value="NO ESPECIFICADO">NO ESPECIFICADO</option>
	                    <option selected="PRESENCIAL">PRESENCIAL</option>
	                    <option value="SEMI PRESENCIAL">SEMI PRESENCIAL</option>
	                    <option value="DISTANCIA">DISTANCIA</option>
	                    <option value="PROGRAMA ADULTOS">PROGRAMA ADULTOS</option>
	                    <option value=">PROGRAMA ESPECIAL">PROGRAMA ESPECIAL</option>
	                    <option value="COMPLEM. ACAD.">COMPLEM. ACAD.</option>
                    </select>
                    <input type="text" name="sede" id="sede" required>
                    <select name="tipo_ingreso" id="tipo_ingreso" required>
                        <option value="No Especificado0">No Especificado</option>
	                    <option value="CEPU">CEPU</option>
	                    <option value="CEPU - I (Otoño)">CEPU - I (Otoño)</option>
	                    <option value="CEPU - II (Invierno)">CEPU - II (Invierno)</option>
	                    <option value="CEPU - III (Verano)">CEPU - III (Verano)</option>
	                    <option value="Admisión">Admisión</option>
	                    <option value="Admisión - Extraordinario">Admisión - Extraordinario</option>
	                    <option value="Admisión - Grados y Titulos">Admisión - Grados y Titulos</option>
	                    <option value="Primeros Puestos Colegios de la Región Tacna">Primeros Puestos Colegios de la Región Tacna</option>
	                    <option value="Titulados/Graduados de Univ. Nac. o Extranj.">Titulados/Graduados de Univ. Nac. o Extranj.</option>
	                    <option value="Titulados de Institutos Superiores de Formación Profesional">Titulados de Institutos Superiores de Formación Profesional</option>
	                    <option value="Graduado en la Escuela de Oficiales de las Fuerzas Armadas y de la Policía Nacional">Graduado en la Escuela de Oficiales de las Fuerzas Armadas y de la Policía Nacional</option>
	                    <option value="Convenio Andres Bello y Otros Convenios">Convenio Andres Bello y Otros Convenios</option>
	                    <option value="Convenio Andres Bello">Convenio Andres Bello</option>
	                    <option value="Convenio Regionales">Convenio Regionales</option>
	                    <option value="Ley de Promoción y Desarrollo del Deporte">Ley de Promoción y Desarrollo del Deporte</option>
	                    <option value="Ley 27050 Persona con Discapacidad">Ley 27050 Persona con Discapacidad</option>
	                    <option value="Ley 27277 Familiares de víctimas del terrorismo (Personas con discapaciadad)">Ley 27277 Familiares de víctimas del terrorismo (Personas con discapaciadad)</option>
	                    <option value="Traslado Interno">Traslado Interno</option>
	                    <option value="Traslado Externo">Traslado Externo</option>
	                    <option value="Traslado Interno Excepcional - TIE">Traslado Interno Excepcional - TIE</option>
	                    <option value="FASE 0">FASE 0</option>
	                    <option value="FASE I">FASE I</option>
	                    <option value="FASE II">FASE II</option>
	                    <option value="Admisión - Complementación Académica">Admisión - Complementación Académica</option>
	                    <option value="Admisión - Complementaria">Admisión - Complementaria</option>
	                    <option value="Admisión - Tercera Opción">Admisión - Tercera Opción</option>
	                    <option value="Admision - Escuela Postgrado">Admision - Escuela Postgrado</option>
	                    <option value="Admision - Segunda Especialidad">Admision - Segunda Especialidad</option>
	                    <option value="Admision - Instituto de Informatica y Telecomunicaciones">Admision - Instituto de Informatica y Telecomunicaciones</option>
	                    <option value="Admision - Centro de Idiomas">Admision - Centro de Idiomas</option>
	                    <option value="Benificiarios del Programa Integral de Reparaciones">Benificiarios del Programa Integral de Reparaciones</option>
	                    <option value="Ordinaria">Ordinaria</option>
	                    <option value="Traslado Externo Extraordinario">Traslado Externo Extraordinario</option>
                    </select>
                </div>
                <input id="btn-registro__estudiante" type="submit" value="Enviar">
            </form>
        </main>
        <script src="js/script.js"></script>
    </body>
</html>