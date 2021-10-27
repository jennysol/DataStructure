<?php
  
  define("MAX",2); //ver exemplo em repetição
  
  //Hello World
  echo "Hello \t\t\t World\n";
  
  // Caracteres de escape  
  /*
    \n
    \t
    \r
    \\
    \"
    \$
  */

  //Variáveis
  $nome = "Diego"; 
  $idade = 10;
  $altura = 1.89;
  
  echo $nome."\n";
  echo $idade."\n";
  echo $altura."\n";
  
  echo "Nome: $nome \n";
  echo "Idade: $idade \n";
  echo "Altura: $altura \n";
  
  var_dump($nome); 
  var_dump($idade);
  var_dump($altura);
  
  //Operadores aritméticos
  // + - * / %

  $n1 = readline('N1: ');
  $n2 = readline('N2: ');
  $total = $n1+$n2;
  echo "Total: $total \n";  
  
  $sobrenome = readline('Informe o sobrenome: ');
  echo $sobrenome."\n";
  
  $idade = 18;
  // if 
  if($idade<16){
    //não vota
  }
  
  // if..else
  if($idade<16){
    //não vota
  }else{
    //pode ou deve votar
  }
  
  // if..elseif..else
  
//  if($idade<16){
//    //não vota
//  }
//  if($idade==17){
//    //..
//  }
//  if($idade==18){
//    //..
//  }
//  if($idade==19){
//    //..
//  }

  if($idade<16){
    //não vota
  }elseif($idade<18){
    //opcional
  }elseif($idade==39){
    //ganhouuuuu!!!!
  }else{
    //obrigatório
  }
  
  // switch/case
  // break
  // default
  
  // for
  
  // while
  
  // do..while
  
  /*
  define("PADRAO","\033[0m");
  define("VERMELHO","\033[31m");
  define("VERDE","\033[32m"); 
  define("AMARELO","\033[33m");
  define("AZUL","\033[34m");
  define("MAGENTA","\033[35m");
  define("CIANO","\033[36m");
  define("BRANCO","\033[37m");
  
  define("B_VERMELHO","\033[0;41m");
  define("SUBLINHADO","\033[4m");
  
  echo B_VERMELHO.SUBLINHADO."Vermelho Sublinhado\n";
  
  $texto='Teste';
  echo PADRAO."$texto \n";
  echo VERMELHO."$texto \n";
  echo VERDE."$texto \n";
  echo AMARELO."$texto \n";
  echo AZUL."$texto \n";
  echo MAGENTA."$texto \n";
  echo CIANO."$texto \n";
  echo BRANCO."$texto \n";
  
  $nome = readline('Informe o nome: ');
  
  echo $nome."\n";
  
  for($i=0;$i<strlen($nome);$i++){
    echo $nome[$i]."\n";
  }
  
  sleep(1); 
  echo "5";
  sleep(1); 
  echo "\r4";
  sleep(1);
  echo "\r3";
  sleep(1);
  echo "\r2";
  sleep(1); 
  echo "\r1";
  sleep(1);
  echo "\rGo, go, go...";
  */
?>