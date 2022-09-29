<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Ejercicio 1
    echo "Mostrar los numeros del 1 al 100" ;

    $i = 1;

    for ($i=1; $i <= 100; $i++) { 
        echo <h3>$i</h3>;
        
    }

    //Ejercicio 2

    echo "<h2>2. Mostrar los numeros del 100 al 1</h2>";

    for ($i=100; $i >= 1 ; $i--) { 
        echo "<h3>$i</h3>";
    }

    //Ejercicio 3 

    echo "<h4>3. Mostrar los numeros pares del 1 al 100.";

    $a = 2;
    while ($a <= 100) {
        echo "$a </p>";
        $a = $a +2;

    }

    //Ejercicio 4

    echo "<h3>4. Mostrar la suma de los numeros del 1 al 20";

    $total = 0;

    $a= 1;

    while ($a <= 20) {
        $total += $a;
        $a += 1;

    }

    echo "La suma total es $total.";


    //Ejercicio 5

    echo "<h3>5. Mostrar los numeros impares del 1 al 100.";
    
    $a = 1;

    while ($a <= 100) {
        echo "$a</br>";

        $a++2;
    }
    
    //Ejercicio 6

    echo "<h4>6. Mostrar la suma de los numeros pares de 1 al 20.";

    $total = 0;
    $a =2; 
    while ($a <= 20) {
        $total += $a;
        $a++2;

    }

    echo "La suma de numeros pares del 1 al 20 es es $total.";
    



    ?>
</body>
</html>