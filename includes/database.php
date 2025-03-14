<?php
define('HOST', 'localhost'); // nom de l'host  
define('DB_NAME', 'siteas'); // nom de la base de donnée
define('USER', 'root'); // utilisateur
define('PASS', ''); // mot de passe

try {
    $db = new PDO("mysql:host=" .HOST . ";dbname=" .DB_NAME, USER, PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e;
}
?>
