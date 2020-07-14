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
<title>Consulta Venda</title>
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

<legend class="legend">Consulta Venda</legend>

<table>
  <tr>
    <th>RM Venda</th>
    <th>RM Cliente</th>
	<th>RM Produto</th>
	<th>Quantidade</th>
  </tr>
  <?php 
    $venda = "SELECT * FROM venda ORDER BY id_venda ASC";
	$resultado_venda = mysqli_query($conn, $venda);
	while($row_venda = mysqli_fetch_assoc($resultado_venda)){ 
	
  ?>
  <style>
  </style>
  <tr>
    <td><?php echo $row_venda['rm_venda'];?></td>
	<td><?php echo $row_venda['rm_cli'];?></td>
	<td><?php echo $row_venda['rm_prod'];?></td>
	<td><?php echo $row_venda['quantidade'];?></td>
  </tr>
  <?php }?>

</table>

<form action="venda.php">

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