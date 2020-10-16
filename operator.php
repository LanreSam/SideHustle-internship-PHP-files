<?php

    // ********* Arithemetic Operators ********

    /*

    1) Addition
    2) subtraction
    3) MUltiplication
    4) division
    5) Modulus

    */

    // variable declaration
    $num1 = 23;
    $num2 = 10;

    echo "<h1>Arithemetic Operator</h1><hr/>";
    //Addition
    echo "<h2>Addition</h2>";
    echo "<p>This program adds two variables together</p>";
    $add = $num1 + $num2;
    echo "$num1 + $num2 = ".$add;

    //subtraction
    echo "<h2>Subtraction</h2>";
    echo "<p>This program subtract two variables from each other</p>";
    $sub = $num1 - $num2;
    echo "$num1 - $num2 = ".$sub;

    //multiplication
    echo "<h2>Multiplication</h2>";
    echo "<p>This program multiply two variables together</p>";
    $mul = $num1 * $num2;
    echo "$num1 * $num2 = ".$mul;

    //multiplication
    echo "<h2>Division</h2>";
    echo "<p>This program divides two variables</p>";
    $div = $num1 / $num2;
    echo "$num1 / $num2 = ".$div;

    //Modulus
    echo "<h2>Modulus</h2>";
    echo "<p>This program divides two variables and return their remainder if there is any.</p>";
    $mod = $num1 % $num2;
    echo "$num1 % $num2 = ".$mod;



    // ********* Assignment Operators ********

    /*

    1) Addition                         x = x + y           x += y
    2) subtraction                      x = x - y           x -= y
    3) MUltiplication                   x = x * y           x *= y
    4) division                         x = x / y           x /= y
    5) Modulus                          x = x % y           x %= y

    */


    $x = 30;
    $y = 20;


    echo "<br/><br/><br/><h1>Assignment Operator</h1><hr/>";
    echo "<p>This <strong>\"=\"</strong> sign is an assignment operator</p>";
    
    echo $x += $y;
    echo $x -= $y;
    echo $x *= $y;
    echo $x /= $y;
    echo $x %= $y;






    // ********* Comparison Operators ********

    /*

    1) Equal                            x == y           
    2) Identical                        x === y           
    3) Not equal                        x != y           
    4) Not equal                        x <> y           
    5) Not Identical                    x !== y           

    */

    echo "<br/><br/><br/><h1>Comparison Operator</h1><hr/>";
    echo "<p>This is comparison operator and it works with the IF ELSE statement</p> <br/>";

    if (1 !== 3) {
        echo "true";
    } else {
        echo "false";
    }
    





    // ********* Logical Operators ********

    /*

    1) and               x and y            x && y            
    2) or                x or y             x || y            
    3) xor               x xor y            x ! y 
    
    
    ==== AND statement checks if both variables are true then it outputs TRUE and vice versa
    ==== OR statement checks if one of the variables is true then it outputs TRUE 
    ==== XOR statement checks if a variable is true then it outputs FALSE and vice versa

    */

    echo "<br/><br/><br/><h1>Logical Operator</h1><hr/>";
    echo "<p>This is how logical operator works</p>";

    $database_password = "pass1234";
    $database_username = "LanreSam";


    $username = "LanreSam";
    $password = "QIUHUIWH";

    
    if ($username == $database_username || $password == $database_password) {
        echo "true because we used OR operator <br/>";
    } else {
        echo "false";
    }

    $bool = true;

    if (!$bool) {
        echo "true";
    } else {
        echo "false because we use the (!) Not statement.";
    }



?>