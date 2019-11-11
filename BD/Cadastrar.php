<?php
session_start();
include("Conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

/*Esse IF resulta em uma pesquisa que faz com que o usuario que ja fez o cadastro seja avisado, voltando para o inicio*/

if($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    header('Location: ../Cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, email, data_cadastro) VALUES ('$nome', '$usuario', '$senha', '$email', NOW())";

if($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

header("Location:../Login.php");
exit;

?>