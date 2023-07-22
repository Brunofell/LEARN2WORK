<?php

include('protect.php');
include('UserData.php');
include('conexao.php');

?>




<!doctype html>
<html lang="pt-BR">

<head>
  <title>Learn 2 Know</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="/learn2work/tela_perfil/reset.css">
    <link rel="stylesheet" href="/learn2work/tela_perfil/header.css">

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
                    <a class="nav-link active" aria-current="page" href="#" id="text-header" onclick="window.location.href = 'home_User_inicial.php'">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#local-catalog" id="text-header" onclick="window.location.href = 'home_User_inicial.php'">Catálogo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#local-plans" id="text-header" onclick="window.location.href = 'home_User_inicial.php'">Planos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#local-about" id="text-header" onclick="window.location.href = 'home_User_inicial.php'">Sobre nós</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page"  id="text-header" href="logout.php">Sair</a>
                  </li>
                </ul>
                <form class="d-flex" id="button">
                    <a href="#" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'editPerfil.php'">EDITAR</a>
                  </form>
                <form class="d-flex" id="button">
                    <a href="#" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'home_user.php'">HOME</a>
                  </form>
                  <form class="d-flex" id="button">
                    <a href="#" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'historico.php'">HISTÓRICO</a>
                  </form>
              </div>
            </div>
          </nav>
      </header>

  <main>
    <div class="container">
        <div class="main-body">
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                      <?php
                          if (empty($foto_perfil)) {
                            // Exibe a imagem padrão quando o campo de foto de perfil estiver vazio
                            echo '<img src="/learn2work/img/img_perfil.jpg" alt="Imagem Padrão" class="rounded-circle" width="150">';
                          } else {
                            // Exibe a imagem do usuário
                            echo '<img src="data:image/jpeg;base64,'.base64_encode($foto_perfil).'" alt="Admin" class="rounded-circle" width="150">';
                          }
                        ?>
                        <div class="mt-3">
                          <h4><?php echo $user_data['nome']; ?></h4>
                          <div class="input-group">
                          </div>
                          <p class="text-muted font-size-sm"></p>
                        </div>
                      </div>
                    </div>
                  </div> 
                  
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Nome Inteiro</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $user_data['nome']; ?> <!--COLOCAR NOME CADASTARDO NO BANCO DE DADOS AQUI--->
                        </div>
                      
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $user_data['email']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Celular</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $user_data['numTel']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Senha</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        ..............
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Data de nascimento</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $user_data['data_nascimento']; ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">CPF</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $user_data['cpf']; ?>
                        </div>
                      </div>
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
        </div>
  </main>

  <div class="container" style="color: whitesmoke;">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;" onclick="window.location.href = 'home_User_inicial.php'">Home</a></li>
        <li class="nav-item"><a href="#local-catalog" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;" onclick="window.location.href = 'home_User_inicial.php'">Catálogo</a></li>
        <li class="nav-item"><a href="#local-plans" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;" onclick="window.location.href = 'home_User_inicial.php'">Planos</a></li>
        <li class="nav-item"><a href="#local-about" class="nav-link px-2 text-body-secondary"style="color: whitesmoke;" onclick="window.location.href = 'home_User_inicial.php'">Sobre Nós</a></li>
      </ul>
      <p class="text-center text-body-secondary">Learn2Work &copy; 2023 Company, Inc</p>
    </footer>
  </div>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>