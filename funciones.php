<?php
  function conectar_bd($clave,$basedatos)
  {
    $conexion = new mysqli('bla0htgovbhjh42a2knc-mysql.services.clever-cloud.com', 'urwmfhzcgx2tssyj', $clave, $basedatos);

    if ($conexion->connect_error) 
    {
        die('Error de Conexión (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);    
    } 
  return $conexion;
  }
  
  function consulta ($conexion,$consulta_sql)
   {
    $resultado=$conexion->query($consulta_sql);

    if (!$resultado) 
    {
     echo 'No se pudo ejecutar la consulta: ' . $conexion->error;
     exit;
    }

   return  $resultado;
   }
?>