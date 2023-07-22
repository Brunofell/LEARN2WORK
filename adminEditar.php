<?php
include('protectADM.php');
include('conexao.php');
if(isset($_GET['usuario'])) {
  
$usu_codigo = intval($_GET['usuario']);

$consulta = "SELECT * FROM usuarios WHERE id = $usu_codigo";

if(isset($_POST['email'])) {
    $email = $_POST['email'];

      $mysqli->query("UPDATE usuarios SET email='$email' WHERE id = $usu_codigo");
      header('Location: adminEditar.php');
}

    
if(isset($_POST['nome'])) {
   
    $nome = $_POST['nome'];
   
   $mysqli->query("UPDATE usuarios SET nome='$nome' WHERE id = $usu_codigo");
   header('Location: adminEditar.php');
};


if(isset($_POST['numTel'])) {
   
    $numTel = $_POST["numTel"];
   
    $mysqli->query("UPDATE usuarios SET numTel='$numTel' WHERE id = $usu_codigo");
    header('Location: adminEditar.php');

   
};


if(isset($_POST['cpf'])) {
   
    $cpf = $_POST['cpf'];
   
   
    $mysqli->query("UPDATE usuarios SET cpf='$cpf' WHERE id = $usu_codigo");
    header('Location: adminEditar.php');
    
   }


   if(isset($_POST['data_nascimento'])) {
    include('conexao.php');
   
    $data_nascimento = $_POST["data_nascimento"];
   
   
   

    $mysqli->query("UPDATE usuarios SET data_nascimento='$data_nascimento' WHERE id = $usu_codigo");
    header('Location: adminEditar.php');
    
       
   
   }
   
} else {
}



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
                  <form class="d-flex" id="button">
                    <a href="#" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'tabelas.php'">Voltar</a>
                  </form>
                  </form>
                  <form class="d-flex" id="button">
                    <a href="logoutADM.php" class="btn btn-light" id="custom-btn">Sair</a>
                  </form>
              </div>
            </div>
          </nav>
      </header>

  <main>
  
    <div class="container">
        <div class="main-body">

                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                    <form action="" method="POST" id="form1" onsubmit="return validaEdit1(event)">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Nome Inteiro</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        </div>
                        <div class="input-group">
                          <input type="text" name="nome" class="form-control" id="nome" placeholder ="">
                          <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;">Editar</button>
                        </div>
                      </div>
                    </form>
                      <hr>
                      <form action="" method="POST" id="form2" onsubmit="return validaEdit2(event)">
                  
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        </div>
                        <div class="input-group">
                          <input input type="text" name="email" class="form-control" id="email" placeholder ="">
                          <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;">Editar</button>
                        </div>
                      </div>
      <!--                </form>
                      <hr>
                      <form action="" method="POST" onsubmit="return validaEdit6(event)">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Celular</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        </div>
                        <div class="input-group">
                          <input type="text" name="numTel" class="form-control" id="number" placeholder="">
                          <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase" style="background-color: blueviolet;">Editar</button>
                        </div>
                      </div>
                    </form>

                    <script>
                    function validaEdit6(event) {
                      var input = document.getElementById("number").value;
                      var regex = /^\d{11}$/;
                      if (input.trim() === "" || !regex.test(input)) {
                        alert("Por favor, insira um número de celular válido com 11 dígitos.");
                        event.preventDefault();
                        return false;
                      }
                      return true;
                    }
                    </script>-->
                      <hr>
                      <form action="" method="POST" id="form5" onsubmit="return validaEdit4(event)">
                  
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Cpf</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        </div>
                        <div class="input-group">
                          <input type="text" name="cpf" class="form-control" id="cpf" placeholder ="">
                          <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;">Editar</button>
                          </div>
                      </div>
                      </form>
                      <hr>
                      <form action="" method="POST" id="form7" onsubmit="return validaEdit(event)">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Data de nascimento</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        </div>
                        <div class="input-group">
                          <input type="date" name="data_nascimento" class="form-control" id="month" >
                          <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;">Editar</button>
                        </div>
                      </div>
                      </form>
                    </div>
                    <div>
                  </div>
              </div>
    
            </div>
        </div>
        
  </main>

  <div class="container" style="color: whitesmoke;">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    </footer>
  </div>


  <script src="/learn2work/edit_user/editUserADM.js"></script>
  <script src="/learn2work/edit_user/editUser.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
