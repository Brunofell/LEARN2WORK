<?php

include('protect.php');
include('UserData.php');

// if(isset($_POST['email'])) {
//  include('conexao.php');

//  $email = $_POST['email'];
//  $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
//  $nome = $_POST['nome'];
//  $cpf = $_POST['cpf'];
//  $numTel = $_POST['numTel'];
//  $senhaConf = $_POST['senha_conf'];
//  $data_nascimento = $_POST["data_nascimento"];

//  $user_id = $_SESSION['id'];

// // Validando a senha (mínimo 8 caracteres, pelo menos uma letra e um número)
//  $senha_regex = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";

//   // Validando o nome (somente letras, mínimo 3 caracteres)
// $nome_regex = "/^[a-zA-Z]+(\s[a-zA-Z]+)+$/";

//   // Validando o número de telefone (formato XXXXXXXXXXX)
//  $numTel_regex = "/^[0-9]{11}$/";

//   // Validando o CPF (formato XXXXXXXXXXX)
//  $cpf_regex = "/^[0-9]{11}$/";

//   // validação para pessoas nascidas após 1900:
//  $data_nascimento_regex = "/^(19[0-9][0-9]|20[0-2][0-9])-([0][1-9]|[1][0-2])-([0][1-9]|[1-2][0-9]|[3][0-1])$/";




//  if (strlen($_POST['nome']) == 0){
//    echo 'Preencha seu nome';

//  } else if (strlen($_POST['email']) == 0) {
//      echo 'Preencha seu email'; 

//  } else if (strlen($_POST['senha']) == 0){
//     echo 'Preencha sua senha';

//  } else if (strlen($_POST['cpf']) == 0){
//    echo 'Preencha o campo cpf';

//  }else if (strlen($_POST['numTel']) == 0){
//    echo 'Preencha o número de telefone';

//  }else if (strlen($_POST['data_nascimento']) == 0){
//    echo 'Preencha a sua data de nascimento';

//  } else if (!preg_match($senha_regex, $_POST['senha'])){
//    echo "Senha inválida! A senha deve conter pelo menos 8 caracteres, pelo menos uma letra e um número.";

//  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//    echo "Email inválido!!"; // um email normal
//  } else if(!preg_match($nome_regex, $_POST['nome'])){
//    echo "Nome inválido! O nome deve conter apenas letras e pelo menos 3 caracteres.";

//  } else if (!preg_match($cpf_regex, $_POST['cpf'])){
//    echo "CPF inválido! O CPF deve estar no formato XXX.XXX.XXX-XX.";

//  } else if (!preg_match($numTel_regex, $_POST['numTel'])){
//    echo "Número de telefone inválido! O número deve estar no formato (XX) XXXX-XXXX.";
    
//  } else if(!preg_match($data_nascimento_regex, $_POST['data_nascimento'])){
//    echo "Data de nascimento invalida! tente novamente!";
  
// } else if ($_POST['senha'] !== $_POST['senha_conf']) {
//    echo "As senhas são diferentes!";
//  } else {
//     $mysqli->query("UPDATE usuarios SET email='$email', senha='$senha', nome='$nome', cpf='$cpf', numTel='$numTel', data_nascimento='$data_nascimento' WHERE id = $user_id");
//    header('location: home_user.php');
//  }
    

// }




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
    <link rel="stylesheet" href="/learn2work/tela_cadastro/reset.css">
    <link rel="stylesheet" href="/learn2work/tela_cadastro/main.css">
    <link rel="stylesheet" href="/learn2work/tela_cadastro/header.css">

        <!-- FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav id= "custom-header"class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" id="logo"><strong>L2W.</strong></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon bg-light" ></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex" id="button">
                    <a href="perfil.php" class="btn btn-light" id="custom-btn">VOLTAR</a>
                  </form>
              </div>
            </div>
          </nav>
      </header>
  <main>
      <body>
        <div class="container" id="delete">
          <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
              <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                <div class="card-img-left d-none d-md-flex">
                  <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body p-4 p-sm-5">
                  <a href="delete.php" class="btn btn-light" id="delete">DELETAR USER</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
  </main>



  <div class="container" style="color: whitesmoke;">
    <footer class="py-3 my-4">

      <p class="text-center text-body-secondary">Learn2Work &copy; 2023 Company, Inc</p>
    </footer>
  </div>


  <!-- Bootstrap JavaScript Libraries -->
  <script src=""></script>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>


</html>