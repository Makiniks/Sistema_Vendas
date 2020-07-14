<?php

	session_start();
	
	$_SESSION["usuarioNome_func"];
	$_SESSION["usuarioSenha_func"];
	
	if(!isset($_SESSION["usuarioEmail_func"]) || !isset($_SESSION["usuarioSenha_func"])){
			header("Location: login.php");
			exit;
			}else{
			
?>	

<html>
<head>
<title>Perfil Funcionário</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style_perfil.css">
</head>
<body>
<div class="conteudo">

<?php echo "<span class='ola'>"; echo "Olá, "; echo "</span>"; echo "<span class='nome'>"; echo $_SESSION["usuarioNome_func"]; echo "</span>";?>


<br><br>
<fieldset class="field">
<legend class="legend">Sistema Vendas</legend>
<a href="cliente.php">Cliente</a><br><br>
<a href="produto.php">Produto</a><br><br>
<a href="venda.php">Venda</a><br><br>
<a href="estoque.php">Estoque</a><br><br>
</fieldset>
<br>
<form action="sair.php">
<input type="submit" value="Deslogar" name="deslogar" class="deslogar">
</form>
</div>
</body>
</html>




<?php }?>	