<?php
define('HOST'   , '127.0.0.1');
define('USUARIO' , 'root');
define('SENHA', '');
define('DB', 'CP');

/*Criando Conexão com O Banco de Dados*/

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi Possivel conectar');