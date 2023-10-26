<!doctype html>
<html lang="pt-br">

<head>
  <title>REduc - login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <script defer type="module" src="assets/js/componentes.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-dark navbar-expand-sm">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center" href="index.html">
            <img src="img/logo.svg" alt="Logo reduc">
            <span class='marca'>REduc</span>
          </a>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="collapsibleNavId">
            <form class="d-flex my-2 my-lg-0">
              <input class="form-control me-sm-2" type="text" placeholder="Digite o que procura...">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
            </form>
            <ul class="navbar-nav mt-2 mt-lg-0">
              <li class="nav-item mx-2">
                <a class="nav-link txt-branco link-explorar btn" href="explorar.html" aria-current="page">Explorar</a>
              </li>
              <li class='nav-item mx-2'>
                <a type="button" class="nav-link btn btn-outline-light txt-branco">Entrar</a>
              </li>
              <li class='nav-item mx-2'>
                <a class='btn btn-light text-dark nav-link'>Cadastrar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </header>
  <main>
    <div class='container rounded shadow p-5 my-5 cadastrar'>
        <div class='row'>
          <form method='#' action='POST' id='form-cadastro' class='col-lg-6 d-flex flex-column justify-content-around'>
            <h2 class='h2'>Entrar</h2>
            <!-- Login -->
            <div class='seguranca'>
              <label>Digite seu email:</label>
              <br>
              <input type="email" name='email' class='form-control' placeholder='Digite seu email...'>
              <br>
              <label>Digite sua senha:</label>
              <br>
              <input type='password' name='senha' class='form-control' placeholder='Digite sua senha...'>
            </div>
            <br>
            <!-- Btns de controle -->
            <div class='btns-controle'>
              <button class='btn btn-danger btn-controle'>Voltar</button>
              <button type='submit' class='btn btn-success btn-controle'>Entrar</button>
            </div>
          </form>
  
          <figure class='col-lg-6 d-flex justify-content-center align-items-center'>
            <img src="img/login-img.svg" alt="Imagem background" class='w-100 p-5 img-cadastro'>
          </figure>
        </div>
      </div>
  </main>
  <footer id="reduc-footer"></footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>