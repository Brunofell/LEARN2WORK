<?php

include('protect.php');
include('UserData.php');
include('conexao.php');


if(isset($_FILES['foto_perfil'])) {
  $foto_temp = $_FILES['foto_perfil']['tmp_name'];
  $foto_content = file_get_contents($foto_temp);

  

  $stmt = $mysqli->prepare("UPDATE usuarios SET foto_perfil = ? WHERE id = ?");
  $stmt->bind_param("si", $foto_content, $user_id);
  $stmt->execute();
  $stmt->close();

  header('Location: editPerfil.php');
}


if(isset($_POST['email'])) {
    include('conexao.php');
   
    $email = $_POST['email'];
   
    

    
    $mysqli->query("UPDATE usuarios SET email='$email' WHERE id = $user_id");
    header('Location: editPerfil.php');
    

}
if(isset($_POST['nome'])) {
    include('conexao.php');
   
    $nome = $_POST['nome'];
   

    
   $mysqli->query("UPDATE usuarios SET nome='$nome' WHERE id = $user_id");
   header('Location: editPerfil.php');
};


if(isset($_POST['numTel'])) {
    include('conexao.php');
   
    $numTel = $_POST["numTel"];
   

    $mysqli->query("UPDATE usuarios SET numTel='$numTel' WHERE id = $user_id");
    header('Location: perfil.php');

   
};


if(isset($_POST['senha'])) {
    include('conexao.php');
   
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $senhaConf = $_POST['senha_conf'];
   

   $senha_regex = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";

   
    if (strlen($_POST['senha']) == 0){
      echo 'Preencha seu nome';
      
   } else if (!preg_match($senha_regex, $_POST['senha'])){
       echo "Senha inválida! A senha deve conter pelo menos 8 caracteres, pelo menos uma letra e um número.";
    
   } else if ($_POST['senha'] !== $_POST['senha_conf']) {
       echo "As senhas são diferentes!";
   
   } else {
       $mysqli->query("UPDATE usuarios SET senha='$senha' WHERE id = $user_id");
       header('Location: perfil.php');
    };
       
}

if(isset($_POST['cpf'])) {
    include('conexao.php');
   
    $cpf = $_POST['cpf'];
   
   
    $mysqli->query("UPDATE usuarios SET cpf='$cpf' WHERE id = $user_id");
    header('Location: perfil.php');
    
   }


   if(isset($_POST['data_nascimento'])) {
    include('conexao.php');
   
    $data_nascimento = $_POST["data_nascimento"];
   
   
   

    $mysqli->query("UPDATE usuarios SET data_nascimento='$data_nascimento' WHERE id = $user_id");
    header('Location: perfil.php');
    
       
   
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
                    <a href="#" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'home_User_inicial.php'">HOME</a>
                  </form>
                  <form class="d-flex" id="button">
                    <a href="#" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'perfil.php'">Meu Perfil</a>
                  </form>
              </div>
            </div>
          </nav>
      </header>

  <main>
    <div class="container">
        <div class="main-body">
        <form action="" method="POST" id="form" enctype="multipart/form-data">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($foto_perfil); ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mb-3">
                      <label for="formFileSm" class="form-label">Mudar foto</label>
                      <input name="foto_perfil" class="form-control form-control-sm" id="myInput" type="file" accept="image/*" required>
                      <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase" style="background-color: blueviolet;" onclick="return validateForm()">Editar</button>
            
                      <script>
                        function validateForm() {
                          var input = document.getElementById("myInput");
                          var file = input.files[0];
                          if (!file) {
                            alert("Por favor, selecione um arquivo.");
                            return false;
                          }
                          if (!file.type.startsWith("image/")) {
                            alert("Por favor, selecione um arquivo de imagem válido.");
                            return false;
                          }
                          return true;
                        }
                        </script>
                        </div>
                          <h4><?php echo $user_data['nome']; ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
               </form>
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
                          <input type="text" name="nome" class="form-control" id="nome" placeholder ="<?php echo $user_data['nome']; ?>">
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
                          <input input type="text" name="email" class="form-control" id="email" placeholder ="<?php echo $user_data['email']; ?>">
                          <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;">Editar</button>
                        </div>
                      </div>
                      </form>
                      <hr>
                      <form action="" method="POST" id="form6" onsubmit="return validaEdit6(event)">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Celular</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        </div>
                        <div class="input-group">
                          <input type="text" name="numTel" class="form-control" id="telefone" placeholder ="<?php echo $user_data['numTel']; ?>">
                          <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;">Editar</button>
                        </div>
                      </div>
                        </form>
                      <hr>
                      <form action="" method="POST" id="form3" onsubmit="return validaEdit3(event)">
                  
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Senha</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        </div>
                        <div class="input-group">
                          <input type="password" name="senha" class="form-control" id="password"  placeholder ="•••••••••••••">
                          <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;">Editar</button>
                      </div>
                      </div>
                      </form>
                      
                      <form action="" method="POST" id="form5" onsubmit="return validaEdit4(event)">
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Cpf</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        </div>
                        <div class="input-group">
                          <input type="text" name="cpf" class="form-control" id="cpf" placeholder ="<?php echo $user_data['cpf']; ?>">
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
                          <input type="date" name="data_nascimento" class="form-control" id="month" placeholder ="<?php echo $user_data['data_nascimento']; ?>">
                          <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;">Editar</button>
                        </div>
                      </div>
                      </form>
                      <hr>
                      <form action="" method="POST" id="form">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Cancelar conta</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        </div>
                        <div class="input-group">
                          <a href=" JavaScript: if(confirm('Tem certeza que deseja deletar o usuario <?php echo $user_data['nome'];?>?'))
                          location.href='delete.php';">Excluir</a></td>
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
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;" onclick="window.location.href = 'home_User_inicial.php'">Home</a></li>
        <li class="nav-item"><a href="#local-catalog" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;" onclick="window.location.href = 'home_User_inicial.php'">Catálogo</a></li>
        <li class="nav-item"><a href="#local-plans" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;" onclick="window.location.href = 'home_User_inicial.php'">Planos</a></li>
        <li class="nav-item"><a href="#local-about" class="nav-link px-2 text-body-secondary"style="color: whitesmoke;" onclick="window.location.href = 'home_User_inicial.php'">Sobre Nós</a></li>
      </ul>
      <p class="text-center text-body-secondary">Learn2Work &copy; 2023 Company, Inc</p>
    </footer>
  </div>


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