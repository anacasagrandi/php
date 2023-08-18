<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <!-- Ana Beatriz Fernandes Casa Grandi -->

    <!-- 1° - Números -->
    <h1>Números</h1>

    <?php

echo 2;
echo "<br>";
echo 6;
echo " | Valores inteiros. <br>";
echo 9 + 4;
echo " | Soma de inteiros. <br>";
echo -12;
echo " | Números negativos. <br>";

    ?>

    <hr>

    <h1>Float/Verificação</h1>
    <?php

    $a ="certeza";
    $b = 12.8;

    if(is_float($a)) {
        echo "É float 1! <br>";
    }

    if(is_float($b)) {
        echo "É float 3! <br>";
    }

    if(is_float(6565.63)) {
        echo "É float 7! <br>";
    }

    if(is_float("teste")) {
        echo "É float 4! <br>";
    }

?>
    <hr>

    <!-- 2° -Textos -->
    <h1>Textos</h1>

    <?php
    echo "Texto de aspas duplas <br>";
    echo "Texto de aspas simples <br>";
    echo "Eu disse: 'PHP é top!' <br>";
    echo "Ele disse: 'Muito!' <br>";
    ?>

    <h1>String</h1>

<?php
$str = "GTA.";
$num = 120;

if(is_string($str)) {
    echo "$str é uma string 1 <br>";
}

if(is_string($num)) {
    echo "$num é uma string 2 <br>";
}

if(is_string("asd")) {
    echo "É uma string 3 <br>";
}
?>
   
    <!-- 3° - booleano -->
    <hr>

    <h1>Booleano</h1>

    <?php
    $a = true;

    if(is_bool($a)) {
        echo "É um booleano 1 <br>";
    }
    ?>

    <h1>Verificação Booleano</h1>

    <?php
    $a = true;

    if(is_bool($a)) {
        echo "É um booleano 10 <br>";
    }

    if(is_bool(0)) {
        echo "É um booleano 21 <br>";
    }

    if(is_bool(false)) {
        echo "É um booleano 2 <br>";
    }
    if(is_bool(0.0 == false)) {
        echo "0 é considerado falso! <br>";
    }
?>

    <hr>    
    <!-- 4°- Array -->

    <h1>Array</h1>

    <?php
    $a = array (2, 3, 4, 10);

    print_r($a);
    echo "<br>";
    echo "<p>O primeiro valor da lista é: $a[0]</p>";
    ?>

    <?php
    $arr = ["Cursos", 118, true];

    echo "<br>";
    print_r($arr);
    echo "<br>";
    print_r($arr[1]);
    echo "<br><p>O Segundo valor da lista é: $arr[1]</p>";
    ?>

</body>
</html>
