<?php

    include_once("conexao.php");

    $rm_estoque = $_POST['rm_estoque'];
	$nome_prod = $_POST['nome_prod'];
	$quantidade = $_POST['quantidade'];

	
	
	
	$pegaRm = mysqli_query($conn, "SELECT * FROM estoque WHERE rm_estoque = '$rm_estoque'");	
	
	if(mysqli_num_rows($pegaRm) == 0){
		echo "<script language='javascript' type='text/javascript'>alert('Este estoque NÃO esta cadastrado em nossos registros');window.location.href='estoque.php'</script>";
		exit;
	}
	
	else{
	
    $result_usuario = "UPDATE estoque SET rm_estoque = '$rm_estoque', nome_prod = '$nome_prod', quantidade = '$quantidade' WHERE rm_estoque = '$rm_estoque'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Estoque alterado com sucesso!');window.location.href='estoque.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar este estoque');window.location.href='estoque.php'</script>"
                ;    
            }
	
	}
?>
?>