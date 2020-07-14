<?php

session_start();

	$_SESSION["usuarioNome_func"];
	$_SESSION["usuarioEmail_func"];
	$_SESSION["usuarioSenha_func"];

if(!isset($_SESSION["usuarioEmail_func"]) || !isset($_SESSION["usuarioSenha_func"])){
		header("Location: login.php");
		exit;
		}else{
		
?>	

<html>
<head>
<title>Venda</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style_perfil.css">
</head>
<body>
<div class="conteudo">

<?php echo "<span class='ola'>"; echo "Olá, "; echo "</span>"; echo "<span class='nome'>"; echo $_SESSION["usuarioNome_func"]; echo "</span>";?>



<br><br>

<fieldset class="field_prod">

<legend class="legend">Altera Venda</legend>

<form action="alterar_venda.php" method="POST">

<div class="form">

<label>Digite o RM Venda:</label><input type="number" name="rm_venda" id="rm_prod" class="input" required ><br><br>
<label>Novo RM Cliente:</label><input type="number" name="rm_cli" id="nome_prod" class="input" required><br><br>
<label>Novo RM Produto:</label><input type="number" name="rm_prod" id="nome_prod" class="input" required><br><br>
<label>Nova Quantidade:</label><input type="number" name="quantidade" id="nome_prod" class="input" required><br><br>	


</div>

<input type="submit" value="Alterar Venda" class="button_cli">

</form>

<form action="venda.php">

<input type="submit" value="Voltar" class="voltar_cliente">

</form>

</fieldset>

<br>
<form action="sair.php">
<input type="submit" value="Deslogar" name="deslogar" class="deslogar">
</form>
</div>
</body>
</html>




<?php }?>	