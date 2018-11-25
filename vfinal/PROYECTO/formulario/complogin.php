<?php

   if (isset($_POST["nom"]) && isset($_POST["pwd"])):

    require_once "../libs/Database.php";
    $database = Database::getInstancia();

    //recogemos los datos del formulario de index.php que es nuestra interfaz de login
  $nom = $_POST["nom"] ;
  $pwd = ($_POST["pwd"]);

  $sql = "SELECT * FROM usuario WHERE nombreusuario=:nom AND contrasena = MD5(:pwd) ;" ;

  $comprobacion = $database->prepare($sql);
  $comprobacion->bindParam(":nom",$nom,PDO::PARAM_STR,50);
  $comprobacion->bindParam(":pwd",$pwd,PDO::PARAM_STR,33);


  if ($comprobacion->execute()){
    if($comprobacion->rowCount() > 0) {
      header('location:inicio.php');

      //iniciamos la sesión
      $sesion = session_start();

      //Almacenamos el nombre actual el tiempo actual 
      // serialize para almacenar los valores en PHP sin perder su tipo y estructura.
      $_SESSION["nombreusuario"] = $nom;
      $_SESSION["time"] = time();
      $_SESSION["session"] = serialize($sesion);


    } else {
      header('location:../index.php');
    } 
  } else {
    echo "unluky";
  }

endif;
?>