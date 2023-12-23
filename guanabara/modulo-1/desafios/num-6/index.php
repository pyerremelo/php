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
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;//divisor = 1 pois não tem como dividir por 0
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>

        <h3>Modo Pyerre</h3>
        <p>Dividendo: <?= $dividendo?> </p>
        <p>Divisor: <?= $divisor?></p>
        <p>Resultado: <?= intdiv($dividendo,$divisor)?></p>
        <p>Resto: <?= $dividendo % $divisor?></p>

        <h3>Modo Guanabara</h3>
        <?php
            //Cálculos
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo?></td>
                <td><?= $divisor?></td>
            </tr>
            <tr>
                <td><?= $resto?></td>
                <td><?= $quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>