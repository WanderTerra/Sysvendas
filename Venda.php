<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sysvendas</title>
    <link rel="icon" href="icon.png">

</head>

<div id="menu">
  <?php include 'includes/header.html'; ?>
</div>

<body>


      <div class="container mt-5 bg-body-tertiary p-3 text-center">
        <h3 class="mb-3">Venda</h3>
        
        <form>
            
            <div class="row mb-3">
              <div class="col form-floating">
                <div class="form-floating">
                  <input type="date" class="form-control" id="floatingInputDate" required autofocus>
                  <label for="floatingInputDate" class="ps-3">Data</label>
                </div>
              </div>
              <div class="col form-floating">
                <select class="form-control" id="floatingInputSeller" required autofocus>
                  <option value="">Selecione um vendedor</option>
                  <!-- As opções serão preenchidas aqui -->
                </select>
                <label for="floatingInputSeller" class="ps-3">Vendedor</label>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col form-floating">
                <select type="text" class="form-control" id="floatingInputProduct" required autofocus>
                  <option value="">Selecione um produto</option>
                  <!-- As opções serão preenchidas aqui -->
                </select>
                <label for="floatingInputProduct" class="ps-3">Produto</label>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-sm-4 form-floating">
                <input type="text" class="form-control" id="floatingInputQuantity" placeholder="Quantidade" required autofocus>
                <label for="floatingInputQuantity" class="ps-4">Quantidade</label>
              </div>
              <div class="col-sm-5 form-floating">
                <input type="text" class="form-control" id="floatingInputPrice" placeholder="Preço" required autofocus>
                <label for="floatingInputPrice" class="ps-4">Preço</label>
              </div>
            </div>
              
              <div class="row mb-3">
                <div class="col-sm-8 form-floating">
                  <input type="text" class="form-control" id="floatingInputTotal" placeholder="Total" required autofocus>
                  <label for="floatingInputTotal" class="ps-4">Total</label>
                </div>

              </div>

</div>

<div class="row d-flex mt-5">
  <div class="col-4">
  </div>
  <div class="col-4 d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Finalizar Venda</button>
  </div>
  <div class="col-4">
  </div>
</div>

</form>
   
     


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>