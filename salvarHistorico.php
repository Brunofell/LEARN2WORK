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
    // Redireciona o usuário para a página de visualização do vídeo
    header('Location: telavideo.php');
    exit();
  } else {
    echo "Erro ao salvar o histórico.";
  }
}
?>