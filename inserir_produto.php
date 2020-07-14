<?php

    include_once("conexao.php");

    $nome_prod = $_POST['nome_prod'];
	$preco_prod = $_POST['preco_prod'];
	$rm_prod = $_POST['rm_prod'];


	
	
	
	$pegaRm = mysqli_query($conn, "SELECT * FROM produto WHERE rm_prod = '$rm_prod'");	
	
	if(mysqli_num_rows($pegaRm) == 1){
		echo "<script language='javascript' type='text/javascript'>alert('Este produto ja esta cadastrado em nossos registros');window.location.href='produto.php'</script>";
	}
		else{
		
	
	
    $result_usuario = "INSERT INTO produto(nome_prod, preco_prod, rm_prod) VALUES ('$nome_prod','$preco_prod', '$rm_prod')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Produto cadastrado com sucesso!');window.location.href='produto.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel cadastrar este produto');window.location.href='produto.php'</script>"
                ;    
            }
	}

?>
