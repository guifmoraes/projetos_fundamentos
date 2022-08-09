<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

//if exist a profile with same usuario
$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro.php');
	exit;
}


//if exist a profile with same email
$sql2 = "select count(*) as total from usuario where email = '$email'";
$result2 = mysqli_query($conexao, $sql2);
//$row2 = mysqli_fetch_assoc($result2);
$row2 = mysqli_num_rows($result2);

if($row2 > 1) {
	
	$_SESSION['email_existe'] = true;
	header('Location: cadastro.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro, email) VALUES ('$nome', '$usuario', '$senha', NOW(),'$email')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro.php');
exit;
?>