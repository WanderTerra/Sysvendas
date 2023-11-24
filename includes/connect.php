<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "sysvendas";

$conn = mysqli_connect($hostname, $username, $password, $db);

if(!$conn){
    die("Falha na conexão: ".mysqli_connect_error());
}
else{
    // echo "Conexão realizada com sucesso";
}
?>