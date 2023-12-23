<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP</title>
    <style>
        .nota {
            height: 50px;
            margin: 7px;
        }
    </style>
</head>
<body>
    <?php
        //Quantidade de dinheiro informado pelo usuário
        $dinheiro = $_GET['dindin'] ?? 0;
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dindin">Qual o valor que você deseja sacar ? (R$)</label>
            <input type="number" name="dindin" id="dindin" value="<?=$dinheiro?>" step="1" min="1" required>
            <p style="font-size: 0.7em;">*Valores disponíveis: R$1,00; R$2,00; R$5,00; R$10,00; R$20,00; R$50,00 e R$100,00</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $sobra = $dinheiro;
        //Quantidade de notas de 100
        $n100 = floor($sobra / 100);
        $sobra %= 100;
        //Quantidade de notas de 50
        $n50 = floor($sobra / 50);
        $sobra %= 50;
        //Quantidade de notas de 20
        $n20 = floor($sobra / 20);
        $sobra %= 20;
        //Quantidade de notas de 10
        $n10 = floor($sobra / 10);
        $sobra %= 10;
        //Quantidade de notas de 5
        $n5 = floor($sobra / 5);
        $sobra %= 5;
        //Quantidade de notas de 2
        $n2 = floor($sobra / 2);
        $sobra %= 2;
        //Quantidade de moedas de 1
        $n1 = floor($sobra / 1);
        $sobra %= 1;
    ?>
    <section>
        <h2>Saque de R$<?=number_format($dinheiro, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas/moedas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" class="nota" alt=""> x<?=$n100?></li>
            <li><img src="imagens/50-reais.jpg" class="nota" alt=""> x<?=$n50?></li>
            <li><img src="imagens/20-reais.jpg" class="nota" alt=""> x<?=$n20?></li>
            <li><img src="imagens/10-reais.jpg" class="nota" alt=""> x<?=$n10?></li>
            <li><img src="imagens/5-reais.jpg" class="nota" alt=""> x<?=$n5?></li>
            <li><img src="imagens/2-reais.jpg" class="nota" alt=""> x<?=$n2?></li>
            <li><img src="imagens/1-real.jpg" class="nota" alt=""> x<?=$n1?></li>
        </ul>
    </section>
</body>
</html>