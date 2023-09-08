<?php
require("modelo.php"); // Reemplaza "config.php" con la ruta correcta a tu archivo de configuración


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $Ap = $_POST['Ap'];
    $Am = $_POST['Am'];
    $CI = $_POST['CI'];
    $Location = $_POST['Location'];
    $Facebook = $_POST['Facebook'];
    $fecha= $_POST['Fecha'];
    $telefonoFijo=$_POST['telefonoFijo'];
    $telefonoMovil=$_POST['telefonoMovil'];
    $pais= $_POST['Pais'];
    $correo= $_POST['correo'];
    $carrera= $_POST['Carrera'];
    if (empty($name)) 
        echo "Please enter name";
    elseif (empty($Ap))
        echo "Please enter Apellido Paterno";
    elseif (empty($Am))
        echo "Please enter Apellido Materno";
    elseif (empty($CI))
        echo "Please enter C.I";
    elseif (empty($Location))
        echo "Please enter Direccion";
    elseif (empty($Facebook))
        echo "Please enter Facebook";
    elseif(empty($fecha))

        echo "fecha ingrese";
    elseif(empty($telefonoFijo))

        echo " ingrese telefono movil";
    elseif(empty($telefonoMovil))

        echo "ingrese telefono movil";
    elseif(empty($pais))
        echo "ingrese pais";
    elseif(empty($correo))
        echo "ingrese correo";
    elseif(empty($carrera))
        echo "ingrese carrera";
    else{

        echo "DATOS
        <br>
        El nombre completo es: $name $Ap $Am 
        <br>
        CI:$CI 
        <br>
        Ubicacion: $Location 
        <br>
        Facebook:$Facebook
        <br>
        Fecha de Nacimiento: $fecha
        <br>
        Telefono Fijo: $telefonoFijo
        <br>
        Telefono Movil: $telefonoMovil
        <br>
        Pais: $pais
        <br>
        Correo:$correo
        <br>
        Carrera:$carrera
        <br>
        <br><br>"
        
        ;


      
   
      if ($_DB) {
        
      
        //INSERT
        $sql = "INSERT INTO usuarios (nombre,Ap,Am,CI,Location,Facebook,Fecha,telefonoFijo,telefonoMovil,Pais,correo,Carrera) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt= $_DB->pdo->prepare($sql);
        $stmt->execute([$name, $Ap,$Am,$CI,$Location,$Facebook,$fecha,$telefonoFijo,$telefonoMovil,$pais,$correo,$carrera]);
        echo "Inserción en la base de datos exitosa!";
      }

    }
        

}
?>
