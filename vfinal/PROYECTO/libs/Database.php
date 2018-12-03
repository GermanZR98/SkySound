<?php

  class Database {

    private $dbHost = "localhost" ;
    private $dbUser = "root" ;
    private $dbPass = "" ;
    private $dbName = "skysound" ;

  }

    // Crea, si aún no se ha hecho, y devuelve una instancia de la
    // clase DATABASE.
    public static function getInstancia() 
    {
      if (is_null(self::$instancia)):
        self::$instancia = new Database() ;
      endif ;
      
      return self::$instancia ;
    }

    //
    // Establecemos la conexión con el motor de bases de datos, 
    // seteamos la base de datos con la que queremos trabajar y
    // definimos el tipo de codificación que emplearemos.
    private function conectar() 
    {
      // Conectamos con el gestor de bases de datos
       try {
  // Conectamos con el motor de bases de datos
    self::$db  = new PDO("mysql:host=localhost; dbname=skysound; charset=utf8", "root", "", 
             [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"])  ;
   } catch (PDOException $error) {
     echo $error->getMessage() ;
   }
      
      
    }


  }
