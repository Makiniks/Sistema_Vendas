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
	
	if(mysqli_num_rows($pegaRm) == 1){
		echo "<script language='javascript' type='text/javascript'>alert('Este usuario ja esta cadastrado em nossos registros');window.location.href='cliente.php'</script>";
	}
		else{
		
	
	
    $result_usuario = "INSERT INTO cliente(nome_cli, email_cli, rm_cli, cpf_cli, cep_cli, senha_cli, confirmasenha_cli) VALUES ('$nome_cli','$email_cli', '$rm_cli', '$cpf_cli', '$cep_cli', '$senha_cli','$confirmasenha_cli')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='cliente.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar este usuario');window.location.href='cliente.php'</script>"
                ;    
            }
	}

?>
?>