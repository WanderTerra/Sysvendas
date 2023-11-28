<?php
include_once './includes/connect.php';

    $codigo_banco = $_GET["id"]; 
    $sql = "SELECT * FROM produto WHERE codigo =$codigo_banco";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    
    $produto_banco = $row['produto'];
    $quantidade_banco = $row['quantidade'];
    $preco_compra_banco = $row['preco_compra'];
    $preco_venda_banco = $row['preco_venda'];
    $fornecedor_banco = $row['fornecedor'];

    if (isset($_POST['atualizar'])){
        $codigo = $_POST['codigo'];
        $produto = $_POST['produto'];
        $quantidade = $_POST['quantidade'];
        $preco_compra = $_POST['preco_compra'];
        $preco_venda = $_POST['preco_venda'];
        $fornecedor = $_POST['fornecedor'];

        $sql = "UPDATE produto SET codigo='$codigo', produto='$produto', quantidade='$quantidade', preco_compra='$preco_compra', preco_venda='$preco_venda', fornecedor='$fornecedor' WHERE codigo=$codigo_banco";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>alert('Produto atualizado com sucesso!')</script>";
            echo "<script>window.location.href='Produtos.php'</script>";
        }else{
            echo "<script>alert('Erro ao atualizar produto!')</script>";
        }
    
    }
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
        <h3 class="mb-3">Editar Produtos</h3>  

        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
                <div class="col form-floating">
                    <input type="text" class="form-control" name="codigo" id="floatingInputCodigo" value="<?=$codigo_banco?>" required autofocus>
                    <label for="floatingInputCodigo" class="ps-3">Código</label>
                </div>
                <div class="col form-floating">
                    <input type="text" class="form-control" name="produto" id="floatingInputProduto" value="<?=$produto_banco?>" required autofocus>
                    <label for="floatingInputProduto" class="ps-3">Produto</label>
                </div>
                <div class="col form-floating">
                    <input type="text" class="form-control" name="quantidade" id="floatingInputQuantidade" value="<?=$quantidade_banco?>" required autofocus>
                    <label for="floatingInputQuantidade" class="ps-3">Quantidade</label>
                </div>
                <div class="col form-floating">
                    <input type="text" class="form-control" name="preco_compra" id="floatingInputPrecoCompra" value="<?=$preco_compra_banco?>" required autofocus>
                    <label for="floatingInputPrecoCompra" class="ps-3">Preço Compra</label>
                </div>
                <div class="col form-floating">
                    <input type="text" class="form-control" name="preco_venda" id="floatingInputPrecoVenda" value="<?=$preco_venda_banco?>" required autofocus>
                    <label for="floatingInputPrecoVenda" class="ps-3">Preço Venda</label>
                </div>
                <div class="col form-floating">
                    <input type="text" class="form-control" name="fornecedor" id="floatingInputFornecedor" value="<?=$fornecedor_banco?>" required autofocus>
                </div>
                <div class="row d-flex mt-5">
                    <div class="col">
                        <button type="submit" name="atualizar" class="btn btn-primary">Atualizar</button>
                    </div>
                    <div class="col">
                        <a href="Produtos.php" class="btn btn-danger">Cancelar</a>
                    </div>

                </div>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


