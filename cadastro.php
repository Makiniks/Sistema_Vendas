<?php

session_start();


if(isset($_SESSION["usuarioEmail_func"]) || isset($_SESSION["usuarioSenha_func"])){
		header("Location: perfil.php");
		exit;
		}else{
		
?>	
<html>
<head>
<title> Cadastro do Funcionário </title>
<link rel="stylesheet" href="cadastro_produto.css">
 <meta charset="UTF-8">
</head>
<body>
 <script type="text/javascript">
		function validar(){
			var senha_func = cadastro.senha_func.value;
			var confirmasenha_func = cadastro.confirmasenha_func.value;
			
			if(senha_func != confirmasenha_func){
				alert('Senhas diferentes');
				cadastro.confirmasenha_func.focus();
				return false;
			}
						
		}
	</script>
<div class="legend">
<fieldset>
<legend>Cadastro Funcionário</legend>	
	<div class="form">
<form method="POST" action="inserir_funcionario.php" name="cadastro">
<br><br>
<label>Nome:</label><input type="text" name="nome_func" required id="nome_func"><br><br>
<label>Email:</label><input type="text" name="email_func" required id="email_func"><br><br>
<label>Senha:</label><input type="password" name="senha_func" required id="senha_func"><br><br>
<label>Confirmar Senha:</label><input type="password" name="confirmasenha_func" required id="confirmasenha_func"><br><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" onclick="return validar()">
</form>
<form action="login.php">
<input type="submit" value="Voltar"><br>
</form>
</div>
</fieldset>
</div>
</body>
</html>

		<?php }?>