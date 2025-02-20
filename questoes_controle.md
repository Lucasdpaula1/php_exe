# Questões de Programação em PHP

1. **`if-else`**

   - Escreva um código que verifique se um número é positivo, negativo ou zero usando `if-else`.

   ```php
   $numero = 10;

   if ($numero > 0) {
       echo "Positivo";
   } elseif ($numero < 0) {
       echo "Negativo";
   } else {
       echo "Zero";
   }
   ```

2. **`switch`**

   - Crie um programa que receba um número de 1 a 7 e exiba o dia da semana correspondente usando `switch`.

   ```php
   $dia = 3;

   switch ($dia) {
       case 1:
           echo "Domingo";
           break;
       case 2:
           echo "Segunda-feira";
           break;
       case 3:
           echo "Terça-feira";
           break;
       case 4:
           echo "Quarta-feira";
           break;
       case 5:
           echo "Quinta-feira";
           break;
       case 6:
           echo "Sexta-feira";
           break;
       case 7:
           echo "Sábado";
           break;
       default:
           echo "Dia inválido";
   }
   ```

3. **Operador Ternário**

   - Reescreva o seguinte código usando o operador ternário:

   ```php
   $idade = 20;
   $status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
   echo $status;
   ```

4. **`match` (PHP 8.0+)**

   - Substitua o seguinte `switch` por uma estrutura `match`:

   ```php
   $statusCode = 404;

   $mensagem = match($statusCode) {
       200 => "Sucesso",
       404 => "Não encontrado",
       default => "Erro desconhecido",
   };

   echo $mensagem;
   ```

5. **`if-elseif-else`**

   - Escreva um código que classifique uma nota em "A" (>= 9), "B" (>= 7), "C" (>= 5) ou "Reprovado" (< 5).

   ```php
   $nota = 8.5;

   if ($nota >= 9) {
       echo "A";
   } elseif ($nota >= 7) {
       echo "B";
   } elseif ($nota >= 5) {
       echo "C";
   } else {
       echo "Reprovado";
   }
   ```

6. **`return` em funções**

   - Crie uma função que receba dois números e retorne o maior deles usando `if-else`.

   ```php
   function maiorNumero($a, $b) {
       if ($a > $b) {
           return $a;
       } else {
           return $b;
       }
   }

   echo maiorNumero(10, 20);
   ```

7. **`include` vs `require`**

   - Explique a diferença entre `include` e `require` e dê um exemplo de uso para cada um.

   ````markdown
   - **`include`**: Inclui um arquivo e, se não for encontrado, emite um aviso (E_WARNING), mas o script continua a ser executado.
   - **`require`**: Inclui um arquivo e, se não for encontrado, emite um erro fatal (E_COMPILE_ERROR), interrompendo a execução do script.

   **Exemplo de `include`:**

   ```php
   include 'config.php';
   ```
   ````

   **Exemplo de `require`:**

   ```php
   require 'database.php';
   ```

   ```

   ```

8. **`try-catch`**

   - Escreva um código que tente dividir dois números e capture uma exceção caso ocorra divisão por zero.

   ```php
   try {
       $numerador = 10;
       $denominador = 0;

       if ($denominador == 0) {
           throw new Exception("Divisão por zero não permitida.");
       }

       $resultado = $numerador / $denominador;
       echo $resultado;
   } catch (Exception $e) {
       echo "Erro: " . $e->getMessage();
   }
   ```

9. **`goto`**

   - Crie um exemplo simples que use `goto` para pular para uma parte específica do código.

   ```php
   $i = 0;

   inicio:
   if ($i < 5) {
       echo $i . "\n";
       $i++;
       goto inicio;
   }
   ```

10. **`declare`**

    - Explique o que a diretiva `declare(strict_types=1)` faz e dê um exemplo de uso.

    ````markdown
    - **`declare(strict_types=1)`**: Ativa o modo estrito de tipagem em PHP, o que significa que as funções e métodos só aceitarão os tipos de dados exatos especificados nos parâmetros e retornos.

    **Exemplo de uso:**

    ```php
    declare(strict_types=1);

    function soma(int $a, int $b): int {
        return $a + $b;
    }

    echo soma(5, 10); // Funciona
    echo soma(5, "10"); // Erro, pois "10" não é um inteiro
    ```
    ````

    ```

    ```
