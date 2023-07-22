<?php
include('protect.php');
include('UserData.php');
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtém os dados do formulário
  $video_url = $_POST['video_url'];
  $video_titulo = $_POST['video_titulo'];

  // Insira os dados do histórico na tabela
  $sql = "INSERT INTO historico (user_id, video_titulo, video_url) VALUES ('$user_id', '$video_titulo','$video_url')";
  $result = $mysqli->query($sql);

  if ($result) {
  } else {
    echo "Erro ao salvar o histórico.";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <title>Learn 2 Work</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="/learn2work/tela_video/reset.css">
    <link rel="stylesheet" href="/learn2work/tela_video/header.css">

</head>

<body>
  <header>
    <nav  id="custom-header" class="navbar navbar-expand-lg bg-body-tertiary">
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
                <a class="nav-link active" aria-current="page"  id="text-header" href="busca.php">Pesquisar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"  id="text-header" href="logout.php">Sair</a>
              </li>
            </ul>
            <form method="POST" action="avaliar.php" id="form">
               <?php echo '<input type="hidden" name="video_titulo" value="' . $video_titulo . '">';  ?>
              <a type="submit" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'avaliar.php'">Avaliar</a>
            </form>
            <form class="d-flex" id="button">
                <a href="home_user.php" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'login.php'">Voltar</a>
              </form>
          </div>
        </div>
      </nav>
  </header>

  <main>
  <br> <br> 
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
          </div>
          <div class="ibox-content">
            <figure>
            <iframe src="<?php echo $_POST['video_url']; ?>" frameborder="0" allowfullscreen="" data-aspectratio="0.8211764705882353" style="width: 523px; height: 429.475px;"></iframe> </div>
        </div>
      </div>
    </div>
  </div>
  </main>

  <div class="container" style="color: whitesmoke;">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;">Home</a></li>
        <li class="nav-item"><a href="#local-catalog" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;">Catálogo</a></li>
        <li class="nav-item"><a href="#local-plans" class="nav-link px-2 text-body-secondary" style="color: whitesmoke;" >Planos</a></li>
        <li class="nav-item"><a href="#local-about" class="nav-link px-2 text-body-secondary"style="color: whitesmoke;" >Sobre Nós</a></li>
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
