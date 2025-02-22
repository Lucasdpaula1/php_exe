<?php
//   if ($idade >= 18) {
//     $status = "Maior de idade";
// } else {
//     $status = "Menor de idade";
// } 
// forma mais simplificada utilizando um operador ternário para enxugar a condição anterior e deixar o código mais legível!
$age = random_int(0,100);
$status = $age >= 18 ? 'Maior de idade' : 'Menor de idade';
echo $status
?>