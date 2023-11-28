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
<<<<<<< HEAD
    echo "Conexão realizada com sucesso";
}
?>
=======
    // echo "Conexão realizada com sucesso";
}
?>
>>>>>>> ab58110d6a2afdf653e6481313571fae4aa500f8
