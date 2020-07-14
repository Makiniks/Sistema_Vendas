<?php

    include_once("conexao.php");

    $rm_estoque = $_POST['rm_estoque'];
	$nome_prod = $_POST['nome_prod'];
	$quantidade = $_POST['quantidade'];


	
	
	
	$pegaRm = mysqli_query($conn, "SELECT * FROM estoque WHERE rm_estoque = '$rm_estoque'");	
	
	if(mysqli_num_rows($pegaRm) == 1){
		echo "<script language='javascript' type='text/javascript'>alert('Este estoque ja esta cadastrado em nossos registros');window.location.href='estoque.php'</script>";
	}
		else{
		
	
	
    $result_usuario = "INSERT INTO estoque(rm_estoque, nome_prod, quantidade) VALUES ('$rm_estoque','$nome_prod', '$quantidade')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Estoque cadastrado com sucesso!');window.location.href='estoque.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar este estoque');window.location.href='estoque.php'</script>"
                ;    
            }
	}

?>
