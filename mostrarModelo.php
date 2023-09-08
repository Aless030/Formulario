<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido de modelo.php y Resultados de Consulta</title>
</head>
<body>
    <h1>Contenido de modelo.php</h1>
    <pre>
        <?php
        
        require("modelo.php");
        
        
        echo htmlentities(file_get_contents("modelo.php"));
        ?>
    </pre>

    <h1>Resultados de Consulta a la Base de Datos</h1>
    <pre>
        <?php
        
        $results = $_DB->select(
            "SELECT * FROM `usuarios`",
        );

        echo json_encode(count($results) == 0 ? null : $results, JSON_PRETTY_PRINT);
        ?>
    </pre>
</body>
</html>
