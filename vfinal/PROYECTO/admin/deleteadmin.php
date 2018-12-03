<?php
//Realiza la operación de admin para borrar los usuarios que quieras
    require '../libs/Database.php';
    $db= Database::getInstancia();

    $id = 0;
    
//El del está en administración

    if (isset($_GET['del'])) {
        $id = $_GET['del'];
      
        $sql = "DELETE FROM usuario  WHERE idusuario = :id";
        $sqlp = $db->prepare($sql);
        $sqlp->bindParam (":id", $id, PDO::PARAM_INT);
        $sqlp->execute();
        header("location:administracion.php");

       
        
    }
   
?>
