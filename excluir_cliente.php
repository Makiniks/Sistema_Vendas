<?php

    include_once("conexao.php");


	$rm_cli = $_POST['rm_cli'];
	
	
	
	$pegaRm = mysqli_query($conn, "SELECT * FROM cliente WHERE rm_cli = '$rm_cli'");	
	
	if(mysqli_num_rows($pegaRm) == 0){
		echo "<script language='javascript' type='text/javascript'>alert('Este RM NÃO esta cadastrado em nossos registros');window.location.href='cliente.php'</script>";
	}
		else{
		
	
	
    $result_usuario = "DELETE FROM cliente WHERE rm_cli = $rm_cli";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Usuario excluido com sucesso!');window.location.href='cliente.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel excluit este usuario');window.location.href='cliente.php'</script>"
                ;    
            }
	}

?>