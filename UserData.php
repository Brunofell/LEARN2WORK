<?php
require ('conexao.php');


if (isset($_SESSION['id'])) {
  $user_id = $_SESSION['id'];

} else {
  session_start();
}

// Obtém o ID do usuário da sessão (ou de outra fonte)
if (isset($_SESSION['id'])) {
  $user_id = $_SESSION['id'];

  // Executa uma consulta SQL para obter os dados do usuário
  $sql = "SELECT nome, email, numTel, cpf, senha, data_nascimento, foto_perfil FROM usuarios WHERE id = $user_id";
  $result = $mysqli->query($sql);

  // Verifica se há resultados
  if ($result && $result->num_rows > 0) {
    // Obtém os dados do usuário e os armazena em uma variável
    $user_data = $result->fetch_assoc();
    // Faça algo com os dados do usuário aqui
  } else {
    echo "User not found.";
  }
} else {
  echo "Session ID not set.";
}

//////////////////////////////////////////////////////////////////////////////////////////

$stmt = $mysqli->prepare("SELECT foto_perfil FROM usuarios WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($foto_perfil);
$stmt->fetch();
$stmt->close();
/////////////////////////////////////////////////////////////////////////////////////////

///

