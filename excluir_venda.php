<?php

    include_once("conexao.php");


	$rm_venda = $_POST['rm_venda'];
	
	
	
	$pegaRm = mysqli_query($conn, "SELECT * FROM venda WHERE rm_venda = '$rm_venda'");	
	
	if(mysqli_num_rows($pegaRm) == 0){
		echo "<script language='javascript' type='text/javascript'>alert('Esta venda NÃO esta cadastrada em nossos registros');window.location.href='venda.php'</script>";
	}
		else{
		
	
	
    $result_usuario = "DELETE FROM venda WHERE rm_venda = $rm_venda";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Venda excluida com sucesso!');window.location.href='venda.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel excluir esta venda');window.location.href='venda.php'</script>"
                ;    
            }
	}

?>
?>