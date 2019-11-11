<?php 
session_start();
include('Conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: Login.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

/*Autenticação de Conta*/

if($row == 1) {
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['usuario'] = $usuario_bd['usuario'];
    header('Location: Painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../Login.php');
    exit();
}