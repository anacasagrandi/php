<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Loops PHP</title>
</head>
<body>
    <h1 class="destaqueP">Estruturas de Controle e Repetição (Loops)</h1>
    <hr>
    <h2 class="destaque">While (enquanto)</h2>

    <?php
    $i =1;
    while ($i <=5) {
    ?>

    <p><?=$i?></p>

   <?php
    $i ++;
    }
    ?>

<hr>
<!-- _______________________________________________________________________________ -->

    <h2 class="destaque">do/while (repita)</h2>

<?php
     $j =1;
       do { //faça 
?>

<div><h3>Olá</h3></div>

<?php
     $j++; //incrementador

    } while ($j <+3); // Enquanto ($j <=3)
?>
  


<hr>
<!-- _______________________________________________________________________________ -->
    <h2 class="destaque">For</h2>

<?php
    // Laço For
    // para i de 1 até 10 faça

    //Controle; Condição; Atualização
    for($i =1; $i <=10; $i++) {
        //linha abaixo concatena (junta)
        echo $i. " ";
    }

 ?>
 <!-- _______________________________________________________________________________ -->

 <!-- Exercício
      1) Crie um array com os meses do ano
      2) Usando um loop for, acesse e mostre os nomes dos meses dentro de uma lista ordenada
 -->
<hr>
    <h2 class="destaque">Exercício meses</h2>

<?php

    $meses = array("Janeiro", "Fevereiro", "Março", "Abril","Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro");
?>
    <ol>

    <?php
    for ($i = 0; $i <count($meses);
    $i++) {
    echo "<li>" . $meses[$i] . "</li>";
    }
   
    ?>

    </ol>

<!-- _______________________________________________________________________________ -->
<hr>
    <h2 class="destaque">foreach (para cada)</h2>

<ol>


    <!-- 5ª Digitação (Aqui) -->
    

</ol>
<!-- _______________________________________________________________________________ -->
<hr>
    <h2 class="destaque">Array associativo</h2>
<?php
    $clubes = [
        "Corinthians" => "Timão",
        "Palmeiras" => "Porco",
        "São Paulo" => "Tricolor",
        "Santos" => "Peixe",

    ];

    //  6ª Digitação (Aqui) 

?>
<!-- _______________________________________________________________________________ -->
<hr>
    <h2 class="destaque">Matriz (Associativa)</h2>
<?php

$alunos = [

              [
                  "nome" => "Chaves",
                  "idade" => 8

              ],
              [
                  "nome" => "Chapolin",
                  "idade" => 20

              ],
              [
                  "nome" => "Chiquinha",
                  "idade" => 10

              ]
          ];

    foreach($alunos as $aluno){
?>

  <!-- 7ª Digitação (Aqui) -->

<?php
    }
?>

</body>
</html>