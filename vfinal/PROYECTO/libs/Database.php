<?php

  class Database {

    private $dbHost = "localhost" ;
    private $dbUser = "root" ;
    private $dbPass = "" ;
    private $dbName = "skysound" ;

    //
    private static $res ;

    //
    private static $instancia = null ;  // Instancia 

    //
    private static $db ;        

    //
    // Hacemos el constructor privado para evitar que puedan crearse otras
    // instancias del objeto.
    private function __construct()  
    {
      $this->conectar() ;
    } 

    //
    // Haciendo privado el método __clone evitamos que se pueda clonar 
    // el objeto y, por tanto, obtener diferentes instancias del mismo.
    private function __clone() { }

    // 
    // Este método se llamará tras deserializar el objeto, momento en
    // el que será necesario reestablecer la conexión con el gestor
    // de bases de datos.
    public function __wakeup() 
    {
      $this->conectar() ;
    }

    //
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
    // Lanza una consulta SQL dada sobre la base de datos y conserva
    // los resultados.
    public function consulta($sql):bool 
    {
      // Lanzamos la consulta sobre la base de datos
      self::$res = self::$db->query($sql) 
              or die ("**Se ha producido un error de consulta en la base de datos.") ;

              
      if (is_object(self::$res)) return (self::$res->num_rows > 0) ;
      else
        return (self::$db->affected_rows > 0) ;
    }

    //
    // Devuelve un objeto con el primer resultado obtenido tras la
    // consulta. Si no hay más resultados, la función devuelve null
    public function getObjeto($class="StdClass")
    {
      return self::$res->fetch_object($class) ;
    }
    public function prepare($insert) { 
        return self::$db->prepare($insert); 
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