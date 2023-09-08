<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mostrar Datos</title>
    <style>
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="text-align: center;">Formulario De Usuarios</h1>
    </header>
    <section>
    <?php
    
    define("DB_HOST", "localhost");
    define("DB_NAME", "formulario");
    define("DB_CHARSET", "utf8mb4");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_PORT", 3308);

    $pdo = new PDO(
        "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
        DB_USER, DB_PASSWORD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    // Consulta para seleccionar los datos
    $consulta = $pdo->query("SELECT * FROM usuarios");

    echo "<table>";
    echo "<tr><th>Nombre Completo</th><th>CI</th><th>Ubicación</th><th>Facebook</th><th>Fecha de Nacimiento</th><th>Telefono Fijo</th><th>Telefono Movil</th><th>Pais</th><th>Correo</th><th>Carrera</th></tr>";
    
    foreach ($consulta as $fila) {
        echo "<tr>";
        echo "<td>" . $fila['nombre'] . " " . $fila['Ap'] . " " . $fila['Am'] . "</td>";
        echo "<td>" . $fila['CI'] . "</td>";
        echo "<td>" . $fila['Location'] . "</td>";
        echo "<td>" . $fila['Facebook'] . "</td>";
        echo "<td>" . $fila['Fecha'] . "</td>";
        echo "<td>" . $fila['telefonoFijo'] . "</td>";
        echo "<td>" . $fila['telefonoMovil'] . "</td>";
        echo "<td>" . $fila['Pais'] . "</td>";
        echo "<td>" . $fila['correo'] . "</td>";
        echo "<td>" . $fila['Carrera'] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    ?>
    </section>
</body>
</html>
