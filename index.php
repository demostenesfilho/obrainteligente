<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <title>Obra Inteligente</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand text-primary" href="#">Obra Inteligente</a>
          <div class="" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <div class="d-flex">
                <button type="button" class="btn btn-primary nav-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Entrar</button><p class="text-light">.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Cadastrar</button>
            </div>
          </div>
        </div>
      </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/img1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/img2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/img3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="titulo">
        <h2>Garanta a satisfação dos clientes e qualidade dos serviços</h2>
      </div>
    <div class="box-card">
      <div class="card" style="width: 18rem;">
        <img src="image/imgcard1.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><strong>Intuitivo</strong><br />para colaboradores</h5>
          <br />
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="image/imgcard2.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><strong>Completo</strong><br />para gestores</h5>
          <br />
          <a href="#" class="btn btn-primary">Saiba mais</a>
        </div>
      </div>
    </div>

    <div>
      <br>
      <br>
    </div>

    <!-- Modal login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Entrar na sua conta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="column">
          <div class="col">
            <span>E-mail:</span>
            <input type="email" class="form-control" placeholder="Digite seu email aqui" aria-label="email">
          </div>
          <br />
          <div class="col">
            <span>Senha:</span>
            <input type="password" class="form-control" placeholder="Digite sua senha aqui" aria-label="senha">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Acessar conta</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal cadastro-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Criar conta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3">
  <div class="col-md-6">
    <label for="inputNome4" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNome4" placeholder="Digite seu nome aqui">
  </div>
  <div class="col-md-6">
    <label for="inputSobrenome4" class="form-label">Sobrenome:</label>
    <input type="text" class="form-control" id="inputSobrenome4" placeholder="Digite seu sobrenome aqui">
  </div>
  <div class="col-12">
    <label for="inputEmail" class="form-label">E-mail:</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="Digite seu e-mail aqui">
  </div>
  <div class="col-12">
    <label for="inputEndereço" class="form-label">Endereço:</label>
    <input type="text" class="form-control" id="inputEndereço" placeholder="Rua, Número, Bairro">
  </div>
  <div class="col-md-6">
    <label for="inputCidade" class="form-label">Cidade:</label>
    <input type="text" class="form-control" id="inputCidade" placeholder="Digite o nome da cidade">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Estado:</label>
    <select id="inputState" class="form-select">
      <option selected>Selecione...</option>
      <option  value = " Acre " > Acre </option >
      <option  value = " Alagoas " > Alagoas </option >
      <option  value = " Amapá " > Amapá </option >
      <option  value = " Amazonas " > Amazonas </option >
      <option  value = " Bahia " > Bahia </option >
      <option  value = " Ceará " > Ceará </option >
      <option  value = " Distrito Federal " > Distrito Federal </option >
      <option  value = " Espírito Santo " > Espírito Santo </option >
      <option  value = " Goiás " > Goiás </option >
      <option  value = " Maranhão " > Maranhão </option >
      <option  value = " Mato Grosso " > Mato Grosso </option >
      <option  value = " Mato Grosso do Sul " > Mato Grosso do Sul </option >
      <option  value = " Minas Gerais " > Minas Gerais </option >
      <option  value = " Pará " > Pará </option >
      <option  value = " Paraíba " > Paraíba </option >
      <option  value = " Paraná " > Paraná </option >
      <option  value = " Pernambuco " > Pernambuco </option >
      <option  value = " Piauí " > Piauí </option >
      <option  value = " Rio de Janeiro " > Rio de Janeiro </option >
      <option  value = " Rio Grande do Sul " > Rio Grande do Sul </option >
      <option  value = " Rio Grande do Norte " > Rio Grande do Norte </option >
      <option  value = " Rondônia " > Rondônia </option >
      <option  value = " Roraima " > Roraima </option >
      <option  value = " Santa Catarina " > Santa Catarina </option >
      <option  value = " São Paulo " > São Paulo </option >
      <option  value = " Sergipe " > Sergipe </option >
      <option  value = " Tocantins " > Tocantins </option >
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Cep:</label>
    <input type="text" class="form-control" id="inputZip" placeholder="cep">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Criar conta agora!</button>
      </div>
    </div>
  </div>
</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>