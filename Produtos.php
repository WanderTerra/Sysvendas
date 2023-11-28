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
    <h3 class="mb-3">Produtos</h3>
    <form>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Produto</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Preço Compra</th>
            <th scope="col">Preço Venda</th>
            <th scope="col">Fornecedor</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>


        <tbody>
          <?php
          $sql = "SELECT * FROM produto";
          $result = mysqli_query($conn, $sql);
          // var_dump($result);
          if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
              $codigo = $row['codigo'];
              $produto = $row['produto'];
              $quantidade = $row['quantidade'];
              $preco_compra = $row['preco_compra'];
              $preco_venda = $row['preco_venda'];
              $fornecedor = $row['fornecedor'];

              echo '
                    <tr>
                    <th scope="row">' . $codigo . '</th>
                    <td>' . $produto . '</td>
                    <td>' . $quantidade . '</td>
                    <td>' . $preco_compra . '</td>
                    <td>' . $preco_venda . '</td>
                    <td>' . $fornecedor . '</td>
                    <td><a href="editarProduto.php?id=' . $codigo . '"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="excluirProduto.php?id=' . $codigo . '" class="text-danger"><i class="bi bi-trash"></i></a></td>
                    </tr>
                    ';
            }
          }
          ?>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        </tbody>
      </table>
    </form>

</html>