<?php

	include("bd.php");
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$news = 0;
	
	$solicita = "SELECT email FROM users WHERE email='$email'";
	$resultado = mysqli_query($conexao, $solicita);
	if(mysqli_num_rows($resultado) > 0){
		echo "Email já cadastrado";
	}else{
		$solicita = "INSERT INTO users (nome, email, senha, news) VALUES ('$nome', '$email', '$senha', '$news')";
		$resultado = mysqli_query($conexao, $solicita);
		echo "success";
	}
?>