<?php
include('conexao.php');
// Define o diretório de destino para salvar o vídeo
$diretorioDestino = "Cursos/video/";

// Verifica se o diretório de destino já existe
if (!is_dir($diretorioDestino)) {
  // Tenta criar o diretório
  if (!mkdir($diretorioDestino, 0755, true)) {
    // Caso não seja possível criar o diretório, exiba uma mensagem de erro ou lide com o problema de acordo com sua necessidade
    echo "Erro ao criar o diretório de destino.";
    exit;
  }
}

// Verifica se um arquivo foi enviado
if ($_FILES["video"]["error"] == UPLOAD_ERR_OK) {


  // Gera um nome único para o vídeo
  $nomeVideo = uniqid("video_") . ".mp4";

  // Move o arquivo para o diretório de destino
  move_uploaded_file($_FILES["video"]["tmp_name"], $diretorioDestino.$nomeVideo);

  // Armazena os detalhes do vídeo no banco de dados
  $descricao = $_POST['descricao'];
  $titulo = $_POST['titulo'];
  $caminhoDoVideo =  $diretorioDestino.$nomeVideo;

  $mysqli->query("INSERT INTO video(descricao, titulo, nome_arquivo) VALUES('$descricao', '$titulo', '$caminhoDoVideo')");
  header('location: adm.php');

  // Redireciona o administrador para a página de sucesso
  header("Location: adm.php");
  exit;
} else {
  // Trate erros de upload aqui
}
?>