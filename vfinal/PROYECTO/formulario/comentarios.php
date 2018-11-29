<?php

$sesion = session_start();

    require '../libs/Database.php';
    $db= Database::getInstancia();

    $con = 0;
     
    if (isset($_POST['confirmationText'])) {
    $idcancion = $_POST['idcancion'];

    $confirmationText = $_POST['Text'];
    $usuario = $_SESSION['nombreusuario'];


    $sql="insert into comentario (comentario, idcancion, nombre) values (:Text, :idcancion, :usuario)";

    $consulta=$db->prepare($sql);
    $consulta->bindParam(':Text',$confirmationText, PDO::PARAM_STR);
    $consulta->bindParam(':idcancion', $idcancion, PDO::PARAM_STR);
    $consulta->bindParam(':usuario', $usuario, PDO::PARAM_STR);
    

    $consulta->execute();

    /*forocoches de comentarios*/
    $sql2="SELECT *, ncancion from comentario C inner join canciones P ON C.idcancion=P.idcancion where C.idcancion = $idcancion";
    $consulta2=$db->prepare($sql2);
    $consulta2->execute();
    $muestra=$consulta2->fetchAll(PDO::FETCH_ASSOC);
    
   
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
  <style type="text/css">
    td, th {
    border: 1px solid #dddddd;
    height: 55px;
    }
  </style>
  </head>
<body>
  <table class="table table-striped table-hover">
    <tr>
    <th style="width:10%">Usuario</th>
    <th style="width:25%">Canción</th> 
    <th style="width:100%">Comentario</th>
    </tr>

    <?php  foreach ($muestra as $key ) { ?>
    <tr>

    <!--Muestra todos los comentarios y un botón de volver al inicio--->

        <td><?php echo ($key['nombre']); ?></td>
        <td><?php echo ($key['ncancion']); ?></td>
        <td><?php echo ($key['comentario']); ?></td>
        
        <?php }} ?>

    </tr>
    </table>

    <form role="form" method="POST" action="inicio.php">
    <button type="buton" class="btn btn-default">volver</button>
    </form>

</body>
</html>
