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
  <?php include 'menu.php'; ?>
</div>

<body>


      <div class="container mt-5 bg-body-tertiary p-3 text-center">
        <h3 class="mb-3">Cadastro de Clientes</h3>
        
        <form>
            
            <div class="row mb-3">
              <div class="col form-floating">
                <input type="text" class="form-control" id="floatingInputCPF" placeholder="CPF" required autofocus>
                <label for="floatingInputCPF" class="ps-3">CPF</label>
              </div>
              <div class="col form-floating">
                <input type="text" class="form-control" id="floatingInputRG" placeholder="RG" required autofocus>
                <label for="floatingInputRG" class="ps-3">RG</label>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col form-floating">
                <input type="text" class="form-control" id="floatingInputName" placeholder="Nome" required autofocus>
                <label for="floatingInputName" class="ps-3">Nome</label>
              </div>
            </div>

            <div class="row mb-3">
              <div class="col-sm-10 form-floating">
                <input type="text" class="form-control" id="floatingInputStreet" placeholder="Logradouro" required autofocus>
                <label for="floatingInputStreet" class="ps-3">Logradouro</label>
              </div>
              <div class="col-sm-2 form-floating">
                <input type="text" class="form-control" id="floatingInputNumber" placeholder="Numero" required autofocus>
                <label for="floatingInputNumber" class="ps-3">Numero</label>
              </div>
            </div>
              
              <div class="row mb-3">
                <div class="col-sm-8 form-floating">
                  <input type="text" class="form-control" id="floatingInputNeighborhood" placeholder="Bairro" required autofocus>
                  <label for="floatingInputNeighborhood" class="ps-3">Bairro</label>
                </div>
                <div class="col-sm-4 form-floating">
                  <input type="text" class="form-control" id="floatingInputPostalCode" placeholder="CEP" required autofocus>
                  <label for="floatingInputPostalCode" class="ps-3">CEP</label>
                </div>
              </div>

            <div class="row mb-3">
              <div class="col-sm-10 form-floating">
                <input type="text" class="form-control" id="floatingInputCity" placeholder="Cidade" required autofocus>
                <label for="floatingInputCity" class="ps-3">Cidade</label>
              </div>
              <div class="col-sm-2 form-floating">
                <input type="text" class="form-control" id="floatingInputState" placeholder="Estado" required autofocus>
                <label for="floatingInputState" class="ps-3">Estado</label>
              </div>
            </div>
<div class="row mb-3">
  <div class="col form-floating">
    <input type="text" class="form-control" id="floatingInputPhone" placeholder="Telefone" required autofocus>
    <label for="floatingInputPhone" class="ps-3">Telefone</label>
  </div>
  <div class="col form-floating">
    <input type="text" class="form-control" id="floatingInputEmail" placeholder="E-mail" required autofocus>
    <label for="floatingInputEmail" class="ps-3">E-mail</label>
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
   
     


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>