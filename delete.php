<?php

include('protect.php');

include('conexao.php');

$user_id = $_SESSION['id'];

$mysqli->query("DELETE from usuarios WHERE id = $user_id");
session_destroy();
header('Location: login.php');
    
   
   
   

