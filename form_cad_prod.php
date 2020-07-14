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
<title>Produto</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style_perfil.css">
</head>
<body>
<div class="conteudo">

<?php echo "<span class='ola'>"; echo "Olá, "; echo "</span>"; echo "<span class='nome'>"; echo $_SESSION["usuarioNome_func"]; echo "</span>";?>



<br><br>

<fieldset class="field_prod">

<legend class="legend">Cadastro Produto</legend>

<form action="inserir_produto.php" method="POST">

<div class="form">

<label>Nome:</label><input type="text" name="nome_prod" id="nome_prod" class="input" required><br><br>
<label>Preço:</label><input type="number" name="preco_prod" id="preco" class="input" required><br><br>
<label>RM:</label><input type="number" name="rm_prod" id="rm_prod" class="input" required ><br><br>


</div>

<input type="submit" value="Cadastrar Produto" class="button_cli" onclick="return validar()">

</form>

<form action="produto.php">

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