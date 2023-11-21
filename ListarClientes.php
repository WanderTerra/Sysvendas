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
    <title>Sysvendas</title>
    <link rel="icon" href="icon.png">

</head>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo1.png" alt="" width="130" height="37"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Produto.html">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Clientes.html">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Vendedores.html">Vendedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Vendas</a>
          </li>
          <li class="nav-item dropdown me-5">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cadastro
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="Cadastro_de_Pessoas.html">Pessoas</a></li>
              <li><a class="dropdown-item" href="Cadastro_de_Produtos.html">Produtos</a></li>
              <li><a class="dropdown-item" href="Cadastro_de_Clientes.html">Vendedores</a></li>
              <li><a class="dropdown-item" href="Venda.html">Venda</a></li>
            </ul>
        </form>
      </div>
    </div>
  </nav>
</header>
<body>


      <div class="container mt-5 bg-body-tertiary p-3 text-center">
        <h3 class="mb-3">Clientes</h3>
        
        <form>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#Id</th>
                <th scope="col">nome</th>
                <th scope="col">CPF</th>
                <th scope="col">E-mail</th>
                <th scope="col">Senha</th>
                <th scope="col"></th>
              </tr>
            </thead>

             
            <tbody>
              <?php
                $sql = "SELECT * FROM pessoa where tipo = 'cli'";
                $result = mysqli_query($conn, $sql);
                // var_dump($result);
                if($result->num_rows > 0){
                  while($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $nome = $row['nome'];
                    $cpf = $row['cpf'];
                    $email = $row['email'];
                    $senha = $row['senha'];

                    echo'
                    <tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$nome.'</td>
                    <td>'.$cpf.'</td>
                    <td>'.$email.'</td>
                    <td >'.$senha.'</td>
                    <td><a href="./editar.php?updateid='.$id.'">editar </a>
                    <a href="./excluir.php?deleteid='.$id.'"><button><i class="bi bi-trash-fill"></i></button> </a></td>
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
