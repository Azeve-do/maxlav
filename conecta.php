<?php 
define("DB HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "maxlav peso");

function db_conecta(){
    $PDO = new PDO("mysql:host=".DB_HOST.";dbname".DB_NAME.":charset=utf8".DB_USER, DB_PASS);
    return $PDO;

}


?>