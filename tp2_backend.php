<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Validar numero positivo </h3>

    <?php
        $n = 6;

        
        if ($n > 0) {

            echo "El numero $n es positivo";
        }
        ?>

        <br>

        <h4>Validar numero mayor que 1 y menor que 10</h4>

    <?php 
        $n2 = 5;  

        if ( $n2 > 1 & $n2 < 10 ) {

            echo  "$n2 es mayor que 1 y menor que 10";
        }
    
        ?>

        <br>

        <h4> Validar numero mayor que 10 y menor que 2 </h4>

        <?php

        $n3 = 8;

        if ( $n3 > 10 || $n3 < 2) {
            echo "$n3 es mayor que 10 o menor que 2";
        }
        
        else {
            echo "$n3 no cumple ninguna de las 2 condiciones";
        }

        ?>
        <br>
        <h4>Ejercicio 4</h4>

        <?php 
            $numero1 = 10;
            $numero2 = 5;
            $numero3 = 0;
            if ($numero1 > $numero2) {
                
                $numero3 = $numero1 + $numero2;
                echo "La suma de ambos numeros es $numero3";

                $numero3 = $numero1 - $numero2;
                echo "La resta de ambos numeros es $numero3";

            }
            elseif ($numero2 > $numero1) {
                
                $numero3 = $numero1 * $numero2;

                echo "La multiplicacion de ambos numeros es $numero3";

                $numero3 = $numero1 / $numero2;

                echo "La division de ambos numeros es $numero3";

                $numero3 = $numero1 % $numero2;

                echo "El resto al dividir ambos numeros es $numero3";
                
            }
            else {
                echo "Los numeros ingresados son iguales";
            }
        
        ?>
</body>

</html>