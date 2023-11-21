<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "sysvendas";

$conn = mysqli_connect($hostname, $username, $password, $db);

if(!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}

<<<<<<< HEAD


?>
=======
else{
    echo "Conexão realizada com sucesso!";
}

?>
```
>>>>>>> b15c9b05e2c471ed283ffffcc835da62849ca34f
