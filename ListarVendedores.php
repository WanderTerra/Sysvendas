<?php

include_once 'includes/connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Sysvendas</title>
    <link rel="icon" href="icon.png">

</head>

<div id="menu">
  <?php include 'includes/header.html'; ?>
</div>

<body>


      <div class="container mt-5 bg-body-tertiary p-3 text-center">
        <h3 class="mb-3">Vendedores</h3>
        
        <form>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#Id</th>
                <th scope="col">Foto</th>
                <th scope="col">nome</th>
                <th scope="col">CPF</th>
                <th scope="col">E-mail</th>
                <th scope="col">Senha</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>

             
            <tbody>
              <?php
                $sql = "SELECT * FROM pessoa where tipo = 'ven'";
                $result = mysqli_query($conn, $sql);
                // var_dump($result);
                if($result->num_rows > 0){
                  while($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $cpf = $row['cpf'];
                    $email = $row['email'];
                    $senha = $row['senha'];
                    $foto = $row['foto'];

                    echo'
                    <tr>
                      <th scope="row">'.$id.'</th>
                      <td> <img class="imagem" src=" '.$foto.'" alt="" ></td>
                      <td>'.$nome.'</td>
                      <td>'.$cpf.'</td>
                      <td>'.$email.'</td>
                      <td >'.$senha.'</td>
                      <td><a href="./AtualizarVendedor.php?updateid='.$id.'"><i class="bi bi-pencil-square"></i></a></td>
                      <td><a href="./excluir.php?deleteid='.$id.'" class="text-danger"><i class="bi bi-trash"></i></a></td>
                  </tr>
                    ';
                  }
                }
              ?>
            </tbody>
          </table>
</form>
   
     


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
