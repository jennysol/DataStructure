<!-- Unip -->   <!-- CC4P30 -->

<!-- João Carlos Pereira Alves - F25199-3  -->
<!-- Jennifer Santos Oliveira : F21EFB0 -->
<!-- Igor Assis de Oliveira - F2349C8 -->

<?php 

$par = array();
$impar = array();
$values = [
    [
     ["", "", ""],
     ["", "", ""],
     ["", "", ""],
    ],
    [
     ["", "", ""],
     ["", "", ""],
     ["", "", ""],
    ],
];

for ($i = 0; $i < count($values); $i++) {
    for ($f = 0; $f < count($values[$i]); $f++) {
        for ($l = 0; $l < count($values[$i][$f]); $l++) {
            print("Insira um número: ");  
            validaNumber(readline(), $values[$i][$f][$l]);   
        }
    }  
}

function validaNumber($num, $index) {
    global $impar, $par;
    if ($num > 100 or $num < 0) {
        while (true):
            print("Por favor insira um número entre 0 e 100: ");
            $repeat = readline();
            if ($repeat < 0 or $repeat > 100) {
                continue;
            } else {
                $index = $repeat;
                if ($num % 2 == 0) array_push($par, $repeat);
                if ($num % 2 == 1) array_push($impar, $repeat);
                break;
            }
        endwhile;
    }
    $index = $num;
    if ($num % 2 == 0) array_push($par, $num);
    if ($num % 2 == 1) array_push($impar, $num);
};  

system('clear');
print("\nA média dos valores pares são: ".array_sum($par) / count($par));
print("\nA média dos valores impares são: ".array_sum($impar) / count($impar));

?>