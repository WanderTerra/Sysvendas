<?php
include_once 'includes/connect.php';

if(isset($_POST['email']) || isset($_POST['senha'])){
  if(strlen($_POST['email']) == 0){
    echo "<script>alert('Preencha o campo email!')</script>";
  } else if(strlen($_POST['senha']) == 0){
    echo "<script>alert(Preencha a senha!')</script";
  }else{
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    }
    $sql_code = "SELECT * FROM pessoa WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){
      $sql_fetch = $sql_query->fetch_assoc(); 
      
      if(!isset($_SESSION)){
        session_start();
      } 
      $_SESSION['id'] = $sql_fetch['id'];
      $_SESSION['nome'] = $sql_fetch['nome'];

  } else{
    echo "<script>alert('Usuário ou senha incorretos!')</script>";
  }

    
?>

<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icon.png">
    <title>Sysvendas</title>

</head>

<body class="d-flex align-itens-center py-4 bg-body-tertiary">
    <main class="w-100 m-auto form-container">
      <form>
        <img src="logo1.png" class="mb-4" height="40" width="141">
        <h1 class="h3 mb-3 fw-normal">Faça o Login</h1>
        <div class="form-floating">
          <input type="email" class="form-control" id="floatingInput" placeholder="Email" required autofocus>
          <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
          <input type="password"  class="form-control" id="floatingInput" placeholder="senha" required autofocus>
          <label for="floatingInput">Senha</label>
        </div>
        <div class="form-check text-start my-3">
          <input type="checkbox" class="form-check-input" id="flexCheckDefault"/>
          <label class="form-check-label mb-4" for="flexCheckDefault">Lembrar</label>
          <button class="btn btn-primary w-100 py-2">Entrar</button>
        </div>
      </form>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


</html>