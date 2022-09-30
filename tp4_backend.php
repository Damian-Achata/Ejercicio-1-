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

        echo "<h2>Almacenar 10 primeros numeros pares.";

        $nums = [2,4,6,8,10,12,14,16,18,20, ];

        foreach ($nums as $valor) {
            print "<p>$valor</p>/n" ;
        }

        //Ejercicio 2

        echo "<h2>Crear un Array e introducir los valores.";

        $valores = array("Pedro", "Ana", 34, 1, );

        print_r ($valores);

        //Ejercicio 3

        echo "<h3>Crear un array asociativo e introducir los valores correspondientes.";

        $datos = array('Nombre' =>"Pedro" ,'Apellido' =>"Torres", 'Direccion' =>"Av.Mayor 3703", 'Telefono' =>1122334455, );

        //Ejercicio 4

        echo "<h3>Crear un array introduciendo ciudades.";

        $Cities = array("Madrid","Barcelona","Londres","New York","Los Angeles","Chicago",);
        
        print "La ciudad con el indice 0 tiene el nombre $Cities[0].";

        for ($i=0; $i < count($Cities); $i++) { 
            print "<br>La ciudad con el indice $i tiene el nombre de $Cities[$i}.";
        }


        //Ejercicio 5

        echo "<h3>Repetir el anterior pero ahora asociado.<h3>";

        $Cities = array('Madrid'=>"MD",'Barcelona'=>"BCL",'Londres'=>"LD",'NewYork'=>"NY",'LosAngeles'=>"LA",'Chicago'=>"CCG");

        print "<br>El indice de Madrid es $Cities[Madrid]</br>";
        print "<br>El indice de Barcelona es $Cities[Barcelona]</br>";
        print "<br>El indice de Londres es $Cities[Londres]</br>";
        print "<br>El indice de New York es $Cities[NewYork]</br>";
        print "<br>El indice de Los Angeles es $Cities[LosAngeles]</br>";
        print "<br>El indice de Chicago es $Cities[Chicago]</br>";
        


    ?>
</body>
</html>