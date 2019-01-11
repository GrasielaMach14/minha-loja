<?php include("cabecalho.php");?>

<?php
		$nome = $_GET["nome"];
		$preco = $_GET["preco"];
?>
	<p class="alert-sucess">Produto <?= $nome; ?> adicionado com sucesso! </br>Preço: R$<?= $preco; ?></p>
	

<?php include("rodape.php");?>