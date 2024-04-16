<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilo.css">
	<title>Avaliacao</title>
	<h1 class="bla"></h1>
</head>
<body>
<img src="gato.jpg" style="height: 200px;"/>
<img src="cachorro.jpg" style="height: 200px;"/>
</body>
</html>

<?php
	require_once "Produto.class.php";
	require_once "Fornecedor.class.php";
	
	
	$fornecedor1 = new Fornecedor("1111111", "Faber Castel");
	$fornecedor2 = new Fornecedor("2222222", "Pilot");
	
	
	$produto = new Produto("Lápis Preto", "Lápis preto número 2", 1.20, array($fornecedor1, $fornecedor2));
	
	$fornecedor3 = new Fornecedor("333333333", "Leoleo");
	$produto->setFornecedor($fornecedor3);
	$fornecedor4 = new Fornecedor("44444444", "Tilibra");
	/*echo "<pre>";
	var_dump($produto);
	echo "</pre>";*/
	
	echo "<h1>Produto</h1>";
	echo "Nome:{$produto->getNome()}<br>";
	echo "Descrição: {$produto->getDescricao()}<br>";
	echo "Preço: " . number_format($produto->getPreco(), 2, ',','.') . "<br>";
	echo "<h2>Fornecedor(es)</h2>";
	//echo "Razão Social: {$produto->getFornecedor()[0]->getRazao_social()}<br>";
	foreach($produto->getFornecedor() as $objeto)
	{
		echo "CNPJ: {$objeto->getCnpj()}<br>";
		echo "Razão Social: {$objeto->getRazao_social()}<br><br>";
	}
?>