<?php

    include_once("conexao.php");


	$rm_prod = $_POST['rm_prod'];
	
	
	
	$pegaRm = mysqli_query($conn, "SELECT * FROM produto WHERE rm_prod = '$rm_prod'");	
	
	if(mysqli_num_rows($pegaRm) == 0){
		echo "<script language='javascript' type='text/javascript'>alert('Este produto NÃO esta cadastrado em nossos registros');window.location.href='produto.php'</script>";
	}
		else{
		
	
	
    $result_usuario = "DELETE FROM produto WHERE rm_prod = $rm_prod";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Produto excluido com sucesso!');window.location.href='produto.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel excluit este produto');window.location.href='produto.php'</script>"
                ;    
            }
	}

?>
?>