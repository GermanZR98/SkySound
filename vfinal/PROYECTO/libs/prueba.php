
<?php

//CONECTAR MOTOR CON LA BASE DE DATOS
try {
    
    $pdo = new PDO("mysql:host=localhost; dbname=skysound; charset=utf8", "root", "", 
                   [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"])  ;

} catch (PDOException $error) {
    echo $error->getMessage() ;
}

	// Realizamos la petición y guaradmos los resultados en la base de datos.
	$api_url = "https://api.mixcloud.com/search/?q=flamenco&amp;type=cloudcast" ;


    // LLamamos a la API y obtenemos una cadena de texto con el resultado.
    $skysound = json_decode(file_get_contents($api_url)) ;
    
	// Preparamos la instrucción SQL para insertar
	$film_query  = "INSERT INTO canciones (artista, cancion)
    VALUES (:artista, :cancion) " ;
    $sqlp = $pdo->prepare($film_query) ;
	
    foreach ($skysound->data as $item):
        
    // Vinculamos
		$sqlp->bindValue(":artista",   $item->name) ;
        $sqlp->bindValue(":cancion",   $item->url) ;
        
        $sqlp->execute() ;


        endforeach ;

?>