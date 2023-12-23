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
        //Ano de nascimento da pessoa
        $nasc = $_GET['nasc'] ?? 2000;
        //ano do futuro que ela vai digitar
        $anofut = $_GET['anofut'] ?? date("Y");
        //idade que ela terá no futuro
        $idade = $anofut - $nasc;
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Em que ano você nasceu ?</label>
            <input type="number" name="nasc" id="nasc" max="<?=date("Y")-1?>" required value="<?=$nasc?>">

            <label for="anofuturo">Quer saber a sua idade em  que ano ? (atualmente estamos em <strong><?=date("Y")?></strong>)</label>
            <input type="number" name="anofut" id="anofut" min="<?=$nasc + 1?>" required value="<?=$anofut?>">

            <input type="submit" value="Qual será a minha idade ?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$anofut?>!</p>
    </section>
</body>
</html>