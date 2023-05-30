<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro de Pagos y Documentos</title>
    <style>
        .add-btn {
            margin-top: 20px;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .form-container h3 {
            margin-top: 0;
        }

        .form-container label {
            display: block;
            margin-top: 10px;
        }

        .form-container select,
        .form-container input[type="date"],
        .form-container input[type="number"] {
            width: 100%;
            padding: 5px;
        }

        .form-container button {
            margin-top: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>LISTADO DE PAGOS REGISTRADOS</h1>

    <table>
        <tr>
            <th>N°</th>
            <th>TIPO</th>
            <th>FECHA</th>
            <th>NÚMERO</th>
            <th>CÓDIGO-DESCRIPCIÓN</th>
            <th>IMPORTE</th>
            <th>ARCHIVO</th>
            <th>ESTADO</th>
            <th>OPCIÓN</th>
        </tr>
        <?php
        // Obtener los registros de pagos desde la base de datos (ejemplo)
        $registrosPagos = obtenerRegistrosPagos();

        foreach ($registrosPagos as $numero => $registro) {
            echo "<tr>";
            echo "<td>" . ($numero + 1) . "</td>"; // Número de orden de registro
            echo "<td>" . $registro['banco'] . "</td>"; // Banco seleccionado
            echo "<td>" . $registro['fecha_pago'] . "</td>"; // Fecha del pago
            echo "<td>" . $registro['numero_operacion'] . "</td>"; // Número de Operacion
            echo "<td>" . $registro['concepto_pago'] . "</td>"; // Concepto de pago
            echo "<td>" . $registro['importe'] . "</td>"; // Importe
            echo "<td>Pendiente</td>"; // Estado (Por definición: Pendiente)

            // Columna de Opción (dividida en 5 pequeñas columnas con botones como imágenes)
            echo "<td>";
            echo "<img src='editar.png' alt='Editar' onclick='editarRegistro()' style='width: 20px;'>";
            echo "<img src='eliminar.png' alt='Eliminar' onclick='eliminarRegistro()' style='width: 20px;'>";
            echo "<img src='subir.png' alt='Subir archivo' onclick='subirArchivo()' style='width: 20px;'>";
            echo "<img src='observacion.png' alt='Observación' onclick='agregarObservacion()' style='width: 20px;'>";
            echo "<img src='ver.png' alt='Ver imagen' onclick='verImagen()' style='width: 20px;'>";
            echo "</td>";
            echo "</tr>";
        }

        // Obtener los totales
        $totalRegistrosPagos = count($registrosPagos);
        $totalPendientesPagos = calcularTotalPendientes($registrosPagos);
        ?>


<tr>
            <td colspan="8">Cantidad de registros: <?php echo $totalRegistrosPagos; ?></td>
        </tr>
        <tr>
            <td colspan="8">Total Pendientes: <?php echo $totalPendientesPagos; ?></td>
        </tr>
    </table>

    <button class="add-btn" onclick="showAddPaymentForm()">Agregar registro</button>

    <div id="addPaymentFormOverlay" class="overlay" style="display: none;">
        <div class="form-container">
            <h2>Agregar Registro de Pago</h2>
            <form>
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
                <input type="date" id="fecha_pago" name="fecha_pago">

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
                <input type="number" id="numero_operacion" name="numero_operacion">

                <h3>Importe</h3>
                <label for="importe">Ingrese el importe:</label>
                <input type="number" step="0.01" id="importe" name="importe">

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
            <th>OPCIÓN</th>
        </tr>
        <?php
        // Obtener los registros de documentos desde la base de datos (ejemplo)
        $registrosDocumentos = obtenerRegistrosDocumentos();

        foreach ($registrosDocumentos as $registro) {
            echo "<tr>";
            echo "<td>" . $registro['tipo'] . "</td>";
            echo "<td>" . $registro['archivo'] . "</td>";
            echo "<td>" . $registro['estado'] . "</td>";
            echo "<td>" . $registro['opcion'] . "</td>";
            echo "</tr>";
        }

        // Obtener los totales
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
            <form>
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

        function editarRegistro(numero) {
            // Lógica para editar el registro seleccionado
            console.log("Editar registro número: " + (numero + 1));
        }

        function eliminarRegistro(numero) {
            // Lógica para eliminar el registro seleccionado
            console.log("Eliminar registro número: " + (numero + 1));
        }

        function subirArchivo(numero) {
            // Lógica para subir un archivo relacionado al registro seleccionado
            console.log("Subir archivo para el registro número: " + (numero + 1));
        }

        function agregarObservacion(numero) {
            // Lógica para agregar una observación al registro seleccionado
            console.log("Agregar observación para el registro número: " + (numero + 1));
        }

        function verImagen(numero) {
            // Lógica para ver la imagen asociada al registro seleccionado
            console.log("Ver imagen para el registro número: " + (numero + 1));
        }


        // Funciones de ejemplo para obtener los registros y realizar cálculos

        function obtenerRegistrosPagos() {
            // Aquí puedes realizar la lógica para obtener los registros de pagos de la base de datos
            // Retorna un arreglo con los registros
            return [
                {
                    'banco': 'BN - Codigo',
                    'fecha_pago': '2023-05-30',
                    'numero_operacion': '001',
                    'concepto_pago': '038 - MATRICULA ALUMNOS INGRESANTES',
                    'importe': '100.00',
                    'archivo': 'archivo1.pdf',
                    'estado': 'Pendiente',
                    'opcion': 'Opción 1'
                },
                {
                    'banco': 'BN - Agente',
                    'fecha_pago': '2023-05-31',
                    'numero_operacion': '002',
                    'concepto_pago': '040 - Cuota Mensual',
                    'importe': '200.00',
                    'archivo': 'archivo2.pdf',
                    'estado': 'Pagado',
                    'opcion': 'Opción 2'
                }
                // Agrega más registros si es necesario
            ];
        }

        function obtenerRegistrosDocumentos() {
            // Aquí puedes realizar la lógica para obtener los registros de documentos de la base de datos
            // Retorna un arreglo con los registros
            return [
                {
                    'tipo': 'Documento 1',
                    'archivo': 'documento1.pdf',
                    'estado': 'Pendiente',
                    'opcion': 'Opción 1'
                },
                {
                    'tipo': 'Documento 2',
                    'archivo': 'documento2.pdf',
                    'estado': 'En revisión',
                    'opcion': 'Opción 2'
                }
                // Agrega más registros si es necesario
            ];
        }

        function calcularTotalPendientes(registros) {
            var pendientes = 0;
            for (var i = 0; i < registros.length; i++) {
                if (registros[i]['estado'] === 'Pendiente') {
                    pendientes++;
                }
            }
            return pendientes;
        }
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
                'archivo' => 'archivo1.pdf',
                'estado' => 'Pendiente',
                'opcion' => 'Opción 1'
            ),
            array(
                'tipo' => 'Pago 2',
                'fecha' => '2023-05-31',
                'numero' => '002',
                'codigo_descripcion' => '040 - Cuota Mensual',
                'importe' => '200.00',
                'archivo' => 'archivo2.pdf',
                'estado' => 'Pagado',
                'opcion' => 'Opción 2'
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
                'opcion' => 'Opción 1'
            ),
            array(
                'tipo' => 'Documento 2',
                'archivo' => 'documento2.pdf',
                'estado' => 'En revisión',
                'opcion' => 'Opción 2'
            )
            // Agrega más registros si es necesario
        );
    }

    function calcularTotalPendientes($registros)
    {
        $pendientes = 0;
        foreach ($registros as $registro) {
            if ($registro['estado'] === 'Pendiente') {
                $pendientes++;
            }
        }
        return $pendientes;
    }
    ?>
    
</body>
</html> 