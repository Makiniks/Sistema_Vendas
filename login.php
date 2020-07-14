<?php

session_start();


if(isset($_SESSION["usuarioEmail_func"]) || isset($_SESSION["usuarioSenha_func"])){
		header("Location: perfil.php");
		exit;
		}else{
		
?>	
<html>
<head>
<title> Login Funcionário </title>
 <meta charset="UTF-8">
</head>
<body>
<div class="legend">
<fieldset>
<legend>Login</legend>	
	<div class="form">
	
<form method="POST" action="valida_func.php">

<br><br>
<label>Email:</label><input type="email" name="email_func" required id="email_func"><br><br>
<label>Senha:</label><input type="password" name="senha_func" required id="senha_func"><br><br>
<input type="submit" value="Logar" id="logar" name="logar">

<a href="cadastro.php">Cadastre-se</a>

</form>

</div>
</fieldset>
</div>
</body>
</html>

		<?php }?>