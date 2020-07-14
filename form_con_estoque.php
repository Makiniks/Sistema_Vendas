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
		<title>Consulta Estoque</title>
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

<legend class="legend">Consulta Estoque</legend>

<table>
  <tr>
    <th>RM Estoque</th>
    <th>Nome Produto</th>
	<th>Quantidade</th>
  </tr>
  <?php 
    $estoque = "SELECT * FROM estoque ORDER BY id_estoque ASC";
	$resultado_estoque = mysqli_query($conn, $estoque);
	while($row_estoque = mysqli_fetch_assoc($resultado_estoque)){ 
	
  ?>
  <style>
  </style>
  <tr>
    <td><?php echo $row_estoque['rm_estoque'];?></td>
	<td><?php echo $row_estoque['nome_prod'];?></td>
	<td><?php echo $row_estoque['quantidade'];?></td>
  </tr>
  <?php }?>

</table>

<form action="estoque.php">

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