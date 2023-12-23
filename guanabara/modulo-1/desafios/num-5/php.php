<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 5</title>
</head>
<body>
    <main>
        <h1>Analizador de Número Real</h1>
        <?php
            //$num é o valor que o usuário vai digitar
            $num = $_GET["num"] ?? 0;

            echo "<p>Analizando o número <strong>".number_format($num, 3, ",", ".")."</strong> informado pelo usuário.</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo"<ul>
                    <li>A parte inteira do número é: <strong>". number_format($int, 0, ",", ".") ."</strong></li>
                    <li>A parte fracionária do número é: <strong>".number_format($fra, 3, ",", ".") ."</strong></li>
                </ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>