<?php


class DB{
    
    public $pdo = null;
    
      function __construct(){
  
          $this->pdo = new PDO(
              "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
              DB_USER, DB_PASSWORD, [
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
              ]);
  
              
  
      }
      
      function select ($sql, $data=null) {
          $stmt = $this->pdo->prepare($sql);
          $stmt->execute($data);
          return $stmt->fetchAll();
      }
  
      //Metodo insert
      function insert($sql, $data=null) {
          $stmt = $this->pdo->prepare($sql);
          return $stmt->execute($data);
        }
  
        function update($sql, $data = null) {
          $stmt = $this->pdo->prepare($sql);
          return $stmt->execute($data);
      }
      /* // Ejemplo de actualización de datos de un usuario por ID
  $sql = "UPDATE usuarios SET nombre = ?, email = ? WHERE id = ?";
  $data = ["Nuevo Nombre", "nuevo@example.com", 123]; // Reemplaza 123 con el ID del usuario que deseas actualizar
  $result = $_DB->update($sql, $data);
  
  if ($result) {
      echo "Actualización exitosa.";
  } else {
      echo "Error en la actualización.";
  }
  */
      function delete($sql, $data = null) {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute($data);
    }
  /* // Ejemplo de eliminación de un usuario por ID
  $sql = "DELETE FROM usuarios WHERE id = ?";
  $data = [123]; // Reemplaza 123 con el ID del usuario que deseas eliminar
  $result = $_DB->delete($sql, $data);
  
  if ($result) {
      echo "Eliminación exitosa.";
  } else {
      echo "Error en la eliminación.";
  }
  */
      
      
  }
  define("DB_HOST", "localhost");
  define("DB_NAME", "formulario");
  define("DB_CHARSET", "utf8mb4");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");
  define("DB_PORT", 3308);  
  $_DB = new DB();


  
?>

      