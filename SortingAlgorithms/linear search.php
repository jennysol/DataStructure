<?php

   function busca($notas, $k){

      $tam = sizeof($notas);         
      for($i=0;$i<$tam;$i++){
         if($notas[$i]==$k){
            return $i;
         }
      }
      return -1;
   }

   $notas = array(10,20,30,40,50,60,70,80);

   $indice = busca($notas, 90);

   if($indice==-1){
      echo "Não encontrado";
   }else{
      echo "Encontrado no índice [$indice]";
   }
