<?php
include('protectADM.php');
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

                </div>                  
                <form class="d-flex" id="button">
                    <a href="logoutADM.php" class="btn btn-light" id="custom-btn">Sair</a>
                  </form>
                  <form class="d-flex" id="button">
                      <a href="adm.php" class="btn btn-light" id="custom-btn">Voltar</a>
                    </form>
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
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Adicionar vídeo</h5>
                    <form action="upload.php" method="POST" id="form" enctype="multipart/form-data">
  
                      <div class="form-floating mb-3">
                        <input type="text" name="titulo" class="form-control" id="nome" placeholder="myusername">
                        <label for="floatingInputUsername">Título</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="text" name="descricao" class="form-control" id="descricao" placeholder="myusername">
                        <label for="floatingInputUsername">Descrição</label>
                      </div>
                      
                      <div>
                        <label for="formFileLg" class="form-label">Adicione o vídeo aqui</label>
                        <input class="form-control form-control-lg" name="video" accept="video/*" id="videos" type="file">
                      </div>
                      <hr>
                      <div class="d-grid mb-2">
                        <button type="submit" class="btn btn-lg btn-outline-light btn-login fw-bold text-uppercase"  style="background-color: blueviolet;">Adicionar</button>
                      </div>
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
    <script src="/learn2work/tela_video/addvideo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
  </body>
  
</html>