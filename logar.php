<?php
	include("bd.php");
	session_start();
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	$solicita = "SELECT nome, senha FROM users WHERE email='$email'";
	$resultado = mysqli_query($conexao, $solicita);
	
	 while($fetch = mysqli_fetch_row($resultado)){
	 	if($senha == $fetch[1]){
	 	    $_SESSION["email"]= $email; 
	 		echo "success";
	 	}
	 	else{
	 		echo "Usuario ou senha incorretos";
	 	}
    }?>