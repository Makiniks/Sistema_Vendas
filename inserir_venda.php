<?php

    include_once("conexao.php");

    $rm_venda = $_POST['rm_venda'];
    $rm_cli = $_POST['rm_cli'];
    $rm_prod = $_POST['rm_prod'];
	$quantidade = $_POST['quantidade'];

	
	
	
	$pegaRm = mysqli_query($conn, "SELECT * FROM venda WHERE rm_venda = '$rm_venda'");	
	$pegaRm_cli = mysqli_query($conn, "SELECT * FROM cliente WHERE rm_cli = '$rm_cli'");	
	$pegaRm_prod = mysqli_query($conn, "SELECT * FROM produto WHERE rm_prod = '$rm_prod'");	
	
	if(mysqli_num_rows($pegaRm) == 1){
		echo "<script language='javascript' type='text/javascript'>alert('Esta venda ja esta cadastrada em nossos registros');window.location.href='venda.php'</script>";
		exit;
	}
	
	else if(mysqli_num_rows($pegaRm_cli) == 0){
		echo "<script language='javascript' type='text/javascript'>alert('Este cliente nao esta cadastrado em nossos registros');window.location.href='venda.php'</script>";
		exit;
	}
	
	else if(mysqli_num_rows($pegaRm_prod) == 0){
		echo "<script language='javascript' type='text/javascript'>alert('Este produto nao esta cadastrado em nossos registros');window.location.href='venda.php'</script>";
		exit;
	}
	
			
		
	
    $result_usuario = "INSERT INTO venda(rm_venda, rm_cli, rm_prod, quantidade) VALUES ('$rm_venda','$rm_cli', '$rm_prod', '$quantidade')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script language='javascript' type='text/javascript'>alert('Produto enviado com sucesso!');window.location.href='venda.php'</script>";
                ;    
            }else{
                echo "
                    <script language='javascript' type='text/javascript'>alert('Nao foi possivel enviar este produto');window.location.href='venda.php'</script>"
                ;    
            }
	
		
?>
?>