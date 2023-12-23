<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
</head>
<body>
    <?php 
        $num = $_GET['num'] ?? 0;
        $quad = $num ** (1/2);
        $cub = $num ** (1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o número <strong><?=number_format($num, 2, ",", ".")?></strong> ,temos:</p>
        <ul>
            <li>A sua raiz quadrada é: <strong><?=number_format($quad, 3, ",", ".")?></strong></li>
            <li>A sua raiz cúbica é: <strong><?=number_format($cub, 3, ",", ".")?></strong></li>
        </ul>
    </section>
</body>
</html>