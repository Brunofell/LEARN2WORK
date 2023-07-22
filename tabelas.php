<?php
include('conexao.php');
include('protectADM.php');

$consulta = "SELECT * FROM usuarios";
$con = $mysqli->query($consulta) or die ($mysqli->error);
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
    <link rel="stylesheet" href="/learn2work/tela_tabelas/reset.css">
    <link rel="stylesheet" href="/learn2work/tela_tabelas/header.css">
    <link rel="stylesheet" href="/learn2work/tela_tabelas/style.css">

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
                </ul>
                <form class="d-flex" id="button">
                    <a href="adm.php" class="btn btn-light" id="custom-btn">Voltar</a>
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
              <!-- /Breadcrumb -->
          
                <div class="">
                  <div class="card mb-3" style="width: 1300px; margin-top: 50px; margin-left: -100px ">
                    <div class="card-body">
                      <div class="row">
                        <div class="">
                        <div class="tabela">

                        <table>
                            <tr>
                                <td>ID</td>
                                <td>Nome</td>
                                <td>Email</td>
                                <td>Telefone</td>
                                <td>CPF</td>
                                <td>Data Nascimento</td>
                            </tr>
                            <?php while($dado = $con->fetch_array()){ ?>
                            <tr>
                                <td><?php echo $dado["id"]; ?></td>
                                <td><?php echo $dado["nome"]; ?></td>
                                <td><?php echo $dado["email"]; ?></td>
                                <td><?php echo $dado["numTel"]; ?></td>
                                <td><?php echo $dado["cpf"]; ?></td>
                                <td><?php echo date("d/m/Y", strtotime($dado["data_nascimento"])) ?></td>
                                <td><a href="adminEditar.php?usuario=<?php echo $dado["id"]; ?> ">Editar</a>

                                    <a href=" JavaScript: if(confirm('Tem certeza que deseja deletar o usuario <?php echo $dado["nome"];?>?'))
                                    location.href='adminDelete.php?usuario=<?php echo $dado["id"]; ?>';">Excluir</a></td>
                            </tr>
                            <?php }   ?>
                        </table>
                          
                        </div>
                     </div>
                    <div>
                  </div>
              </div>
    
            </div>
        </div>
  </main>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
        <div class="container" style="color: whitesmoke;">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">

          </ul>
          <p class="text-center text-body-secondary">Learn2Work &copy; 2023 Company, Inc</p>
        </footer>
      </div>
</body>

</html>