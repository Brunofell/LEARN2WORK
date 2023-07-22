<?php
include('conexao.php');
include('UserData.php');
include('protect.php');

// Exibir o histórico de visualizações
$query = "SELECT video_titulo FROM historico WHERE user_id = $user_id";
$result = $mysqli->query($query);

?>

<head>
    <title>Learn 2 Work</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
      <!-- CSS -->
      <link href="./avaliar.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="./avaliar.js"></script>
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
          <!-- FONTS -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="/learn2work/avaliacao/avaliar.css">
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
                  </ul>
                  <form class="d-flex" id="button">
                      <a href="home_user.php" class="btn btn-light" id="custom-btn">Voltar</a>
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
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Histórico de cursos assistidos:</h5>
                    <form act ion="" method="POST" id="form">
                        <div class="form-group" id="rating-ability-wrapper">
                            <label class="control-label" for="rating">
                            <span class="field-label-info"></span>
                            </label>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo $row['video_titulo'] . '<a href="home_user.php"> Assistir</a> <br>' ;
                                }
                            } else {
                                echo 'Nada visualizado';
                            }
                            ?>
                        </div>
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
          </ul>
        <p class="text-center text-body-secondary">Learn2Work &copy; 2023 Company, Inc</p>
      </footer>
    </div>
  
  
    <!-- Bootstrap JavaScript Libraries -->
    <script src="/learn2work/avaliacao/avaliar.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  </body>
  
  </html>