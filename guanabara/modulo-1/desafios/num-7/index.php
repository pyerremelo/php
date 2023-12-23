<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio php</title>
</head>
<body>
    <?php
        #Pode-se usar o "_" como separdor de milhar no php que não haverá erro
        //Salario da pessoa
        $salario = $_GET['salario'] ?? 0;
        //salario minimo atual
        $minimo = 1_320;
        //quantidade de salários minimos existentes no salario infomado
        $qtd = intdiv($salario, $minimo);
        //total (parte inteira)
        $total = $qtd * 1_320;
        //parte fracionaria/centavos do salario
        $complementar =  $salario - $total; //$salario / ($qtd * 1320) não funcionou =(     
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="salario" id="salario" min="1" step="0.01" value="<?= $salario ?>">
            <p>Condideremdo um salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Quem recebe um sálario de R\$".number_format($salario, 2, "," , ".").", ganha <strong>$qtd salários mínimos</strong> + R\$".number_format($complementar, 2, ",", ".").".</p>"
        ?>
    </section>
</body>
</html>