<?php
include('protectADM.php');
include('conexao.php');

$usu_codigo = intval($_GET['usuario']);

$sql_code = "DELETE FROM usuarios WHERE id = $usu_codigo";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);

if($sql_query){
    echo "
    <script>
    alert('O usuario foi deletado com sucesso');
    </script>";
    header("Location: tabelas.php");
}else{
    echo "
    <script>
    alert('Não foi possível deletar o user.');
    </script>";
    header("Location: tabelas.php");
}
    


?>