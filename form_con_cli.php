<?php

include_once("conexao.php");

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
<title>Consulta Cliente</title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style_perfil.css">
</head>
<body>
<div class="conteudo">

<?php echo "<span class='ola'>"; echo "Olá, "; echo "</span>"; echo "<span class='nome'>"; echo $_SESSION["usuarioNome_func"]; echo "</span>";?>

<style>
table, th, td {
    border: 1px solid black;
	margin: 0 auto 0 auto;
	margin-top: 5%;
}
table{
	font-family: Arial;
}
</style>

<br><br>

<fieldset class="field_con">

<legend class="legend">Consulta Cliente</legend>

<table>
  <tr>
    <th>RM</th>
    <th>Nome</th>
	<th>Email</th>
	<th>CPF</th>
	<th>CEP</th>
  </tr>
  <?php 
    $cliente = "SELECT * FROM cliente ORDER BY id_cliente ASC";
	$resultado_cliente = mysqli_query($conn, $cliente);
	while($row_cliente = mysqli_fetch_assoc($resultado_cliente)){ 
	
  ?>
  <style>
  </style>
  <tr>
    <td><?php echo $row_cliente['rm_cli'];?></td>
	<td><?php echo $row_cliente['nome_cli'];?></td>
	<td><?php echo $row_cliente['email_cli'];?></td>
	<td><?php echo $row_cliente['cpf_cli'];?></td>
	<td><?php echo $row_cliente['cep_cli'];?></td>
  </tr>
  <?php }?>

</table>

<form action="cliente.php">

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