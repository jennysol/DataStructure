<!-- Unip -->
<!-- CC4P30 -->
<!-- João Carlos Pereira Alves - f251993 -->
<!-- Jennifer Santos Oliveira - f21efb0 -->
<!-- Igor Assis de Oliveira - F2349C8 -->


<?php 

$names = [];

for ($i =0; $i < 10; $i++) {
    print("\n+----------------------------------+\n");
    for ($l = 0; $l < count($names); $l++) {
        printf("%20s\n", "$names[$l]\n");
    }
    print("\n+----------------------------------+\n");
    print("Informe o $i º nome: ");
    $names[] = readline();
}

?>