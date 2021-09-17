

<?php 
system('clear');
$array = ["A", "B", "C", "D", "E", "F", "G", "H", "I"];
$isTrue = true;
$computer = rand(0, 8);


$style = "

       \033[1;37mJOGO DA VELHA

     _________________
    |     |     |     |
    |  $array[0]  |  $array[1]  |  $array[2]  |
    |_____|_____|_____|
    |     |     |     |
    |  $array[3]  |  $array[4]  |  $array[5]  |
    |_____|_____|_____|
    |     |     |     |
    |  $array[6]  |  $array[7]  |  $array[8]  |
    |_____|_____|_____|\033[0m

"."\n";

while ($isTrue):

   if (
       $array[0] == "\033[1;36mX\033[0m" and $array[1] == "\033[1;36mX\033[0m" and $array[2] == "\033[1;36mX\033[0m" or
       $array[3] == "\033[1;36mX\033[0m" and $array[4] == "\033[1;36mX\033[0m" and $array[5] == "\033[1;36mX\033[0m" or
       $array[6] == "\033[1;36mX\033[0m" and $array[7] == "\033[1;36mX\033[0m" and $array[8] == "\033[1;36mX\033[0m" or
       $array[0] == "\033[1;36mX\033[0m" and $array[4] == "\033[1;36mX\033[0m" and $array[8] == "\033[1;36mX\033[0m" or
       $array[2] == "\033[1;36mX\033[0m" and $array[4] == "\033[1;36mX\033[0m" and $array[6] == "\033[1;36mX\033[0m" or
       $array[0] == "\033[1;36mX\033[0m" and $array[3] == "\033[1;36mX\033[0m" and $array[6] == "\033[1;36mX\033[0m" or
       $array[1] == "\033[1;36mX\033[0m" and $array[4] == "\033[1;36mX\033[0m" and $array[7] == "\033[1;36mX\033[0m" or
       $array[2] == "\033[1;36mX\033[0m" and $array[5] == "\033[1;36mX\033[0m" and $array[8] == "\033[1;36mX\033[0m"
       ) {
       $style = "




       \033[1;36m ___________________
       |                   |
       |                   |
       |    \033[1;32mVOCÊ VENCEU\033[0m    \033[1;36m|
       |                   |
       |___________________|\033[0m
    
       
       
       
       
       
       ";
    
       echo $style;

       $defeat = readline("Deseja jogar novamente? [S] / [N] : \n");

       if (strtoupper($defeat) == 'S') {
            $array = ["A", "B", "C", "D", "E", "F", "G", "H", "I"];
            $style = "

       \033[1;37mJOGO DA VELHA

     _________________
    |     |     |     |
    |  $array[0]  |  $array[1]  |  $array[2]  |
    |_____|_____|_____|
    |     |     |     |
    |  $array[3]  |  $array[4]  |  $array[5]  |
    |_____|_____|_____|
    |     |     |     |
    |  $array[6]  |  $array[7]  |  $array[8]  |
    |_____|_____|_____|\033[0m

"."\n";
       } else {
           system('clear');
           print("Jogo encerrado.");
           exit();
       }

       
   } 

   elseif (
    $array[0] == "\033[1;31mO\033[0m" and $array[1] == "\033[1;31mO\033[0m" and $array[2] == "\033[1;31mO\033[0m" or
    $array[3] == "\033[1;31mO\033[0m" and $array[4] == "\033[1;31mO\033[0m" and $array[5] == "\033[1;31mO\033[0m" or
    $array[6] == "\033[1;31mO\033[0m" and $array[7] == "\033[1;31mO\033[0m" and $array[8] == "\033[1;31mO\033[0m" or
    $array[0] == "\033[1;31mO\033[0m" and $array[4] == "\033[1;31mO\033[0m" and $array[8] == "\033[1;31mO\033[0m" or
    $array[2] == "\033[1;31mO\033[0m" and $array[4] == "\033[1;31mO\033[0m" and $array[6] == "\033[1;31mO\033[0m" or
    $array[0] == "\033[1;31mO\033[0m" and $array[3] == "\033[1;31mO\033[0m" and $array[6] == "\033[1;31mO\033[0m" or
    $array[1] == "\033[1;31mO\033[0m" and $array[4] == "\033[1;31mO\033[0m" and $array[7] == "\033[1;31mO\033[0m" or
    $array[2] == "\033[1;31mO\033[0m" and $array[5] == "\033[1;31mO\033[0m" and $array[8] == "\033[1;31mO\033[0m"
    ) {

        $style = "




        \033[0;31m ___________________
        |                   |
        |                   |
        |    \033[1;31mVOCÊ PERDEU\033[0m    \033[0;31m|
        |                   |
        |___________________|\033[0m
     
        
        
        
        
        
        ";

        echo $style;
        
        $defeat = readline("Deseja jogar novamente? [S] / [N] : \n");
 
        if (strtoupper($defeat) == 'S') {
             $array = ["A", "B", "C", "D", "E", "F", "G", "H", "I"];
             $style = "
 
        \033[1;37mJOGO DA VELHA
 
      _________________
     |     |     |     |
     |  $array[0]  |  $array[1]  |  $array[2]  |
     |_____|_____|_____|
     |     |     |     |
     |  $array[3]  |  $array[4]  |  $array[5]  |
     |_____|_____|_____|
     |     |     |     |
     |  $array[6]  |  $array[7]  |  $array[8]  |
     |_____|_____|_____|\033[0m
 
 "."\n";
        } else {
            system('clear');
            print("Jogo encerrado.");
            exit();
        }
} 

   print($style."\n");
   print("Escolha uma letra para sua jogada: ");
   $select = readline();

   for ($i = 0; $i < count($array); $i++) {
       if (strtoupper($select) == $array[$i]) {
           $array[$i] = "\033[1;36mX\033[0m";
           $validate = true;

           while ($validate):

            if ($array[$computer] == "\033[1;36mX\033[0m" or $array[$computer] == "\033[1;31mO\033[0m") {
             $computer = rand(0, 8);
           } else {
            $array[$computer] = "\033[1;31mO\033[0m";
            $validate = false;
           }

           endwhile;
           
           system('clear');
           $style = "

       \033[1;37mJOGO DA VELHA\033[0m

    \033[1;37m _________________                            
   \033[1;37m |     |     |     |
   \033[1;37m |  $array[0]  |  $array[1]  |  $array[2]  |
   \033[1;37m |_____|_____|_____|
   \033[1;37m |     |     |     |
   \033[1;37m |  $array[3]  |  $array[4]  |  $array[5]  |
    \033[1;37m|_____|_____|_____|
   \033[1;37m |     |     |     |
   \033[1;37m |  $array[6]  |  $array[7]  |  $array[8]  |
   \033[1;37m |_____|_____|_____|\033[0m

"."\n";
        
       }
   }
  
endwhile;



?> 