<?php
$host = "localhost";
$user = "id8362704_root";
$pass = "root123";
$db = "id8362704_cidades";

$conexao = mysqli_connect($host, $user, $pass, $db) or die('Conexão falhou, erro: '.mysqli_connect_error());
mysqli_set_charset($conexao, "utf8");
$solicita = "CREATE TABLE IF NOT EXISTS users(
			ID int NOT NULL AUTO_INCREMENT,
			nome varchar(50) NOT NULL,
			email varchar(70) NOT NULL,
			senha varchar(50) NOT NULL,
			news int NOT NULL,
			PRIMARY KEY(ID))";

$resultado = mysqli_query($conexao, $solicita);
?>