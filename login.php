<?php

include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

  if (strlen($_POST['email']) == 0){
    echo 'Preencha seu email';
} else if (strlen($_POST['senha']) == 0) {
    echo 'Preencha sua senha';
} else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
    $sql_query = $mysqli->query($sql_code) or die("FALHA NA EXECUÇÃO DO CÓDIGO SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1){

      $usuario = $sql_query->fetch_assoc();
      if(password_verify($senha, $usuario['senha'])){
        if(!isset($_SESSION)){
          session_start();
          }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        

        header("Location: home_user.php");

      } else{
      }
    } else {
  }
}
} 


?>



<!doctype html>
<html lang="pt-BR">

<head>
  <title>Learn 2 Work</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="/learn2work/tela_login/css/reset.css">
    <link rel="stylesheet" href="/learn2work/tela_login/css/main.css">
    <link rel="stylesheet" href="/learn2work/tela_login/css/header.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

</head>

<body>


    <header>
        <nav  id= "custom-header"class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" id="logo"><strong>L2W.</strong></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon bg-light" ></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="text-header" onclick="window.location.href = 'home_inicial.php'">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#local-catalog" id="text-header" onclick="window.location.href = 'home_inicial.php'">Catálogo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#local-plans" id="text-header" onclick="window.location.href = 'home_inicial.php'">Planos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#local-about" id="text-header" onclick="window.location.href = 'home_inicial.php'">Sobre nós</a>
                  </li>
                </ul>
                <form class="d-flex" id="button">
                    <a href="cad1.php" class="btn btn-light" id="custom-btn">Cadastrar</a>
                  </form>
              </div>
            </div>
          </nav>
      </header>


      <main>
        <body>
            <div class="container">
              <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                  <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-img-left d-none d-md-flex">
                      <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body p-4 p-sm-5">
                      <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
                      <form action="" id="form" method="POST" onsubmit ="return validaFormulario(event)">
          
                        <div class="form-floating mb-3">
                        <input type="text" name = "email" class="form-control" id="mail" placeholder="myemail">
                          <label for="email">Email</label>
                        </div>
        
          
                        <div class="form-floating mb-3">
                          <input type="password" name = "senha" class="form-control" id="password" placeholder="Password" >
                          <label for="floatingPassword">Senha</label>
                        </div>
          
                        <div class="d-grid mb-2">
                          <button class="btn btn-lg btn-outline-light btn-login fw-bold text-uppercase" type="submit" style="background-color: blueviolet;">ENTRAR</button>
                        </div>
          
                        <a class="d-block text-center mt-2 small" href="cad1.php">Não possui uma conta? Crie uma aqui!</a>
          
                        <hr class="my-4">
          
                        <!-- <div class="d-grid mb-2">
                          <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                            <i class="fab fa-google me-2"></i> Entrar com o Google
                          </button>
                        </div>
          
                        <div class="d-grid">
                          <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                            <i class="fab fa-facebook-f me-2"></i> Entrar com o FAcebook
                          </button>
                        </div> -->
          
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </body>
      </main>

      <div class="container" style="color: whitesmoke;">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;" onclick="window.location.href = '/tela_home_inicial/index.html'">Home</a></li>
            <li class="nav-item"><a href="#local-catalog" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;" onclick="window.location.href = '/tela_home_inicial/index.html'">Catálogo</a></li>
            <li class="nav-item"><a href="#local-plans" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;" onclick="window.location.href = '/tela_home_inicial/index.html'">Planos</a></li>
            <li class="nav-item"><a href="#local-about" class="nav-link px-2 text-body-secondary"style="color: whitesmoke;" onclick="window.location.href = '/tela_home_inicial/index.html'">Sobre Nós</a></li>
          </ul>
          <p class="text-center text-body-secondary">Learn2Work &copy; 2023 Company, Inc</p>
        </footer>
      </div>
      <script src="/learn2work/tela_login/login.js"></script>     
 
</body>

</html>
