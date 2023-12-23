<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 3</title>
</head>
<body>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php
            //dinheiro do usuário
            $dindin = $_GET["dinheiro"] ?? 0;

            //Cotação do dolar 08/12/2023
            $cotacao = 4.93;

            //valor convertido para dolares
            $dolares = $dindin / $cotacao;

            # Este é o modo mais fácil.
            //echo "Seus R\$<strong>".number_format($dindin, 2, ',', '.')."</strong> equivalem
            // a <strong>US\$".number_format($dolares, 2, '.', ',')."</strong><br><br>";

            # Modo com intercionalização de moedas
            # da biblioteca intl
            $padrao_br = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $padrao_usa = numfmt_create("us", NumberFormatter::CURRENCY);

            echo "<p>Seus <strong>".numfmt_format_currency($padrao_br, $dindin, "BRL")."</strong> equivalem
            a <strong>".numfmt_format_currency($padrao_usa, $dolares, "USD")."</strong><br><br></p>";
            
            echo "<p>*Cotação fixa de R$ <strong>$cotacao</strong> informada diretamente no código</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>