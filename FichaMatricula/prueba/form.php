<!DOCTYPE html>
<html>
<head>
    <title>Tabla con PHP</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <?php
        $filas = 17;
        $columnas = 6;
        
        for ($i = 1; $i <= $filas; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $columnas; $j++) {
                echo "<td>Fila $i, Columna $j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
