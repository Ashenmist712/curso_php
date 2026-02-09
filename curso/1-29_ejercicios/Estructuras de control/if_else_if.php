<?php

//determinar el dia de la semana segun un numero
$diaNumero = 500;

if ($diaNumero == 1) {
    echo "Lunes";
} else if ($diaNumero == 2) {
    echo "Martes";
} else if ($diaNumero == 3) {
    echo "Miercoles";
} else if ($diaNumero == 4) {
    echo "Jueves";
} else if ($diaNumero == 5) {
    echo "Viernes";
} else if ($diaNumero == 6) {
    echo "Sabado";
} else if ($diaNumero == 7) {
    echo "Domingo";
} else {
    echo "Dia invalido";
}
