<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $nota1 = $_GET['num1'] ?? 1;
        $peso1 = $_GET['peso1'] ?? 1;

        $nota2 = $_GET['num2'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;

        $ms = ($nota1 + $nota2) / 2;
        $mp = (($nota1 * $peso1) + ($nota2 * $peso2)) / ($peso1 + $peso2);
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="primeiro">Nota 1</label>
            <input type="number" name="num1" id="num1" required value="<?=$nota1?>">
            <label for="peso 1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" min="1" required value="<?=$peso1?>">

            <label for="segundo">Nota 2</label>
            <input type="number" name="num2" id="num2" required value="<?=$nota2?>">
            <label for="peso 2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" min="1" required value="<?=$peso2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Média</h2>
        <p>Analisando os valores <?="$nota1 e $nota2"?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igua a: <?=number_format($ms, 2, ",", ".")?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com os pesos <?="$peso1 e $peso2"?> é igual a: <?=number_format($mp, 2, ",", ".")?>.</li>
        </ul>
    </section>
</body>
</html>