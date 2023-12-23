<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício PHP</title>
</head>
<body>
    <main>
        <pre>
            <?php
                //1º:Nome do cookie
                //2º:O conteúdo/valor dese cookie
                //3º:O tempo de "vida"/duração desse cookie (em segundos)
                setcookie("dia-da-semana", "SÁBADO", time() + 3600); //3600 => 1hr

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);

                //ENV vem de environment = ambiente
                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                // foreach (getenv() as $c => $v) {
                //     echo "<br> $c -> $v ";
                // }
                
                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>