<?php

    //*********** Data types in PHP ****************

    $string = "words or letters of the alphabet";
    $integer = 3;
    $float = 123.678;
    $boolean = true;
    $booleanFalse = false;
    $array = array("David", "shegun", "Amaka", "Purple");
    //$objects
    //$null
    //$reasource


    echo "<h1>String Data type</h1>";
    $name = "lanre ";
    $surname = "Smith";
    echo $name;


    //Integer refers to whole numbers
    echo "<h1>Integer Data type</h1>";
    $age = 12;
    echo $age;

    //float refers to decimal numbers
    echo "<h1>Float Data type</h1>";
    $number = 123.893;
    echo $number;

    //Concartenation in php
    echo "<h1>Concartenation</h1>";
    echo $name.$surname;

    //Addition in php
    echo "<h1>Addition</h1>";
    $num = $age + $number;
    echo "$age + $number = ".$num;

?>