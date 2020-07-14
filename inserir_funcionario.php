<?php

    include_once("conexao.php");

    $nome_func = $_POST['nome_func'];
	$email_func = $_POST['email_func'];
	$senha_func = md5($_POST['senha_func']);
	$confirmasenha_func = md5($_POST['confirmasenha_func']);
	
	
	
	$pegaEmail = mysqli_query($conn, "SELECT * FROM funcionario WHERE email_func = '$email_func'");	
	
	if(mysqli_num_rows($pegaEmail) == 1){
		echo "<script language='javascript' type='text/javascript'>alert('Este email ja esta cadastrado em nossos registros');window.location.href='cadastro.php'</script>";
	}
		else{
		
	
	
    $result_usuario = "INSERT INTO funcionario(nome_func, email_func, senha_func, confirmasenha_func) VALUES ('$nome_func','$email_func','$senha_func','$confirmasenha_func')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='login.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar este usuario');window.location.href='cadastro_cliente.html'</script>"
                ;    
            }
	}

?>