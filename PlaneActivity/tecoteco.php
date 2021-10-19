<!-- Unip -->
<!-- CC4P30 -->
<!-- João Carlos Pereira Alves - f251993 -->
<!-- Jennifer Santos Oliveira - f21efb0 -->
<!-- Igor Assis de Oliveira - F2349C8 -->

<?php 

$poltronas = [
    "[]", "[]", "[]", "[]", "[]", 
    "[]", "[]", "[]", "[]", "[]",
    "[]", "[]", "[]", "[]", "[]",
    "[]", "[]", "[]", "[]", "[]",
    "[]", "[]", "[]", "[]", "[]",
    "[]", "[]", "[]", "[]", "[]",
    "[]", "[]", "[]", "[]", "[]",
    "[]", "[]", "[]", "[]", "[]",
    "[]", "[]", "[]", "[]", "[]",
    "[]", "[]", "[]", "[]", "[]",
    "[]", "[]", "[]", "[]", "[]",
    "[]", "[]", "[]", "[]", "[]",
];

$tecoteco = "

-----------------------------------------------------------------------
                        A    B        C    D

                1       $poltronas[0]  $poltronas[1]        $poltronas[2]  $poltronas[3]   
                2       $poltronas[4]  $poltronas[5]        $poltronas[6]  $poltronas[7]
                3       $poltronas[8]  $poltronas[9]        $poltronas[10]  $poltronas[11]
                4       $poltronas[12]  $poltronas[13]        $poltronas[14]  $poltronas[15]
                5       $poltronas[16]  $poltronas[17]        $poltronas[18]  $poltronas[19]

                6       $poltronas[20]  $poltronas[21]        $poltronas[22]  $poltronas[23]
                7       $poltronas[24]  $poltronas[25]        $poltronas[26]  $poltronas[27]
                8       $poltronas[28]  $poltronas[29]        $poltronas[30]  $poltronas[31]
                9       $poltronas[32]  $poltronas[33]        $poltronas[34]  $poltronas[35]
                10      $poltronas[36]  $poltronas[37]        $poltronas[38]  $poltronas[39]

                11      $poltronas[40]  $poltronas[41]        $poltronas[42]  $poltronas[43]
                12      $poltronas[44]  $poltronas[45]        $poltronas[46]  $poltronas[47]
                13      $poltronas[48]  $poltronas[49]        $poltronas[50]  $poltronas[51]
                14      $poltronas[52]  $poltronas[53]        $poltronas[54]  $poltronas[55]
                15      $poltronas[56]  $poltronas[57]        $poltronas[58]  $poltronas[59]


------------------------------------------------------------------------

";

$open = true;

while ($open):
    system('clear');

    printf("%20s\n", $tecoteco);

    print("\nInforme o nome completo: ");
    $name = readline();

    $nameFormatted = formatName($name);

    print("\nInforme a poltrona desejada: ");
    $poltronas[validate(readline())] = "[X]"; 

    $tecoteco = "

    -----------------------------------------------------------------------
                            A    B        C    D
    
                    1       $poltronas[0]  $poltronas[1]        $poltronas[2]  $poltronas[3]   
                    2       $poltronas[4]  $poltronas[5]        $poltronas[6]  $poltronas[7]
                    3       $poltronas[8]  $poltronas[9]        $poltronas[10]  $poltronas[11]
                    4       $poltronas[12]  $poltronas[13]        $poltronas[14]  $poltronas[15]
                    5       $poltronas[16]  $poltronas[17]        $poltronas[18]  $poltronas[19]
    
                    6       $poltronas[20]  $poltronas[21]        $poltronas[22]  $poltronas[23]
                    7       $poltronas[24]  $poltronas[25]        $poltronas[26]  $poltronas[27]
                    8       $poltronas[28]  $poltronas[29]        $poltronas[30]  $poltronas[31]
                    9       $poltronas[32]  $poltronas[33]        $poltronas[34]  $poltronas[35]
                    10      $poltronas[36]  $poltronas[37]        $poltronas[38]  $poltronas[39]
    
                    11      $poltronas[40]  $poltronas[41]        $poltronas[42]  $poltronas[43]
                    12      $poltronas[44]  $poltronas[45]        $poltronas[46]  $poltronas[47]
                    13      $poltronas[48]  $poltronas[49]        $poltronas[50]  $poltronas[51]
                    14      $poltronas[52]  $poltronas[53]        $poltronas[54]  $poltronas[55]
                    15      $poltronas[56]  $poltronas[57]        $poltronas[58]  $poltronas[59]
    
    
------------------------------------------------------------------------------
    
    ";

    print("
------------------------------------------------------------------------------
        
                --------------------------
                     T E C O T E C O
                     T  I  C  K  E  T

                           --!--
                    --.----( . )----.--
                      °             °

                    $nameFormatted
                    Boa Viagem !!!

                --------------------------

------------------------------------------------------------------------------

(N) Novo Passageiro
(S) Sair do programa

");

$next = readline();

if (strtoupper($next) != "N") {
    $open = false;
    print("Até mais!");
}

endwhile;

function validate($num) {
    global $poltronas;
    $random = array_rand($poltronas);

    if ($poltronas[$num] == "[]") return $num;
    else {
        while (true):
            if ($poltronas[$random] == "[]") {
                return $random;
                break;
            } else {
                $random = array_rand($poltronas);
            }
        endwhile;
    }
}

function formatName($name) {
    $lastName = strtoupper(explode(" ", $name)[1]);
    $firstName = strtoupper(explode(" ", $name)[0]);

    return "$lastName/$firstName";
}

?>