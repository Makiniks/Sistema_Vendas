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
<title>Estoque</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style_perfil.css">
</head>
<body>
<div class="conteudo">

<?php echo "<span class='ola'>"; echo "Olá, "; echo "</span>"; echo "<span class='nome'>"; echo $_SESSION["usuarioNome_func"]; echo "</span>";?>



<br><br>

<fieldset class="field_cliente">

<legend class="legend">Cadastro Estoque</legend>

<form action="inserir_estoque.php" method="POST">

<div class="form">

<label>RM do Estoque:</label><input type="number" name="rm_estoque" id="rm_venda" class="input" required ><br><br>
<label>Nome Produto:</label><input type="text" name="nome_prod" id="rm_cli" class="input" required ><br><br>
<label>Quantidade:</label><input type="number" name="quantidade" id="quantidade" class="input" required ><br><br>

</div>

<input type="submit" value="Adicionar ao Estoque" class="button_cli">

</form>

<form action="estoque.php">

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