<?php
	// Incluindo $filmes
	include('./includes/filmes.php');

	// Incluindo $generos
	include('./includes/generos.php');

	$pos = $_GET['pos'];


	// verificando se $pos é uma posição invalida do meu array

	if($pos >= count($filmes)){
		echo ('Filme não encontrado <a href="http://localhost/brunof/aula014/pratica/">Voltar para HOME</a>');
	die();
	}
	$filme = $filmes[$pos];


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title> <?= $filme['titulo'] ?>  </title>

	<!-- Meu estilo -->
	<link rel="stylesheet" href="./assets/css/geral.css">
	<link rel="stylesheet" href="./assets/css/filme.css">
</head>

<body>
	<?php
		include('./includes/menu.php')
		?>
	<!-- <nav>	
		
			<ul>
				<li><a href="http://localhost/brunof/aula014/pratica/">HOME</a></li>
				<?php foreach($generos as $genero){ ?>
				<li><a href="#"><?= $genero  ?></a></li>
				<?php  }?>
			</ul>

		<form method="GET" action="busca.php">
			<input type="text" name="trecho">
			<button type="submit">Buscar</button>
		</form>
	</nav> -->
	<main>

		<h2> <?= $filme['titulo'] ?> </h2>
		<img src="./assets/img/cartazes/cartaz-<?= $pos?>.png" alt="<?= $filme['titulo'] ?>" class="cartaz">
		<section>

			<div class="sinopse">
				<h5>Sinopse</h5>
				<div> <?= $filme['sinopse']?></div>
			</div>

			<div class="censura">
				<h5>Censura</h5>
				<div><?=  $filme['censura']===0 ? 'Livre' : $filme['censura'] . ' anos' ?></div>
			</div>
			
			<div class="critica">
				<h5>Crítica</h5>
				<div><?= $filme['critica']?></div>
			</div>
		</section>

		<?= $filme['trailer'] ?>>
	</main>
</body>

</html>