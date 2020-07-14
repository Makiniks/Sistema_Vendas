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

 <script type="text/javascript">
		function validar(){
			var senha_cli = form_cad_cli.senha_cli.value;
			var confirmasenha_cli = form_cad_cli.confirmasenha_cli.value;
			var rm_cli = form_cad_cli.rm_cli.value;
		
			
			if(senha_cli != confirmasenha_cli){
				alert('Senhas diferentes');
				form_cad_cli.confirmasenha_cli.focus();
				return false;
			}
			
			
		}
	</script>

<br><br>

<fieldset class="field_cliente">

<legend class="legend">Alterar Cliente</legend>

<form action="alterar_cliente.php" method="POST" name="form_cad_cli">

<div class="form">

<label>Digite o RM do cliente:</label><input type="number" name="rm_cli" id="rm_cli" class="input" required ><br><br>
<label>Novo nome:</label><input type="text" name="nome_cli" id="nome_cli" class="input" required><br><br>
<label>Novo email:</label><input type="email" name="email_cli" id="email_cli" class="input" required><br><br>
<label>Novo CPF:</label><input type="text" name="cpf_cli" id="cpf_cli"class="input" required><br><br>
<label>Novo CEP:</label><input type="text" name="cep_cli" id="cep_cli"class="input" required><br><br>
<label>Nova senha:</label><input type="password" name="senha_cli" id="senha_cli"class="input" required><br><br>
<label>Nova confirma senha:</label><input type="password" name="confirmasenha_cli" id="confirmasenha_cli"class="input" required><br><br>

</div>

<input type="submit" value="Alterar Cliente" class="button_cli" onclick="return validar()">

</form>

<form action="cliente.php">

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