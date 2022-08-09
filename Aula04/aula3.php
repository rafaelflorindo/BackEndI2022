<?php
$valores = [1, 2];
$count = $valores[0] + $valores[1];
//echo "Count = " . $count;
$valores[4] = 10;
/*echo "<pre>";
var_dump($valores, $count);
echo "</pre>";
*/

/*echo "<pre>";
print_r($valores);
echo "</pre>";
*/

/*for($i=0; $i < 10; $i++){
    echo "<br>PHP";
}*/

/*$i=0; 
while($i < 10){
    echo "<br>PHP+HTML";
    $i++;
}*/

$i=0; 
do{
    echo "<br>PHP+HTML+CSS";
    $i++;
}while($i < 10);

?>