<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[4];

echo ("Apresentando o componente na posição 4 do array: $umaIdade" ).PHP_EOL.PHP_EOL; 



$idadeList = [21, 23, 19, 25, 30, 41, 18];

for ($i = 0; $i < count($idadeList); $i++) {
    echo ("Apresentando o componente na posição $i do array: $idadeList[$i]").PHP_EOL;
}

echo ("Exercício nomes").PHP_EOL;

$nomes = array("João","Maria","Pedro","Ana");

for($indice=0; $indice<count($nomes) ;$indice++){
    echo $nomes[$indice].PHP_EOL;
}