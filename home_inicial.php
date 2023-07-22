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

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- CSS /L2W/tela_home_inicial/css/reset.css -->
    <link rel="stylesheet" href="/learn2work/tela_home_inicial/reset.css">
    <link rel="stylesheet" href="/learn2work/tela_home_inicial/main.css">
    <link rel="stylesheet" href="/learn2work/tela_home_inicial/header.css">
    
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
                    <a class="nav-link active" aria-current="page" href="#" id="text-header">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#local-catalog" id="text-header">Catálogo</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#local-plans" id="text-header">Planos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#local-about" id="text-header">Sobre nós</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page"  id="text-header" href="buscaAnonimo.php">Pesquisar</a>
                  </li>
                </ul>
                <form class="d-flex" id="button">
                  <a href="#" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'cad1.php'">Cadastrar</a>
                </form>
                <form class="d-flex" id="button">
                    <a href="#" class="btn btn-light" id="custom-btn" onclick="window.location.href = 'login.php'">Entrar</a>
                  </form>
              </div>
            </div>
          </nav>
      </header>

  <main>

    <!-- HOME -->
    <div class="row featurette container-fluid" id="custom-sobre">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Learn 2 Work<span class="text-body-secondary"></span></h2>
        <p class="lead">Transformando seu potencial em habilidades práticas para alcançar o sucesso profissional <br> <br> Aprenda, pratique e conquiste com nossa plataforma de ensino online.</p>
      </div>
      <div class="col-md-5" id="container-icons">
        <img id="container-icons-card" class="featuretteimage img-fluid mx-auto" src="/learn2work/img/icon.png" style="height: 25rem; border-radius: 1rem;">
      </div>
    </div>

    <!-- CATALOGO -->
    <hr style="margin-top: 2rem;" id="local-catalog">
    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <h2 class="text-center">CATÁLOGO</h2>
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" style="color: black;">
            <div class="col">
              <div class="card shadow-sm" id="custom-video-card">
                <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="/learn2work/img/comunicacao.jpg" alt="">
                <div class="card-body">
                  <p class="card-text">Comunicação No Trabalho</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-body-secondary">12 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm" id="custom-video-card">
                <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="/learn2work/img/administracao.jpg" alt="">
                <div class="card-body">
                  <p class="card-text">Administração Do Tempo.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-body-secondary">15 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm" id="custom-video-card">
                <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="/learn2work/img/postura.jpg" alt="">
                <div class="card-body">
                  <p class="card-text">Postura Social E No Trabalho</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-body-secondary">8 mins</small>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card shadow-sm" id="custom-video-card">
                <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="/learn2work/img/matematica.jpg" alt="">
                <div class="card-body">
                  <p class="card-text">Matemática Financeira</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-body-secondary">34 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm" id="custom-video-card">
                <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="/learn2work/img/inovacao.jpg" alt="">
                <div class="card-body">
                  <p class="card-text">Inovação Empresarial</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-body-secondary">23 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col" style="border: 5rem black;">
              <div class="card shadow-sm" id="custom-video-card">
                <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="/learn2work/img/atendimento.jpg" alt="">
                <div class="card-body">
                  <p class="card-text">Atendimento Ao Cliente</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-body-secondary">18 mins</small>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
        </div>
      </div>

      <!-- PREÇOS -->
      <hr style="margin-top: 2rem;" id="local-plans">
      <section class="pricing py-5" style="color: black;"> 
        <h2 class="text-center" style="color: whitesmoke;">PLANOS</h2>
        <h4 class="text-center" style="color: whitesmoke; margin-bottom: 1rem;">Compare Os Preços</h4>

        <div class="container">
          <div class="row">

            <!-- Free Tier -->
            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0" id="custom-container-plan">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Básico</h5>
                  <h6 class="card-price text-center">R$0<span class="period">/mês</span></h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Acesso a conteúdo exclusivo</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Certificado de conclusão</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Acesso A Comunidade</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Suporte Mais Rápido</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-check"></i></span>Desconto Em Outros <br> Produtos Ou Serviços</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Acesso A Mentoria
                    </li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Feedback detalhado</li>
                  </ul>
                  <div class="d-grid">
                    <a href="#" class="btn btn-outline-light text-uppercase">COMPRAR</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Plus Tier -->
            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0" id="custom-container-plan">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">INTERMEDIÁRIO</h5>
                  <h6 class="card-price text-center">R$14,99<span class="period">/mês</span></h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Acesso a conteúdo exclusivo</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Certificado de conclusão</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Acesso A Comunidade</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Suporte mais rápido</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Desconto Em Outros <br> Produtos Ou Serviços</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Acesso A Mentoria
                    </li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Feedback detalhado</li>
                  </ul>
                  <div class="d-grid">
                    <a href="#" class="btn btn-outline-light text-uppercase">COMPRAR</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pro Tier -->
            <div class="col-lg-4">
              <div class="card" id="custom-container-plan">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">PREMIUM</h5>
                  <h6 class="card-price text-center">R$24,99<span class="period">/mês</span></h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Acesso a conteúdo exclusivo</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Certificado de conclusão</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Acesso A Comunidade</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Suporte mais rápido</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Desconto Em Outros <br> Produtos Ou Serviços</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Acesso A Mentoria</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Feedback Detalhado<br</li>
                  </ul>
                  <div class="d-grid">
                    <a href="#" class="btn btn-outline-light text-uppercase">COMPRAR</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- SOBRE NÓS -->
      <hr style="margin-top: 2rem;" id="local-about">
      <div class="container">
        <div id="customizar-card" class="card my-3">
          <div class="card-body" id="text-card">
            <h5 class="card-title">Sobre nós</h5> 
            <p class="card-text">O objetivo do projeto é fornecer uma plataforma de ensino online focada em habilidades práticas e relevantes para o mercado de trabalho, com o propósito de democratizar o acesso à educação de qualidade e ajudar a reduzir a lacuna de habilidades no mercado de trabalho.</p>
          </div>
        </div>
    
        <div id="customizar-card" class="card my-3">
          <div class="card-body" id="text-card">
            <h5 class="card-title">Nossa visão</h5> 
            <p class="card-text">Ser a plataforma líder em educação online, oferecendo recursos de qualidade e acessíveis para que as pessoas possam aprender e se desenvolver em suas áreas de interesse.</p>
          </div>
        </div>
    
        <div id="customizar-card" class="card my-3">
          <div class="card-body" id="text-card">
            <h5 class="card-title">Nossa missão</h5> 
            <p class="card-text">A nossa missão é democratizar o acesso ao conhecimento, oferecendo cursos e conteúdos de alta qualidade para qualquer pessoa, em qualquer lugar do mundo, independentemente da sua situação financeira ou geográfica.</p>
          </div>
        </div>
    
        <div id="customizar-card" class="card my-3">
          <div class="card-body" id="text-card">
            <h5 class="card-title">Nosso próposito</h5> 
            <p class="card-text">Nosso propósito é transformar vidas por meio da educação. Queremos ajudar as pessoas a desenvolverem suas habilidades e conhecimentos para que possam alcançar seus objetivos pessoais e profissionais, contribuindo assim para o desenvolvimento da sociedade como um todo.</p>
          </div>
        </div>
      </div>
  </main>

  <div class="b-example-divider"></div>

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