
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Ejercicio de base de datos remota</title>
</head>
<body>
  <h1>Ejercicio de base de datos remota</h1>
    <?php
    include('funciones.php');
    $miconexion=conectar_bd('o4UjhZRmFy9mWJNXAKeB', 'bla0htgovbhjh42a2knc');
    $resultado=consulta($miconexion,"call procedimiento_almacenado1");
        
    echo ("<table class='table table-striped table-hover'>");
    echo ("<tr>
    <th>#</th>
    <th>Numid</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Dirección</th>
    <th>Telefono</th>
    <th>Email</th>
    <th>Id_programa</th>
    <th>Nombre_programa</th>
  </tr>");

      if($resultado->num_rows>0)
          {  
              while ($fila = $resultado->fetch_object()) {
                echo "<tr>";
                echo '<td>'.$fila->id_contacto.'</td>'.
                '<td>'.$fila->numid.'</td>'.
                '<td>'.$fila->nombres.'</td>'.
                '<td>'.$fila->apellidos.'</td>'.
                '<td>'.$fila->direccion.'</td>'.
                '<td>'.$fila->telefono.'</td>'.
                '<td>'.$fila->email.'</td>'.
                '<td>'.$fila->id_programa.'</td>'.
                '<td>'.$fila->Nombre_programa.'</td>'."<br>";
                echo "</tr>";        
               }

          echo("</table>");
        }


        else{
        echo "No existen registros";
            }
        $miconexion->close();
    ?>
</body>
</html>
