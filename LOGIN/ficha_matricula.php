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
            
            <a href="#" class="selected">
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
    <div class="grid_ficha_matricula">
        <div class="container_ficha_matricula">        
            <section id="content_ficha_matricula">
                <div class="cabezera">
                    <h1>Registro de Ficha de Matricula</h1>
                </div>
                <div class="main_ficha_matricula" >
                        <div class="arriba">
                            <div class = "forms_ficha_matricula">
                                <form>
                                    Facultad: 
                                    <select>
                                        <option>FAIN</option>
                                    </select> <br>
                                    Carrera: 
                                    <select>
                                        <option>Informatica y Sistemas</option>
                                    </select> <br>
                                    Semestre:
                                    <select>
                                        <option>Primero</option>
                                        <option>Segundo</option>
                                        <option>Tercero</option>
                                        <option>Cuarto</option>
                                        <option>Quinto</option>
                                    </select> <br>
                                    Curso:
                                    <select>
                                        <option>Diseño de Sistemas</option>
                                        <option>Base de Datos</option>
                                    </select> <br>
                                    Turno:
                                    <select>
                                        <option>Mañana</option>
                                        <option>Tarde</option>
                                    </select> <br>
                                    Sección:
                                    <select>
                                        <option>A</option>
                                        <option>B</option>
                                    </select> <br>
                                </form>
                            </div>
                            <div class="tabla-cursos">
                                <table>
                                    <?php
                                      $categoria = array('N°','Código','Semestre','Facultad','Asignatura','Fecha','Turno','Sección','Opciones'); 
                                      $fil = 8;
                                      $col = 6;
                                      for ($i = 0; $i <= $fil; $i++) {
                                        echo "<td>", $categoria[$i], "</td>";
                                      }


                                      for ($j = 1; $j <= $col; $j++) {
                                        echo "<tr>";
                                        for ($i = 1; $i <= $fil; $i++) {
                                            if($i==1){
                                                echo "<td>",$j, "</td>";
                                            }
                                            echo "<td>", "</td>";
                                        }
                                      }

                                      
                                    ?>
                                </table>
                            </div>
                        </div>
                        <div class="horario_ficha_matricula">
                            <table>
                               <?php
                                   $horario = array(
                                    array('hora','Lunes','Martes','Miercoles','Jueves','Viernes'),
                                    array('7:30 - 8:20','','','','',''),
                                    array('8:20 - 9:10','','','','',''),
                                    array('9:10 - 10:00','','','','',''),
                                    array('10:50 - 11:40','','','','',''),
                                    array('11:40 - 12:30','','','','',''),
                                    array('12:30 - 13:20','','','','',''),
                                    array('13:20 - 14:10','','','','',''),
                                    array('14:30 - 15:20','','','','',''),
                                    array('15:20 - 16:10','','','','',''),
                                    array('16:10 - 17:00','','','','',''),
                                    array('17:00 - 17:50','','','','',''),
                                    array('17:50 - 18:40','','','','',''),
                                    array('18:40 - 19:30','','','','',''),
                                    array('19:30 - 20:20','','','','',''),
                                    array('20:20 - 21:10','','','','','')
                                   );
                                   $filas = 13;
                                   $columnas = 5;
                                   for ($l = 0; $l <= $filas; $l++) {
                                        echo "<tr>";
                                        for ($i = 0; $i <= 5; $i++) {
                                            echo "<td>", $horario[$l][$i], "</td>";
                                        }
                                        echo "</tr>";
                                   }
                               ?>
                            </table>
                        </div>
                    </div>
            </section>
            
        </div>
    </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>