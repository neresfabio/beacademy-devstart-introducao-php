<?php

$nome = 'alessandro';
$sobrenome = 'FEITOZA';

$nome2 = 'chiquim da silva';

echo "Nome: ".ucfirst($nome).PHP_EOL;
echo "Sobre Nome: ".ucfirst(strtolower($sobrenome)).PHP_EOL;
echo "Nome 2: ".ucwords($nome2).PHP_EOL;

$dia = date('H:i:s');

echo $dia.PHP_EOL;