<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
            <ul>
            <li><a href="http://localhost/bruno/aula014--filmes.php">HOME</a></li>
            <?php foreach($generos as $genero):  ?>                
                <li><a href="#"> <?php echo $genero ?></a></li>
            <?php endforeach;   ?>
            </ul>
            <form method="GET" action="busca.php">
                <input type="text" name="trecho">
                <button type="submit">Buscar</button>
            </form>
        </nav>
</body>
</html>