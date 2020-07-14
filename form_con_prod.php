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
<title>Produto</title>
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

<legend class="legend">Consulta Produto</legend>

<table>
  <tr>
    <th>RM</th>
    <th>Nome</th>
	<th>Preço</th>
  </tr>
  <?php 
    $produto = "SELECT * FROM produto ORDER BY id_produto ASC";
	$resultado_produto = mysqli_query($conn, $produto);
	while($row_produto = mysqli_fetch_assoc($resultado_produto)){ 
	
  ?>
  <style>
  </style>
  <tr>
    <td><?php echo $row_produto['rm_prod'];?></td>
	<td><?php echo $row_produto['nome_prod'];?></td>
	<td><?php echo $row_produto['preco_prod'];?></td>
  </tr>
  <?php }?>

</table>

<form action="produto.php">

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