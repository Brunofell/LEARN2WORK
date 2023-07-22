<?php
include('conexao.php');
include('protectADM.php');

// Aqui ela está retornando as linhas da tabela usuário(Cada linha é um user cadastrado!)
// Consulta SQL para contar registros na tabela
$sql = "SELECT COUNT(*) as total FROM usuarios";
$result = $mysqli->query($sql);
// Verifica se a consulta retornou resultados
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalPessoas = $row["total"];
} else {
    $totalPessoas = 0;
}

$sqlv = "SELECT COUNT(*) as total FROM video";
$result = $mysqli->query($sqlv);
// Verifica se a consulta retornou resultados
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalvideo = $row["total"];
} else {
    $totalvideo = 0;
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Learn 2 Work</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSS -->
  <link rel="stylesheet" href="/learn2work/tela_adm/reset.css">
  <link rel="stylesheet" href="/learn2work/tela_adm/main.css">
  <link rel="stylesheet" href="/learn2work/tela_adm/header.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>

<body>
    <header>
        <nav  id= "custom-header"class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#" id="logo"><strong>L2W.</strong></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light" ></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              </form>
                  <form class="d-flex" id="button">
                    <a href="logoutADM.php" class="btn btn-light" id="custom-btn">Sair</a>
                  </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
                  <!-- <form class="d-flex" id="button">
                    <a href="#" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'addvideo.php'">Cadastrar vídeo</a>
                  </form> -->

              </div>
            </div>
          </nav>
      </header>
  <main>
    <div class="jumbotron">
        <div class="row w-100">
                <div class="col-md-3">
                    <div class="card border-white mx-sm-1 p-3" id="caixa">
                        <div class="card text-center border-black shadow text p-3 my-card" id="barra"><span class="fa fa-user" style="color: #bb7ae6" aria-hidden="true"></span></div>
                        <div class="text-white text-center mt-3"><h4>Usuários</h4></div>
                        <div class="text-white text-center mt-2"><h1><?php echo $totalPessoas; ?></h1></div>
                        <button class="btn btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;" onclick="window.location.href = 'tabelas.php'">Editar</button>
                    </div>
                </div>
  
                <div class="col-md-3">
                    <div class="card border-white mx-sm-1 p-3" id="caixa">
                        <div class="card text-center border-black shadow text p-3 my-card" id="barra"><span class="fa fa-eye" style="color: #bb7ae6" aria-hidden="true"></span></div>
                        <div class="text-white text-center mt-3"><h4>Vídeos</h4></div>
                        <div class="text-white text-center mt-2"><h1><?php echo $totalvideo; ?></h1></div>
                        <button type="submit" class="btn btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;" onclick="window.location.href = 'addvideo.php'">Cadastrar vídeo</button>
                    </div>
                </div>
                
  </main>

  <div class="container" style="color: whitesmoke;" id="footer">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
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
