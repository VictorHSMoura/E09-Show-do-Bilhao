<?php
    require 'dados.inc';
    $pergunta = $_POST["pergunta"];
    $resposta = $_POST["alternativa"];
    if($resposta == $respostas[$pergunta]){
        $pergunta++;
        echo "Resposta Correta";
        header("location: perguntas.php?id=$pergunta");
    }
    else{
        echo "<h3>Alternativa Errada</h3>";
        echo "<form action=\"gameover.php\" method=\"POST\">";
        echo "<input type=\"hidden\" name=\"certas\" value=\"$pergunta\">";
        echo "<input type=\"submit\" value=\"Prosseguir\">";
        echo "</form>";
    }
?>