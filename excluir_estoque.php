<?php

    include_once("conexao.php");


	$rm_estoque = $_POST['rm_estoque'];
	
	
	
	$pegaRm = mysqli_query($conn, "SELECT * FROM estoque WHERE rm_estoque = '$rm_estoque'");	
	
	if(mysqli_num_rows($pegaRm) == 0){
		echo "<script language='javascript' type='text/javascript'>alert('Este estoque NÃO esta cadastrado em nossos registros');window.location.href='estoque.php'</script>";
	}
		else{
		
	
	
    $result_usuario = "DELETE FROM estoque WHERE rm_estoque = $rm_estoque";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Estoque excluido com sucesso!');window.location.href='estoque.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel excluir este estoque');window.location.href='estoque.php'</script>"
                ;    
            }
	}

?>
?>