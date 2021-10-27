<?php

   //Busca binária: necessário que o vetor esteja ordenado.

   function busca($notas, $k){

    $tam = sizeof($notas);         
    $menor = 0;
    $medio = 0;
    $maior = $tam-1;

    while($menor <= $maior){
                
        $medio = (int)(($maior - $menor)/2) + $menor; //parser
        
        echo "------\n";
        echo "tam: $tam \n menor: $menor \n medio: $medio \n maior: $maior \n";
        echo "------\n";
        sleep(2);

        if($notas[$medio]>$k){
            $maior = $medio - 1;
        }elseif($notas[$medio]<$k){
            $menor = $medio + 1;
        }else{
            return $medio;
        }
    }

    return -1;
   }

   $notas = array(10,20,30,40,50,60,70,80);

   $indice = busca($notas, 80);

   if($indice==-1){
      echo "Não encontrado";
   }else{
      echo "Encontrado no índice [$indice]";
   }