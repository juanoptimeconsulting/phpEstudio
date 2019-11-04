<?php
$n_estudiante = 'Juan Pablo Diaz';

$array_notas = [
'matematicas' => 25,
'español' => 1,
'ingles' => 25
];
$resultado = 0;
foreach ($array_notas as $notas => $value){
   
  $resultado=$resultado+$value; 
  $promedio = $resultado/count($array_notas);

}
echo "el promedio de $n_estudiante es $promedio";
//echo "el resultado final es ". $total;

?> 