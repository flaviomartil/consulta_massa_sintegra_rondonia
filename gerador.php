<?php
$contador = 0;
$valores = array();
do{
    $valor = rand(3300000,3400000);
    if(in_array($valor,$valores)==false){
        $contador++;
        $valores[$contador] = $valor;
    }

}while($contador < 10000);

echo "<pre>";
print_r($valores);
?>