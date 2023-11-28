<?php

// include_once 'includes/connect.php';


    $id = $_GET["updateid"];
    $sql = "SELECT * FROM pessoa WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    $name_banco = $row['nome'];
    $cpf_banco = $row['cpf'];
    $rg_banco = $row['rg'];
    $logradouro_banco = $row['logradouro'];
    $numero_banco = $row['numero'];
    $bairro_banco = $row['bairro'];
    $cep_banco = $row['cep'];
    $cidade_banco = $row['cidade'];
    $estado_banco = $row['estado'];
    $telefone_banco = $row['telefone'];
    $email_banco = $row['email'];
    $senha_banco = $row['senha'];
    $foto_banco = $row['foto'];
    $tipo_banco = $row['tipo'];


    if (isset($_POST['atualizar'])) {
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = max(6, $_POST['senha']);
        $arquivo = $_FILES['foto'];
        $tipo = $_POST['tipo'];

        var_dump($arquivo);

        if($arquivo['error']) die("Falha no upload do arquivo!");
        //definindo a pasta onde salvar os arquivos
        $pasta = "./uploads/";
        $nome_arquivo = $arquivo['name'];
        //renomeando o arquivo
        $new_name = uniqid();
        //pegando a extensão do arquivo
        $extensao = strtolower(pathinfo($nome_arquivo, PATHINFO_EXTENSION));
        //validando a extensão do arquivo
        if($extensao != "jpg" && $extensao != "png"){
          echo "<script>alert('Extensão inválida!')</script>";

        }

        $path = $pasta . $new_name. "." .$extensao;
        //movendo o arquivo para a pasta
        $foto = move_uploaded_file($arquivo['tmp_name'], $path);

        $sql = "UPDATE  pessoa SET rg='$rg', cpf='$cpf', nome='$nome', logradouro='$logradouro', numero='$numero', bairro='$bairro', cep='$cep', cidade='$cidade', estado='$estado', telefone='$telefone', email='$email', foto='$path',  tipo='$tipo' WHERE id=$id";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Cadastro atualizado com sucesso!')</script>";
            echo "<script>window.location.href = 'Cadastro_de_Pessoas.html'</script>";
        } else {
            echo "<script>alert('Erro ao realizar a atualização!')</script>";
            echo "<script>window.location.href = 'index.php'</script>";
        }

    }

?>


<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Sysvendas</title>
  <link rel="icon" href="icon.png">

</head>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logo1.png" alt="" width="130" height="37"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Vendedores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Vendas</a>
          </li>
          <li class="nav-item dropdown me-5">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Cadastro
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="ListarClientes.php">Clientes</a></li>
              <li><a class="dropdown-item" href="Cadastro_de_Produtos.html">Produtos</a></li>
              <li><a class="dropdown-item" href="Cadastro_de_Vendedores.html">Vendedores</a></li>
              <li><a class="dropdown-item" href="Venda.html">Vendas</a></li>
            </ul>
            </form>
      </div>
    </div>
  </nav>
</header>

<body>


  <div class="container mt-5 bg-body-tertiary p-3 text-center">
    <h3 class="mb-3">Atualizar Vendedor</h3>

    <form method="POST"  enctype="multipart/form-data">

      <div class="row mb-3">
        <div class="col form-floating">
          <input type="text" class="form-control" name="cpf" id="floatingInputCPF" value="<?=$cpf_banco?>" required autofocus>
          <label for="floatingInputCPF" class="ps-3">CPF</label>
        </div>
        <div class="col form-floating">
          <input type="text" class="form-control" name="rg" id="floatingInputRG" value="<?=$rg_banco?>" required autofocus>
          <label for="floatingInputRG" class="ps-3">RG</label>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col form-floating">
          <input type="text" class="form-control" name="nome" id="floatingInputName" value="<?=$name_banco?>" required
            autofocus>
          <label for="floatingInputName" class="ps-3">Nome</label>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-10 form-floating">
          <input type="text" class="form-control" name="logradouro" id="floatingInputStreet" value="<?=$logradouro_banco?>"
            required autofocus>
          <label for="floatingInputStreet" class="ps-3">Logradouro</label>
        </div>
        <div class="col-sm-2 form-floating">
          <input type="text" class="form-control" name="numero" id="floatingInputNumber" value="<?=$numero_banco?>"  required
            autofocus>
          <label for="floatingInputNumber" class="ps-3">Numero</label>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-8 form-floating">
          <input type="text" class="form-control" name="bairro" id="floatingInputNeighborhood" value="<?=$bairro_banco?>"
            required autofocus>
          <label for="floatingInputNeighborhood" class="ps-3">Bairro</label>
        </div>
        <div class="col-sm-4 form-floating">
          <input type="text" class="form-control" name="cep" id="floatingInputPostalCode" value="<?=$cep_banco ?>" required
            autofocus>
          <label for="floatingInputPostalCode" class="ps-3">CEP</label>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-10 form-floating">
          <input type="text" class="form-control" name="cidade" id="floatingInputCity" value="<?=$cidade_banco?>" required
            autofocus>
          <label for="floatingInputCity" class="ps-3">Cidade</label>
        </div>
        <div class="col-sm-2 form-floating">
          <input type="text" class="form-control" name="estado" id="floatingInputState" value="<?=$estado_banco?>" required
            autofocus>
          <label for="floatingInputState" class="ps-3">Estado</label>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-3 form-floating">
          <input type="text" class="form-control" name="telefone" id="floatingInputPhone" value="<?=$telefone_banco?>"
            required autofocus>
          <label for="floatingInputPhone" class="ps-3">Telefone</label>
        </div>
        <div class="col-sm-6 form-floating">
          <input type="text" class="form-control" name="email" id="floatingInputEmail" value="<?=$email_banco?>" required
            autofocus>
          <label for="floatingInputEmail" class="ps-3">E-mail</label>
        </div>
        <div class="col-sm-3 form-floating">
          <input type="text" class="form-control" name="senha" id="floatingInputSenha" value="<?=$senha_banco?>"
            required autofocus>
          <label for="floatingInputSenha" class="ps-3">Senha</label>
        </div>
        
      </div>

      <div class="row mb-3">
        <div class="col form-floating">
          <input type="file" class="form-control" name="foto" id="floatingInputFoto" required autofocus>
          <label for="floatingInputPhone" class="ps-3">Foto</label>
        </div>
        <div class="col form-floating">
          <select class="form-select" name="tipo" aria-label="Default select example">
            <option selected>Selecione o tipo</option>
            <option value="adm">Administrador</option>
            <option value="ven">Vendedor</option>
            <option value="cli">Cliente</option>
          </select>
        </div>

        <div class="row d-flex mt-5">
          <div class="col-4">
          </div>
          <div class="col-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" name="atualizar">Atualizar</button>
          </div>
          <div class="col-4">
          </div>
        </div>

        </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>