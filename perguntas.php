<?php ob_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            if(isset($_COOKIE["pergunta"])){
                include 'menu.inc';
                require 'functions.inc';

                $id_pergunta = $_COOKIE["pergunta"];
                $perguntas = organizaPergunta();
                carregaPergunta($id_pergunta, $perguntas);
                include 'rodape.inc';

                echo "Última pontuação: ".$_COOKIE["pontos"];
                echo "</br>Última vez jogada: ".$_COOKIE["tentativa"];
            }
            else{
                echo "<h1>Favor identificar-se antes de jogar</h1>";
                echo "<form action=\"login.php\" method=\"POST\">";
                echo "<input type=\"submit\" value=\"Prosseguir\">";
                echo "</form>";
            }
        ?>
    </body>
</html>