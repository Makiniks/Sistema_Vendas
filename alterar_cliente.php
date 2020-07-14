<?php

    include_once("conexao.php");

    $nome_cli = $_POST['nome_cli'];
	$email_cli = $_POST['email_cli'];
	$rm_cli = $_POST['rm_cli'];
	$cpf_cli = $_POST['cpf_cli'];
	$cep_cli = $_POST['cep_cli'];	
	$senha_cli = md5($_POST['senha_cli']);
	$confirmasenha_cli = md5($_POST['confirmasenha_cli']);
	
	
	
	$pegaRm = mysqli_query($conn, "SELECT * FROM cliente WHERE rm_cli = '$rm_cli'");	
	
	if(mysqli_num_rows($pegaRm) == 0){
		echo "<script language='javascript' type='text/javascript'>alert('Este RM NÃO esta cadastrado em nossos registros');window.location.href='cliente.php'</script>";
	}
		else{
		
	
	
    $result_usuario = "UPDATE cliente SET nome_cli = '$nome_cli', email_cli = '$email_cli', rm_cli = '$rm_cli', cpf_cli = '$cpf_cli', cep_cli = '$cep_cli', senha_cli = '$senha_cli', confirmasenha_cli = '$confirmasenha_cli' WHERE rm_cli = '$rm_cli'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Usuario alterado com sucesso!');window.location.href='cliente.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar este usuario');window.location.href='cliente.php'</script>"
                ;    
            }
	}

?>
