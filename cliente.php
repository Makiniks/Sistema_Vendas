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
<title>Cliente</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style_perfil.css">
</head>
<body>
<div class="conteudo">

<?php echo "<span class='ola'>"; echo "Olá, "; echo "</span>"; echo "<span class='nome'>"; echo $_SESSION["usuarioNome_func"]; echo "</span>";?>


<br><br>

<fieldset class="field">

<legend class="legend">Sobre Cliente</legend>

<a href="form_cad_cli.php"><button class="botao">Cadastrar</button></a>
<a href="form_alt_cli.php"><button class="botao">Alterar dados</button></a>
<a href="form_con_cli.php"><button class="botao">Consultar</button></a>
<a href="form_exc_cli.php"><button class="botao">Excluir</button></a>

<form action="perfil.php">

<input type="submit" value="Voltar" class="voltar_perfil">

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