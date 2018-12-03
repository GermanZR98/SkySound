<?php
$sesion = session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>

<div class="container">
  <h2>SkySound!</h2>
  <!---formulario que busca a un artista-->
  <form role="form" method="POST">
    <div class="form-group">
      <label for="email">Busqueda:</label>
      <input type="text" class="form-control" name="art" placeholder="Busca un artista...">
    </div>
    <button type="submit" class="btn btn-default">Buscar</button>

    <!---formulario que te envía para cerrar la sesión-->
    </form>
    <form role="form" method="POST" action="logout.php">
    <button type="buton" href="logout.php" class="btn btn-default">Cerrar Sesión</button>
    </form>
    <br>
  </form>

<?php

//Muestra el inicio de la persona
if($_SESSION){
echo "Bienvenido: ".$_SESSION["nombreusuario"]."</br>"; 
}
    //prepara la busqueda para el artista llamando a conexión para establecerla 
    if($_POST){
    require("../libs/conexion.php");
    $con = Conectar();
    $id = $_POST["art"];
    $SQL = "SELECT * FROM canciones WHERE artista like '%" .$id. "%' order by artista";
    $stmt = $con->prepare($SQL);
    $result = $stmt->execute(array(":doc"=>$id));
    //el fetchAll que te recoge un array con los datos
     //el fetchobj que te recoge una fila y te devuelve un objeto
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);


    //te saca todo el inicio con las canciones y el boton de comentario
    if (count($rows)) {
        
    foreach ($rows AS $row) {
        /*echo "nombres: ".$row->artista."<br>";
        echo "ncancion: ".$row->ncancion."<br>";
        echo "reproduccion: ".$row->reproduccion."<br>";*/
        echo $row->cancion."<br>";

        $boton="";
        $boton .='

        <form method="POST" action="comentarios.php">
        <textarea  id="Text" rows="5" cols="60" name="confirmationText"></textarea>"

        <input type="submit" value="Email" class="submitButton">
        <input type="number" id="idProducto" value="'.$row->idcancion.'" hidden="hidden" name="idcancion">
        </form>
        ';

        echo $boton;
        
      }
    }
    

    }

?>

</div>

</body>
</html>
