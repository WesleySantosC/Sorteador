<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatorios</h1>
        <?php 
        
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);

        echo "Gerando um número aleatorio entre 0 e 100... <br>";
        echo "o valor é <strong>$num;</strong>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>