?>
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

        <a href="registro_estudiante.php">
            <div class="option">
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

        <a href="Documentos_pagos.php" class="selected">
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
    <h1>LISTADO DE PAGOS REGISTRADOS</h1>

    <table>
        <tr>
            <th>N°</th>
            <th>TIPO</th>
            <th>FECHA</th>
            <th>NÚMERO</th>
            <th>CÓDIGO-DESCRIPCIÓN</th>
            <th>IMPORTE</th>
            <th>ESTADO</th>
            <th>OPCIONES</th>
        </tr>
        <?php
        require_once 'conexion.php';
        // Obtener los registros de pagos desde la base de datos (ejemplo)
        $registrosPagos = obtenerRegistrosPagos();

        if ($registrosPagos) {
            foreach ($registrosPagos as $numero => $registro) {
                echo "<tr>";
                echo "<td>" . ($numero + 1) . "</td>"; // Número de orden de registro
                echo "<td>" . (isset($registro['banco']) ? $registro['banco'] : '') . "</td>"; // Banco seleccionado
                echo "<td>" . (isset($registro['fecha_pago']) ? $registro['fecha_pago'] : '') . "</td>"; // Fecha del pago
                echo "<td>" . (isset($registro['numero_operacion']) ? $registro['numero_operacion'] : '') . "</td>"; // Número de Operacion
                echo "<td>" . (isset($registro['concepto_pago']) ? $registro['concepto_pago'] : '') . "</td>"; // Concepto de pago
                echo "<td>" . (isset($registro['importe']) ? $registro['importe'] : '') . "</td>"; // Importe
                echo "<td>Pendiente</td>"; // Estado (Por definición: Pendiente)
    
                // Columna de Opción (dividida en 5 pequeñas columnas con botones como imágenes)
                echo "<td>";
                echo "<img src='./img/lapiz (2).png' alt='Editar' onclick='editarRegistro()' style='width: 20px;'>";
                echo "<img src='./img/eliminar.png' alt='Eliminar' onclick='eliminarRegistro()' style='width: 20px;'>";
                echo "<img src='./img/subir.png' alt='Subir archivo' onclick='subirArchivo()' style='width: 20px;'>";
                echo "<img src='./img/ver.png' alt='Observación' onclick='agregarObservacion()' style='width: 20px;'>";
                echo "<img src='./img/imagen.png' alt='Ver imagen' onclick='verImagen()' style='width: 20px;'>";
                echo "</td>";
                echo "</tr>";
            }
        }
        $totalRegistrosPagos = count($registrosPagos);
        $totalPendientesPagos = calcularTotalPendientes($registrosPagos);
        ?>
        <tr>
        <td colspan="5">Cantidad de registros: <?php echo $totalRegistrosPagos; ?></td>
        <td colspan="4">Total Pendientes: <?php echo $totalPendientesPagos; ?></td>
    </tr>
    </table>

    <button class="add-btn" onclick="showAddPaymentForm()">Agregar registro</button>

    <div id="addPaymentFormOverlay" class="overlay" style="display: none;">
        <div class="form-container">
            <h2>Agregar Registro de Pago</h2>
            <form method="post" action="registrar_pago.php">
                <h3>Banco</h3>
                <label for="banco">Seleccione un banco:</label>
                <select id="banco" name="banco">
                    <option value="BN - Codigo">BN - Codigo</option>
                    <option value="BN - Agente">BN - Agente</option>
                    <option value="BN - Cta.Cte">BN - Cta.Cte</option>
                    <option value="Interbank">Interbank</option>
                    <option value="Scotiabank">Scotiabank</option>
                    <option value="BCP">BCP</option>
                    <option value="BBVA">BBVA</option>
                    <option value="Banbif">Banbif</option>
                    <option value="SagaFabella">SagaFabella</option>
                    <option value="Caja-TACN">Caja-TACN</option>
                    <option value="Caja-AREQ">Caja-AREQ</option>
                    <option value="Caja-CUSC">Caja-CUSC</option>
                    <option value="Caja-HUAN">Caja-HUAN</option>
                    <option value="Otros">Otros</option>
                    <option value="Caja UNJBG">Caja UNJBG</option>
                </select>

                <h3>Fecha de Pago</h3>
                <label for="fecha_pago">Seleccione la fecha de pago:</label>
                <input type="date" id="fecha_pago" name="fecha_pago" required>

                <h3>Concepto de Pago</h3>
                <label for="concepto_pago">Seleccione el concepto de pago:</label>
                <select id="concepto_pago" name="concepto_pago">
                    <option value="038">038 - MATRICULA ALUMNOS INGRESANTES</option>
                    <option value="039">039 - MATRICULA ALUMNOS REGULARES</option>
                    <option value="114">114 - MATRICULA INGRESANTES</option>
                    <option value="115">115 - MATRICULA NO INVICTOS POR CURSO Y AÑO ACADEMICO</option>
                    <option value="116">116 - MATRICULA REPITENTES</option>
                    <option value="117">117 - MATRICULA TRASLADO INTERNO</option>
                    <option value="119">119 - MATRICULA EXTRAO. EST. EXTRANJEROS Y SEGUNDA PROFESION</option>
                    <option value="120">120 - MATRICULA TRASLADO EXTERNO</option>
                    <option value="121">121 - MATRICULA ANMISTIA</option>
                    <option value="122">122 - MATRICULA COMP ACAD FFAA Y POLICIALES E INST SUP</option>
                    <option value="123">123 - MATRICULA REINICIO DE ESTUDIOS</option>
                    <option value="124">124 - RETIRO Y RESERVA DE MATRICULA</option>
                    <option value="207">207 - CARNE UNIVERSITARIO</option>
                    <option value="278">278 - MATRICULA DE CURSO POR 2DA VEZ</option>
                    <option value="279">279 - MATRICULA DE CURSO POR 3RA VEZ</option>
                    <option value="280">280 - MATRICULA DE CURSO POR 4TA VEZ</option>
                    <option value="246">246 - MATRICULA EXTEMPORANEA</option>
                    <option value="247">247 - INTERNADO</option>
                    <option value="399">399 - MATRICULA REINICIO ESTUDIOS CON RESERVA</option>
                    <option value="400">400 - MATRICULA REINICIO ESTUDIOS SUSPE ACAD</option>
                </select>

                <h3>N° de Operación</h3>
                <label for="numero_operacion">Ingrese el número de operación:</label>
                <input type="number" id="numero_operacion" name="numero_operacion" required>

                <h3>Importe</h3>
                <label for="importe">Ingrese el importe:</label>
                <input type="number" step="0.01" id="importe" name="importe" required>

                <button type="submit">Registrar</button>
                <button type="button" onclick="hideAddPaymentForm()">Cancelar</button>
            </form>
        </div>
    </div>

    <h1>LISTADO DE DOCUMENTOS REGISTRADOS</h1>

    <table>
        <tr>
            <th>N°</th>
            <th>TIPO</th>
            <th>ARCHIVO</th>
            <th>ESTADO</th>
        </tr>
        <?php
        // Obtener los registros de documentos desde la base de datos (ejemplo)
        $registrosDocumentos = obtenerRegistrosDocumentos();

        if ($registrosDocumentos) {
            foreach ($registrosDocumentos as $numero => $registro) {
                echo "<tr>";
                echo "<td>" . ($numero + 1) . "</td>";
                echo "<td>" . (isset($registro['tipo']) ? $registro['tipo'] : '') . "</td>";
                echo "<td>" . (isset($registro['archivo']) ? $registro['archivo'] : '') . "</td>";
                echo "<td>" . (isset($registro['estado']) ? $registro['estado'] : '') . "</td>";
                echo "</tr>";
            }
        }
        $totalRegistrosDocumentos = count($registrosDocumentos);
        $totalPendientesDocumentos = calcularTotalPendientes($registrosDocumentos);
        ?>
        
        <tr>
    <td colspan="4">Cantidad de registros: <?php echo $totalRegistrosDocumentos; ?></td>
    <td colspan="1">Cantidad Pendientes: <?php echo $totalPendientesDocumentos; ?></td>
    </tr>
    </table>

    <button class="add-btn" onclick="showAddDocumentForm()">Agregar documento</button>

    <div id="addDocumentFormOverlay" class="overlay" style="display: none;">
        <div class="form-container">
            <h2>Agregar Documento</h2>
            <form method="post" action="registrar_documento.php">
                <h3>Documento</h3>
                <label for="tipo_documento">Seleccione un tipo de documento:</label>
                <select id="tipo_documento" name="tipo_documento">
                    <option value="CONSTANCIA DE INGRESO">CONSTANCIA DE INGRESO</option>
                    <option value="DOCUMENTO DE IDENTIDAD">DOCUMENTO DE IDENTIDAD</option>
                    <option value="FOTOGRAFIA PARA CARNE UNIVERSITARIO">FOTOGRAFIA PARA CARNE UNIVERSITARIO</option>
                    <option value="CONSTANCIA DE EXAMEN DE SALUD">CONSTANCIA DE EXAMEN DE SALUD</option>
                </select>

                <button type="submit">Registrar</button>
                <button type="button" onclick="hideAddDocumentForm()">Cancelar</button>
            </form>
        </div>
    </div>

    <script>
        function showAddPaymentForm() {
            document.getElementById("addPaymentFormOverlay").style.display = "flex";
        }

        function hideAddPaymentForm() {
            document.getElementById("addPaymentFormOverlay").style.display = "none";
        }

        function showAddDocumentForm() {
            document.getElementById("addDocumentFormOverlay").style.display = "flex";
        }

        function hideAddDocumentForm() {
            document.getElementById("addDocumentFormOverlay").style.display = "none";
        }

        // Cerrar el cuadro de agregar registro de pago al hacer clic fuera de él
        window.addEventListener("click", function(event) {
            var addPaymentFormOverlay = document.getElementById("addPaymentFormOverlay");
            if (event.target == addPaymentFormOverlay) {
                hideAddPaymentForm();
            }
        });

        // Cerrar el cuadro de agregar registro de documento al hacer clic fuera de él
        window.addEventListener("click", function(event) {
            var addDocumentFormOverlay = document.getElementById("addDocumentFormOverlay");
            if (event.target == addDocumentFormOverlay) {
                hideAddDocumentForm();
            }
        });
    </script>

    <?php
    // Funciones de ejemplo para obtener los registros y realizar cálculos

    function obtenerRegistrosPagos()
    {
        // Aquí puedes realizar la lógica para obtener los registros de pagos de la base de datos
        // Retorna un arreglo con los registros
        return array(
            array(
                'tipo' => 'Pago 1',
                'fecha' => '2023-05-30',
                'numero' => '001',
                'codigo_descripcion' => '038 - MATRICULA ALUMNOS INGRESANTES',
                'importe' => '100.00',
                'estado'=> 'pendiente',
            ),
            array(
                'tipo' => 'Pago 2',
                'fecha' => '2023-05-31',
                'numero' => '002',
                'codigo_descripcion' => '040 - Cuota Mensual',
                'importe' => '200.00',
                'estado'=> 'pendiente',
            )
            // Agrega más registros si es necesario
        );
    }

    function obtenerRegistrosDocumentos()
    {
        // Aquí puedes realizar la lógica para obtener los registros de documentos de la base de datos
        // Retorna un arreglo con los registros
        return array(
            array(
                'tipo' => 'Documento 1',
                'archivo' => 'documento1.pdf',
                'estado' => 'Pendiente',
            ),
            array(
                'tipo' => 'Documento 2',
                'archivo' => 'documento2.pdf',
                'estado' => 'En revisión',
            )
            // Agrega más registros si es necesario
        );
    }
    function calcularTotalPendientes($registros)
{
    $pendientes = 2;
    foreach ($registros as $registro) {
        if ($registro['estado'] === 'Pendiente') {
            $pendientes++;
        }
    }
    return $pendientes;
}

    ?>
</main>
<script src="js/script.js"></script>
</body>
</html>