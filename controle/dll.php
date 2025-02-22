<?php
 function aluno($name){
  return 'ola '. $name;
}
if (isset($_POST['aluno'])) {
  
  echo aluno($_POST['aluno']); // Retorna a saudação ao cliente
}