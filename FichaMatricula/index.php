<!DOCTYPE html>
<head>
	<title>FICHA DE MATRICULA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="grid">
        <div class = "aside">
            <p>barra lateral</p>
        </div>
        <div class="container">        
            <div class="header">
                <h1>regreso menu</h1>
            </div>
            <section id="content">
                <div class="cabezera">
                    <h1>Registro de Ficha de Matricula</h1>
                </div>
                <div class="main" >
                        <div class="arriba">
                            <div class = "forms">
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
                                      $categoria = array('N°','Código','Semestre','Facultad','Asignatura','Fecha','Turno','Sección'); 
                                      $fil = 7;
                                      $col = 6;
                                      for ($i = 0; $i <= $fil; $i++) {
                                        echo "<td>", $categoria[$i], "</td>";
                                      }
                                      for ($j = 1; $j <= $col; $j++) {
                                        echo "<tr>";
                                        for ($i = 1; $i <= 7; $i++) {
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
                        <div class="horario">
                            <table>
                               <?php
                                   $dias = array('hora','Lunes','Martes','Miercoles','Jueves','Viernes');
                                   $horas = array(
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
                                   for ($k = 0; $k <= $columnas; $k++) {
                                       echo "<td>", $dias[$k], "</td>";
                                   }
                                   for ($l = 0; $l <= $filas; $l++) {
                                        echo "<tr>";
                                        for ($i = 0; $i <= 5; $i++) {
                                            echo "<td>", $horas[$l][$i], "</td>";
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
</body> 
</html>