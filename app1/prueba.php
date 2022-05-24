<?php
    $var1 = 1;
    $var2 = 2;
    $res = 0;
    $edad = 0;
    echo "Hola Mundo 1  <br>";
    echo "Hola Mundo 2  <br>";
    echo "Hola Mundo 3  <br>";
    $res = $var1 + $var2;
    echo $res."<br>";

    if($edad>=18){
        echo "Ud es mayor de edad <br>";
    }else{
        echo "Ud es menor de edad <br>";
    }

    for ($i = 0; $i < 15; $i++){
        $ope = 5 *$i;
        echo "5 *".$i." = ".$ope."<br>";
    }

?>