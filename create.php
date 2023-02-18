<?php
//Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// sesseao
session_start();

if(isset($_POST['btn-cadastrar'])):
$erros = array();
$nome = mysqli_escape_string($connect, $_POST['nome']);
$login = mysqli_escape_string($connect, $_POST['login']);
$senha = mysqli_escape_string($connect, $_POST['mesage']);
$sql = "INSERT INTO edicao001 (nome, login, senha, cotas,endereco) VALUES ('$nome', '$login', '$mesage')";
mysqli_set_charset($connect, "utf8");
if(mysqli_query($connect, $sql)):
$_SESSION['mensagem'] = "Cadastrado com sucesso!";
header('Location: ../index.php');
else:
$_SESSION['mensagem'] = "Erro ao cadastrar";
header('Location: ../index.php');
endif;
endif;