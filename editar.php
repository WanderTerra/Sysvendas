<?php
include_once './includes/connect.php';

$teste=$_GET["updateid"];
echo $teste;
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

    $sql = "UPDATE pessoa SET rg='$rg', cpf='$cpf', nome='$nome', logradouro='$logradouro', numero='$numero', bairro='$bairro', cep='$cep', cidade='$cidade', estado='$estado', telefone='$telefone', email='$email', foto='$path', tipo='$tipo' WHERE id='$teste'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Cadastro realizado com sucesso!')</script>";
        echo "<script>window.location.href = 'Cadastro_de_Pessoas.php'</script>";
    } else {
        echo "<script>alert('Erro ao realizar o cadastro!')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }

}