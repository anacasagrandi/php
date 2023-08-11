<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>
    <!-- css interno -->
    <style>
        .destaque {color:red;}
        .programar {color:red}
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <p class="programar">Programador: Ana Casa Grandi</p>
    <hr>
    <?php 
//geração de texto (string)
 echo "Chama Sesi-Senai";
// geração de texto estruturado (com tags, estruturado)
echo "<h2> Gerando <span class='destaque'>HTML</span> através do PHP. </h2>";
echo "<h2> Gerando <span class= \"destaque\">HTML</span> através do PHP. </h2>";
?>

<h1>HTML e PHP mesclados</h1>
<p>Parágrafo HTML</p>

<?php
$linguagem = "Linguagem PHP.";
?>
<p>Parágrafo mesclando HTML com <?=$linguagem?> </p>
<p class="programar">Gab fedido</p>
</body>
</html>