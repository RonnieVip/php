<?php

echo "Aula 1 PHP";
//toda variável começa com o simbolo $

//br para quebra de linha
echo"<br>";

$nome = "Ronnie";


var_dump($nome);

$salario = 15000;

echo"<br>";

var_dump($salario);

$salario = 15000.50;

echo"<br>";

var_dump($salario);

$verifica = true;

echo "<br>";

var_dump($verifica);

$numero1=100;
$numero2=50;

$soma            = $numero1 + $numero2;
$subtracao       = $numero1 - $numero2;
$multiplicacao   = $numero1 * $numero2;
$divisao         = $numero1 / $numero2;

echo "<br>";

echo "<br>".$soma;
echo "<br>".$subtracao;
echo "<br>".$multiplicacao;
echo "<br>".$divisao;

echo "<br>Soma: $soma<br>Subtração: $subtracao<br>
Multiplicação: $multiplicacao<br>Divisão: $divisao";