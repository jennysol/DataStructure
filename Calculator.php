<!-- 
    First lesson with basic concepts of arithmetic operations and loops of repetition
-->

<?php
  do {

    $number = readline("Digite uma operação aritmética: ");
      switch ($number) {
        case "+":
          $number1 = readline("Digite o primeiro número: ");
          $number3 = readline("Digite outro número: ");
          echo 'A soma entre: '.$number1 .' e ' .$number3 .' é: '.($number1 + $number3)."\n";
          $n4 = readline("Você quer continuar usando a calculadora ? ");
          break;
        case '-':
          $number1 = readline("Digite o primeiro número: ");
          $number3 = readline("Digite outro número: ");
          echo 'A subtração entre: '.$number1 .' e ' .$number3 .' é: '.($number1 - $number3)."\n";
          $n4 = readline("Você quer continuar usando a calculadora ? ");
          break;
        case '*':
          $number1 = readline("Digite o primeiro número: ");
          $number3 = readline("Digite outro número: ");
          echo 'A multiplicação entre: '.$number1 .' e ' .$number3 .' é: '.($number1 * $number3)."\n";
          $n4 = readline("Você quer continuar usando a calculadora ? ");
          break;
        case '/':
          $number1 = readline("Digite o primeiro número: ");
          $number3 = readline("Digite outro número: ");
            if ($number1 == 0 or $number3 == 0){
                echo 'Não é possível dividir por zero'."\n";
                break;
            }
            else{
                echo 'A divisão entre: '.$number1 .' e ' .$number3 .' é: '.($number1 / $number3)."\n";
                $n4 = readline("Você quer continuar usando a calculadora ? ");
                break;    
            } 
        default:
          $n4 = readline("Você deseja continuar ? ");
  }
  $n4 = strtoupper($n4);
  } while ($n4 == 'SIM');
?>
