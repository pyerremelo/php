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
        //Quantidade total de segundos informados pelo usuário
        $total = $_GET['segs'] ?? 0;
    ?>
    <main>
        <h2>Calculadora de tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segs">Qual é o total de segundos ?</label>
            <input type="number" name="segs" id="segs" value="<?=$total?>" required min="0">

            <input type="submit" value="Calcular">
        </form>
    </main>
    
    <?php
        $sobra = $total;
        //Tempo em semanas
        $sem = intdiv($sobra,604_800);
        $sobra = $sobra % 604_800;

        //Tempo em dias
        $dias = intdiv($sobra,86_400);
        $sobra = $sobra % 86_400;

        //Tempo em horas
        $hrs = intdiv($sobra, 3_600);
        $sobra = $sobra % 3_600;

        //Tempo em minutos
        $min = intdiv($sobra, 60);
        $sobra = $sobra % 60;

        //Tempo em segundos
        $segs = $sobra;
    ?>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($total,0,",",".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$sem?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$hrs?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$segs?> segundos</li>
        </ul>
    </section>

</body>
</html>