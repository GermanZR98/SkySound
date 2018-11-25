<?php
    // Capturamos los datos del formulario
	$nom = $_POST["nom"]??"" ;
	$ape = $_POST["ape"]??"" ;
	$ema = $_POST["ema"]??"" ;


	//Llamamos al archivo database.php
	require_once "../libs/Database.php";

	$database = Database::getInstancia();
		// Guardamos la contraseña en md5 para que este encriptada
		$pwd = md5($_POST["pwd"]) ;

		// Construimos la sentencia SQL 
		$sql = "INSERT INTO usuario
			    (correo,contrasena,apellidousuario,nombreusuario) VALUES
				(:ema,:pwd,:ape,:nom) ;" ;

				
		$comprobacion = $database->prepare($sql);

		//Vincula el parametro con una variable 
		$comprobacion->bindParam(':ema',$ema);
		$comprobacion->bindParam(':pwd',$pwd);
		$comprobacion->bindParam(':ape',$ape);
		$comprobacion->bindParam(':nom',$nom);

		//executamos todo lo anterior
		$comprobacion->execute();

		//Comprobacion
		if(!$comprobacion): 

			$err = "Se ha producido un error en el registro." ;
			require_once("formregistro.php") ;
			
		else :
			header("location:formregistro.php") ;	
		endif ;
	?>
	