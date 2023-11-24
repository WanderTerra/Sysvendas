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
    
    <div id="menu">
      <?php include 'includes/header.html'; ?>
    </div>


<body>

    <div class="container mt-5 bg-body-tertiary p-3 text-center">
        <h3 class="h3 mb-3 fw-normal">Cadastro de Produtos</h3>

        <form>

            <div class="row mb-3">
                <div class="col-3 form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Código" required autofocus>
                    <label for="floatingInput" class="ps-4">Código</label>
                </div>
                <div class="col-6 form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Produto" required autofocus>
                    <label for="floatingInput" class="ps-4">Produto</label>
                </div>
                <div class="col-3 form-floating">
                    <input type="text" class="form-control form-control-sm ps-3" id="floatingInputQuantity" placeholder="Quantidade" required autofocus>
                    <label for="floatingInputQuantity" class="ps-4">Quantidade</label>
                </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-4 form-floating">
                        <input type="text" class="form-control form-control-sm ps-3" id="floatingInputSale" placeholder="Logradouro" required autofocus>
                        <label for="floatingInputSale" class="ps-4">Preço Compra</label>
                    </div>
                    <div class="col-sm-4 form-floating">
                        <input type="text" class="form-control form-control-sm ps-3" id="floatingInputSale" placeholder="Numero" required autofocus>
                        <label for="floatingInputSale" class="ps-4">Preço Venda</label>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-8 form-floating">
                        <input type="text" class="form-control form-control-sm ps-3" id="floatingInput" placeholder="Fornecedor" required autofocus>
                        <label for="floatingInput" class="ps-4">Fornecedor</label>
                </div>
                
                                </div>

                                <div class="row d-flex mt-5">
                                    <div class="col-4">
                                    </div>
                                    <div class="col-4 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
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