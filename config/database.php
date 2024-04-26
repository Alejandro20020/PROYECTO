<?php
//realizaremos la conexion con forma PDO try catch
$link = 'mysql:host=localhost;dbname=practica14';
$usuario = 'root';
$pass = '';

try{

    $llamar = new PDO($link,$usuario,$pass);

    echo ('Conexion Exitosa');

}catch  (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
}

?>