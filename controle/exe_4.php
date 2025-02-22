<?php
// switch ($statusCode) {
//   case 200:
//       echo "Sucesso";
//       break;
//   case 404:
//       echo "Não encontrado";
//       break;
//   default:
//       echo "Erro desconhecido";
// }
  $statusCode = 200;
  $result = match($statusCode){
    200 => 'Sucesso',
    404 => 'Não encontrado',
    default => 'Erro desconhecido'

  };
  echo $result;
  ?>