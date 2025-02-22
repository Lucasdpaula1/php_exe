<?php 


  $create_button = true;
  // Escreva um código que classifique uma nota em "A" (>= 9), "B" (>= 7), "C" (>= 5)
  class School{
    private string $register; //destinado ao número da mátricula do aluno
    public int $grade;  // destinado a série do aluno
    public function Register_into_School($name,$age){
    
    }
   


  }
  $name = 'lucas';
  $age = 20;
  $dade = ''; 
  if($create_button){echo "<button id='btnSimular'>Clique aqui para ver a lista de alunos</button>";}
  echo "<p id='resposta'></p>";
  echo "
  <script> 
  const button = document.getElementById('btnSimular');
  if(button){
    const CreateInput = document.createElement('input');
    console.log(CreateInput);
    document.body.appendChild(CreateInput);
    button.addEventListener('click',(event) =>{
      const alunoName = CreateInput.value
      if(!alunoName){
      alert('o input não pode ficar vazio')
      return;
      }
      const name = '$name';
      const age = $age;
      localStorage.setItem('name',name);
      localStorage.setItem('age',age);
      console.log('butão foi clicado')
      const xhr = new XMLHttpRequest()
      xhr.open('POST', 'test.php', true);
      console.log(xhr);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function()  {
        if (xhr.readyState == 4 && xhr.status == 200) {
        console.log('eu entrei aqui ');
          document.getElementById('resposta').innerHTML = xhr.responseText;
          }
          
          
          
          }
          xhr.send('aluno=' +  encodeURIComponent(alunoName))

      })
          }else{
            console.log('não tem butão na página')}
          
          
          
          </script>";
          
          ?>