<!-- Unip -->   <!-- CC4P30 -->

<!-- João Carlos Pereira Alves - F25199-3  -->
<!-- Jennifer Santos Oliveira : F21EFB0 -->
<!-- Igor Assis de Oliveira - F2349C8 -->

<?php 

$values = [
    [
     ["", "", ""],
     ["", "", ""], // Par
     ["", "", ""],
    ],
    [
     ["", "", ""],
     ["", "", ""], // Ímpar
     ["", "", ""],
    ],
];

for ($i = 0; $i < count($values); $i++) {
    for ($f = 0; $f < count($values[$i]); $f++) {
        for ($l = 0; $l < count($values[$i][$f]); $l++) {
            system('clear');    
            print("Insira um nome: ");  
            $values[$i][$f][$l] = readline(); 
        }
    }  
}

$isTrue = true;

while ($isTrue):

    print("\n");
    
    for ($i = 0; $i < count($values); $i++) {
        for ($f = 0; $f < count($values[$i]); $f++) {
            for ($l = 0; $l < count($values[$i][$f]); $l++) {
                print($values[$i][$f][$l]." | ");            }
           print("\n");
        }  
        print("\n");
    }

    print("\n");

    print("Informe o nome que deseja buscar: ");
    $search = readline();
    system("clear");
    for ($i = 0; $i < count($values); $i++) {
        for ($f = 0; $f < count($values[$i]); $f++) {
            for ($l = 0; $l < count($values[$i][$f]); $l++) {
                if ($search == $values[$i][$f][$l]) {
                    $values[$i][$f][$l] = "\033[1;33m".$values[$i][$f][$l]."\033[0m";
                    print("Nome encontrado na ".($i == 0 ? "primeira lista" : "segunda lista"). ", coluna: ".$f.", linha: ".$l."\n");
                }      
            }
        }  
    }
endwhile;

?>