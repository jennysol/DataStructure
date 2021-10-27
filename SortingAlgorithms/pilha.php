<?php

//Os últimos serão os primeiros!!!!

$pilha = array();

array_push($pilha, 'livro 1','livro 2','livro 3');

print_r($pilha);

array_pop($pilha);

print_r($pilha);

array_push($pilha, 'livro 4');

print_r($pilha);

array_pop($pilha);

print_r($pilha);
