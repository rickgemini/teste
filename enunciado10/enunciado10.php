<?php

function novoTexto(int $tamanhoTexto = 0, $texto = '') {
    $novaString = '';
    $minhaString = '';
    $i = 0;
    while($i < $tamanhoTexto) {
        if($i % 2 === 0){
            $novaString = strtoupper(substr($texto,$i,1));
        }else {
            $novaString = strtolower(substr($texto,$i,1));
        }
        $minhaString = $minhaString.$novaString;
        $i++;
    }
    return $minhaString;
}

$text1 = 'cARAVELAS';
$tamanhoString = strlen($text1);
$texto1 = novoTexto($tamanhoString, $text1);

echo "$text1    $texto1<br>";

$text1 = 'Caravelas Portuguesas';
$tamanhoString = strlen($text1);
$texto1 = novoTexto($tamanhoString, $text1);
echo "$text1    $texto1<br>";

$text1 = 'caravelas';
$tamanhoString = strlen($text1);
$texto1 = novoTexto($tamanhoString, $text1);
echo "$text1    $texto1<br>";
