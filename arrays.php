<?php 

$array = array(1,2,3,4,5);
//var_dump($array);

//Uso del explode
$cadena = "1,2,3,4,5";
$array = explode(",", $cadena);
var_dump($array);

$email = 'webmaster@webexperto.com';
$separar = explode('@',$email);
// RESULTADO
foreach ($separar as $val) {
    echo "<br/>".$val;
}

// Para aumentar valores al array
array_push($array, 6);
//var_dump($array);

foreach ($array as $val) {
    echo "<br/>".$val;
}
?>
