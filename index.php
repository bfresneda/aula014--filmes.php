<?php

include('./includes/generos.php');
include('./includes/filmes.php');

// echo('<pre>');
// print_r($generos);
// echo('</pre>');

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Clube do Filme</title>

	<!-- Meu css -->
	<link rel="stylesheet" href="./assets/css/geral.css">
	<link rel="stylesheet" href="./assets/css/index.css">

</head>
<body>
	<?php
	 include('./includes/menu.php')
	?>	
	<main>
		<section>
		<?php foreach($filmes as $pos=>$filme):   ?>
			<article>
				<a href="filme.php?pos=<?= $pos ?>">
					<img src="./assets/img/cartazes/cartaz-<?= $pos ?>.png" alt="<?=$filme['titulo'] ?>">
					<span>Ver +</span>
				</a>
			</article>
			<?php endforeach ?>
		</section>
	</main>
</body>
</html>