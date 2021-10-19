<!-- Unip -->
<!-- CC4P30 -->
<!-- João Carlos Pereira Alves - f251993 -->
<!-- Jennifer Santos Oliveira - f21efb0 -->
<!-- Igor Assis de Oliveira - F2349C8 -->


<?php

$phone = [];

function validate($num) {
    global $phone;
    for ($i = 0; $i < count($phone); $i++) {
        if ($num == $phone[$i]) print("\033[0;31mModelo $num já existente.\033[0m\n");
    }
    $phone[] = $num;
        print("Modelo recebido: \033[0;32m$num\033[0m\n");
}

for ($i =0; $i < 10; $i++) {
    validate(readline());
}

?>