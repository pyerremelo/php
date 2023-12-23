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
        $preco = $_GET['preco'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 1;
        $novo = $preco + ($preco*$reajuste/100);
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" required step="0.01" min="0.10">

            <label for="reajuste">Qual será o percentual de reajuste ? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" value="<?=$reajuste?>" min="0" max="100" step="1" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preco, 2, ",", ".")?> com <strong><?=$reajuste?>% de aumento</strong> vai passar a custar R$<strong><?=number_format($novo, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>

    <script>
        //eclaraçoes automáticas
        mudaValor();
        function mudaValor() {
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>