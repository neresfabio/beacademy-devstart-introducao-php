<?php
$mes = 6;
echo match($mes){
    1 => "Mês de Janeiro",
    2 => "Mês de Fevereiro",
    3 => "Mês de Março",
    4 => "Mês de Abril",
    5 => "Mês de Maio",
    6 => "Mês de Junho",
    7 => "Mês de Julho",
    8 => "Mês de Agosto",
    9 => "Mês de Setembro",
    10 => "Mês de Outubro",
    11 => "Mês de Novembro",
    12 => "Mês de Dezembro",
    default => "Escolha uma opção"
};
