<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mostrar Datos</title>
</head>
<body>
    <header>
        <h1 style="text-align: center;">Fomulario De Usuarios</h1>
    
    </header>
    <section style="text-align: center;">
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

    
    foreach ($consulta as $fila) {
        echo "Nombre completo: " . $fila['nombre'] . " " . $fila['Ap'] . " " . $fila['Am'] . "<br>";
        echo "CI: " . $fila['CI'] . "<br>";
        echo "Ubicación: " . $fila['Location'] . "<br>";
        
        echo "Facebook: " . $fila['Facebook'] . "<br>";
        echo "Fecha de Nacimiento: " . $fila['Fecha'] . "<br>";
        echo "Telefono Fijo: " . $fila['telefonoFijo'] . "<br>";
        echo "Telefono Movil: " . $fila['telefonoMovil'] . "<br>";
        echo "Pais: " . $fila['Pais'] . "<br>";
        echo "Correo: " . $fila['correo'] . "<br>";
        echo "Carrera: " . $fila['Carrera'] . "<br>";
        echo "<br><br>";
    }
    ?>
    </section>
   
</body>
</html>
