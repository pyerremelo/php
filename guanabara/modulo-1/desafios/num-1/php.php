<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 1</title>
</head>
<body>
    
    <main>
        <h1>Resultado final</h1>
        <?php 
            $num = $_GET["numero"] ?? 0;
            $ant = $num - 1;
            echo "<p>O número escolhido foi <strong>$num</strong></p>";
            echo "<p>O seu <em>antecessor</em> é $ant</p>";
            echo "<p>O seu <em>sucessor</em> é ". ($num + 1) ."</p>";
        ?>
        <button onclick="javascript:history.go(-1)"> &#x2B05;Voltar</button>
    </main>
    <!-- Pode ser assim também para retornar com o botão. veja abaixo -->
    <!-- onclick="javascript:window.location.href='index.html'" -->
</body>
</html>