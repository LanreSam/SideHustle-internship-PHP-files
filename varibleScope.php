<?php
    // ******** variable scope *********

    /*

    1) Global variable 
    2) Local variable

    */

    //global.
    $name = "<h1>Olamide</h1>";

    function getName(){
        //local
        $age = 12; //change the echo variable to age to use the local variable.
        global $name;
        echo $name;
    }

    getName();

?>