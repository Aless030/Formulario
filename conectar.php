<?php
define("DB_HOST", "localhost");
define("DB_NAME", "test");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_PORT", 3308);  // CONEXION CON PUERTO ESPECIFICO

// CONNECT TO DATABASE
try {
    $pdo = new PDO(
        "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
        DB_USER, DB_PASSWORD, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    // TESTEO
    $now = $pdo->query('SELECT NOW()')->fetchColumn();
    var_dump($now);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>

      