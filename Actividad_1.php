<?php

// Funcion Fibonaccii
function fibonacci($data){

    // Inicializamos las variables de los primeros dos valores de la serie
    $x1=0; $x2=1;

    //Imprimimos los primeros dos valores con formato
    print("numero 1 = {$x1},  \n");
    print("numero 2 = {$x2},  \n");

    //Inicializamo el bucle para calcular los valores calculados de la serie
    for($i=3; $i<=$data; $i++){
        //Intercambiamos las variables para calcular el proximo valor
        $aux = $x1;
        $x1 = $x2;
        $x2 = $aux + $x1;

        //Se compara si es el ultimo numero de la serie para darle formato de cierre al ultimo valor
        if($i!==$data){
            print("numero {$i} = {$x2}, \n");
        } else{
            print("numero {$i} = $x2");
        }
    }
}

//Llamada a la Funcion pasando el valor
fibonacci(20);

//Funcion para calcular si un numero es primo
function esPrimo($data){

    //Contador para calcular si un numero es primo o no 
    $count=0;

    //Bucle donde se divide el numero buscado entre sus antecesores e incrementamos la cuenta si un numero es divisible
    for($i=2; $i<=$data; $i++){
        if($data % $i == 0){
            $count++;
        }
    }

    //Si el numero es divisible entre mas de dos numeros no es primo y se imprime el mensaje correspondiente
    if($count>2){
        print("{$data} No es Primo");
    }else{
        print("{$data} Es Primo");
    }
}

//Llamada a la funcion primo pasando el numero 
esPrimo(22);

//Funcion para calcular si una cadena de caracteres es Copicua o palindrome
function esPalindromo($Cadena){

    // Convertimos la cadena dada por el usuario, le quitamos los espacios y la convertimos en minusculas
    $cadenita = strtolower(str_replace(' ', '', $Cadena));

    //Invertimos la cadenita para su posterior comparacion
    $cadenaInvertida = strrev($cadenita);

    // Comparamos las dos cadenas para ver si son iguales si el resultado es diferente de cero no es palindromo
    if(strcmp($cadenita, $cadenaInvertida) == 0){
        print("La cadena \"{$Cadena}\", es palindromo");
    }else{
        print("La cadena \"{$Cadena}\", no es palindromo");
    }    
}

// Cadena que queremos probar si es palindromo
$cadPrueba = "A luna ese anulas";

// Llamada de la funcion para probar si es palindromo
esPalindromo($cadPrueba);


?>
