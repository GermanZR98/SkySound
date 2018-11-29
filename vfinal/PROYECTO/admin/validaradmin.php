<?php

   if (isset($_POST["nom"]) && isset($_POST["pwd"])):
    echo "estoy aqui";
   
    require_once "../libs/Database.php";
    $database = Database::getInstancia();

  $nom = $_POST["nom"] ;
  $pwd = ($_POST["pwd"]);

  $sql = "SELECT * FROM admin WHERE uadmin=:nom AND cadmin = MD5(:pwd) ;" ;

  $comprobacion = $database->prepare($sql);
  $comprobacion->bindParam(":nom",$nom,PDO::PARAM_STR,50);
  $comprobacion->bindParam(":pwd",$pwd,PDO::PARAM_STR,33);


  if ($comprobacion->execute()){
    if($comprobacion->rowCount() > 0) {
      header('location:administracion.php');

      $sesion = session_start();

      $_SESSION["uadmin"] = $nom;
      $_SESSION["session"] = serialize($sesion);


    } else {
      header('location:loginadmin.php');
    } 
  } else {
    echo "unlucky";
  }

endif;
?>
