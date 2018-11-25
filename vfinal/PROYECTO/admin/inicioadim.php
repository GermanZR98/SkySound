<?php

require_once "libs/Database.php";

$db = Database::getInstancia();

$sql = "Select * from usuario";
$sql=$db->prepare($sql);
$sql->execute();

foreach($sql as $key) {
    print_r($key);
}
?>